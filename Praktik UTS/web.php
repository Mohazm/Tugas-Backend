<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DataMahasantriController;


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

//url salam 
Route::get('/salam',function(){
    return "Assalamu'alaikum selamat Pagi Dunia";
});

//Route/Mahasantri
Route::get('/kabar', function () {
    return view('latihan.kondisi');
});

Route::get( 
    '/mahasiswa', 
    [MahasiswaController::class, 'dataMahasiswa'] 
    );
Auth::routes();

//Home 
Route::get('/home', [HomeController::class, 'index'])->name('home');

//about
Route::get('/aboutus',[HomeController::class, 'aboutus']);

//Pegawai
Route::get('/pegawai',[PegawaiController::class, 'index'] );

//
Route::resource('pegawai', PegawaiController::class);

//Pegawai
Route::get('/datamahasantri',[DataMahasantriController::class, 'index'] );
Route::get('/jurusan',[DataMahasantriController::class, 'jurusan'] );

//
Route::resource('datamahasantri', DataMahasantriController::class);