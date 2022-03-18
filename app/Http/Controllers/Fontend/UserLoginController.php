<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Employee;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Fontend\UserLoginController;

class UserLoginController extends Controller
{
    // ----------------employee login-----------------------

    public function UserLogin()
    {
        return view('website.pages.User_login');
    }
    // ---------------------employee registation--------------------

    // public function EmployeeRegestation()
    // {
    //     //
    //     return view('website.pages.User_registration');
    // }
    // // -----------------employee table------------------
    // public function UserRegestationstore(Request $request)
    // {
    // dd($request->all());
    //     UserLogin::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password,
    //         // 're_password'=>$request,
    //         'mobile' => $request->mobile,
    //         'address' => $request->address,
    //         'gender' => $request->gender,
    //     ]);
    //     return redirect()->route('Employee.login')->with('success', 'Employee regestaion Successfully');
    // }
    // employee view-------------------------

    // public function UserView()
    // {
    //     $Userlogin = UserLogin::all();
    //     return view('admin/pages/Employee_list', compact('Userlogin'));
    // }
    // -------------employee single view---------------

    // public function Employee_single_View($User_id)
    // {
    //     $Userlogin = Userlogin::find($User_id);

    //     return view('admin.pages.employe_single_view', compact('Userlogin'));
    // }



    public function loginView(Request $req)
    {
        // dd($req->all());
        // dd(Auth::attempt(['email' => $req->email, 'password' => $req->password]));
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            // dd(Auth::user()->id);
            if (Auth::user()->role == 'admin') {
                return redirect()->route('home')->with('message', 'Logged In');
            }
            return redirect()->route('home')->with('message', 'Logged In');
        } else {
            return redirect()->back()->with('success', 'invalid user name and password');
        }
    }
}
