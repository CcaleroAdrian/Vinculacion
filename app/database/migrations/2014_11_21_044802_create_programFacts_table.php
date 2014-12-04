<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramFactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() 
	{
		Schema::create('program_Facts', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('nombre_programa');
			$table->string('objetivo');
			$table->string('area_asignacion');
			$table->date('fecha_inicio');
			$table->date('fecha_termino');
			$table->string('asesor_externo');
			$table->timestamps();

			$table->integer('id_tutor')->unsigned();
			$table->integer('id_student')->unsigned();
			$table->integer('id_dependencia')->unsigned();


			$table->foreign('id_tutor')->references('id')->on('tutors')->ondelete('cascade')->onUpdate('cascade');
			$table->foreign('id_student')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('id_dependencia')->references('id')->on('dependencies')->onDelete('cascade')->onUpdate('cascade');
    		$table->engine = 'InnoDB';
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('program_Facts');
	}
	

}
