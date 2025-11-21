<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController
{
    public function index() {
        $productCategory = ProductCategory::count();
        $products = Product::count();
        return view('admin.dashboard.index', compact(
            'productCategory',
            'products'
        ));
    }
}
