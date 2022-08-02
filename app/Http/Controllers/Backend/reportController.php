<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reportController extends Controller
{
    public function product_report(){
        $product = Product::with('Category')->get();
        return view('admin.pages.report.product_report',compact('product'));
    }
}
