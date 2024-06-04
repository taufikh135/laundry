<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobileAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->group(function () {
    Route::prefix('/verification')->group(function () {
        Route::get('/{token}', [AuthController::class, 'verificationValidate']);
    });
});

Route::get('/test', function () {
    return response()->view('templates.auth', [
        'title' => 'Test',
        'message' => 'Nomor Kamu berhasil diverifikasi, Silahkan login.'
    ]);
});
