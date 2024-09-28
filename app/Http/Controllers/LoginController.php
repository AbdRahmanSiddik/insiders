<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect('/dashboard')->with(['success'=>'Berhasil Login']);
        } else{
            return redirect('/login')->with(['success'=>'Password atau email salah']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with(['success'=>'Logout']);
    }
}
