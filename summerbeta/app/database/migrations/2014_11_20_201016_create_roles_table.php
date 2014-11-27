<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		Roles
			SuperAdministrador
			Administrador
			Editor
			Autor
			Colaborador
			Suscriptor
		*/
		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id');
			
			// Tipo de Roll
			// Permisos para
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
	}

}
