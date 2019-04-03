<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_blocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_id')->index();
			$table->enum('type', array('template','include'))->default('include');
			$table->string('path');
			$table->text('data', 16777215);
			$table->boolean('is_hidden')->default(0);
			$table->boolean('is_minimized')->default(0);
			$table->boolean('is_delete_denied')->default(0);
			$table->integer('cache_ttl')->default(0);
			$table->integer('order')->default(10000);
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
		Schema::drop('page_blocks');
	}

}
