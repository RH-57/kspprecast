<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();
        $products = Product::get();
        return view('web.page.index', compact(
            'contacts',
            'medsos',
            'productCat',
            'products',
        ));
    }
}
