<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatocontatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatocontato', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Candidato_idCandidato');
			$table->integer('tipoContato')->nullable();
			$table->string('descricao1', 255)->nullable();
			$table->string('descricao2', 255)->nullable();
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
		Schema::drop('candidatocontato');
	}

}
