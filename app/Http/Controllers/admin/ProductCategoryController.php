<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index() {
        $categories = ProductCategory::get();
        return view('admin.products.categories.index', compact('categories'));
    }
}
