<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(){
        // attempt to auth and login based on credentials
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Credentials could not be verified'
            ]);
//           return back()->withInput()
//           ->withErrors(['email' => 'Credentials could not be verified']);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success','You Have Logged Out!');
    }
}
