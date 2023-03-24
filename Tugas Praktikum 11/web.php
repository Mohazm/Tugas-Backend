<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DataMahasantriController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

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
Route::get('/salam', function () {
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
Route::get('/aboutus', [HomeController::class, 'aboutus']);

//Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);

//
Route::resource('pegawai', PegawaiController::class);

//Pegawai
Route::get('/datamahasantri', [DataMahasantriController::class, 'index']);
Route::get('/jurusan', [DataMahasantriController::class, 'jurusan']);

//Materi Ke-8 ( UTS)
Route::resource('datamahasantri', DataMahasantriController::class);


//Tugas Materi Ke-9
Route::resources([
    'buku' => BukuController::class,
    'kategori' => KategoriController::class,
    'penerbit' => PenerbitController::class,
    'pengarang' => PengarangController::class,
]);


Route::get('bukupdf',[BukuController::class,'bukuPDF']);
Route::get('bukucsv',[BukuController::class,'bukucsv']);

