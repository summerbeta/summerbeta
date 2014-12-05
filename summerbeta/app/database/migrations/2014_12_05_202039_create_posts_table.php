<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('title');
			$table->string('description');
			$table->string('style');
			$table->string('slug');
			$table->string('metas');
			
			$table->string('gender');
			$table->integer('brand_id')->unsigned()->foreign('brand_id')->references('id')->on('brands');
			
			$table->integer('view');
			$table->integer('click');
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
		Schema::drop('posts');
	}

}
