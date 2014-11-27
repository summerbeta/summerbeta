<?php

class SignupController extends \BaseController {


	public function signup()
	{
		// Mostrar la pagina de registro
		return View::make('signup/signup');
	}
	
	public function signupSendMail()
	{
		$user = User::find(16);
		
		$user_name = $user->user_name;
		$user_email = $user->email;
		
		$user_array = json_decode(json_encode($user), true);
		
		$user_valuecode = json_decode($user->valuecode, true);
		if ( $user_valuecode['status'] == 'confirmation' ) {
			$user_array['value'] = $user_valuecode['value'];
		}
		
		
		//  Mandar el correo de confirmación
		// Mail::send('emails/confirmarRegistro', $user_array, function ($message) use ($user_name, $user_email){
		Mail::send('emails/confirmarRegistro', $user_array, function ($message) use ($user){
		// Mail::send('emails/confirmarRegistro', $user_array, function ($message, $user_name, $user_email){
			$message->subject('Hola ' . $user->user_name . ' confirmación de Summer Beta ');
			$message->to($user->email);
		});
		// dd($mail);
		
		$messages = ['status' => 'ok', $user_array];
		
		// return View::make('signup/signup');
		return Response::json($messages);
	}
	
	public function signupConfirmation($user_name, $confirmation)
	{
		$data[] = $user_name;
		$data[] = $confirmation;
		
		$user = User::where('user_name', '=', $user_name)->get();
		$data[] = json_decode(json_encode($user), true);
		
		// Guardar la confirmación
		
		return Response::json($data);
		// return View::make('signup/signup');
	}
	
	public function signupUser()
	{
		// Obtener el dia de hoy pero de hace 18 años
		$mayorEdad = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")-18);
		$fechaMayorEdad =date('Y-m-d', $mayorEdad);
		
		// Obtenermos los siguientes datos del formulario
		$data = Input::only('user_name', 'email', 'email_confirmation', 'date', 'gender', 'password');
		
		// Creamos las reglas
		$rules = [
			'user_name' 	=> 'required|unique:users,user_name',
			'email' 	=> 'required|email|unique:users,email|confirmed',
			'password' => 'required',
			'date' 	=> 'required|before:'.$fechaMayorEdad,
			'gender' 	=> 'required',
		];
		
		// Validar las reglas con los datos obtenidos
		$validation = Validator::make($data, $rules);
		
		// dd(json_decode(['status' => 'confirmation', 'value' => uniqid()], true));
		
		// Comparar la validación
		if ($validation->passes()) {
			// Si esta todo correcto entonces:
			
			// Guardamos el usuario
			// $user = User::create($data);
			$user = new User;
			$user->user_name 	= $data['user_name'];
			$user->email 		= $data['email'];
			$user->password 	= $data['password'];
			$user->valuecode 	= json_encode(['status' => 'confirmation', 'value' => uniqid()]);
			$user->save();
			
			// Guardamos su perfil
			$profile = Profile::create([
				'user_id' 	=> $user->id,			// Este campo relaciona el perfil con el usuario
				'first_name'	=> $user->user_name,		// Por defecto asignamos el mismo que la del usuario
				'date' 		=> $data['date'],		// La fecha de nacimiento
				'gender' 	=> $data['gender'],		// Genero Masculino o Femenino
			]);
			/*
			//  Mandar el correo de confirmación
			Mail::send('emails/confirmarRegistro', $user, function ($message, $user){
				$message->subject('Correo de confirmación de ' . $user->user_name);
				$message->to($user->email);
			});
			*/
			// Registramos al usuario para el siguiente paso
			Auth::attempt(['user_name' => $user->user_name, 'password' => $user->password]);
			
			// Despues de guardar lo mandamos a seleccionar sus marcas favoritas
			return Redirect::route('signup-brands', ['profile' => $profile->id]);
		}
		// Si la validacion no pasa lo regresamos al registro
		return Redirect::back()->withInput()->withErrors($validation);
	}
	
	public function signupBrands($id)
	{
		return View::make('signup/signupBrands', ['id' => $id]);
	}
	
	public function signupBrandsMake()
	{
		// Obtener todos los datos del formulario
		$data = Input::all();
		$user_id = $data['user_id'];
		
		// Escaneamos todos los datos del formulario
		foreach ($data as $key => $value) {
			
			// extraemos el nombre del elemento 
			$is_brand = strpos($key, 'brand');
			
			// Si el nombre es una marca
			if ( $is_brand !== false) {
				
				// Guardamos la relacion de la marca con el perfir
				$brandlike = BrandsLike::create([
					'profile_id' 	=> $user_id,
					'brand_id' 	=> $value,
				]);
			}
		}
		
		// Lo mandamos a la pagina para subir su foto
		return Redirect::route('signup-picture', ['id' => $user_id]);
	}
	
	public function signupPicture($id)
	{
		$profile = Profile::find($id);
		return View::make('signup/signupPicture', ['profile' => $profile]);
	}
	
	public function signupPictureUp()
	{
		sleep(2);
		// Obtenemos todos los datos del formulario, el archivo y esperamos mensajes
		$data = Input::only('profile_id', 'style');
		$file = Input::file("picture");
		$messages = array();
		
		// Crear un nombre unico y codificamos el id
		$fileUnid = uniqid();
		$md5_profile_id = md5($data['profile_id']);
		
		// Creamos el nombre nuevo del archivo
		$fileName = $md5_profile_id . '-' . $fileUnid . '.' . $file->getClientOriginalExtension();
		
		// Organizamos los datos del formulario
		$dataUpload =[
			'profile_id'	=> $data['profile_id'],
			'style'		=> $data['style'],
			'filename'	=> $file
		];
		
		// Creamos las reglas
		$rules = [
			'profile_id'	=> 'required|exists:profiles,id',
			'style'		=> 'required',
			'filename'	=> 'required|mimes:jpeg,bmp,png'
		];
		
		// Validar el formulario con las reglas
		$validation = Validator::make($dataUpload, $rules);
		
		// Si la validacion es correcta
		if ($validation) {
			
			// Instanciamos una Foto y le pasamos los valores
			$picture = new Picture;
			$picture->profile_id = $dataUpload['profile_id'];
			$picture->style = $dataUpload['style'];
			$picture->filename = $fileName;
			
			// Si se guarda
			if ( $picture->save() ) {
				
				// Si movemos la imagen a la carpeta de perfiles y le damos el nuevo nombre
				if ( $file->move("uploads/profile/", $fileName) ) {
					// Generamos un mensaje con el id
					$messages = ['id' => $picture->id, 'filename' => $fileName];
					
					// Cortar la foto
					// http://image.intervention.io/
					
					$manipulation = Image::make('uploads/profile/' . $fileName);
					// Si el estilo es full shot
					if ($data['style'] == 'medium') {
						// $manipulation->resize(354, 409);
						$manipulation->crop(354, 409);
					// Si el estilo en medium shot
					} elseif ($data['style'] == 'full') {
						// $manipulation->resize(354, 596);
						$manipulation->crop(354, 596);
					}
					$manipulation->save('uploads/profile/' . $fileName );
					
				} else {
					// Generamos un mensaje
					$messages = ['id' => $picture->id, 'errorFile' => 'No se movio el archivo'];
				}
				
			}
		// Si la validación falla
		} else {
			// Generamos un mensaje de error
			$messages = ['error' => $validation->messages()];
		}
		
		// Regresamos el mensaje
		return Response::json($messages);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
