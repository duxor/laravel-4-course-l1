<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenreField extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function($table){
$table->string('genre');
$table->timestamps();
$table->unique('title');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books', function($table){
$table->dropColumn('genre');
$table->dropColumn('created_at');
$table->dropColumn('updated_at');
$table->drouUnique('books_title_unique');

		});
	}

}
