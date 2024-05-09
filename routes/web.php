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
Route::get('/prod/{nama_produk}', $controller_path . '\pages\ProdukController@produkOne')->name('produkOne');

Route::get('/netflix', $controller_path . '\pages\NetflixController@index')->name('netflix');
Route::get('/mobile-legends', $controller_path . '\pages\MobileLegendsController@index')->name('mobile-legends');

Route::get('/redirect/{id}', $controller_path . '\RedirectController@redirectToRoute')->name('redirect');

// admin
Route::get('/xyars', $controller_path . '\admin\DashboardController@index')->name('xyars');
Route::get('/xyars/user', $controller_path . '\admin\UserController@index')->name('xyars.user');
// kategori
Route::get('/xyars/kategori', $controller_path . '\admin\KategoriProdukController@index')->name('xyars.kategori');
Route::post('/xyars/kategori/add', $controller_path . '\admin\KategoriProdukController@add')->name('kategori.add');
Route::delete('/xyars/kategori/{id}', $controller_path . '\admin\KategoriProdukController@delete')->name('kategori.delete');

Route::get('/auth/login', $controller_path . '\admin\LoginController@index')->name('xyarslogin');

// Route::get('/game', $controller_path . '\GameController@index')->name('game');