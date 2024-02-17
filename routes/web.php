<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        'title' => 'Buku',
        'active' => 'buku'
    ]);
});


Route::get('/detail-buku', function () {
    return view('detail-buku',[
        'title' => 'Detail Buku',
        'active' => 'buku'
    ]);
});

Route::get('/form-buku', function () {
    return view('form.form-buku',[
        'title' => 'Form Buku',
        'active' => 'buku'
    ]);
});

Route::get('/form-ulas', function () {
    return view('form.form-ulas',[
        'title' => 'Ulasan',
        'active' => 'buku'
    ]);
});

Route::get('/kategori', function () {
    return view('kategori',[
        'title' => 'Kategori',
        'active' => 'kategori'
    ]);
});

Route::get('/form-kategori', function () {
    return view('form.form-kategori');
});

Route::get('/data-pengguna', function () {
    return view('admin.data-pengguna');
});

Route::get('/form-pengguna', function () {
    return view('form.form-pengguna');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/form-peminjaman', function () {
    return view('form.form-peminjaman');
});

Route::get('/koleksi', function () {
    return view('koleksi', [
        'title' => 'Buku',
        'active' => 'buku'
    ]);
});



