<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
		{
			Schema::create('tutors', function(Blueprint $table)
			{
				$table->increments('id'); 
				$table->string('nombre');
				$table->string('area_laboral');
				$table->timestamps();
				$table->engine = 'InnoDB';
			});

		Schema::create('groups', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('nombre_grupo'); 
			$table->string('cuatrimestre');
			$table->integer('numero_alumnos');
			$table->timestamps();
			$table->integer('id_educative')->unsigned();

			$table->foreign('id_educative')->references('id')->on('educative_programs')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('id_tutors')->unsigned();
			$table->foreign('id_tutors')->references('id')->on('tutors')->onDelete('cascade')->onUpdate('cascade');
			$table->engine = 'InnoDB';
		});

		Schema::create('students', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->char('num_control',8)->unique();
			$table->string('nombre');
			$table->string('password',15);
			$table->string('apellidos');
			$table->date('fecha');
			$table->char('sexo',1);
			$table->string('domicilio');
			$table->string('ciudad');
			$table->string('estado');
			$table->char('cp',5);
			$table->char('telefono',10);
			$table->string('beca');
			$table->timestamps();
			$table->string('remember_token', 100)->nullable();
			// primero declarar el campo a relacionar
			//despues implementar la relacion
			$table->integer('id_group')->unsigned();
			$table->foreign('id_group')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('tutors');
		Schema::drop('groups');
		Schema::drop('students');
		
	}

}
