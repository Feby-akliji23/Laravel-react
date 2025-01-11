<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\BencanaController; 

Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:5,1');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    // Endpoint untuk Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);

    // Endpoint untuk Bencana
    Route::get('/bencana', [BencanaController::class, 'index']);
    Route::post('/bencana', [BencanaController::class, 'store']);
    Route::put('/bencana/{bencana}', [BencanaController::class, 'update']);
    Route::delete('/bencana/{bencana}', [BencanaController::class, 'destroy']);
    
});
