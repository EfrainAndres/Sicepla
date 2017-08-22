<?php

//Usuarios
Route::group(['prefix' => 'usuarios', 'middleware' => 'auth'], function()
{
    Route::get('/', '\App\Modulos\Usuario\Controllers\UserController@inicio')->name('usuarios');
    Route::get('/nuevo', '\App\Modulos\Usuario\Controllers\UserController@nuevo')->name('usuarios_nuevo');
    Route::get('/editar/{id}', '\App\Modulos\Usuario\Controllers\UserController@editar')->name('usuarios_editar');
    Route::get('/eliminar/{id}', '\App\Modulos\Usuario\Controllers\UserController@eliminar');
    Route::post('/', '\App\Modulos\Usuario\Controllers\UserController@crear');
    Route::put('/', '\App\Modulos\Usuario\Controllers\UserController@actualizar');
});

//Roles
Route::group(['prefix' => 'roles', 'middleware' => 'auth'], function()
{
    Route::get('/', '\App\Modulos\Acceso\Controllers\RolController@inicio')->name('roles');
    Route::get('/nuevo', '\App\Modulos\Acceso\Controllers\RolController@nuevo')->name('roles_nuevo');
    Route::get('/editar/{id}', '\App\Modulos\Acceso\Controllers\RolController@editar')->name('roles_editar');
    Route::get('/eliminar/{id}', '\App\Modulos\Acceso\Controllers\RolController@eliminar');
    Route::post('/', '\App\Modulos\Acceso\Controllers\RolController@crear');
    Route::put('/', '\App\Modulos\Acceso\Controllers\RolController@actualizar');
});

