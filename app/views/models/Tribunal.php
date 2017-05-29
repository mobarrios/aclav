<?php

class Tribunal extends Eloquent
{
	protected $table = 'tribunal';
	protected $guarded = array('');

	public function getVencimientoSancAttribute($value)
	{
		$value = date("d-m-Y",strtotime($value)); 
		return $value;
	}

	public function setVencimientoSancAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['vencimiento_sanc']	=	$fecha;
	}

	public function Serie()
	{
		return $this->belongsTo('Series');
	}
}

?>