<?php

class GaleriaSub extends Eloquent
{
	protected $table = 'galeria_sub';
	protected $guarded = array('');

	public function Galeria()
	{
		return $this->belongsTo('Galeria');
	}
}

?>