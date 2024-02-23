<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $peminjaman = Peminjaman::get();
        $data = [
            'title' => 'Peminjaman',
            'date' => date('m/d/Y'),
            'peminjaman' => $peminjaman
        ]; 
            
        // $pdf = PDF::loadView('peminjamanPDF', $data);
     
        // return $pdf->download('peminjaman.pdf');
    }
}
