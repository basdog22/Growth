<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVoyagerPollAnswersUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('voyager_poll_answers_users', function(Blueprint $table)
		{
			$table->foreign('answer_id')->references('id')->on('voyager_poll_answers')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('voyager_poll_answers_users', function(Blueprint $table)
		{
			$table->dropForeign('voyager_poll_answers_users_answer_id_foreign');
		});
	}

}
