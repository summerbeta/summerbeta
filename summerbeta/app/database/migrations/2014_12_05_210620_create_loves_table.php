<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLovesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loves', function(Blueprint $table)
		{
			$table->increments('id');
			
			// Perfil del usuario
			$table->integer('profile_id')->unsigned()->foreign('profile_id')->references('id')->on('profiles');
			
			// Le gusta un perfil o imagen
			$table->integer('picture_id')->unsigned()->foreign('picture_id')->references('id')->on('pictures');
			$table->integer('profile_love');
			
			// Para generar metaetiquetas de manera iterativa
			$table->integer('loves_id');
			$table->string('meta_key');
			$table->string('meta_value');
			
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
		Schema::drop('loves');
	}

}
