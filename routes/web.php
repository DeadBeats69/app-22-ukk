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
use App\Http\Controllers\UlasController;
use App\Http\Controllers\WelcomeController;
// use App\Http\Controllers\PDFController;

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

Route::middleware(['guest'])->group(function(){
    //Login 
    Route::get('/login', [LoginController::class,  'login']);
    Route::post('/login', [LoginController::class, 'loginAction']);
    Route::post('/dashboard', [LoginController::class, 'loginAction']);
    
    //Register
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'registerAction']);
});


// logout
Route::get('/logout',[LoginController::class,'logout']);


//Buat nampilin dashboard
// Route::middleware(['guest'])->group(function(){
    Route::resource('/dashboard-admin', App\Http\Controllers\BukuController::class);
// });

// Route::middleware(['pegawai'])->group(function(){
    Route::resource('/dashboard-pegawai', App\Http\Controllers\BukuController::class);
// });

Route::get('/dashboard-peminjam',[DashboardController::class,'dashboardpeminjam']); 



//Buat pengguna
    Route::resource('/data-pengguna', App\Http\Controllers\UserController::class);

// //buat nampilin kategori

Route::resource('/kategori', App\Http\Controllers\KategoriController::class);

//buat nampilin koleksi
Route::resource('/koleksi', App\Http\Controllers\KoleksiController::class);
// Route::get('/koleksi',[LoginController::class,'logout']);

//peminjaman
    Route::resource('/peminjaman', App\Http\Controllers\PeminjamanController::class);

// // ulasan
Route::resource('/ulas', App\Http\Controllers\UlasController::class);
Route::get('/ulas/create/{id}', [UlasController::class, 'create'])->name('ulas.create');

// pdf
// Route::get('/peminjamanPDF', [PDFController::class, 'peminjamanPDF']);

Route::get('/cetak-peminjaman', [PeminjamanController::class, 'export'])->name('cetakpeminjaman');
// excel
