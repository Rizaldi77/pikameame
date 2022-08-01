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
Route::post('/daftar', 'App\Http\Controllers\DaftarAgenController@daftar')->name('daftar');
Route::get('/artikel', 'App\Http\Controllers\ArtikelController@artikel')->name('artikel');
Route::get('/detail-artikel', 'App\Http\Controllers\DetailArtikelController@detailartikel')->name('detailartikel');


// // Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/action-login', 'App\Http\Controllers\LoginController@Authenticate')->name('actionlogin');
Route::get('/dash', 'App\Http\Controllers\DashboardController@dashboard')->name('dash');
Auth::routes();

Route::get('/admin-produk', 'App\Http\Controllers\AdminController@dataproduk')->name('adminproduk');
Route::post('/tambah-produk', 'App\Http\Controllers\AdminController@tambahproduk')->name('tambahproduk');
Route::get('/admin-artikel', 'App\Http\Controllers\DashboardController@dashboard')->name('adminartikel');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
