<?php

class UserController extends \BaseController {

	public function socialsummer()
	{
		// Muestra la lista de los perfiles

		// llamamos a todos los perfiles
		$profiles = DB::table('profiles')->where('gender', 'male')->get();

		// Creamos la vista
		return View::make('user/socialsummer')->with('profiles', $profiles);
	}

	public function closet($name, $id)
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

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return 'Esta es la lista de usuarios';

		$profiles = Profile::all();
		return View::make('user/socialsummer')->with('profiles', $profiles);
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
