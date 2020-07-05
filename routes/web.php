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

Route::get('/', 'ArticleController@gambar');//menampilkan tabel berisi data artikel-artikel
Route::get('/artikel', 'ArticleController@index');//menampilkan tabel berisi data artikel-artikel
Route::get('/artikel/create', 'ArticleController@create');//menampilkan form untuk membuat artikel baru
Route::post('/artikel', 'ArticleController@store');//menyimpan artikel baru
Route::get('/artikel/{id}', 'ArticleController@show');//menampilkan halaman detil (show) untuk artikel dengan id tertentu
Route::get('/artikel/{id}/edit', 'ArticleController@edit');//menampilkan halaman form edit untuk artikel dengan id tertentu
Route::patch('/artikel/{id}', 'ArticleController@update');//menyimpan data dari form edit
Route::delete('/artikel/{id}', 'ArticleController@destroy');//menghapus data dengan id tertentu