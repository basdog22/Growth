<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoyagerPollAnswersUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voyager_poll_answers_users', function(Blueprint $table)
		{
			$table->integer('answer_id')->unsigned()->index('voyager_poll_answers_users_answer_id_foreign');
			$table->integer('user_id')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('voyager_poll_answers_users');
	}

}
