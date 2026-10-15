<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',[App\Http\Controllers\KamarService::class,'testAPI']);

Route::get('/getall',[App\Http\Controllers\KamarService::class,'getAll']);

Route::post('/add',[App\Http\Controllers\KamarService::class,'addkamar']);