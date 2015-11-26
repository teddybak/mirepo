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

Route::get('/',function () {
    return view('welcome');
});

Route::get('prices','AssetsController@prices'); 

Route::get('shares','AssetsController@shares');
Route::get('invest','AssetsController@invest');
Route::get('rent','AssetsController@rent');
Route::get('sold','AssetsController@sold'); 


Route::get('clean/{idapp}', [
    'middleware' => ['auth'],
    'uses' => 'PrivateController@destroy',
    'roles' => ['manager']
]);

Route::get('gmapsearch','AssetsController@gmapsearch');
Route::post('gmapsearch','AssetsController@gmapsearchresult'); 

Route::get('contar/{area}','admincontroller@contar');

Route::get('principal','AssetsController@index');
Route::post('procesar','AssetsController@store');

Route::post('search','AssetsController@search');

//esta ruta procesa la peticion individual cuando se realizar el listado 
Route::get('show/{id}','AssetsController@show');
//private controller

Route::get ('home','PrivateController@index');
Route::post('postpro','PrivateController@store');
Route::get('booking/{idasset}/{iduser}','PrivateController@booking');


Route::get('panel', [
    'middleware' => ['auth'],
    'uses' => 'AdminController@index',
    'roles' => ['administrator']
]);

Route::get('management', [
    'middleware' => ['auth'],
    'uses' => 'AdminController@management',
    'roles' => ['administrator']
]);


Route::get('users', [
    'middleware' => ['auth' ],
    'uses' => 'AdminController@users',
    'roles' => ['administrator']
]); 


Route::post('storeasset', [
    'middleware' => ['auth', 'manager'],
    'uses' => 'AdminController@storeasset',
    'roles' => ['administrator', 'manager']
]); 


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/email', 'PasswordController@getEmail');
Route::post('password/email', 'PasswordController@postEmail');
Route::get('password/reset/{token}', 'PasswordController@getReset');
Route::post('password/reset', 'PasswordController@postReset');   