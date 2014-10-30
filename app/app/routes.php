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

Route::get('armario/{name}', function($name)
{
    return View::make('armario')->with('name', $name);;
});

Route::get('socialsummer/', ['as' => 'socialsummer', 'uses' => 'SocialsummerController@index']);
// Route::resource('socialsummer/', 'SocialsummerController');

Route::get('armario/{profile}/{id}', ['as' => 'armario', 'uses' => 'ArmarioController@showProfile']);
