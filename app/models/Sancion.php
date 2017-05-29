<?php

class Sancion extends Eloquent
{
	protected $table = 'sancion';
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
}

?>