<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\RequestProduct;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $stockOut = Product::where('qty', 0)->count();
        return view('admin.Dashboard.Dashboard', compact('stockOut'));
    }
}
