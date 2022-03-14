<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Input as input;


class LoginController extends Controller
{
    //
    public function view()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|password'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with([
            'loginError' => 'Email atau password salah',
        ]);
    }
    public function postLogin(Request $request)
    {
        $validator = Validator::make(
            ::all(),
            array(
                'email' => 'rewquired|email|unique:Users',
                'password' => 'required|min:6'
            )
        );
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
