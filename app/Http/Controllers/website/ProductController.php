<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();

        $selectedCategory = $request->get('category');

        if ($selectedCategory) {
            $category = ProductCategory::where('slug', $selectedCategory)->first();

            if($category) {
                $products = Product::where('product_category_id', $category->id)->get();
            } else {
                $products = Product::all();
            }
        } else {
            $products = Product::all();
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
