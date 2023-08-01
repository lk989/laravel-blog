<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store()
    {
        // var_dump(request()->all());
        $user = User::create(request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'unique:users', 'min:3', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'max:255', 'min:7'],
        ]));


        //login
        auth()->login($user);

        // session()->flash('success', 'Your account has been created successfully');

        return redirect('/')->with('success', 'Your account has been created successfully');
    }
}
