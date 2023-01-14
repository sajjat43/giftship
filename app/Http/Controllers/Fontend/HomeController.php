<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\subCategory;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    public function Home()
    {
        $products = Product::paginate(8);
        $latestProduct = Product::orderBy('created_at', 'desc')->get()->take(5);
        $featuredProduct = Product::where('featured', '1')->take(10)->get();


     
        return view('website.fixed.home', compact('products', 'latestProduct', 'featuredProduct'));
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


    public function shop_category()
    {

        $categorylist = Category::all();

        return view('website.fixed.home', compact('categorylist'));
    }




    public function productUnderCategory($Cid)
    {
        $product = Product::where('category_id', $Cid)->get();


        // dd($product);

        return view('website.pages.product.product_under_category', compact('product'));
    }
    // brand filter
    public function productUnderBrand($Bid)
    {
        $product = Product::where('brand_id', $Bid)->get();

        // dd($product);
        return view('website.pages.product.product_under_brand', compact('product'));
    }
    public function productUnderSubcategory($id){
        $product = Product::where('subcategory_id', $id)->get();
        return view('website.pages.product.product_under_subcategory',compact('product'));
    }
}
