<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){  //create the user
        //var_dump(request()->all());
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'max:255', 'min:7', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7'],
        ]);
//      dd('success validation succeeded');
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/')->with('success', 'Your Account Has been Created!');
    }
}
