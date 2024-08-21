<?php

declare(strict_types=1);

use App\Application\Http\Controller\User\UserShowController;
use App\Application\Http\Controller\User\UserCreateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    //--------------------------------Users----------------------------------//
    Route::get('/user/{user}', UserShowController::class);
    Route::post('/user', UserCreateController::class);
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only(['email', 'password']);

    if (!$token = Auth::attempt($credentials)) {
        return response()->json('Unauthorized', 401);
    }
    
    return response()->json([
        'data' => [
            'token' => $token,
            'token_type' => 'bearer',
            'expire_at'  => config('jwt.ttl') * 60
        ]
    ]);
})->name('login');

Route::get('/login', function (Request $request) {
    return view('welcome'); // Não vou fazer uma página de login pq não é o objetivo do repositório :)
})->name('login');