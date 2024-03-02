<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function loginAction(Request $request) {
        $validateData=$request->validate([
            'username'=> 'required',
            'password'=> 'required',
        ]);

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            
            if(auth()->user()->role == 'admin'){
                return redirect()->intended('dashboard-admin');
            } elseif (auth()->user()->role == 'pegawai'){
                return redirect()->intended('dashboard-pegawai');
            } else{
                return redirect()->intended('dashboard-peminjam');
            }
        }
        return back();
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();       
        $request->session()->regenerateToken();
        return redirect()->intended('/');    
    }
}
