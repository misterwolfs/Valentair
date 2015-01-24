<?php

use Illuminate\Database\Migrations\Migration;

class CreateLovehuntersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Lovehunters', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('sex');
			$table->string('adress');
			$table->string('email');
			$table->string('code');
			$table->string('age');
			$table->text('text');
			// $table->integer('published');
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
		Schema::drop('Lovehunters');
	}

}