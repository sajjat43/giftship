<?php

namespace App\Http\Controllers\Fontend;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class orderController extends Controller
{
    public function requestList(Request $request)
    {
       
        $request = order::where('user_id',auth()->user()->id)->get();
        return view('website.pages.customer.customer_order_list', compact('request'));
    }
    public function requestInvoice($id)
    {
        $request = RequestDetails::where('order_id', $id)->get();
      
        
        return view('website.pages.customer.order_details', compact('request'));
    }
    public function order_cancle($id){
        $orderCancle=Order::find($id);
        $orderCancle->update([
            'status'=>'cancelled'
        ]);
        Toastr::warning('Order clancled', 'warning');
        return redirect()->back();
    }
}
