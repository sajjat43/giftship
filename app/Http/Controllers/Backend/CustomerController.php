<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Facade\Ignition\DumpRecorder\DumpHandler;
use Illuminate\Foundation\Auth\User;

class CustomerController extends Controller
{
    public function customerView()
    {
        $customer = User::where('role', 'user')->get();
        return view('admin.pages.customer_list', compact('customer'));
    }
    public function customer_single_View($customer_id)
    {
        $customer = User::find($customer_id);
        return view('admin.pages.customer_single_view', compact('customer'));
    }


}
