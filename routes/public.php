<?php

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', '\App\Modulos\Home\Controllers\HomeController@inicio')->name('inicio');

    Route::get('configuracion', function()
    {
        return view('secciones.configuracion.inicio', []);
    })->name('configuracion');
});
