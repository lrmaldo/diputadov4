<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post get put delete
*/

Route::get('controlador','PruebaController@index');
Route::get('controlador/{nombre}','PruebaController@nombre');
Route::get('prueba',function(){
	return "hola router";
});

//frontend de la pagina 
Route::get('/','FrontController@index');
Route::get('/contacto','FrontController@contacto');

//controlador de usuarios
Route::resource('usuario','UsuarioController');

Route::resource('dashboard','DashboardController');
Route::get("/login",'DashboardController@login');
//Route::post('dashboard/entrar', 'DashboardController@entrar');



/*
Route::get('/', 'WelcomeController@index');

*/
Route::get('login', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
