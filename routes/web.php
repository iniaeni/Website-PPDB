<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('isGuest')->group(function(){
    Route::get('/log-in', [PpdbController::class, 'login'])->name('login');
    Route::post('/login', [PpdbController::class, 'auth'])->name('login.auth');
    
});




//untuk admin
Route::middleware(['isLogin', 'CekRole:admin'])->prefix('/ppdb')->name('ppdb.')->group(function() {
    Route::get('/verifikasi', [PpdbController::class, 'verifikasi'])->name('verifikasi');
    Route::get('/detail', [PpdbController::class, 'detail'])->name('detail');
    Route::get('/buktiBayar/{id}', [PpdbController::class, 'buktiBayar'])->name('bukti-bayar');
    Route::get('/validasi', [PpdbController::class, 'validasi'])->name('validasi');
    Route::patch('/validasi/{id}', [PpdbController::class, 'hasilValidasi'])->name('hasil-validasi');
    Route::patch('/tolak/{id}', [PpdbController::class, 'tolak'])->name('tolak-validasi');
    Route::get('/contact', [PpdbController::class, 'contact'])->name('contact');
});

//untuk user
Route::middleware('isLogin', 'CekRole:user')->prefix('/ppdb')->name('ppdb.')->group(function(){ 
    Route::get('/pembayaran', [PpdbController::class, 'pembayaran'])->name('pembayaran');
    Route::post('/pembayaran', [PpdbController::class, 'create'])->name('create-pembayaran');
    Route::get('/edit/{id}', [PpdbController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [PpdbController::class, 'update'])->name('update');
    Route::get('/profile', [PpdbController::class, 'profile'])->name('profile');
   
    
    
});

Route::prefix('/ppdb')->name('ppdb.')->group(function(){ 
    Route::get('/buktidaftar', [PpdbController::class, 'createPDF'])->name('create-PDF');
    Route::post('/store', [PpdbController::class, 'store'])->name('store'); 
});

Route::get('/', [PpdbController::class, 'index'])->name('index');
Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');
Route::get('/register', [PpdbController::class, 'register'])->name('register');
Route::get('/error', [PpdbController::class, 'error'])->name('error');
Route::post('/send-message', [PpdbController::class, 'sendEmail'])->name('contact.send'); 


//untuk admin & user
Route::middleware('isLogin', 'CekRole:admin,user')->prefix('/ppdb')->name('ppdb.')->group(function(){ 
    Route::get('/student', [PpdbController::class, 'student'])->name('student');
   
    
    
});





