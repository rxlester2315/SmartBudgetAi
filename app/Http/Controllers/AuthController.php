<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    


    public function ShowloginFrm(){
        return view('Auth-login.login');
    }


 




public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $ip = $request->ip();
    $key = 'login:' . $ip;

    // Check if too many login attempts
    if (RateLimiter::tooManyAttempts($key, 5)) {
        return back()->withErrors(['email' => 'Too many login attempts. Please try again later.']);
    }

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        RateLimiter::clear($key); // Reset attempt counter on successful login

        $user = Auth::user(); // Get authenticated user

        $redirectRoute = [
            'Admin' => 'admin',
            'Normal User' => 'NormalUser',
        ];

        return redirect()->intended($redirectRoute[$user->role_name] ?? 'mainpages')
            ->with('success', 'Welcome back!');
    }

    // Increment rate limiter attempts on failed login
    RateLimiter::hit($key, 60); // Lockout for 60 seconds per failed attempt

    return back()->withErrors(['error' => 'Invalid email, password, or inactive status.']);
}



   



    public function ShowRegisterFrm(){
        return view('Auth-login.register');
    }


    public function registerBackend(Request $request) {

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);



        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'role_name' => 'Normal User',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Your account has been created. You can now log in.');


    }    

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


    public function normalUserDashboard(){
        return view('dashboard-pages-user.dashboard');
    }


    public function adminDashboard(){
        return view('admin.admin-dashboard');
    }


    
}