<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactList()
    {
        return view('contact-list');
    }

    public function profile()
    {
        return view('profile');
    }

    public function notifications()
    {
        return view('notifications');
    }
}
