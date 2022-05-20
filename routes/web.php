<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/surat', [App\Http\Controllers\SuratController::class, 'index']);
Route::get('/surat-tambah', [App\Http\Controllers\SuratController::class, 'tambahSurat']);
Route::post('/simpan-surat', [App\Http\Controllers\SuratController::class, 'simpan']);
Route::get('/edit-surat/{id}', [App\Http\Controllers\SuratController::class, 'editSurat']);
Route::put('/update-surat/{id}', [App\Http\Controllers\SuratController::class, 'update']);
Route::get('/hapus-surat/{id}', [App\Http\Controllers\SuratController::class, 'delete']);

