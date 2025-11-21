<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Project;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
