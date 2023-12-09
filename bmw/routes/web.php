<?php
// routes/web.php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/cars', [PageController::class, 'cars']);
// Diğer route'ları ekleyin
use App\Http\Controllers\CarController;

Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{car}/edit', [CarController::class, 'edit']);
Route::put('/cars/{car}', [CarController::class, 'update']);
Route::delete('/cars/{car}', [CarController::class, 'destroy']);
