<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVoyagerPollQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('voyager_poll_questions', function(Blueprint $table)
		{
			$table->foreign('poll_id')->references('id')->on('voyager_polls')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('voyager_poll_questions', function(Blueprint $table)
		{
			$table->dropForeign('voyager_poll_questions_poll_id_foreign');
		});
	}

}
