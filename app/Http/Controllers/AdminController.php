<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function login_view()
    {
        return view('admin.pages.login');
    }

    public function login(Request $req)
    {

    $userInfo=$req->except('_token');

    if(Auth::attempt($userInfo)){
        return redirect()->route('home')->with('message','Login successful.');
    }
    return redirect()->back()->with('error','Invalid user credentials');
}
public function logout()
{
  Auth::logout();
  return redirect()->route('admin.login')->with('message','logout successfully');
}

public function profile(){
    return view('admin.pages.admin_profile');
}
}
