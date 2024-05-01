<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
$controller_path = 'App\Http\Controllers';

Route::get('/', $controller_path . '\HomeController@index')->name('home');
Route::post('/login', $controller_path . '\HomeController@login')->name('login');
Route::post('/register', $controller_path . '\HomeController@register')->name('register');

Route::get('/produk', $controller_path . '\pages\ProdukController@index')->name('produk');
Route::get('/netflix', $controller_path . '\pages\NetflixController@index')->name('netflix');

Route::get('/redirect/{id}', $controller_path . '\RedirectController@redirectToRoute')->name('redirect');

// Route::get('/game', $controller_path . '\GameController@index')->name('game');