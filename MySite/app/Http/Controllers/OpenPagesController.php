<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenPagesController extends Controller
{
    public function showHomePage()
    {
        return view('home');
    }

    public function showAboutPage()
    {
        return view('about');
    }

    public function showSignUpPage()
    {
        return view('SignUp');
    }
}
