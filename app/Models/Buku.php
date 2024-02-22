<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable=[
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'deskripsi',
        'cover',
        'stok',
        'id_kategori',
    ];

    // /**
    //  * Get the kategori that owns the Buku
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    // /**
    //  * Get all of the comments for the Buku
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'id_buku', 'id');
    }

    // /**
    //  * Get all of the comments for the Buku
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    public function ulas(): HasMany
    {
        return $this->hasMany(Ulasan::class, 'id_buku', 'id');
    }
}