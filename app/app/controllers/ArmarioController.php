<?php

class ArmarioController extends \BaseController {

	public function showProfile($name, $id)
	{
		// return 'Esta es la lista de usuarios';

		$profile = Profile::find($id);
		// dd($id);

		return View::make('user/otroarmario', ['profile' => $profile]);
	}
}