<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {
        return view('users');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}