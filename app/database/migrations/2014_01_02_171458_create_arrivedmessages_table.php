<?php

use Illuminate\Database\Migrations\Migration;

class CreateArrivedmessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Arrivedmessages', function($table) {
			$table->increments('id');
			$table->string('adress');
			$table->integer('type_id');
			$table->integer('message_id');
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
		Schema::drop('Arrivedmessages');
	}

}