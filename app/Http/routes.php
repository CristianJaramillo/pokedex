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

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'HomeController@show'
]);

Route::group(['prefix' => 'api'], function() {

	Route::get('pokemons', [
		'as' => 'pokemons-api',
		'uses' => 'PokemonAPIController@all'
	]);

	Route::get('pokemons/{id}', [
		'as' => 'pokemons-find-api',
		'uses' => 'PokemonAPIController@find'
	]);

});