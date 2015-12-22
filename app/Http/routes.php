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

// Route of Files
Route::get('files', ['as' => 'listado.file', 'uses' => 'FilesController@index']);
Route::get('files/new', ['as' => 'new.file', 'uses' => 'FilesController@create'] );
Route::post('files/create', ['as' => 'create.file', 'uses' => 'FilesController@store'] );
Route::put('files/update/{id}', ['as' => 'update.file', 'uses' => 'FilesController@update'] );
Route::get('files/edit/{id}', ['as' => 'edit.file', 'uses' => 'FilesController@edit'] );
Route::delete('files/delete/{id}', ['as' => 'delete.file', 'uses' => 'FilesController@destroy'] );

//Route of Bags
Route::get('files/bag/new', ['as' => 'new.bag', 'uses' => 'BagController@create']);
Route::post('files/bag/create', ['as' => 'create.bag', 'uses' => 'BagController@store']);

//Route of Lockers
Route::get('files/locker/new', ['as' => 'new.locker', 'uses' => 'LockerController@create']);
Route::post('files/locker/create', ['as' => 'create.locker', 'uses' => 'LockerController@store']);


//Route of Directory
Route::get('directory', ['as' => 'view.directory', 'uses' => 'DirectoryController@index']);
Route::get('directory/create', ['as' => 'create.directory', 'uses' => 'DirectoryController@create']);
Route::post('directory/create', ['as' => 'create.register', 'uses' => 'DirectoryController@store']);


//Route of organization
Route::get('organization', ['as' => 'view.organization', 'uses' => 'OrganizationController@index']);
Route::post('organization/create', ['as' => 'create.organization', 'uses' => 'OrganizationController@store']);
Route::get('organization/edit/{id}', ['as' => 'edit.organization', 'uses' => 'OrganizationController@edit']);
Route::put('organization/update/{id}', ['as' => 'update.organization', 'uses' => 'OrganizationController@update']);
Route::delete('organization/delete/{id}', ['as' => 'delete.organization', 'uses' => 'OrganizationController@destroy'] );

//Route of institution
Route::get('institution', ['as' => 'view.institution', 'uses' => 'InstitutionController@index']);
Route::post('institution/create', ['as' => 'create.institution', 'uses' => 'InstitutionController@store']);
Route::get('institution/edit/{id}', ['as' => 'edit.institution', 'uses' => 'InstitutionController@edit']);
Route::put('institution/update/{id}', ['as' => 'update.institution', 'uses' => 'InstitutionController@update']);
Route::delete('institution/delete/{id}', ['as' => 'delete.institution', 'uses' => 'InstitutionController@destroy'] );
