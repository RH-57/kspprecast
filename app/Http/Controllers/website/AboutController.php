<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();
        return view('web.page.about', compact(
            'contacts',
            'medsos',
            'productCat',
        ));
    }
}
