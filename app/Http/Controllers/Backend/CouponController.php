<?php

namespace App\Http\Controllers\Backend;


use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CouponController extends Controller
{ 
    // backend====================Start
    public function couponFrom(){
        return view('admin.pages.coupon.coupon');
    }
    public function couponStore(Request $request){
        Coupon::create([

            'code' => $request->code,
            'expiry_date' => $request->expiry_date,
            'coupon_limit'=>$request->coupon_limit,
            'value' => $request->value,
        ]);
        Toastr::success('coupun create successfully', 'success');
        return redirect()->back();
    }
    public function couponList(){
        $coupon=Coupon::all();
        
        return view('admin.pages.coupon.list',compact('coupon'));
    }
    public function couponDelete($id){
        Coupon::find($id)->delete();
        
        return redirect()->back()->with('success','coupun delete successfully');

    }  

    public function couponUpdateForm($id){

      $coupon=Coupon::find($id);
      return view('admin.pages.coupon.update',compact('coupon'));
    }
    public function couponUpdate(Request $request ,$id){

      
      Coupon::find($id)->update([
        'code' => $request->code,
        'expiry_date' => $request->expiry_date,
        'value' => $request->value,
    ]);
    Toastr::success('Coupon update successfully', 'success');
    return redirect()->route('coupon.list');
    }
    // backend====================end

    // frontend====================Start


    public function couponApply(Request $request){
    $coupon=Coupon::where('code',$request->coupon_code)->first();
    
    $coupons=Coupon::where('code',$request->coupon_code)->where('expiry_date','>=',Carbon::today())->first();
    $carts = session()->get('cart');
  
  if(!$coupon){
    Toastr::error('please Enter valid code', 'failed');
    return redirect()->back();
  }
  if(!$coupons){
    
    Toastr::error('Coupon Expaired', 'failed');
    return redirect()->back();
}
else{
  session()->put('coupon',[
    'name'=>$coupon->code,
    'discount'=>$coupon->value,
  ]);
  Toastr::success('Coupon has been applyed', 'success');
  return redirect()->back();
}
  
  
    }

    public function deleteCoupon(){  
      session()->forget('coupon');
      Toastr::warning('You removed discount Coupon', 'warning');
      return redirect()->back();
    }
    // frontend====================end
}