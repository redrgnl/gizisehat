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
Route::group(['middleware' => 'usersession'], function () {
//Route Admin : Manajemen penyakit
Route::get('/admin/halaman-dashboard', 'AdminController@index'); //halaman dashboard
Route::get('/admin/halaman-manajemen-penyakit', 'AdminController@penyakit'); //halaman manajemen penyakit

Route::get('/admin/halaman-tambah-penyakit', 'AdminController@tambahpenyakit'); //halaman tambah penyakit
Route::post('/admin/tambah-data-penyakit', 'AdminController@addpenyakit'); //insert data Penyakit
Route::get('/admin/halaman-edit-penyakit/{id}', 'AdminController@editpenyakit'); //halaman edit penyakit
Route::post('/admin/update-data-penyakit', 'AdminController@updatepenyakit'); //update penyakit
Route::get('/admin/delete-data-penyakit/{id}', 'AdminController@deletepenyakit'); //delete penyakit
});

//Route Guest 
Route::get('/', 'GuestController@index');
Route::post('/getPenyakit', 'GuestController@getPenyakit')->name('getPenyakit');
Route::post('/searchpenyakit', 'GuestController@searchpenyakit');

//Route Login
Route::get('/login-backoffice', 'AdminController@login')->name('login');
Route::post('/post-login', 'AdminController@postLogin');
Route::get('/logout', 'AdminController@logout');