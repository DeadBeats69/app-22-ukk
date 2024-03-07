<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function dashboardpegawai(){
        $buku = Buku::paginate(5);
        $kategori = Kategori::get();
        return view('dashboard.dashboard-pegawai', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'kategori' => $kategori
            
        ]);
    }

    public function dashboardpeminjam(){
        $buku = Buku::paginate(5);
        $kategori = Kategori::get();
        return view('dashboard.dashboard-peminjam', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'kategori' => $kategori
        ]);
    }
}
