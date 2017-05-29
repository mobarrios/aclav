<?php

class GaleriaImagenes extends Eloquent
{
	protected $table 	= 'galeria_imagenes';
	protected $guarded 	=  array('');

	public function GaleriaSub()
	{
		return $this->belongsTo('GaleriaSub');
	}
	
} 

?>