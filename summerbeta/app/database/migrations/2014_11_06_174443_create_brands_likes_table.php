<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands_likes', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('profile_id')->unsigned()->foreign('profile_id')->references('id')->on('profiles');
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
		Schema::drop('brands_likes');
	}

}
