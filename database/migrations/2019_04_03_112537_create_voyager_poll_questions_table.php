<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoyagerPollQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voyager_poll_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('poll_id')->unsigned()->index();
			$table->string('question');
			$table->string('image')->nullable();
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
		Schema::drop('voyager_poll_questions');
	}

}
