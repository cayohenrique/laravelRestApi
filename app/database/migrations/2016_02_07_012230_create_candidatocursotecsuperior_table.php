<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatocursotecsuperiorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatocursotecsuperior', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_IdCandidato');
			$table->integer('id_IdcursoTecSuperior');
			$table->string('statusConclusao', 255);
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
		Schema::drop('candidatocursotecsuperior');
	}

}
