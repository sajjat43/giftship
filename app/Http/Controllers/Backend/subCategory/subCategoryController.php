<?php

namespace App\Http\Controllers\Backend\subCategory;

use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subCategoryController extends Controller
{
    public function subCategoryCreate()
    {
        
        $categories = Category::all();
        return view('admin.pages.sub_category.subCategory',compact('categories'));
    }
    public function subCategoryStore(Request $request)
    {
        // dd($request->all());
        $image_subname = null;
        if ($request->hasfile('subimage')) {
            $image_subname = date('Ymdhis') . '.' . $request->file('subimage')->getClientOriginalExtension();
            $request->file('subimage')->storeAs('/uploads/subcategory/', $image_subname);
        }
        $request->validate([

            'subname' => 'required',
            'subdescription' => 'required',
            'subimage' => 'required',


        ]);

        subCategory::create([

            'subname' => $request->subname,
            'category_id'=>$request->category_id,
            'subdescription' => $request->subdescription,
            'subimage' => $image_subname,
        ]);
        // Category::create($request->all());
        return redirect()->back()->with('success', 'subCategory has been Created Successfully');
    }
    // subcategory view
    public function subCategoryView()
    {
        $subcategory = subCategory::with('category')->orderBy('id','DESC')->get();
        return view('admin.pages.sub_category.subCategory_view', compact('subcategory'));
    }
    public function updateForm($id){
        $subcategory=subCategory::find($id);
        return view('admin.pages.sub_category.sub_categoryUpdate',compact('subcategory'));
    }
    public function subCategoryUpdate(Request $request, $id){
        $subcategory = subCategory::find($id);
        $image_subname = $subcategory->subimage;
        if ($request->hasfile('subimage')) {
            $image_subname = date('Ymdhis') . '.' . $request->file('subimage')->getClientOriginalExtension();
            $request->file('subimage')->storeAs('/uploads/subcategory/', $image_subname);
        }
        // dd($request->all());

        subCategory::find($id)->update([
            'subname' => $request->subname,
            'subdescription' => $request->subdescription,
            'subimage' => $image_subname,
        ]);
        
        return redirect()->route('product.subCategory.view')->with('success', 'Subcategory has been update Successfully');
    }

}
