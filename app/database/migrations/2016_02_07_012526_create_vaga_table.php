<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVagaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaga', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Empresa_idEmpresa');
			$table->string('cargo', 255)->nullable();
			$table->integer('tempoExperiencia')->nullable();
			$table->boolean('experienciaComprovada', 1)->nullable();
			$table->string('descricao', 255)->nullable();
			$table->string('id_IdEscoladirade', 255)->nullable();
			$table->string('sexo', 1)->nullable();
			$table->string('faixaEtaria', 255)->nullable();
			$table->boolean('necessidadeCNH', 1)->nullable();
			$table->string('beneficios', 255)->nullable();
			$table->string('horarioTrabalho', 255)->nullable();
			$table->boolean('deficiente', 1)->nullable();
			$table->boolean('exclusivaDeficiente', 1)->nullable();
			$table->boolean('outrolocalTrabalho', 1);
			$table->string('logradouro', 255)->nullable();
			$table->string('numero', 255)->nullable();
			$table->string('bairro', 255)->nullable();
			$table->string('municipio', 255)->nullable();
			$table->string('cep', 255)->nullable();
			$table->string('referencia', 255)->nullable();
			$table->integer('quantidadeVagas')->nullable();
			$table->string('tipoVaga', 1)->nullable();
			$table->string('qtdeMesesTemporario', 20)->nullable();
			$table->string('localHorarioEntrevista', 255)->nullable();
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
		Schema::drop('vaga');
	}

}
