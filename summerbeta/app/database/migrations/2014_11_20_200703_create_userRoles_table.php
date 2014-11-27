<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userRoles', function(Blueprint $table)
		{
			$table->increments('id');
			
			// Relacionar el usuario
			$table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users');
			// Relacionar el roldel usuario
			$table->integer('role_id')->unsigned()->foreign('role_id')->references('role_id')->on('roles');
			//  El rol actual que tiene el usuario
			$table->string('role');
			
			
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
		Schema::drop('userRoles');
	}

}
