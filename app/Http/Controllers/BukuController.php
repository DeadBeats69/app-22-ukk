<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Ulasan;

class BukuController extends Controller
{
    public function index() {
        $buku = Buku::latest()->paginate(5);
        $kategori = Kategori::get();

        if(auth()->user()->role == 'admin'){
            return view('dashboard.dashboard-admin', compact('buku'), [
                'title' => 'Buku',
                'active' => 'buku',
                'kategori' => $kategori
            ]);
        } else if(auth()->user()->role == 'pegawai'){
            return view('dashboard.dashboard-pegawai', compact('buku'), [
                'title' => 'Buku',
                'active' => 'buku',
                'kategori' => $kategori
            ]);
        } else if(auth()->user()->role == 'peminjam'){
            return view('dashboard.dashboard-peminjam', compact('buku'), [
                'title' => 'Buku',
                'active' => 'buku',
                'kategori' => $kategori
            ]);
        }
    }

    public function create(){
        $this->authorize('admin-pegawai');
        $kategori = Kategori::get();

        return view('form.form-buku', [
            'title' => 'Buku',
            'active' => 'buku',
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('admin-pegawai');
        $validateData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            'stok' => 'required',
            'id_kategori' => 'required',
        ]);

        //upload image
        $image = $request->file('cover');
        $image->storeAs('public/posts', $image->hashName());
        $validateData['cover'] = $image->hashName();

        if($validateData){
            Buku ::create($validateData);

            return redirect('dashboard-admin')->with('success', 'Data buku ditambahkan');
        } 

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::where('id', $id)->first();
        $kategori = Kategori::where('id', $buku->id_kategori)->first();
        $ulas = Ulasan::latest()->paginate(5);
        return view('detail-buku', [
            'title' => 'Detail Buku',
            'active' => 'buku',
            'buku' => $buku,
            'kategori' => $kategori,
            'ulas' => $ulas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('admin-pegawai');
        $buku = Buku::where('id', $id)->first();
        $kategori = Kategori::get();

       
        return view('edit.edit-buku', [
        'buku' => $buku,
        'kategori' => $kategori,
        'title' => 'Edit Buku',
        'active' => 'buku',

       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $this->authorize('admin-pegawai');
        if($request->has('cover')){
            $validateData = $request->validate([
            'judul' => 'nullable',
            'penulis' => 'nullable',
            'penerbit' => 'nullable',
            'tahun_terbit' => 'nullable',
            'deskripsi' => 'nullable',
            'cover' => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
            'stok' => 'nullable',
            'id_kategori' => 'nullable',
            ]);
            $buku = buku::where('id', $id)->first();
            if($buku->cover != null){
                $path = public_path('storage/posts/') .  $buku->cover;
                if(file_exists($path)){
                    unlink($path);
                }
            }
            $image = $request->file('cover');
            $image->storeAs('public/posts', $image->hashName());
            $validateData['cover'] = $image->hashName();
            $buku = Buku::where('id', $id)->update($validateData);
        }else{

            $validateData = $request->validate([
            'judul' => 'nullable',
            'penulis' => 'nullable',
            'penerbit' => 'nullable',
            'tahun_terbit' => 'nullable',
            'deskripsi' => 'nullable',
            'stok' => 'nullable',
            'id_kategori' => 'nullable',
            ]);
            $buku = Buku::where('id', $id)->update($validateData);
        }
        return $this->show($id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin-pegawai');
        $buku = Buku::where('id', $id)->first();
        if($buku->cover != null){
            $path = public_path('storage/posts/') .  $buku->cover;
            if(file_exists($path)){
                unlink($path);
            }
        }
        

        //delete post
        $buku->delete();
        return back();
    }
}
