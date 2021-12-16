<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $Users=User::where(['email'=>$req->email])->first();
        // return view('login');
        // $test =$User || Hash::check($req->password,$User->$password) ;

        //dd($test);
        // dd($Users);
        //  dd($req);
         if (!$Users || !Hash::check($req->password,$Users->password))
       {
             return redirect()->back() ->with('success','email or password not match');
        //    return redirect('/')->with( "massage","user name or password is not match") ;
       }

       else{
           $req->session()->put('User',$Users);
           return redirect ('/');
       }
    }
}
