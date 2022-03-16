<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

    return view('listBuku');
});

Route::get('/perpustakaan',[BukuController::class,'index'])->name('perpustakaan');
Route::get('/tambahdata',[BukuController::class,'tambahdata'])
->name('tambahdata');
Route::post('/insertdata',[BukuController::class,'insertdata'])->name('insertdata');

Route::get('/edit/(id)',[BukuController::class,'edit'])->name('edit');
Route::post('/updatedata/(id)',[BukuController::class,'updatedata'])->name('updatedata');

Route::patch('/delete/(id)',[BukuController::class,'delete'])->name('delete');