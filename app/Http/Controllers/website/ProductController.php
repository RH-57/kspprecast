<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index(Request $request) {
        $contacts = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $medsos = Cache::remember('mediasocials', 3600, function () {
            return MediaSocial::get();
        });

        $productCat = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::get();
        });

        $selectedCategory = $request->get('category');

        if ($selectedCategory) {
            $category = ProductCategory::where('slug', $selectedCategory)->first();

            if ($category) {
                $cacheKey = "products_category_{$category->id}";
                $products = Cache::remember($cacheKey, 3600, function () use ($category) {
                    return Product::where('product_category_id', $category->id)->get();
                });
            } else {
                $products = Cache::remember('products_all', 3600, fn() => Product::all());
            }
        } else {
            $products = Cache::remember('products_all', 3600, fn() => Product::all());
        }

        return view('web.page.product', compact(
            'contacts',
            'medsos',
            'products',
            'productCat',
            'selectedCategory'
        ));
    }

    public function show($slug) {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();
        $product = Product::with(['category', 'images', 'variants'])->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('id', '!=', $product->id)
        ->latest()
        ->take(4)
        ->get();

        return view('web.page.product-detail', compact(
            'contacts',
            'medsos',
            'productCat',
            'product',
            'relatedProducts',
        ));
    }
}
