<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // homepage view
    public function index()
    {
        return view('guest.layouts.app');
    }

    // login view
    public function login()
    {
        return view('auth.newLogin');
    }

    // register view
    public function register()
    {
        return view('auth.newRegister');
    }

    //forgot password view
    public function forgotPassword()
    {
        return view('auth.newForgotPassword');
    }
}
