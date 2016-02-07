<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatoexperienciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatoexperiencia', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('Candidato_idCandidato');
			$table->string('cbo', 255)->nullable();
			$table->string('fonteInformacao', 1)->nullable();
			$table->boolean('menorAprendiz', 1)->nullable();
			$table->string('tipoIdentificacao', 1)->nullable();
			$table->string('numeroIdentificacao', 255)->nullable();
			$table->string('observacao', 255)->nullable();
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
		Schema::drop('candidatoexperiencia');
	}

}
