<?php

class UserController extends \BaseController {

	public function socialsummer()
	{
		// Obtenemos los datos del usuario
		$user = Auth::user();
		$gender = $user->profile->gender;
		
		// llamamos a todos los perfiles
		// $profiles = DB::table('profiles')->where('gender', 'male')->get();
		$profiles = Profile::all();

		// Creamos la vista
		return View::make('user/socialsummer', ['user' => $user, 'gender' => $gender, 'profiles' => $profiles]);
	}
	
	public function closet()
	{
		$profile = Auth::user()->profile;

		return View::make('user/armario', ['profile' => $profile]);
	}

	public function closetOther($id)
	{
		$profile = Profile::find($id);

		return View::make('user/otroarmario', ['profile' => $profile]);
	}

	public function shop()
	{
		$items = Item::paginate(6);
		return View::make('user/shop', ['items' => $items]);
	}

	public function shopItem($id)
	{
		$item = Item::find($id);

		return View::make('user/shopItem', ['item' => $item]);
	}

	public function shopBrand($id)
	{
		$items = Item::where('brand_id', '=', $id)->paginate(6);
		return View::make('user/shopBrand', ['items' => $items]);
	}

	public function brands()
	{
		$brands = Brand::all();
		return View::make('user/brands', ['brands' => $brands]);
	}

	public function sommerhome()
	{
		$id = Auth::id();
		$me = Profile::where('user_id', '=', $id)->first();
		
		dd( $me );
		return View::make('user/summerhome');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return 'Esta es la lista de usuarios';

		$profiles = Profile::all();
		return View::make('home')->with('profiles', $profiles);
	}
	
	public function logout()
	{
		Auth::logout();
		// return View::make('home');
		return Redirect::to('/');
	}
	
	public function login()
	{
		$data = Input::only('user_name', 'password', 'remember');
		// dd($data);
		
		// Ordenamos los datos del formulario para pasarlo autenticar
		$credentials = [
			'user_name' 	=> $data['user_name'],
			'password' 	=> $data['password']
		];
		
		// Creamos las reglas
		$rules = [
			'user_name' 	=> 'required|exists:users,user_name',
			'password' 	=> 'required',
		];
		
		// Validamos al usuario
		if (Validator::make($credentials, $rules)) {
			if ( Auth::attempt($credentials, $data['remember']) ) {
				
			 	return Redirect::to('socialsummer');
			}
		}
		 
		return Redirect::back()->withInput()->withErrors($validation);
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
