<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Signup()
    {
        return view('admin.pages.signup');
    }
}
