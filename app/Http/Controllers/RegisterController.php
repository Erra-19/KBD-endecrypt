<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function RegisterBackend()
    {
        return view('backend.v_register.register', [
            'brand' => 'Register',
        ]);
    }
    public function RegisterAccBackend(Request $request)
    {
        $request->validate([            
            'name' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
            'status' => true,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($user);

        return redirect()->route('backend.Login')->with('success', 'User registered successfully. Please login.');
    }
}
