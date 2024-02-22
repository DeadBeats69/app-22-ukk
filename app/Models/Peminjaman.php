<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'id_user',
        'tgl_pinjaman',
        'tgl_kembali',
        'status_pinjam',
        'id_buku',
        
    ];
}
