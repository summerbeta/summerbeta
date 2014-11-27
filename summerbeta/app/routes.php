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


Route::get('/', ['as' => 'home', 'uses' => 'UserController@index']);

Route::group(array('before' => 'guest'), function() {
	Route::get('registro', 		['as' => 'signup', 'uses' => 'SignupController@signup']);
	Route::post('registro', 		['as' => 'signup-user', 'uses' => 'SignupController@signupUser']);
	Route::get('registro/confirmar/{user_name}/{confirmation}', 
					['as' => 'signup_confirmation', 'uses' => 'SignupController@signupConfirmation']);
	Route::post('login', 		['as' => 'login', 'uses' => 'UserController@login']);
});
	
Route::group(array('before' => 'auth'), function() {
// Route::group(array('after' => 'auth'), function() {
	// Route::get('/', ['as' => 'home2', 'uses' => 'UserController@sommerhome']);
	
	Route::get('socialsummer', ['as' => 'socialsummer', 'uses' => 'UserController@socialsummer']);
	Route::get('armario/{id}', ['as' => 'closet', 'uses' => 'UserController@closet']);
	Route::get('tienda', ['as' => 'shop', 'uses' => 'UserController@shop']);
	Route::get('tienda/marca/{id}', ['as' => 'shop-brand', 'uses' => 'UserController@shopBrand']);
	Route::get('producto/{id}', ['as' => 'item', 'uses' => 'UserController@shopItem']);
	Route::get('marcas', ['as' => 'brands', 'uses' => 'UserController@brands']);
	
	Route::get('registro-marcas/{id}', ['as' => 'signup-brands', 'uses' => 'SignupController@signupBrands']);
	Route::post('registro-marcas-make', ['as' => 'signup-brands-make', 'uses' => 'SignupController@signupBrandsMake']);
	Route::get('registro-foto/{id}', ['as' => 'signup-picture', 'uses' => 'SignupController@signupPicture']);
	Route::post('registro-foto-subir',['as' => 'signup-picture-up', 'uses' => 'SignupController@signupPictureUp']);
	Route::get('registro-mandar-correo',['as' => 'signup_send_mail', 'uses' => 'SignupController@signupSendMail']);
	
	Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
	
	// si es administrador
	Route::group(['before' => 'admin'], function () {
		Route::get('administrador', ['as' => 'admin', 'uses' => 'AdminController@index']);
		Route::get('administrador/usuario-roles', ['as' => 'admin_roles', 'uses' => 'AdminController@profileRoles']);
		Route::get('administrador/admin-roles/{id}/{action}', ['as' => 'admin_role_admin', 'uses' => 'AdminController@adminRoles']);
		Route::get('administrador/buscar-perfil', ['as' => 'admin_search_profile', 'uses' => 'AdminController@profileSearch']);
	});
	
	Route::get('publicidades-nueva', ['as' => 'ads_new', 'uses' => 'AdminController@adsNew']);
	Route::get('publicidades-crear', ['as' => 'ads_create', 'uses' => 'AdminController@adsCreate']);
});

