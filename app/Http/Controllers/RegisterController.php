<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request, Response $response)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:30',
            'user_type' => 'required|in:Student,Instructor'
        ], [
            'name.required' => 'the name field is required',
            'name.min' => 'the name must be at least 3 characters.',
            'name.max' => 'the name must not exced 30 characters.',

            'email.required' => 'the email field is required',
            'email.email' => 'the email field must be a valid email',
            'email.max' => 'the email must not exced 255 characters.',

            'password.required' => 'the password field is required',
            'password.min' => 'the password must be at least 3 characters.',
            'password.max' => 'the password must not exced 30 characters.',

            'user_type.required' => 'the user type field is required',
            'user_type.in' => 'the user type field is invalid',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type' => $request->user_type,
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home')->with('message', 'Account created sucessfull');
        }


        return redirect()->route('register')->with('error', 'Account error sucessfull');
    }
}
