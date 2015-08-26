<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view ('auth.login');
});

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('registro', 'Auth\AuthController@postRegister');



Route::get('files', ['as' => 'listado.file', 'uses' => 'FilesController@index']);

Route::get('files/new', ['as' => 'new.file', 'uses' => 'FilesController@create'] );

Route::post('files/create', ['as' => 'create.file', 'uses' => 'FilesController@store'] );

Route::put('files/update/{id}', ['as' => 'update.file', 'uses' => 'FilesController@update'] );

Route::get('files/edit/{id}', ['as' => 'edit.file', 'uses' => 'FilesController@edit'] );



Route::delete('files/delete/{id}', ['as' => 'delete.file', 'uses' => 'FilesController@destroy'] );




