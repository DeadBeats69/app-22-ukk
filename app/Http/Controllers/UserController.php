<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin-pegawai');
        $user = User::get();
        return view('admin.data-pengguna', [
            'title' => 'Data Pengguna',
            'active' => 'data-pengguna',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $this->authorize('admin');
        $user = User::get();
        return view('form.form-pengguna', [
            'title' => 'Data Pengguna',
            'active' => 'data-pengguna',
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $this->authorize('admin');
        $validateData = $request->validate([
            'username' => 'required|max:20|min:5',
            'nama'  => 'required|min:5|max:85',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required|email|',
            'telepon' => 'required|max:13',
            'password' => 'required|min:8',
            'alamat' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
            'role' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/posts', $image->hashName());
        $validateData['gambar'] = $image->hashName();
        if($validateData){
            User::create($validateData);

            return redirect()->intended('data-pengguna');
        } 

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $user = User::where('id', $id)->first();

        return view('profile', [
            'title' => 'Profile',
            'active' => 'buku',
            'user' => $user,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $this->authorize('admin');
        $user = User::where('id', $id)->first();

       
        return view('edit.edit-profile', [
        'user' => $user,
        'title' => 'Edit Pengguna',
        'active' => 'buku',

       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('admin');
        if($request->has('gambar')){
            $validateData = $request->validate([
                'username' => 'nullable|max:20|min:5',
                'nama'  => 'nullable|min:5|max:85',
                'jk' => 'nullable',
                'tgl_lahir' => 'nullable',
                'email' => 'nullable|email|',
                'telepon' => 'nullable|max:13',
                'password' => 'nullable|min:8',
                'alamat' => 'nullable|max:255',
                'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
                'role' => 'nullable'
            ]);
            $user = User::where('id', $id)->first();
            if($user->gambar != null){
                $path = public_path('storage/posts/') .  $user->gambar;
                if(file_exists($path)){
                    unlink($path);
                }
            }
            $image = $request->file('gambar');
            $image->storeAs('public/posts', $image->hashName());
            $validateData['gambar'] = $image->hashName();
            $user = User::where('id', $id)->update($validateData);
        }else{

            $validateData = $request->validate([
                'username' => 'nullable|max:20|min:5',
                'nama'  => 'nullable|min:5|max:85',
                'jk' => 'nullable',
                'tgl_lahir' => 'nullable',
                'email' => 'nullable|email|',
                'telepon' => 'nullable|max:13',
                'password' => 'nullable|min:8',
                'alamat' => 'nullable|max:255',
                'role' => 'nullable'
            ]);
            $user = User::where('id', $id)->update($validateData);
        }
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $this->authorize('admin');
        
        $user = User::where('id', $id)->first();
        if($user->role == 'admin'){
            return back();
        }
        if($user->gambar != null){
            $path = public_path('storage/posts/') .  $user->gambar;
            if(file_exists($path)){
                unlink($path);
            }
        }
        //delete post
        $user->delete();
        return back();
    }
}
