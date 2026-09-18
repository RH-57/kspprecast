<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Product;
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

        $products = Cache::remember('products', 3600, function () {
            return Product::with('variants')->get();
        });

        return view('web.page.index', compact(
            'contacts',
            'medsos',
            'products',
        ));
    }
}
