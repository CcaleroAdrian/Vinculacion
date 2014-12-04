<?php

class ProgramFact extends \Eloquent {
	protected $fillable = ['nombre_programa','objetivo','area_asignacion','fecha_inicio','fecha_termino','asesor_externo','id_tutor','id_student','id_dependencia'];

	public function tutors(){
		return $this->hasOne('Tutor');
	}

	public function student(){
		return $this->hasMany('Student');
	}

	public function dependencia(){
		return $this->hasMany('Dependency');
	}
} 