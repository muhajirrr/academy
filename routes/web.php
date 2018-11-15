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
    return view('home');
})->name('home');

Route::prefix('tugas1')->group(function() {
    Route::get('/nomor1', 'Tugas1Controller@nomor1')->name('nomor1');
    Route::post('/nomor2', 'Tugas1Controller@nomor2')->name('nomor2');
    Route::view('/nomor2', 'tugas1.nomor1');
    Route::get('/nomor3', 'Tugas1Controller@nomor3')->name('nomor3');
    Route::put('/nomor3', 'Tugas1Controller@nomor3_put')->name('nomor3_put');
});

Route::prefix('tugas3')->group(function() {
    Route::get('/', 'Tugas3Controller@index')->name('tugas3');
    Route::post('/show', 'Tugas3Controller@show')->name('tugas3.show');
});

Route::prefix('tugas4')->group(function() {
    Route::get('/', 'Tugas4Controller@create')->name('tugas4');
    Route::get('/show', 'Tugas4Controller@show')->name('tugas4.show');
    Route::post('/store', 'Tugas4Controller@store')->name('tugas4.store');
});