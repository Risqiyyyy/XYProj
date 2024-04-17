<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
$controller_path = 'App\Http\Controllers';

Route::get('/', $controller_path . '\HomeController@index')->name('home');

Route::get('/produk', $controller_path . '\pages\ProdukController@index')->name('produk');

// Route::get('/game', $controller_path . '\GameController@index')->name('game');