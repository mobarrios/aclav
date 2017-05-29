<?php

class Costo extends Eloquent
{

	protected $table 	= 'costo';
	protected $guarded 	= array('');	

	public function CostoItem()
	{
		return $this->belongsTo('CostoItem');
	}
}

?>