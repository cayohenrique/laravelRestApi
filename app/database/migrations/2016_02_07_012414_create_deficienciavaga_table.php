<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeficienciavagaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deficienciavaga', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Deficiencias_idDeficiencias');
			$table->integer('Vaga_idVaga');
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
		Schema::drop('deficienciavaga');
	}

}
