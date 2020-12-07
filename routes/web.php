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
    return view('welcome');
});
Route::get('/webpage', function () {
    return view('webpage');
});
Route::get('/datamobil', function () {
    return view('datamobil');
});
Route::get('/datapelanggan', function () {
    return view('datapelanggan');

});
Route::get('/createmobil', function () {
    return view('createmobil');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');
// List Data
Route::get('/Data-pelanggan', 'DatapelangganController@index')->name('Data-pelanggan');
Route::get('/Data-peminjaman', 'DatapelangganController@join')->name('Data-peminjaman');
Route::get('/Data-mobil', 'DatamobilController@index')->name('Data-mobil');
// List Single Data

// Create New Data
Route::get('/create-mobil', 'DatamobilController@create')->name('create-mobil');
Route::get('/create-pelanggan', 'DatapelangganController@create')->name('create-pelanggan');
Route::post('/simpan-pelanggan', 'DatapelangganController@store')->name('simpan-pelanggan');
Route::post('/simpan-mobil', 'DatamobilController@store')->name('simpan-mobil');
Route::get('/edit-mobil/{id}', 'DatamobilController@edit')->name('edit-mobil');
Route::post('/update-mobil/{id}', 'DatamobilController@update')->name('update-mobil');
Route::get('/delete-mobil/{id}', 'DatamobilController@destroy')->name('delete-mobil');
Route::get('/edit-pelanggan/{id}', 'DatapelangganController@edit')->name('edit-pelanggan');
Route::post('/update-pelanggan/{id}', 'DatapelangganController@update')->name('update-pelanggan');
Route::get('/delete-pelanggan/{id}', 'DatapelangganController@destroy')->name('delete-pelanggan');
Route::get('/join', 'DatapelangganController@join');