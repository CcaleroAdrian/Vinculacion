<?php

class Group extends \Eloquent {
	protected $fillable = ['nombre_grupo','cuatrimestre','numero_alumnos','id','id_educative','id_tutors'];

	public function educativeProgram(){
		 return $this->hasOne('EducativeProgram');
	}

	public function tutor(){
		return $this->hasOne('Tutor');
	}
}