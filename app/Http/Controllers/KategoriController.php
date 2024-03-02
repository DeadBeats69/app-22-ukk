<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::get();

        return view('kategori', compact('kategori'), [
            "title"=> 'Kategori',
            "active"=> 'kategori',
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin-pegawai');
        return view('form.form-kategori', [
            'title' => 'Form Kategori',
            'active' => 'kategori'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('admin-pegawai');
        $validateData = $request->validate([
            'kategori' => 'required',
            ]);

        if($validateData){
            Kategori::create($validateData);

            return redirect('kategori');
        } 

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $kategori = Kategori::where('id', $id)->first();

        return view('kategori', [
            'title' => 'Kategori',
            'active' => 'kategori',
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('admin-pegawai');
       $kategori = Kategori::where('id', $id)->first();
       
       return view('edit.edit-kategori', [
        'kategori' => $kategori,
        'title' => 'kategori',
        'active' => 'kategori',

       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('admin-pegawai');
        $validateData=$request->validate([
        'kategori' => 'required'
        ]);

        Kategori::where('id', $id)->update($validateData);
        return redirect('kategori')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin-pegawai');
        $kategori = Kategori::findOrFail($id);


        //delete post
        $kategori->delete();

        //redirect to index
        return redirect('kategori');
    }
}
