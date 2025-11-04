<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Cache selama 1 jam (3600 detik)
        $contacts = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $medsos = Cache::remember('mediasocials', 3600, function () {
            return MediaSocial::get();
        });

        $productCat = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::get();
        });

        $products = Cache::remember('products', 3600, function () {
            return Product::get();
        });

        return view('web.page.index', compact(
            'contacts',
            'medsos',
            'productCat',
            'products',
        ));
    }
}
