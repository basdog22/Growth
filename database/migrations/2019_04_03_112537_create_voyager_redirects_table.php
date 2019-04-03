<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoyagerRedirectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voyager_redirects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('from')->unique();
			$table->string('to');
			$table->string('type', 3);
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
		Schema::drop('voyager_redirects');
	}

}
