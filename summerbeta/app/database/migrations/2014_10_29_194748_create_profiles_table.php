<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('profiles', function($table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users');

			$table->string('picture');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('description');
			$table->date('date');
			$table->string('gender');
			$table->string('address');

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
		//
	}

}
