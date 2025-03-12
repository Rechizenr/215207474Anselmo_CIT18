<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash password
    ]);

    return redirect()->route('login.form')->with('success', 'Account created successfully! Please log in.');
}
    

public function showLoginForm()
{
    return view('auth.login'); // Ensure this matches the correct file path
}

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/')->with('success', 'Logged in successfully!');
    }

    return redirect()->route('login.form')->with('error', 'Invalid credentials. Please try again.');
}

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}

