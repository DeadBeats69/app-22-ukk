<?php

namespace App\Http\Controllers;

use App\Models\Buku;
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
        return view('dashboard.dashboard-pegawai', [
            'title' => 'Buku',
            'active' => 'buku',
        ]);
    }

    public function dashboardpeminjam(){
        $buku = Buku::paginate(5);
        return view('dashboard.dashboard-peminjam', [
            'title' => 'Buku',
            'active' => 'buku',
        ]);
    }
}
