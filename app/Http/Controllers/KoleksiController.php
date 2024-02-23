<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Koleksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Buku;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koleksi = Koleksi::paginate(5);
        $user = User::get();
        $buku = Buku::get();
        return view('koleksi',compact('koleksi'), [
            'title' => 'Register',
            'active' => 'koleksi',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $koleksi = Koleksi::findOrFail($id);


        //delete post
        $koleksi->delete();

        //redirect to index
        return redirect('koleksi');
    }
}
