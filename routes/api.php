<?php

declare(strict_types=1);

use App\Application\Http\Middleware\VerifyJWTMiddleware;
use Application\Http\Controller\Admin\API\V1\User\UserShowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/user/{user}', UserShowController::class);
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
});