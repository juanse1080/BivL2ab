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
Route::get('/', 'Login\LoginController')->name('root');
Route::post('/login', 'Login\LoginController@authenticate')->name('login');
Route::get('/logout', 'Login\LoginController@logout')->name('logout');
Route::get('/home', function () {
    return redirect('/account/'.session('usr')['pk_usr'].'/');
})->name('home');
Route::post('/account/education', 'UsrController@storeEducation')->name('storeEducation');
Route::get('/account/education/create', 'UsrController@createEducation')->name('createEducation');

Route::get('/account/password', 'UsrController@changePassword')->name('changePassword');
Route::put('/account/updatePassword', 'UsrController@updatePassword')->name('updatePassword');

Route::get('/productions/downloadpdf/{pk_production}', 'ProductionController@downloadPDF')->name('downloadPDF');

Route::resource('/account', 'UsrController');
Route::resource('/courses', 'CourseController');
Route::resource('/datasets', 'DatasetController');
Route::resource('/lines', 'LineController');
Route::resource('/projects', 'ProjectController');
Route::resource('/productions', 'ProductionController');
Route::resource('/news', 'NewController');
