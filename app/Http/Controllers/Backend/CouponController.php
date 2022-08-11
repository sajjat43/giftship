<?php

namespace App\Http\Controllers\Backend;


use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            'value' => $request->value,
        ]);
        return redirect()->back()->with('success','coupun create successfully');
    }
    public function couponList(){
        $coupon=Coupon::all();
        return view('admin.pages.coupon.list',compact('coupon'));
    }
    public function couponDelete($id){
        Coupon::find($id)->delete();
        
        return redirect()->back()->with('success','coupun delete successfully');

    }  
    // backend====================end

    // frontend====================Start


    public function couponApply(Request $request){
  $coupon=Coupon::where('code',$request->coupon_code)->where('expiry_date','>=',Carbon::today())->first();
  $carts = session()->get('cart');
  
//   dd($coupon);
  if(!$coupon){
    return redirect()->back()->with('message','please Enter valid code');
  }
  session()->put('coupon',[
    'name'=>$coupon->code,
    'discount'=>$coupon->value,
  ]);
  
  
  return redirect()->back()->with('message','Coupon has been applyed');
    }

    public function deleteCoupon(){  
      session()->forget('coupon');
      return redirect()->back()->with('message','coupon remove successfully');
    }
    // frontend====================end
}