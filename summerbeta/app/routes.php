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


Route::get('/', ['as' => 'socialsummer', 'uses' => 'UserController@index']);


Route::get('socialsummer/', ['as' => 'socialsummer', 'uses' => 'UserController@socialsummer']);
Route::get('armario/{profile}/{id}', ['as' => 'closet', 'uses' => 'UserController@closet']);
Route::get('tienda', ['as' => 'shop', 'uses' => 'UserController@shop']);
Route::get('tienda/marca/{id}', ['as' => 'shop-brand', 'uses' => 'UserController@shopBrand']);
Route::get('producto/{id}', ['as' => 'item', 'uses' => 'UserController@shopItem']);
Route::get('marcas', ['as' => 'brands', 'uses' => 'UserController@brands']);

Route::get('registro', ['as' => 'signup', 'uses' => 'UserController@signup']);
Route::post('picture-usuario-make', ['as' => 'signup-user', 'uses' => 'UserController@signupUserMake']);
Route::get('registro-marcas/{id}', ['as' => 'signup-brands', 'uses' => 'UserController@signupBrands']);
Route::post('registro-marcas-make', ['as' => 'signup-brands-make', 'uses' => 'UserController@signupBrandsMake']);
Route::get('registro-foto/{id}', ['as' => 'signup-brands-picture', 'uses' => 'UserController@signupPicture']);
