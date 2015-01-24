<?php

use Illuminate\Database\Migrations\Migration;

class CreateHappycouplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Happycouples', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('adress');
			$table->string('loved_one');
			$table->string('code');
			$table->string('email');
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
		Schema::drop('Happycouples');
	}

}