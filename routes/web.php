<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\DetailBukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\WelcomeController;

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

// landing page
Route::get('/', [WelcomeController::class,  'welcome']);

//Buat nampilin Login 
Route::get('/login', [LoginController::class,  'login']);
Route::post('/login', [LoginController::class, 'loginAction']);
Route::post('/dashboard', [LoginController::class, 'loginAction']);

// logout
Route::get('/logout',[LoginController::class,'logout']);

//Buat nampilin Register

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'registerAction']);

//Buat nampilin dashboard

Route::resource('/dashboard', App\Http\Controllers\BukuController::class);
Route::get('/dashboard-admin',[DashboardController::class,'dashboardadmin']);
Route::get('/dashboard-pegawai',[DashboardController::class,'dashboardpegawai']);
Route::get('/dashboard-peminjam',[DashboardController::class,'dashboardpeminjam']); 



//Buat pengguna

Route::resource('/data-pengguna', App\Http\Controllers\UserController::class);

// //buat nampilin kategori

Route::resource('/kategori', App\Http\Controllers\KategoriController::class);

// //buat nampilin koleksi

// Route::get('/koleksi',[KoleksiController::class,'index']);

// Route::delete('/koleksi-delete',[KoleksiController::class,'destroy'])->name('koleksi.destroy');

// // peminjaman
// Route::resource('/peminjaman', App\Http\Controllers\PeminjamanController::class);

// // ulasan
// Route::resource('/ulas', App\Http\Controllers\UlasController::class);
