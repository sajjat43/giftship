<?php

namespace App\Http\Controllers\Backend\category;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
   // ---------------category all ---------------

   public function Category()
   {
       return view('admin.pages.category.Category');
   }
   // ------------category table-------------------

   public function Category_store(Request $request)
   {
       
       $image_Cname = null;
       if ($request->hasfile('Cimage')) {
           $image_Cname = date('Ymdhis') . '.' . $request->file('Cimage')->getClientOriginalExtension();
           $request->file('Cimage')->storeAs('/uploads/category', $image_Cname);
       }
       $request->validate([

           'Cname' => 'required',
           'Cdescription' => 'required',
           'Cimage' => 'required',


       ]);
       Category::create([

           'Cname' => $request->Cname,
           'Cdescription' => $request->Cdescription,
           'Cimage' => $image_Cname,
       ]);
       // Category::create($request->all());
       Toastr::success('Category created successfully', 'success');
       return redirect()->back();
   }
   // ----------------categoey view--------------------------

   public function Category_view()
   {
       $category = Category::orderBy('id','DESC')->get();
       return view('admin.pages.category.Category_view', compact('category'));
   }

   public function category_update_view($category_id)
   {
       $category = Category::find($category_id);
       return view('admin.pages.category.categoryUpdate', compact('category'));
   }
   // category database update
   public function category_update(Request $request, $category_id)
   {
       $category = Category::find($category_id);
       $image_Cname = $category->Cimage;
       if ($request->hasfile('Cimage')) {
           $image_Cname = date('Ymdhis') . '.' . $request->file('Cimage')->getClientOriginalExtension();
           $request->file('Cimage')->storeAs('/uploads/category', $image_Cname);
       }
       Category::find($category_id)->update([
           'Cname' => $request->Cname,
           'Cdescription' => $request->Cdescription,
           'Cimage' => $image_Cname,
       ]);
       return redirect()->route('product.category.view')->with('success', 'category has been update Successfully');
   }
   // delete category
   public function DeleteCategory($category_id)
   {
       Category::find($category_id)->delete();
       $product = Product::where('category_id', $category_id)->delete();
       return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
   }
   
}
