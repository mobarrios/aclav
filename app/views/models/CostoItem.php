<?php

class CostoItem extends Eloquent
{

	protected $table 	= 'costo_item';
	protected $guarded	=	array('');	

	public function Costo()
	{
		return $this->hasMany('Costo');
	}

	
}

?>