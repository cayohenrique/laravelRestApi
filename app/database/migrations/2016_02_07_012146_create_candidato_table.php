<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidato', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 255)->nullable();
			$table->string('nomeMae', 255)->nullable();
			$table->string('apelido', 255)->nullable();
			$table->string('sexo', 1)->nullable();
			$table->integer('raca')->nullable();
			$table->date('dataNascimento')->nullable();
			$table->string('nacionalidade', 255)->nullable();
			$table->boolean('naturalizado', 1)->nullable();
			$table->boolean('portadorDeficiencia', 1)->nullable();
			$table->string('logradouro', 255)->nullable();
			$table->string('numero', 255)->nullable();
			$table->string('complemento', 255)->nullable();
			$table->string('bairro', 255)->nullable();
			$table->string('CEP', 1)->nullable();
			$table->string('municipio', 255)->nullable();
			$table->string('UF', 1)->nullable();
			$table->string('referencia', 255)->nullable();
			$table->string('RG', 255)->nullable();
			$table->string('CPF', 255)->nullable();
			$table->string('carteiraTrabalho', 255)->nullable();
			$table->boolean('habilitacao', 1)->nullable();
			$table->string('HabilitacaoTipo', 255)->nullable();
			$table->boolean('disponibilidadeViagem', 1)->nullable();
			$table->boolean('disponibilidadeDormirTrabalho', 1)->nullable();
			$table->integer('id_idUsuario');
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
		Schema::drop('candidato');
	}

}
