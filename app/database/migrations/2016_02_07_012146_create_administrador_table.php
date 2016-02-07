<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrador', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 255)->nullable();
			$table->string('rg', 255)->nullable();
			$table->string('cpf', 255)->nullable();
			$table->date('dataNascimento')->nullable();
			$table->string('cargo', 255)->nullable();
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
		Schema::drop('administrador');
	}

}
