<?php

class Noticias extends Eloquent
{
	protected $table 	= 'noticias';
	//protected $fillable = array('titulo','copete','cuerpo','fuente','imagen','estado');
	protected $guarded	= array(''); 

	public function NoticiasPosicion()
	{
		return $this->hasMany('NoticiasPosicion');
	}

	public function Club()
	{
		return $this->belongsToMany('Club','noticias_club');
	}

	public function setCuerpoAttribute($value)
	{
		$this->attributes['cuerpo']	=	stripslashes($value);
	}	

			public function getFechaAttribute($value)
			{
				$value = date("d-m-Y",strtotime($value)); 
				return $value;
			}

			public function setFechaAttribute($value)
			{
				$fecha = date("Y-m-d",strtotime($value)); 
				$this->attributes['fecha']	=	$fecha;

			}
}

?>