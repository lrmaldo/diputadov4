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


//frontend de la pagina 
Route::get('/','FrontController@index');
Route::get('/contacto','FrontController@contacto');

//controlador de usuarios
Route::resource('usuario','UsuarioController');
Route::post('/usuario/store','UsuarioController@store');

//Route::post('/usuario/update','UsuarioController@update');
//Router::post('/usuario/edit','UsuarioController@edit');
//controlador de dashboard
Route::resource('dashboard','DashboardController');
Route::get("/login",'DashboardController@login');


//Route::post('dashboard/entrar', 'DashboardController@entrar');



//controlador de mail
//Route::resource('mail','MailController');

//EMAIL configuracion de envio de formulario contacto
Route::post("/mail/store","MailController@store");
/*
Route::get('/', 'WelcomeController@index');

*/
Route::get('login', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
