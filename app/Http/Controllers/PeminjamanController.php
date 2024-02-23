<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $peminjaman = Peminjaman::get();
        $user = User::get();
        return view('peminjaman', [
            'title' => 'Peminjaman',
            'active' => 'peminjaman',
            'peminjaman' => $peminjaman,
            'user' => $user
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $buku = Buku::get();
        $user = User::get();
        
        return view('form.form-peminjaman', [
            'title' => 'Form Peminjaman',
            'active' => 'Peminjaman',
            'buku' => $buku,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status_pinjam' => 'required',
            'id_user' => 'required',
            'id_buku' => 'required',
            ]);

            if($validateData){
                Peminjaman::create($validateData);
    
                return redirect('peminjaman');
            } 
    
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = Peminjaman::where('id', $id)->first();
        $bukuList = Buku::get();
        $user = User::get();

       
        return view('edit.edit-peminjaman', [
        'peminjaman' => $peminjaman,
        'bukuList' => $bukuList,
        'user' => $user,
        'title' => 'Form Buku',
        'active' => 'peminjaman',

       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData=$request->validate([
            'id_buku' => 'nullable',
            'tgl_pinjam' => 'nullable',
            'tgl_kembali' => 'nullable',
            'status_pinjam' => 'nullable',
            'id_user' => 'nullable',
            ]);
            $peminjaman = Peminjaman::where('id', $id)->update($validateData);
            return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);


        //delete post
        $peminjaman->delete();

        //redirect to index
        return redirect('peminjaman');
    }
}