<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Home()
    {
        $product = Product::all();
        return view('website.fixed.home', compact('product'));
    }
    public function userLogin()
    {
        return view('website.pages.login');
    }
    public function product_font_view()
    {
        $product = Product::all();
        return view('admin.pages.product_view', compact('product'));
    }

    // public function crisis()
    // {
    //     $product=Product::all();
    //     // dd($crisislist);
    //     // $volunteerlist=Product::all();
    //     // dd($volunteerlist);
    //     return view('website.fixed.home',compact('product'));
    // }
    public function crisis($product_id)
    {
        $product = Product::find($product_id);
        return view('website.pages.cause_details', compact('product'));
    }
}
