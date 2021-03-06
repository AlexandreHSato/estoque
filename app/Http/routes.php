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
/*

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/


Route::get("/",function()
{
	return "<h1>Primeira lógica com Laravel</h1>";
});

Route::get("/home",function()
{
	return "<h1>Outra lógica com Laravel</h1>";
});

Route::get("/produtos","ProdutoController@lista");
//Route::get("/produtos/mostra/{id}","ProdutoController@mostra");
Route::get("/produtos/mostra/","ProdutoController@mostra");

Route::get('laravel-version', function() {
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
});