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
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'The email field is required.',
            'password.required' => 'The password field is required.',
        ]);

        // Check if the login attempts are being throttled (rate-limiting)
        if (RateLimiter::tooManyAttempts('login:' . $request->ip(), 5)) {
            return back()->withErrors(['email' => 'Too many login attempts. Please try again later.']);
        }

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Log successful login
            Log::info('User successfully logged in', ['email' => $request->email]);

            // Redirect based on user role
            $user = Auth::user();
            $redirectRoute = $this->redirectService->getRedirectRouteBasedOnRole($user->role_name);

            return redirect()->intended($redirectRoute)
                ->with('success', 'Welcome back!');
        }

        // Log failed login attempt
        Log::warning('Failed login attempt', ['email' => $request->email]);

        // If authentication fails, redirect back with error
        RateLimiter::hit('login:' . $request->ip()); // Increment login attempt for rate limiting
        return back()->withErrors([
            'email' => 'Invalid email or password, or your account might be inactive.',
        ]);
    }


   

   // This private method will handle role-based redirection
    private function getRedirectRouteBasedOnRole($role)
    {
        // Define the redirect routes for different roles
        $routes = [
            'Admin' => 'admin.dashboard', // The named route for admin dashboard
            'User' => 'user.dashboard',   // The named route for user dashboard
            // Add more roles as needed
        ];

        // Return the route corresponding to the role, defaulting to 'home'
        return $routes[$role] ?? 'home'; // Default to 'home' if the role is unknown
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


    
}