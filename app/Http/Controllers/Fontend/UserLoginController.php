<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Employee;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Fontend\UserLoginController;

class UserLoginController extends Controller
{
    // ----------------employee login-----------------------

    public function UserLogin()
    {
        return view('website.pages.User_login');
    }


    public function loginView(Request $req)
    {
        // dd($req->all());
        // dd(Auth::attempt(['email' => $req->email, 'password' => $req->password]));
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            // dd(Auth::user()->id);
            if (Auth::user()->role == 'user') {
                return redirect()->route('manage.home')->with('message', 'Logged In');
            }
            return redirect()->route('manage.home')->with('message', 'Logged In');
        } else {
            return redirect()->back()->with('success', 'invalid user name and password');
        }
    }
    public function logOut()
    {
        $user = Auth::user();
        Auth::logout($user);
        return redirect()->route('manage.home')->with('message', 'Logged out successfully');
    }

    // customer profile

    public function customer_profile()
    {
        $customer = User::all();
        return view('website.pages.customer.customer_profile', compact('customer'));
    }
}
