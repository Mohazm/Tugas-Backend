<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

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

