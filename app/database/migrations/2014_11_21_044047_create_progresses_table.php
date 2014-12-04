<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('progresses', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->date('fecha');
			$table->timestamps();
			
			$table->integer('id_student')->unsigned();
			$table->foreign('id_student')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('progresses');
	}

}
