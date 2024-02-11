<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //login request methods
    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|exists:users,email',
            // 'password' => 'required|exists:users,password',
        ], [
            'email.required' => 'Eemail wajib diisi',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password wajib diisi'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'guidanceTeacher') {
                return view('guidanceTheacer.index');
            }
            if (Auth::user()->role == 'student') {
                return view('student.index');
            }
            if (Auth::user()->role == 'administrator') {
                return to_route('dashboard.admin');
            }
        } else {
            return to_route('login')->withErrors('Username atau password anda salah');
        }

        // if (Auth::attempt($login)) {
        //     return to_route('dashboard');
        // } else {
        //     return to_route('login')->withErrors('Username atau password anda salah');
        // }
    }
}
