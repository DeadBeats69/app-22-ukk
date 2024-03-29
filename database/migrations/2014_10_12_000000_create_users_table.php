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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('username',255);
            $table->enum("jk",['L','P']);
            $table->date('tgl_lahir');
            $table->string('email')->unique();
            $table->string('telepon',13);
            $table->string('alamat');
            $table->enum("role",['admin','pegawai','peminjam']);
            $table->string('gambar',255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
