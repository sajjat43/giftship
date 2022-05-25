<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use Illuminate\Support\Facades\Validator;


class apiUserController extends Controller
{
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
}
