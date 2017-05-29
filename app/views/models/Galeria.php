<?php

class Galeria extends Eloquent
{
	protected $table 	= 'galeria';
	protected $fillable = array('titulo','fuente','imagen'); 

	public function GaleriaImagenes()
	{
		return $this->hasMany('GaleriaImagenes');
	}

	public function GaleriaSub()
	{
		return $this->hasMany('GaleriaSub');
	}

}

?>