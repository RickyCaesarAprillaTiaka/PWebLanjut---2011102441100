<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KabupatenKotaController;
use App\Http\Controllers\SatuanPendidikanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PesertaDidikController;
use App\Http\Controllers\RombelController;

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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World!!";
});

Route::get('/hii/{nama}/{gender}', [TestingController::class, 'index']);


Route::get('html', function () {
    return view('Hello');
});

Route::get('file1', [TestingController::class, 'file1'])->name('file1');

Route::get('file2', [TestingController::class, 'file2'])->name('file2');

Route::get('file3', [TestingController::class, 'file3'])->name('file3');

Route::get('file4', [TestingController::class, 'file4'])->name('file4');

Route::get('file5', [TestingController::class, 'file5'])->name('file5');


// GOGO

Route::middleware('auth')->group(function() {
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    Route::resource('dahsboard/user', UserController::class); //Controller CRUD (Create, Read, Update dan Delete) User

    Route::resource('dahsboard/kabupaten_kota', KabupatenKotaController::class); //Controller CRUD (Create, Read, Update dan Delete) Kabupaten Kota

    Route::resource('dashboard/satuan_pendidikan', SatuanPendidikanController::class); //Controller CRUD (Create, Read, Update dan Delete) Satuan Pendidikan

    Route::resource('dashboard/guru', GuruController::class); //Controller CRUD (Create, Read, Update dan Delete) Guru

    Route::resource('dashboard/rombel', RombelController::class); //Controller CRUD (Create, Read, Update dan Delete) Rombel
    
    Route::resource('dashboard/peserta_didik', PesertaDidikController::class); //Controller CRUD (Create, Read, Update dan Delete) Peserta Didik
});


// Login
Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::post('auth/login', [AuthController::class, 'loginProses'])->name('auth.login-proses');

Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('auth/register', [AuthController::class, 'registerProses'])->name('auth.register-proses');

Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');