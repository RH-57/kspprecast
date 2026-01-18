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

        $products = Cache::remember('products_all', 3600, function () {
            return Product::with('variants')->get();
        });

        return view('web.page.product', compact(
            'contacts',
            'medsos',
            'products',
        ));
    }

    public function show($slug) {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $product = Product::with(['images', 'variants'])->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('id', '!=', $product->id)
        ->latest()
        ->take(4)
        ->get();

        return view('web.page.product-detail', compact(
            'contacts',
            'medsos',
            'product',
            'relatedProducts',
        ));
    }
}
