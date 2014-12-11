<?php

class AjaxController extends \BaseController {
	
	public function love()
	{
		// Obtener los datos
		$data = Input::all();
		$img = Picture::find($data['love']);
		$profile = Auth::user()->profile;
		
		$history = json_decode($data['history'], true);
		
		// Organizamos los datos del formulario
		$dataUpload =[
			'profile_id'	=> $history['profile_id'],
			'profile_love'	=> $history['profile_love'],
			'picture_id'	=> $history['picture_id'],
		];
		
		// Creamos las reglas
		$rules = [
			'profile_id'	=> 'required|exists:profiles,id',
			'profile_love'	=> 'required|exists:profiles,id',
			'picture_id'	=> 'required|exists:pictures,id'
		];
		
		// Comprobamos los datos
		$validation = Validator::make($dataUpload, $rules);
		if ($validation) {
			
			// Recuperar la imagen o crearlo si no existe ...
			$love = Love::firstOrCreate(array('picture_id' => $history['picture_id'], 'profile_id' => $history['perfil']));
			// $love = Love::firstOrCreate(array('picture_id' => $history['picture_id']));
			
			// $manager->fill($data);
			$love->fill($history);
			$love->meta_value = $meta_value = json_encode( array('count' => '0', 'status' => 'love') );
			$love->save();
		}
		
		// regresa formato json
		// return Response::json($validation->messages()->first());
		return Response::json($love);
	}


}
