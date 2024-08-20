<?php

declare(strict_types=1);

use App\Http\Middleware\VerifyJWTMiddleware;
use Illuminate\Support\Facades\Route;


Route::middleware([VerifyJWTMiddleware::class])->group(function () {
    Route::get('/user', function () {
        return "teste";
    });
});