<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function userCreate(Request $request)
    {

        // dd($request->all());
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'address' => $request->address,
            'gender' => $request->gender,

        ]);
        // dd($user);
        return response([

            'status' => 'true',
            'data' => $user,
            'message' => '200'
        ]);
    }
    public function userView()
    {
        $user = User::all();
        return response([

            'status' => 'true',
            'data' => $user,
            'message' => '200'
        ]);
    }
}
