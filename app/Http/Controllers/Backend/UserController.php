<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // ---------------------User registation--------------------

    public function UserRegestation()
    {
        //
        return view('website.pages.User_registration');
    }
    //   ---------------- user store ---------------


    public function UserRegestationstore(Request $request)
    {

        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // 're_password'=>$request,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);
        return redirect()->route('website.user.login')->with('success', 'Employee regestaion Successfully');
    }
}
