<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        $loginField = $this->detectLoginField($validatedData['username']);

        $credentials = [
            $loginField => $validatedData['username'],
            'password' => $validatedData['password']
        ];

        // $user = User::create($credentials);

        if(Auth::attempt($credentials)){
            // return redirect('router');
            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages(['username' => 'Invalid credentials']);
    }

    protected function detectLoginField($username)
    {
        return filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
    }

    public function forgotPassword()
    {
        return view('forgotPassword');
    }

    public function forgotPasswordPost(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);
        
        return $data;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}
