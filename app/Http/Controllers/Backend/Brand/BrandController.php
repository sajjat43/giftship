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
         $brand = Brand::all();
         return view('admin.pages.brand.Brand_view', compact('brand'));
     }
}
