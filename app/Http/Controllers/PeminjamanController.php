<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use Carbon\Carbon;
use App\Models\Buku;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $peminjaman = Peminjaman::get()->sortBy('created_at', SORT_REGULAR, true);
        $peminjaman_user = Peminjaman::where('id_user', auth()->user()->id)->get()->sortBy('created_at', SORT_REGULAR, true);
        $user = User::get();
        return view('peminjaman', [
            'title' => 'Peminjaman',
            'active' => 'peminjaman',
            'peminjaman' => $peminjaman,
            'peminjaman_user' => $peminjaman_user,
            'user' => $user
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $this->authorize('admin-pegawai');
        $buku = Buku::get();
        $user = User::where('role', 'peminjam')->get();
        
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
        $this->authorize('admin-pegawai');
        $validateData = $request->validate([
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status_pinjam' => 'required',
            'id_user' => 'required',
            'id_buku' => 'required',
            'jml_pinjam' => 'required',
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
        $this->authorize('admin-pegawai');
        $peminjaman = Peminjaman::where('id', $id)->first();
        $bukuList = Buku::get();
        $user = User::where('role', 'peminjam')->get();

       
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
        $this->authorize('admin-pegawai');
        $validateData=$request->validate([
            'id_buku' => 'nullable',
            'tgl_pinjam' => 'nullable',
            'tgl_kembali' => 'nullable',
            'status_pinjam' => 'nullable',
            'id_user' => 'nullable',
            'jml_pinjam' => 'nullable',
            ]);
        
            $peminjaman = Peminjaman::where('id', $id)->update($validateData);
            return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin-pegawai');
        $peminjaman = Peminjaman::findOrFail($id);


        //delete post
        $peminjaman->delete();

        //redirect to index
        return redirect('peminjaman');
    }

    public function export() 
    {
        return Excel::download(new ExcelExport, 'Peminjaman.xlsx');
    }


    
}
