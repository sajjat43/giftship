<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        
        $stockOut = Product::where('qty', 0)->count();
        return view('admin.Dashboard.Dashboard', compact('stockOut'));
    }
}