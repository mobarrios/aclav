<?php

class PartidoCosto extends Eloquent
{

	protected $table 	= 'partido_costo';
	protected $guarded 	= array('');	


	public function item()
	{
		return $this->hasMany('PartidoCostoItem');
	}
	public function CostoItem()
	{
		return $this->belongsTo('CostoItem');
	}

	public function Partido()
	{
		return $this->belongsTo('Partido');
	}
}


?>