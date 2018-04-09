<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login_view()
    {
        return view('auth.login');
    }

    public function login_attempt(Request $request)
    {
//        echo '<pre>';
//        print_r($request->all());
//        echo '</pre>';

//        dd($request->all());

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ])) {
            if (Auth::user()->status == 1) {
                return redirect('/admin/requests');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login')->withInput()->with('warning', 'Email atau password salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
