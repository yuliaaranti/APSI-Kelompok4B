<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('web')->check()) {
            return redirect('kp');
        }
        else if (Auth::guard('koors')->check()) {
            return redirect('kp');
        }
        else if (Auth::guard('kaprodis')->check()) {
            return redirect('kp');
        }
        else if (Auth::guard('admins')->check()) {
            return redirect('kp');
        }

        return view('auth');
    }

    public function authenticate(Request $request)
    {
        $creds = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email can\'t be empty!',
                'password.required' => 'Password can\'t be empty!'
            ]
        );

        if (Auth::guard('web')->attempt($creds)) {
            $request->session()->regenerate();
            return redirect('kp');
        }
        else if (Auth::guard('koors')->attempt($creds)) {
            $request->session()->regenerate();
            return redirect('kp');
        }
        else if (Auth::guard('kaprodis')->attempt($creds)) {
            $request->session()->regenerate();
            return redirect('kp');
        }
        else if (Auth::guard('admins')->attempt($creds)) {
            $request->session()->regenerate();
            return redirect('kp');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
