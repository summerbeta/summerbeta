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
Route::get('registro/confirmar/{user_name}/{confirmation}', ['as' => 'signup_confirmation', 'uses' => 'SignupController@signupConfirmation']);

Route::group(array('before' => 'guest'), function() {
	Route::get('registro', 		['as' => 'signup', 'uses' => 'SignupController@signup']);
	Route::post('registro', 		['as' => 'signup-user', 'uses' => 'SignupController@signupUser']);
	Route::post('login', 		['as' => 'login', 'uses' => 'UserController@login']);
});

// Si es usuario registrado
Route::group(array('before' => 'auth'), function() {
	Route::get('/', ['as' => 'sommerhome', 'uses' => 'UserController@sommerhome']);
	
	Route::get('summerbeta', ['as' => 'summerbeta', 'uses' => 'UserController@sommerhome']);
	Route::get('socialsummer', ['as' => 'socialsummer', 'uses' => 'UserController@socialsummer']);
	Route::get('mi-armario', ['as' => 'closet', 'uses' => 'UserController@closet']);
	Route::get('armario/{id}', ['as' => 'closet_other', 'uses' => 'UserController@closetOther']);
	Route::get('tienda', ['as' => 'shop', 'uses' => 'UserController@shop']);
	Route::get('tienda/marca/{id}', ['as' => 'shop-brand', 'uses' => 'UserController@shopBrand']);
	Route::get('producto/{id}', ['as' => 'item', 'uses' => 'UserController@shopItem']);
	Route::get('marcas', ['as' => 'brands', 'uses' => 'UserController@brands']);
	Route::get('noticias', ['as' => 'posts', 'uses' => 'UserController@posts']);
	Route::get('noticia/{id}', ['as' => 'post', 'uses' => 'UserController@post']);
	Route::get('perfil', ['as' => 'profile', 'uses' => 'UserController@profile']);
	
	Route::get('registro-marcas/{id}', ['as' => 'signup-brands', 'uses' => 'SignupController@signupBrands']);
	Route::post('registro-marcas-make', ['as' => 'signup-brands-make', 'uses' => 'SignupController@signupBrandsMake']);
	Route::get('registro-foto/{id}', ['as' => 'signup-picture', 'uses' => 'SignupController@signupPicture']);
	Route::post('registro-foto-subir',['as' => 'signup_picture_up', 'uses' => 'SignupController@signupPictureUp']);
	Route::get('registro-mandar-correo',['as' => 'signup_send_mail', 'uses' => 'SignupController@signupSendMail']);
	
	Route::post('ajax/modify/love',['as' => 'ajax_love', 'uses' => 'UserController@ajaxLove']);
	
	Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);
	
});
// si es administrador
Route::group(['before' => 'admin'], function () {
	Route::get('administrador', ['as' => 'admin', 'uses' => 'AdminController@index']);
	Route::get('administrador/usuario-roles', ['as' => 'admin_roles', 'uses' => 'AdminController@profileRoles']);
	Route::get('administrador/admin-roles/{id}/{action}', ['as' => 'admin_role_admin', 'uses' => 'AdminController@adminRoles']);
	Route::get('administrador/buscar-perfil', ['as' => 'admin_search_profile', 'uses' => 'AdminController@profileSearch']);
	
	Route::get('administrador/publicidad', ['as' => 'ads', 'uses' => 'AdminController@ads']);
	Route::post('administrador/publicidad', ['as' => 'ads_new', 'uses' => 'AdminController@adsNew']);
	Route::get('administrador/publicidad-editar/{id}', ['as' => 'ads_edit', 'uses' => 'AdminController@adsEdit']);
	// Route::post('administrador/publicidad-editar/{id}', ['as' => 'ads_edit', 'uses' => 'AdminController@adsSave']);
	Route::post('administrador/publicidad-picture-save', ['as' => 'ads_picture_save', 'uses' => 'AdminController@adsPictureSave']);
	Route::get('administrador/publicidad-picture-delete/{id}', ['as' => 'ads_picture_delete', 'uses' => 'AdminController@adsPictureDelete']);
	// Route::get('publicidad-crear', ['as' => 'ads_create', 'uses' => 'AdminController@adsCreate']);
	
	Route::get('administrador/noticias', ['as' => 'admin_posts', 'uses' => 'AdminController@posts']);
	Route::post('administrador/noticias-nuevo', ['as' => 'admin_posts_new', 'uses' => 'AdminController@postsNew']);
	Route::get('administrador/noticias-editar/{id}', ['as' => 'admin_posts_edit', 'uses' => 'AdminController@postsEdit']);
	Route::post('administrador/noticias-guardar', ['as' => 'admin_posts_save', 'uses' => 'AdminController@postsSave']);
	
});


