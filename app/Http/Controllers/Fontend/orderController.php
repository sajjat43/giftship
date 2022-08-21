<?php

namespace App\Http\Controllers\Fontend;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function requestList(Request $request)
    {
        // $request = order::with('user','RequestDetails')->get();
        $request = order::where('user_id',auth()->user()->id)->get();
        return view('website.pages.customer.customer_order_list', compact('request'));
    }
    public function requestInvoice($id)
    {
        $request = RequestDetails::where('order_id', $id)->get();
        // dd($request);
        
        return view('website.pages.customer.order_details', compact('request'));
    }
}
