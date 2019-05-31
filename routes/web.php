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

/* RUTAS DEL LOGIN*/
Route::get('/', 'Login\LoginController')->name('home');
Route::post('/login', 'Login\LoginController@authenticate')->name('login');
Route::get('/logout', 'Login\LoginController@logout')->name('logout');

Route::resource('/account', 'UsrController');
Route::resource('/courses', 'CourseController');
Route::resource('/datasets', 'DatasetController');
Route::resource('/lines', 'LineController');
