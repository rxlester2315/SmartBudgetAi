<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Expenses;



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


        // Get expenses with their items for the current user
    $expenses = Expenses::with('items')
        ->where('user_id', auth()->id())
        ->orderBy('expense_date', 'desc')
        ->get();

    // Initialize categories
    $categories = [
        'food' => ['name' => 'Food & Dining', 'total' => 0, 'color' => 'bg-secondary'],
        'transportation' => ['name' => 'Transportation', 'total' => 0, 'color' => 'bg-purple-500'],
        'utilities' => ['name' => 'Utilities', 'total' => 0, 'color' => 'bg-blue-500'],
        'subscriptions' => ['name' => 'Subscriptions', 'total' => 0, 'color' => 'bg-yellow-500'],
        'other' => ['name' => 'Others', 'total' => 0, 'color' => 'bg-gray-500']
    ];

    // Calculate totals
    foreach ($expenses as $expense) {
        foreach ($expense->items as $item) {
            if (isset($categories[$item->category])) {
                $categories[$item->category]['total'] += $item->amount;
            } else {
                $categories['other']['total'] += $item->amount;
            }
        }
    }

    // Calculate percentages
    $grandTotal = array_sum(array_column($categories, 'total'));
    
    foreach ($categories as &$category) {
        $category['percentage'] = $grandTotal > 0 
            ? round(($category['total'] / $grandTotal) * 100, 1)
            : 0;
    }
        return view('dashboard-pages-user.dashboard', compact('categories', 'grandTotal'));
    }


    public function adminDashboard(){
        return view('admin.admin-dashboard');
    }


    
}