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


        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/users/', $image_name);
        }
        
        $request->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'address' => 'required',
            'gender' => 'required',

        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'address' => $request->address,
            'gender' => $request->gender,
            'image' => $image_name,

        ]);
        return redirect()->route('website.user.login')->with('success', 'Employee regestaion Successfully');
    }

}
