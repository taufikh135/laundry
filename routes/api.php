<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiCategoryController;
use App\Http\Controllers\ApiContactController;
use App\Http\Controllers\ApiInfoController;
use App\Http\Controllers\ApiJasaController;
use App\Http\Controllers\ApiOrderController;
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\ApiServiceController;
use App\Http\Controllers\ApiSocialMediaController;
use App\Http\Controllers\ApiTypeController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiWebController;
use App\Http\Middleware\JwtAuthMiddleware;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post('/register', [ApiAuthController::class, 'register']);
    Route::post('/verification', [ApiAuthController::class, 'verification']);
    Route::post('/forgot-password', [ApiAuthController::class, 'forgotPassword']);
    Route::post('/login', [ApiAuthController::class, 'login']);
});

Route::middleware([JwtAuthMiddleware::class])->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/current', [ApiUserController::class, 'current']);
        Route::put('/current', [ApiUserController::class, 'updateCurrent']);
    });
});

Route::prefix('/categories')->group(function () {
    Route::get('', [ApiCategoryController::class, 'getAll']);
    Route::get('/{code}', [ApiCategoryController::class, 'get']);
});

Route::prefix('/types')->group(function () {
    Route::get('', [ApiTypeController::class, 'getAll']);
    Route::get('/{code}', [ApiTypeController::class, 'getOne']);
});

Route::prefix('/products')->group(function () {
    Route::get('', [ApiProductController::class, 'getAll']);
    Route::get('/{code}', [ApiProductController::class, 'getOne']);
});

Route::prefix('/services')->group(function () {
    Route::get('', [ApiServiceController::class, 'getAll']);
    Route::get('/{code}', [ApiServiceController::class, 'getOne']);
});

Route::prefix('/contacts')->group(function () {
    Route::get('', [ApiContactController::class, 'getAll']);
    Route::get('/{id}', [ApiContactController::class, 'get']);
});

Route::prefix('/infos')->group(function () {
    Route::get('', [ApiInfoController::class, 'getAll']);
    Route::get('/{id}', [ApiInfoController::class, 'getOne']);
});

Route::prefix('/jasas')->group(function () {
    Route::get('', [ApiJasaController::class, 'getAll']);
    Route::get('/{id}', [ApiJasaController::class, 'getOne']);
});

Route::prefix('/orders')->group(function () {
    Route::post('', [ApiOrderController::class, 'order']);
    Route::get('/{id}', [ApiOrderController::class, 'getOne']);
    Route::get('', [ApiOrderController::class, 'getAll']);
});

Route::prefix('/payments')->group(function () {
    Route::get('', [Payment::class, 'getAll']);
    Route::get('/{id}', [Payment::class, 'getOne']);
});

Route::get('/social-media', [ApiSocialMediaController::class, 'getAll']);

Route::get('/syarat-ketentuan', [ApiWebController::class, 'getSyaratKetentuan']);
