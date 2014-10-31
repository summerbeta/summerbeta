<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->integer('brand_id')->unsigned()->foreign('brand_id')->references('id')->on('brands');
			$table->string('geoposition');
			$table->integer('place_id')->unsigned()->foreign('place_id')->references('id')->on('places');

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
		Schema::drop('items');
	}

}
