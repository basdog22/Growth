<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVoyagerPollAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('voyager_poll_answers', function(Blueprint $table)
		{
			$table->foreign('question_id')->references('id')->on('voyager_poll_questions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('voyager_poll_answers', function(Blueprint $table)
		{
			$table->dropForeign('voyager_poll_answers_question_id_foreign');
		});
	}

}
