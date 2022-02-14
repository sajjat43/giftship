<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

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
    public function shop_category()
    {
        $categorylist = Category::all();
        return view('website.fixed.home', compact('categorylist'));
    }
    public function productUnderCategory($Cid)
    {
        $product = Product::where('category_id', $Cid)->get();
        // dd($product);
        return view('website.pages.product_under_category', compact('product'));
    }
}
