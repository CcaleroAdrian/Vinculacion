<?php

class Student extends \Eloquent {
	protected $fillable = ['num_control','nombre','password','apellidos','fecha','sexo','domicilio','ciudad','estado','cp','telefono','beca','id_group'];

	public function group(){
		 return $this->hasOne('Group');
	}
}