<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('title');
			$table->string('description');
			$table->string('gender');
			$table->string('style');
			$table->string('geoposition');
			
			$table->string('group_id');
			$table->string('group_name');
			
			$table->integer('view');
			$table->integer('click');
			
			$table->integer('brand_id')->unsigned()->foreign('brand_id')->references('id')->on('brands');
			
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
		Schema::drop('ads');
	}

}
