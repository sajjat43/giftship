<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

class HomeController extends Controller
{
    public function Home()
    {
        $product = Product::all();
        $brand = Brand::all();
        // dd($brand);
        return view('website.fixed.home', compact('product', 'brand'));
    }
    public function userLogin()
    {
        return view('website.pages.User_login');
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
    // category filter
    public function shop_category()
    {

        $categorylist = Category::all();
        return view('website.fixed.home', compact('categorylist'));
    }
    // public function shop_Brand()
    // {
    //     $brand = Brand::all();

    //     return view('website.fixed.home', compact('brand'));
    // }



    public function productUnderCategory($Cid)
    {
        $product = Product::where('category_id', $Cid)->get();
        // dd($product);
        return view('website.pages.product_under_category', compact('product'));
    }
    // brand filter
    public function productUnderBrand($Bid)
    {
        $product = Product::where('brand_id', $Bid)->get();
        // dd($product);
        return view('hello', compact('product'));
    }
}
