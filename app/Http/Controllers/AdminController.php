<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function login()
    {
        return view('admin.pages.login');
    }

}
