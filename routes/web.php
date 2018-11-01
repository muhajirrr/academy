<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::view('/example', 'example');

Route::prefix('tugas1')->group(function() {
    Route::get('/nomor1', 'Tugas1Controller@nomor1')->name('nomor1');
    Route::post('/nomor2', 'Tugas1Controller@nomor2')->name('nomor2');
    Route::get('/nomor3', 'Tugas1Controller@nomor3')->name('nomor3');
    Route::put('/nomor3', 'Tugas1Controller@nomor3_put')->name('nomor3_put');
});