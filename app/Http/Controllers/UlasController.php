<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class UlasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulas = Ulasan::latest()->paginate(5);
        $buku = Buku::get();
        return view('dashboard.dashboard', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $ulas = Ulasan::get();
        $buku = Buku::get();
        $user = User::get();
        return view('form.form-ulas', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'ulas' => $ulas,
            'user' => $user,
            'id_buku'=> $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'ulasan' => 'nullable|max:255',
            'rating' => 'required',
        ]);

        if($validateData){
            Ulasan::create($validateData);
            
            return redirect()->route('dashboard-admin.show', $request->id_buku);
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
        $ulas = Ulasan::where('id',$id)->first();
        $buku = Buku::get();
        $user = User::get();
        $ulas1 = Ulasan::get();

        return view('edit.edit-ulas', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'ulas' => $ulas,
            'ulas1' => $ulas1,
            'user' => $user,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'ulasan' => 'nullable|max:255',
            'rating' => 'nullable',
        ]);
        $ulas = Ulasan::where('id',$id)->update($validateData);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ulas = Ulasan::FindOrFail($id);

        // delete
        $ulas->delete();

        // redirect
        return redirect('dashboard-admin');
    }
}
