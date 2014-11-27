<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsmetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('optionsmetas', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('option_id')->unsigned()->foreign('option_id')->references('id')->on('options');
			$table->string('meta_key');
			$table->longText('meta_value');
			
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
		Schema::drop('optionsmetas');
	}

}
