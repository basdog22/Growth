<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoyagerPollAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voyager_poll_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id')->unsigned()->index();
			$table->string('answer');
			$table->string('image')->nullable();
			$table->integer('votes')->default(0);
			$table->integer('order')->default(1);
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
		Schema::drop('voyager_poll_answers');
	}

}
