<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $data = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        
        return $request;
    }

    public function forgotPassword()
    {
        return view('forgotPassword');
    }

    public function forgotPasswordPost(Request $request)
    {
        return "we are in forgotPasswordPost";
    }
}
