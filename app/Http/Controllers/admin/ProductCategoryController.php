<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index() {
        $categories = ProductCategory::get();
        return view('admin.products.categories.index', compact('categories'));
    }

    public function create() {
        return view('admin.products.categories.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'  => 'required|string|max:100',
            'description'   => 'required|string',
            'image'         => 'required|image|mimes:jpg,jpeg,png,webp|max:4086',
        ]);

        $manager = new ImageManager(new Driver());

        $imagePath = null;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $manager->read($file->getPathname());

            if($image->width() > 1600) {
                $image->scaleDown(width: 1600);
            }

            $encoded = $image->encode(new WebpEncoder(quality:70));
            $filename = uniqid() . '.webp';
            $path = 'products/categories/' . $filename;

            Storage::disk('public')->put($path, (string) $encoded);
            $imagePath = $path;
        }

        // === Slug Unik ===
        $baseSlug = Str::slug($request->name);
        $slug = $baseSlug;
        $counter = 1;
        while (ProductCategory::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . str_pad($counter, 2, '0', STR_PAD_LEFT);
            $counter++;
        }

        ProductCategory::create([
            'name'          => $request->name,
            'slug'          => $slug,
            'description'   => $request->description,
            'image'         => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Product Category Created Successfully');
    }

    public function edit($slug) {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();
        return view ('admin.products.categories.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4086',
        ]);

        $manager = new ImageManager(new Driver());

        // Jika ada gambar baru diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }

            $file = $request->file('image');
            $image = $manager->read($file->getPathname());

            if ($image->width() > 1600) {
                $image->scaleDown(width: 1600);
            }

            $encoded = $image->encode(new WebpEncoder(quality: 70));
            $filename = uniqid() . '.webp';
            $path = 'products/categories/' . $filename;

            Storage::disk('public')->put($path, (string) $encoded);
            $category->image = $path;
        }

        // Jika nama berubah, regenerasi slug
        if ($category->name !== $request->name) {
            $baseSlug = Str::slug($request->name);
            $slug = $baseSlug;
            $counter = 1;
            while (ProductCategory::where('slug', $slug)->where('id', '!=', $category->id)->exists()) {
                $slug = $baseSlug . '-' . str_pad($counter, 2, '0', STR_PAD_LEFT);
                $counter++;
            }
            $category->slug = $slug;
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Product Category Updated Successfully');
    }

    public function destroy($slug)
    {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();

        // Hapus gambar dari storage jika ada
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Product Category Deleted Successfully');
    }
}
