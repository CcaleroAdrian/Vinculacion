<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDependenciesTable extends Migration { 

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dependencies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('domicilio');
			$table->string('ciudad');
			$table->char('cp',5);
			$table->string('responzable_dependencia');
			$table->char('telefono',10);
			$table->timestamps();
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
		Schema::drop('dependencies');
	}

}
