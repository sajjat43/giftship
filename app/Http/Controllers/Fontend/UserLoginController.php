<?php

namespace App\Http\Controllers\Fontend;

use App\Models\User;
use App\Models\Employee;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestDetails;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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


    // ------------socialite login-------

    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // Google callback
    public function handleGoogleCallback()
    {
        $users = Socialite::driver('google')->user();
        //$user->token;
        $this->_registerorLoginUser($users);
        return redirect()->route('manage.home');
    }


    // Facebook login------
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    // Facebook callback
    public function handleFacebookCallback()
    {
        $users = Socialite::driver('facebook')->user();
        //$user->token;
    }

    // // github login-----
    public function redirectTOProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('manage.home');
    }

    protected function _registerorLoginUser($data)
    {
        $users = User::where('email', '=', $data->email)->first();
      
        if (!$users) {
            $users = new User();
            $users->name = $data->name;
            $users->email = $data->email;
            $users->provider_id = $data->id;
            $users->avatar = $data->avatar;
            $users->save();
        }
        Auth::Login($users);
    }

// order list show 

public function CustomerOrderList($id){
    $request=RequestDetails::where('user_id',$id)->get();
    
    return view('website.pages.customer.customer_order_list',compact('request'));
}


public function customerUpdate($id){
        
    $user=auth()->user()->id;
    return view('website.pages.customer.customerUpdate',compact('user'));
}

public function customerUpdateStore(Request $request,$id){
    $user =auth()->user()->id;
    $image_name = auth()->user()->image;
    if ($request->hasfile('image')) {
        $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads/users/', $image_name);
    }
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'address' => 'required',
            
            

        ]);
        // dd($request->all());

        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'gender' => $request->gender,
            'image' => $image_name,
        ]);
       
        return redirect()->route('customer.profile')->with('success', 'Profile has been update Successfully');

}

}
