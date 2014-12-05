<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin/home');
	}
	
	public function profileRoles()
	{
		return View::make('admin/roles');
	}
	
	public function profileSearch()
	{
		$name = Input::get('nombre');
		$profiles = Profile::where('first_name', 'like', '%' . $name . '%')->take(20)->get();
		return Response::json($profiles);
	}
	
	public function adminRoles()
	{
		$data = Input::get('id', 'action');
		// $profiles = Profile::where('first_name', 'like', '%' . $name . '%')->take(20)->get();
		return Response::json($data);
	}
	
	public function ads()
	{
		$brands = Brand::all();
		$ads = Ad::all();
		return View::make('admin/adsNew', ['brands' => $brands, 'ads' => $ads]);
	}
	
	public function adsNew()
	{
		// Obtenemos todos los datos del formulario
		$data = Input::only('title', 'description', 'gender', 'style', 'brand_id');
		
		// Organizamos los datos del formulario
		$dataUpload =[
			'title'		=> $data['title'],
			'brand_id'		=> $data['brand_id'],
		];
		
		// Creamos las reglas
		$rules = [
			'title'		=> 'required|exists:ads,title',
			'brand_id'		=> 'required|exists:brands,id',
		];
		
		// Validar el formulario con las reglas
		$validation = Validator::make($dataUpload, $rules);
		if ($validation) {
			$ad = Ad::create($data);
			return Redirect::route('ads_edit', ['id' => $ad->id]);
		}
			
		return Redirect::back()->withInput()->withErrors($validation);
		
	}
	
	public function adsEdit($id)
	{
		$ad = Ad::find($id);
		$brands = Brand::all();
		
		return View::make('admin/adsEdit', ['ad' => $ad, 'brands' => $brands]);
	}
	
	public function adsSave($id)
	{
		// Obtenemos todos los datos del formulario
		// $dataAll = Input::all();
		$data = Input::only('id', 'title', 'description', 'gender', 'style', 'brand_id');
		$dataGet = Input::get('id');
		
		
		$manager = Ad::find($data['id']);
		// dd($manager);
		$manager->fill($data);
		
		if ($manager->save()) {
			return Redirect::route('ads_edit', ['id' => $data['id']]);
		}
			
		return Redirect::back()->withInput()->withErrors($validation);
		
	}
	
	public function adsCreate()
	{
		// dd( Input::all() );
		$data = Brand::unique();
		dd( $data );
		
		/*foreach ($this as $keys) {
				// print_r($keys);
				var_dump($keys);
				echo ('<hr>');
			foreach ($keys as $key => $value) {//
				print_r ($key);
			
		}}*/
		// return View::make('admin/adsNew');
	}
	
	public function adsPictureSave()
	{
		// Obtenemos todos los datos del formulario, el archivo y esperamos mensajes
		$data = Input::only('ad_id', 'style');
		$file = Input::file("image");
		$messages = array();
		
		// Crear un nombre unico y codificamos el id
		$fileUnid = uniqid();
		$md5_ad_id = md5($data['ad_id']);
		// Creamos el nombre nuevo del archivo
		$fileName = $md5_ad_id . '-' . $fileUnid . '.' . $file->getClientOriginalExtension();
		
		// Organizamos los datos del formulario
		$dataUpload =[
			'profile_id'	=> $data['ad_id'],
			'filename'	=> $file
		];
		
		// Creamos las reglas
		$rules = [
			'profile_id'	=> 'required|exists:profiles,id',
			'filename'	=> 'required|mimes:jpeg,bmp,png'
		];
		
		// Validar el formulario con las reglas
		$validation = Validator::make($dataUpload, $rules);
		
		// Si la validacion es correcta
		if ($validation) {
			
			// Instanciamos una Foto y le pasamos los valores
			$picture = new Photo;
			$picture->ad_id = $data['ad_id'];
			$picture->style = $data['style'];
			$picture->filename = $fileName;
			
			// Si se guarda
			if ( $picture->save() ) {
				
				// Si movemos la imagen a la carpeta de perfiles y le damos el nuevo nombre
				if ( $file->move("uploads/adds/", $fileName) ) {
					// Generamos un mensaje con el id
					$messages = ['id' => $picture->id, 'filename' => $fileName];
					
					$manipulation = Image::make('uploads/adds/' . $fileName);
					/*
					{{ Form::select('style', ['2col' => 'Pequeño 367x155', '4col' => 'Mediano 759x348', '6col' => 'Grande 1150x452']) }}
					*/
					if ($data['style'] == '2col') {
						// $manipulation->resize(367, 155);
						$manipulation->resize(367, 155);
						// $manipulation->crop(367, 155);
						
					} elseif ($data['style'] == '4col') {
						$manipulation->resize(759, 348);
						// $manipulation->crop(759, 348);
						
					} elseif ($data['style'] == '6col') {
						$manipulation->resize(1150, 452);
						// $manipulation->crop(1150, 452);
					}
					$manipulation->save('uploads/adds/' . $fileName );
					
				} else {
					// Generamos un mensaje
					$messages = ['id' => $picture->id, 'errorFile' => 'No se movio el archivo'];
				}
				
			}
		}
		
		// Regresamos el mensaje
		return Response::json($messages);
	}
		
	public function adsPictureDelete($id)
	{
		$photo = Photo::find($id);
		$brands = Brand::all();
		// $ad = Ad::find($photo->ad_id);
		
		if (File::delete('uploads/adds/' . $photo->filename)) {
			$messages[] = ['archivo' => 'borrado'];
			// Borrarlo de la base de datos
			if ($photo->delete()) {
				$messages[] = ['BD' => 'borrado'];
			} else {
				$messages[] = ['BD' => 'fallo'];
			}
		} else {
			// Fallo borrar la imagen
			$messages[] = ['archivo' => 'Fallo'];
		}
		// dd($messages);
		
		// return Response::json($fileName);
		
		return Redirect::route('ads_edit', ['ad_id' => $photo->ad_id]);
		// return View::make('admin/adsEdit', ['ad' => $ad, 'brands' => $brands, );
		
		
		
	}

	public function posts()
	{
		$brands = Brand::all();
		$posts = Post::all();
		return View::make('admin/post', ['brands' => $brands, 'posts' => $posts]);
	}
	
	public function postsNew()
	{
		dd(Input::all());
	}
	
	public function postsEdit($id)
	{
		dd(Input::all());
	}
	
	public function postsSave()
	{
		dd(Input::all());
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
