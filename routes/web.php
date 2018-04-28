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

Route::redirect('/', 'inicio');

Auth::routes();

Route::get('inicio', 'Web\PageController@vitis')->name('incio');

Route::get('gestion', 'Web\PageController@gestion')->name('gestion');

Route::get('hospedaje', 'Web\PageController@hospedaje')->name('hospedaje');

Route::get('comida', 'Web\PageController@comida')->name('comida');

Route::get('productos', 'Web\PageController@productos')->name('productos');
