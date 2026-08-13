<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KddiWebhookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/webhook/kddi/rcs', [KddiWebhookController::class, 'rcs']);
Route::post('/webhook/kddi/plus-message', [KddiWebhookController::class, 'plus_message']);
