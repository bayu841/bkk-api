<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BK_ROLE\AlumniController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('signup', [AuthController::class, 'signup']);
        Route::post('signin', [AuthController::class, 'signin']);
        Route::post('signout', [AuthController::class, 'signout']);
        Route::post('verifikasi', [AuthController::class, 'verifikasi']);
    });

    Route::prefix('alumni')->group(function(){
        Route::get('get', [AlumniController::class, 'index']);
        Route::post('create', [AlumniController::class, 'store']);
        Route::put('update/{alumni}', [AlumniController::class, 'update']);
        Route::delete('delete/{alumni}', [AlumniController::class, 'destroy']);
    })->middleware('isBk');

    Route::prefix('admin')->group(function() {
    });
});
