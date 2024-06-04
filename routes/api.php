<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiWebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post('/register', [ApiAuthController::class, 'register']);
    Route::post('/verification', [ApiAuthController::class, 'verification']);
});

Route::get('/syarat-ketentuan', [ApiWebController::class, 'getSyaratKetentuan']);
