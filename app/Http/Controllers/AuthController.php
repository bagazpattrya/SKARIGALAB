<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'nis' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            
            if(Auth::user()->role_id == 2)
            {
                return redirect('dashboard');
            }
            if(Auth::user()->role_id == 1 or Auth::user()->role_id == 3)
            {
                return redirect('profile');
            }
        }
        Session::flash('status', 'Failed');
        Session::flash('message', 'No Valid Account');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
