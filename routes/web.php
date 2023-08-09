<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForecastingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::controller(PenjualanController::class)->prefix('penjualan')->group(function(){
    Route::get('','home')->name('penjualan');

    Route::get('tambah','tambah')->name('penjualan.tambah');
    Route::post('tambah','simpan')->name('penjualan.tambah.simpan');

    Route::get('edit/{id}','edit')->name('penjualan.edit');
    Route::post('edit/{id}','update')->name('penjualan.edit.update');

    Route::get('hapus/{id}','hapus')->name('penjualan.hapus');

    Route::get('grafik','grafik')->name('grafik');
});

Route::controller(ForecastingController::class)->prefix('forecasting')->group(function(){
    Route::get('','prediksi')->name('forecasting');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('simpan','simpan')->name('register.simpan');

    Route::get('login','login')->name('login');
    Route::post('masuk','masuk')->name('login.masuk');
    Route::post('logout','logout')->name('logout');

    Route::get('profil','profil')->name('profil');
});


