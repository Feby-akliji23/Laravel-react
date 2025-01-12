<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\BencanaController; 




// Public routes
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:5,1');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // Endpoint untuk Bencana
    Route::get('/bencana', [BencanaController::class, 'index']);
    Route::post('/bencana', [BencanaController::class, 'store']);
    Route::put('/bencana/{bencana}', [BencanaController::class, 'update']);
    Route::delete('/bencana/{bencana}', [BencanaController::class, 'destroy']);
    
});

// Swagger UI route (optional)
Route::get('/api/documentation', function () {return view('l5-swagger::index');});