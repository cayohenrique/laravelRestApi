<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cnpj')->nullable();
			$table->string('nomeEmpresa', 255)->nullable();
			$table->string('logradouro', 255)->nullable();
			$table->string('numero', 255)->nullable();
			$table->string('cep', 255)->nullable();
			$table->string('municipio', 255)->nullable();
			$table->string('bairro', 255)->nullable();
			$table->string('UF', 1)->nullable();
			$table->string('referencia', 255)->nullable();
			$table->string('responsavelNome', 255)->nullable();
			$table->string('responsavelEmail', 255)->nullable();
			$table->string('responsavelTelefone', 255)->nullable();
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
		Schema::drop('empresa');
	}

}
