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
	
	public function adsNew()
	{
		return View::make('admin/adsNew');
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
