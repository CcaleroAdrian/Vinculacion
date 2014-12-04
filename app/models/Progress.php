<?php

class Progress extends \Eloquent {
	protected $fillable = ['descripcion','fecha'];

	public function student(){
		retur $this->hasMany('Student');
	}
} 