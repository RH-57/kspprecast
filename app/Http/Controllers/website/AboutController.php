<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function index() {
        $contacts = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $medsos = Cache::remember('mediasocials', 3600, function () {
            return MediaSocial::get();
        });

        $productCat = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::get();
        });
        return view('web.page.about', compact(
            'contacts',
            'medsos',
            'productCat',
        ));
    }
}
