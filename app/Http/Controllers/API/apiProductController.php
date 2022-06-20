<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use App\Models\subCategory;
use Illuminate\Support\Facades\Validator;

class apiProductController extends Controller
{
    public function productCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        if ($validate->fails()) {
            return $this->responseWithError($validate->getMessageBag());
        }
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/product', $image_name);
        }
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'brand_id' => $request->brand,
            'price' => $request->price,
            'qty' => $request->qty,
            'description' => $request->description,
            'image' => $image_name,

        ]);
        return $this->responseWithSuccess($product, 'product Created successfully');
    }
    public function viewProduct(){
        $product=Product::all();
        
        return $this->responseWithSuccess($product,'product list loaded');
     }
// ======================category====================

 public function createCategory(Request $request){
    $validate = Validator::make($request->all(), [
        'Cname' => 'required',
        'Cdescription' => 'required',
        'Cimage' =>'requerd',
        

    ]);
    if ($validate->fails()) {
        return $this->responseWithError($validate->getMessageBag());
    }
    $image_Cname = null;
        if ($request->hasfile('Cimage')) {
            $image_Cname = date('Ymdhis') . '.' . $request->file('Cimage')->getClientOriginalExtension();
            $request->file('Cimage')->storeAs('/uploads/category', $image_Cname);
        }
    $category = Category::create([
        'Cname' => $request->Cname,
        'Cdescription' => $request->Cdescription,
        'Cimage' => $image_Cname,
        
        
    ]);
    return $this->responseWithSuccess($category, 'Category Created successfully');
 }
 public function viewCategory(){
    $category=Category::all();
    
    return $this->responseWithSuccess($category,'category list loaded');
 }
 

//  subcategory=====================
public function subcreateSubCategory(Request $request){
// dd($request);
    $validate = Validator::make($request->all(), [
        'subname' => 'required',
        'subdescription' => 'required',
         'subimage' => 'required',
        

    ]);
    if ($validate->fails()) {
        return $this->responseWithError($validate->getMessageBag());
    }
    $image_subname = null;
        if ($request->hasfile('subimage')) {
            $image_subname = date('Ymdhis') . '.' . $request->file('subimage')->getClientOriginalExtension();
            $request->file('subimage')->storeAs('/uploads/subcategory/', $image_subname);
        }

    $subcategory = subCategory::create([

         'subname' => $request->subname,
            'subdescription' => $request->subdescription,
            'subimage' => $image_subname,
        
        
    ]);
    return $this->responseWithSuccess($subcategory, 'SubCategory Created successfully');
 }

 public function viewSubCategory(){
    $subcategory=subCategory::all();
    
    return $this->responseWithSuccess($subcategory,'subCategory list loaded');
 }
}


