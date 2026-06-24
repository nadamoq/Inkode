<?php

use App\Http\Controllers\Api\V1\AccessTokenController;
use App\Http\Controllers\Api\V1\PostController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');
Route::post('/auth/accessToken', [AccessTokenController::class, 'store'])->middleware('guest:sanctum');
Route::delete('/auth/accessToken/{token?}', [AccessTokenController::class, 'destroy'])->middleware('auth:sanctum');
