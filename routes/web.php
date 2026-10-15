<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rute ke Select
Route::get('/select',[App\Http\Controllers\KamarController::class, 'getAll']);

//rute ke form insert
Route::get('/insert', function () {
    return view('TambahKamar');
});

//rute ke proses insert
Route::post('/prosesinsert',[App\Http\Controllers\KamarController::class, 'addKamar']);

//rute ke proses delete
Route::get('/delete/{id}',[App\Http\Controllers\KamarController::class, 'deleteKamar']);

//rute ke form edit
Route::get('/edit/{id}',[App\Http\Controllers\KamarController::class, 'editKamar']);

//rute ke proses update
Route::post('/prosesupdate/{id}',[App\Http\Controllers\KamarController::class, 'updateKamar']);