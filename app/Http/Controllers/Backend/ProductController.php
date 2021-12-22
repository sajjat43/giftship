<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product_view()
    {
        $product=Product::all();
        return view('admin.pages.product',compact('product'));
    }
    public function product_create()
    {
        return view('admin.pages.product_create');
    }


   public function product_store(Request $request)
    {
        $image_name=null;
        if($request->hasfile('image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/product',$image_name);
        }
        // dd($request->all());
        Product::create([
            'name'=>$request->name,
            'Product_category'=>$request->product_category,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$image_name,
        ]);
        // Product::create([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'description'=>$request->description,
        //      'image'=>$image_name,

        return redirect()->back()->with('success', 'Product has been Created Successfully');

    }
    public function ProductViewDetails($product_id)
    {
        $product= Product::find($product_id);

        return view('admin.pages.product_view', compact('product'));
    }
    public function DeleteProduct($product_id)
    {
        Product::find($product_id)->delete();
        return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
    }
    public function Category()
    {
        return view('admin.pages.Category');
    }
    public function Category_store(Request $request)
    {
        // dd($request->all());
        $image_Cname=null;
        if($request->hasfile('Cimage'))
        {
            $image_Cname=date('Ymdhis').'.'.$request->file('Cimage')->getClientOriginalExtension();
            $request->file('Cimage')->storeAs('/uploads/category',$image_Cname);
        }
        Category::create([
            'Cname'=>$request->Cname,
            'Cid'=>$request->Cid,
            'Cdescription'=>$request->Cdescription,
            'Cimage'=>$image_Cname,
        ]);
        return redirect()->back()->with('success', 'Category has been Created Successfully');
    }
    public function Category_view()
    {
         $category= Category::all();
        return view('admin.pages.Category_view',compact('category'));
    }

    // public function Category_delete($category_id){

    //     Category::find($category_id)->delete();
    //     return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
    // }


}
