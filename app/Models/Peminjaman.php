<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable=[
        'id_user',
        'tgl_pinjam',
        'tgl_kembali',
        'status_pinjam',
        'id_buku',
        'jml_pinjam'

    ];

    /**
     * Get the user that owns the Peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    /**
     * Get the user that owns the Peminjaman
     *
     * @return \Illuminate\Database\Eloquid_user\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
