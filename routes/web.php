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

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        'title' => 'Buku',
        'active' => 'buku'
    ]);
});

Route::get('/dashboard-peminjam', function () {
    return view('dashboard.dashboard-peminjam', [
        'title' => 'Buku',
        'active' => 'buku'
    ]);
});

// buku
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

// ulas
Route::get('/form-ulas', function () {
    return view('form.form-ulas',[
        'title' => 'Form Ulasan',
        'active' => 'buku'
    ]);
});

Route::get('/edit-ulas', function () {
    return view('edit.edit-ulas',[
        'title' => 'Edit Ulasan',
        'active' => 'buku'
    ]);
});

Route::get('/edit-buku', function () {
    return view('edit.edit-buku',[
        'title' => 'Edit Buku',
        'active' => 'buku'
    ]);
});

// kategori
Route::get('/kategori', function () {
    return view('kategori',[
        'title' => 'Kategori',
        'active' => 'kategori'
    ]);
});

Route::get('/form-kategori', function () {
    return view('form.form-kategori',[
        'title' => 'Form Kategori',
        'active' => 'kategori'
    ]);
});

Route::get('/edit-kategori', function () {
    return view('edit.edit-kategori',[
        'title' => 'Edit Kategori',
        'active' => 'kategori'
    ]);
});

// data pengguna
Route::get('/data-pengguna', function () {
    return view('admin.data-pengguna',[
        'title' => 'Data Pengguna',
        'active' => 'data-pengguna'
    ]);
});

Route::get('/form-pengguna', function () {
    return view('form.form-pengguna',[
        'title' => 'Form Pengguna',
        'active' => 'data-pengguna'
    ]);
});
//  profile
Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile',
        'active' => 'buku'
    ]);
});

Route::get('/edit-profile', function () {
    return view('edit.edit-profile',[
        'title' => 'Edit Profile',
        'active' => 'buku'
    ]);
});

// peminjaman
Route::get('/peminjaman', function () {
    return view('peminjaman',[
        'title' => 'Peminjaman',
        'active' => 'peminjaman'
    ]);
});

Route::get('/form-peminjaman', function () {
    return view('form.form-peminjaman',[
        'title' => 'Form Peminjaman',
        'active' => 'peminjaman'
    ]);
});

Route::get('/edit-peminjaman', function () {
    return view('edit.edit-peminjaman',[
        'title' => 'Edit Peminjaman',
        'active' => 'peminjaman'
    ]);
});

// koleksi
Route::get('/koleksi', function () {
    return view('koleksi', [
        'title' => 'Koleksi',
        'active' => 'koleksi'
    ]);
});



