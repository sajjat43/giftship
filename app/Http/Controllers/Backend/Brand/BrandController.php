<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
     // all brand
     public function BrandCreate()
     {
         return view('admin.pages.brand.create_Brand');
     }
 
     public function BrandStore(Request $request)
     {
         // dd($request->all());
         $image_Bname = null;
         if ($request->hasfile('Bimage')) {
             $image_Bname = date('Ymdhis') . '.' . $request->file('Bimage')->getClientOriginalExtension();
             $request->file('Bimage')->storeAs('/uploads/Brand', $image_Bname);
         }
         $request->validate([
 
             'Bname' => 'required',
             'Bdescription' => 'required',
             'Bimage' => 'required',
 
 
         ]);
 
         Brand::create([
 
             'Bname' => $request->Bname,
             'Bdescription' => $request->Bdescription,
             'Bimage' => $image_Bname,
         ]);
         return redirect()->back()->with('success', 'Brand has been Created Successfully');
     }
     public function BrandView()
     {
         $brand = Brand::orderBy('id','DESC')->get();
         return view('admin.pages.brand.Brand_view', compact('brand'));
     }
     public function BrandEditForm($id){
        $brand=Brand::find($id);
        return view('admin.pages.brand.update',compact('brand'));
     }
     public function BrandEditStore(Request $request,$id){
        $brand=Brand::find($id);

        $image_Bname = $brand->Bimage;
        if ($request->hasfile('Bimage')) {
            $image_Bname = date('Ymdhis') . '.' . $request->file('Bimage')->getClientOriginalExtension();
            $request->file('Bimage')->storeAs('/uploads/Brand', $image_Bname);
        }
        Brand::find($id)->update([
            'Bname' => $request->Bname,
            'Bdescription' => $request->Bdescription,
            'Bimage' => $image_Bname,
        ]);
        return redirect()->route('brand.view')->with('success', 'Brand has been update Successfully');
     }
}
