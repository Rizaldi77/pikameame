<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/index', 'App\Http\Controllers\IndexController@index')->name('index');
Route::get('/profil', 'App\Http\Controllers\ProfilController@profil')->name('profil');
Route::get('/product', 'App\Http\Controllers\ProductController@product')->name('product');
Route::get('/detail-product', 'App\Http\Controllers\DetailProductController@detailproduct')->name('detailproduct');
Route::get('/agen', 'App\Http\Controllers\AgenController@agen')->name('agen');
Route::get('/daftar-agen', 'App\Http\Controllers\DaftarAgenController@daftaragen')->name('daftaragen');
Route::get('/artikel', 'App\Http\Controllers\ArtikelController@artikel')->name('artikel');
Route::get('/detail-artikel', 'App\Http\Controllers\DetailArtikelController@detailartikel')->name('detailartikel');


Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::get('/dash', 'App\Http\Controllers\DashboardController@dashboard')->name('dash');