<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function registerAction(Request $request){
        $validateData = $request->validate([
            'username' => 'required|max:20|min:5',
            'nama'  => 'required|min:5|max:85',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required|email  ',
            'telepon' => 'required|max:13',
            'password' => 'required|min:8',
            'alamat' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:5120'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/posts', $image->hashName());
        $validateData['gambar'] = $image->hashName();
        if($validateData){
            $validateData['role'] = 'peminjam';

            User::create($validateData);

            return redirect('/login');
        }

        return redirect('/register')->with('errors', 'gagal register');
    }
}