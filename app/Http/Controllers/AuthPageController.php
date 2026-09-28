<?php

namespace App\Http\Controllers;

class AuthPageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function resetPassword()
    {
        return view('reset-password');
    }
}
