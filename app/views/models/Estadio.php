<?php

class Estadio extends Eloquent
{
	protected $table 	= 	'estadio';
	protected $fillable	=	array('nombre','direccion','provincia','ciudad','capacidad','telefono','imagen','imagen1','imagen2','imagen3','imagen4','mapa','estado','ciudad_id');



	public function setMapaAttribute($value)
	{
		$this->attributes['mapa']	=	stripslashes($value);
	}	

	public function Partido()
	{
		return $this->hasMany('Partido');
	}


	public function Ciudad()
	{
		return $this->belongsTo('Ciudad');
	}
	public function Provincia()
	{
		return $this->belongsTo('Provincia');
	}

}
?>