<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('queue', 'SandboxController@getQueue');
Route::get('failed', 'SandboxController@getFailingQueue');

Route::group(['namespace' => 'Institucional', 'prefix' => 'institucional'], function () {

    Route::get('sobre', ['as' => 'sobre', 'uses' => 'InstitucionalController@getSobre']);
    Route::get('contato', ['as' => 'contato', 'uses' => 'InstitucionalController@getContato']);
    Route::post('contato', ['as' => 'contato.send', 'uses' => 'InstitucionalController@postContato']);

});

Route::resource('volunteer', 'VolunteersController');
Route::resource('cause', 'CausesController');
Route::resource('institution', 'InstitutionsController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
