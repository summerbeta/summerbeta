<?php

class SignupController extends \BaseController {


	public function signup()
	{
		return View::make('signup/signup');
	}

	public function signupUserMake()
	{
		$mayorEdad = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")-18);
		$fechaMayorEdad =date('Y-m-d', $mayorEdad);
		
		$data = Input::only('user_name', 'email', 'email_confirmation', 'date', 'gender');
		$rules = [
			'user_name' 	=> 'required',
			'email' 	=> 'required|email|unique:users,email|confirmed',
			'date' 	=> 'required|before:'.$fechaMayorEdad,
			'gender' 	=> 'required',
		];
		
		$validation = Validator::make($data, $rules);
		
		if ($validation->passes()) {
			// Guardamos el usuario
			$user = User::create($data);
			// Guardamos su perfil
			$profile = Profile::create([
				'user_id' 	=> $user->id,
				'date' 		=> $data['date'],
				'gender' 	=> $data['gender'],
			]);
			// dd($profile->id);
			return Redirect::route('signup-brands', ['profile' => $profile->id]);
			// return View::make('signup/signupBrands')->with('profile', $profile);
		}
		// return Redirect::back()->withInput()->withErrors($validation);
		return Redirect::back()->withErrors($validation);
	}
	
	public function signupBrands($id)
	{
		return View::make('signup/signupBrands', ['id' => $id]);
	}
	
	public function signupBrandsMake()
	{
		// dd(Input::all());
		$data = Input::all();
		$user_id = $data['user_id'];
		foreach ($data as $key => $value) {
			
			$is_brand = strpos($key, 'brand');
			
			if ( $is_brand !== false) {
				$brandlike = BrandsLike::create([
					'profile_id' 	=> $user_id,
					'brand_id' 	=> $value,
				]);
				// var_dump($brandlike);
			}
		}
		return Redirect::route('signup-picture', ['id' => $user_id]);
		// dd($data);
		// return Redirect::route('signup-brands', ['profile' => $profile->id]);
	}
	
	public function signupPicture($id)
	{
		return View::make('signup/signupPicture', ['id' => $id]);
	}
	
	public function signupPictureUp()
	{
		// return View::make('signup/signupPicture');
		$data = Input::only('profile_id', 'style');
		$file = Input::file("picture");
		
		$fileName = md5($data['profile_id']) . '-' . uniqid() . '.jpg';
		
		// dd($data['picture']['originalName']);
		$dataUpload =[
			'profile_id'	=> $data['profile_id'],
			'style'		=> $data['style'],
			'filename'	=> $file
		];
		
		$rules = [
			'profile_id'	=> 'required|exists:profiles,id',
			'style'		=> 'required',
			'filename'	=> 'required|mimes:jpeg,bmp,png'
		];
		
		$validation = Validator::make($dataUpload, $rules);
		
		if ($validation) {
			
			$picture = new Picture;
			$picture->profile_id = $data['profile_id'];
			$picture->style = $data['style'];
			$picture->filename = $fileName;
			
			if ( $picture->save() ) {
				$messages[] = ['ok' => $picture->id ];
				
				if ( $file->move("uploads/profile/", $fileName) ) {
					$messages[] = ['filename' => $fileName];
				} else {
					$messages[] = ['errorFile' => 'No se movio el archivo'];
				}
				
			}
			
		} else {
			$messages[] = ['error' 	=>$validation->messages()];
		}
		
		
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
