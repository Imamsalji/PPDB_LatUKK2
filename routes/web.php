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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('pendaftar', 'UserController@daftar')->name('daftar');
    Route::post('daftar', 'UserController@pendaftaran')->name('pendaftaran');
    Route::get('peserta', 'UserController@peserta')->name('peserta');
    Route::get('show/{id}', 'UserController@show')->name('show');
    Route::get('edit/{id}', 'UserController@edit')->name('edit');
    Route::post('update/{id}', 'UserController@update')->name('update');

    Route::prefix('/admin')->group(function () {
        Route::get('peserta', 'AdminController@peserta')->name('peserta');
        Route::get('terima', 'AdminController@terima')->name('terima');
        Route::get('proses', 'AdminController@proses')->name('proses');
        Route::get('tolak', 'AdminController@tolak')->name('tolak');
        Route::get('diterima/{id}', 'AdminController@diterima')->name('diterima');
        Route::get('ditolak/{id}', 'AdminController@ditolak')->name('ditolak');

    });



});

Route::get('/home', 'HomeController@index')->name('home');
