<?php

use App\Http\Controllers\EmployeeController;
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

// route untuk tampilan pegawai
Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');

// route untuk tampilan tambah pegawai
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');

// route untuk fungsi tambah data pegawai(create)
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');
