<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('item_id')unsigned()->foreign('item_id')->references('id')->on('items');
			$table->integer('brand_id')unsigned()->foreign('brand_id')->references('id')->on('brands');

			$table->enum('style');
			$table->string('geoposition');

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
		Schema::drop('photos');
	}

}
