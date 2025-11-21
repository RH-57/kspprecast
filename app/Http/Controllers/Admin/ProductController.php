<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {

        $categories = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::orderBy('name')->get();
        });
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'name'                => 'required|string|max:150',
            'description'         => 'required|string',
            'cover_image'         => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            'images.*'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'meta_title'          => 'nullable|string|max:150',
            'meta_description'    => 'nullable|string|max:255',
            'meta_keyword'        => 'nullable|string|max:255',
        ]);

        $manager = new ImageManager(new Driver());
        $coverPath = null;

        // === Upload Cover Image ===
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $image = $manager->read($file->getPathname());

            if ($image->width() > 1600) {
                $image->scaleDown(width: 1600);
            }

            $encoded = $image->encode(new WebpEncoder(quality: 70));
            $filename = uniqid() . '.webp';
            $path = 'products/covers/' . $filename;

            Storage::disk('public')->put($path, (string) $encoded);
            $coverPath = $path;
        }

        // === Buat Slug Unik ===
        $baseSlug = Str::slug($request->name);
        $slug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . str_pad($counter, 2, '0', STR_PAD_LEFT);
            $counter++;
        }

        // === Simpan Data Produk ===
        $product = Product::create([
            'product_category_id' => $request->product_category_id,
            'name'                => $request->name,
            'slug'                => $slug,
            'description'         => $request->description,
            'cover_image'         => $coverPath,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
        ]);

        // === Upload Multiple Images ===
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $image = $manager->read($img->getPathname());

                if ($image->width() > 1600) {
                    $image->scaleDown(width: 1600);
                }

                $encoded = $image->encode(new WebpEncoder(quality: 70));
                $filename = uniqid() . '.webp';
                $path = 'products/images/' . $filename;

                Storage::disk('public')->put($path, (string) $encoded);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $path,
                ]);
            }
        }

        // === Simpan Varian Produk ===
        if ($request->filled('variants')) {
            foreach (array_values($request->variants) as $variant) {
                $product->variants()->create([
                    'name'  => $variant['name'] ?? '',
                    'price' => $variant['price'] ?? 0,
                ]);
            }
        }

        Cache::forget('products');
        Cache::forget('homepage_data');
        Cache::forget("products_category_{$request->product_category_id}");
        Cache::forget('products_all');

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

     // ====================== SHOW ======================
    public function show($slug)
    {
        $product = Product::with(['category', 'images'])->where('slug', $slug)->firstOrFail();
        return view('admin.products.show', compact('product'));
    }

    // ====================== EDIT ======================
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $categories = ProductCategory::orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function deleteImage($id) {
        $image = ProductImage::findOrFail($id);

        if ($image->image && Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }

    // ====================== UPDATE ======================
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'name'                => 'required|string|max:150',
            'description'         => 'required|string',
            'cover_image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'images.*'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'meta_title'          => 'nullable|string|max:150',
            'meta_description'    => 'nullable|string|max:255',
            'meta_keyword'        => 'nullable|string|max:255',
        ]);

        $manager = new ImageManager(new Driver());

        // === Update Cover Image ===
        if ($request->hasFile('cover_image')) {
            if ($product->cover_image && Storage::disk('public')->exists($product->cover_image)) {
                Storage::disk('public')->delete($product->cover_image);
            }

            $file = $request->file('cover_image');
            $image = $manager->read($file->getPathname());
            if ($image->width() > 1600) $image->scaleDown(width: 1600);
            $encoded = $image->encode(new WebpEncoder(quality: 70));

            $filename = uniqid() . '.webp';
            $path = 'products/covers/' . $filename;
            Storage::disk('public')->put($path, (string) $encoded);

            $product->cover_image = $path;
        }

        // === Update Slug ===
        $newSlug = Str::slug($request->name);
        if ($product->slug !== $newSlug) {
            $baseSlug = $newSlug;
            $slug = $baseSlug;
            $counter = 1;
            while (Product::where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
                $slug = $baseSlug . '-' . str_pad($counter, 2, '0', STR_PAD_LEFT);
                $counter++;
            }
            $product->slug = $slug;
        }

        // === Update Text Fields ===
        $product->update([
            'product_category_id' => $request->product_category_id,
            'name'                => $request->name,
            'description'         => $request->description,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
        ]);

        // Hapus semua varian lama
        $product->variants()->delete();

        // Simpan varian baru
        if ($request->filled('variants')) {
            foreach (array_values($request->variants) as $variant) {
                $product->variants()->create([
                    'name'  => $variant['name'] ?? '',
                    'price' => $variant['price'] ?? 0,
                ]);
            }
        }



        // === Upload Additional Images ===
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $image = $manager->read($img->getPathname());
                if ($image->width() > 1600) $image->scaleDown(width: 1600);
                $encoded = $image->encode(new WebpEncoder(quality: 70));

                $filename = uniqid() . '.webp';
                $path = 'products/images/' . $filename;
                Storage::disk('public')->put($path, (string) $encoded);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image'      => $path,
                ]);
            }
        }

        Cache::forget('products');
        Cache::forget('homepage_data');
        Cache::forget("products_category_{$request->product_category_id}");
        Cache::forget('products_all');

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // ====================== DESTROY ======================
    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);

        // Hapus cover image
        if ($product->cover_image && Storage::disk('public')->exists($product->cover_image)) {
            Storage::disk('public')->delete($product->cover_image);
        }

        // Hapus semua gambar tambahan
        foreach ($product->images as $img) {
            if ($img->image && Storage::disk('public')->exists($img->image)) {
                Storage::disk('public')->delete($img->image);
            }
            $img->delete();
        }

        $product->delete();

        Cache::forget('products');
        Cache::forget('homepage_data');
        Cache::forget("products_category_{$product->product_category_id}");
        Cache::forget('products_all');

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
