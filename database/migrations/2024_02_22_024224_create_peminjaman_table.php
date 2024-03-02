<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum("status_pinjam",['dipinjam','dikembalikan']);
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('cascade');
            $table->integer('jml_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
