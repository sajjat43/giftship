<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class apiUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    public function userCreate(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'gender' => 'required',
        ]);

        if ($validate->fails()) {

            return $this->responseWithError($validate->getMessageBag());
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'address' => $request->address,
            'gender' => $request->gender,

        ]);

        return $this->responseWithSuccess($user, 'user Created ');
    }

    public function userView()
    {
        $user = User::all();
        $data = userResource::collection($user);
        return $this->responseWithSuccess($data, 'user list loaded');
    }

    public function loginView(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            // dd(Auth::user()->id);
            
            if (Auth::user()->role == 'user') {
                return $this->responseWithSuccess($req,'Logged In');
                
                // return redirect()->route('manage.home')->with('message', 'Logged In');
            }
            return $this->responseWithSuccess($req,'Logged In');
            // return redirect()->route('manage.home')->with('message', 'Logged In');
        } else {
            return $this->responseWithError('invalid user name and password');
            // return redirect()->back()->with('success', 'invalid user name and password');
        }
        // return $this->respondWithToken($token);
    }

    // protected function responseWithToken($token){
    //     return response()->json([
    //         'access_token'=>$token,
    //         'token_type' => 'bearer',
    //         // 'expires_in'=>auth()->factory()->getTTL()*60
    //     ]);
    // }
    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60
    //         // 'expires_in' => auth('api')->factory()->getTTL() * 60
    //     ]);
    // }
    public function logOut(){
        $user = Auth::user();
        Auth::logout($user);
        return $this->responseWithSuccess($user,'Logged out successfully');
    }


}
