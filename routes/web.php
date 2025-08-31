<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
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
    return view('home');
});

Route::get('/home', [RouteController::class, 'index'])->name('home');
Route::get('/daftarlowongan', [RouteController::class, 'daftarlowongan'])->name('daftarlowongan');
Route::get('/detaillowongan', [RouteController::class, 'detaillowongan'])->name('detaillowongan');
Route::get('/treacer', [RouteController::class, 'treacer'])->name('treacer');
Route::get('/survei', [RouteController::class, 'survei'])->name('survei');
Route::get('/form', [RouteController::class, 'form'])->name('form');
