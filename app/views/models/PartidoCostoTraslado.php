<?php

class PartidoCostoTraslado extends Eloquent
{

	protected $table 	= 'partido_costo_traslado';
	protected $guarded 	= array('');	

	
	public function PartidoCosto()
	{
		return $this->belongsTo('PartidoCosto');
	}
}


?>