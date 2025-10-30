<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use App\Models\Project;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController
{
    public function index() {
        return view('admin.dashboard.index');
    }
}
