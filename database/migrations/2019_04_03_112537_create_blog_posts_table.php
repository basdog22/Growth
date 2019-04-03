<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id');
			$table->integer('category_id')->nullable();
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->text('excerpt', 65535);
			$table->text('body', 65535);
			$table->string('image')->nullable();
			$table->string('slug')->unique();
			$table->text('meta_description', 65535);
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->boolean('featured')->default(0);
			$table->timestamps();
			$table->text('tags', 65535)->nullable();
			$table->timestamp('published_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_posts');
	}

}