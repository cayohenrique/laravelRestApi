<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 255);
			$table->string('descricao', 255)->nullable();
			$table->date('dataCurso')->nullable();
			$table->integer('limitePessoas')->nullable();
			$table->integer('limiteListaEspera')->nullable();
			$table->date('dataLimiteExposicao')->nullable();
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
		Schema::drop('curso');
	}

}
