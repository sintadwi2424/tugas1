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

Route::get('/', 'SiswaController@index');
Route::post('/siswa/import_excel', 'SiswaController@import');


Route::get('/tampildata', 'SiswaController@tampildata')->name('tampildata');
