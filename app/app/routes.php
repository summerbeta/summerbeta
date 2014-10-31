<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('socialsummer/', ['as' => 'socialsummer', 'uses' => 'UserController@socialsummer']);
Route::get('armario/{profile}/{id}', ['as' => 'closet', 'uses' => 'UserController@closet']);
Route::get('tienda', ['as' => 'shop', 'uses' => 'UserController@shop']);
Route::get('producto', ['as' => 'shop-item', 'uses' => 'UserController@shopItem']);
