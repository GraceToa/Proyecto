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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('animals', 'Animal');
Route::model('usuarios', 'Usuario');
Route::model('apadrinas', 'Apadrina');


Route::resource('animals', 'AnimalsController');
Route::resource('animals.usuarios', 'UsuariosController'); //usuarios que han apadrinado a un animal
Route::resource('apadrinas', 'ApadrinasController');


Route::bind('usuarios', function($value, $route) {
	return App\Usuario::whereSlug($value)->first();
});
Route::bind('animals', function($value, $route) {
	return App\Animal::whereSlug($value)->first();

});

Route::bind('apadrinas', function($value, $route) {
	return App\Apadrina::whereSlug($value)->first();
});

