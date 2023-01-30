<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('skills', App\Http\Controllers\API\SkillsController::class)
    ->except(['create', 'edit']);

Route::resource('categories', App\Http\Controllers\API\CategoryController::class)
    ->except(['create', 'edit']);

Route::resource('orders', App\Http\Controllers\API\OrderController::class)
    ->except(['create', 'edit']);

Route::resource('messages', App\Http\Controllers\API\MessageController::class)
    ->except(['create', 'edit']);

Route::resource('reviews', App\Http\Controllers\API\ReviewAPIController::class)
    ->except(['create', 'edit']);
