<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
$controller_path = 'App\Http\Controllers';

Route::get('/', $controller_path . '\HomeController@index')->name('home');

Route::get('/produk', $controller_path . '\ProdukController@index')->name('produk');

Route::get('/auth', $controller_path . '\auth\LoginController@index')->name('auth');
Route::get('/registration', $controller_path . '\auth\RegisterController@index')->name('registration');
Route::post('/registration', $controller_path . '\auth\RegisterController@store')->name('registration.store');

// Route::get('/game', $controller_path . '\GameController@index')->name('game');