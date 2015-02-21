<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB:: statement("
				CREATE TABLE recipes(
					id integer primary key auto_increment,
					name varchar(255) unique not null,
					text TEXT not null
				)
			");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("
drop table recipes
			");
	}

}
