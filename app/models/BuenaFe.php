<?php

class BuenaFe extends Eloquent
{
	protected $table 	= 'buena_fe';
	//protected $fillable	= array('temporada_id','equipo_id','jugador_id');
	protected $guarded  = array('');

	public function BuenaFeBis()
	{
		return $this->hasMany('BuenaFeBis');
	}


	public function o2()
	{
		return $this->belongsTo('o2');
	}


	public function Jugador()
	{
		return $this->belongsTo('Jugador');
	}

	public function Habilitaciones()
	{
		return $this->hasOne('Habilitaciones');
	}

	public function getFechaDesdeAttribute($value)
	{
		$value = date("d-m-Y",strtotime($value)); 
		return $value;
	}

	public function setFechaDesdeAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_desde']	=	$fecha;

	}
	public function getFechaHastaAttribute($value)
	{
		if($value == '1969-12-31')
			return 'actual';
		else	
			return date("d-m-Y",strtotime($value)); 


		//return $value;
	}

	public function setFechaHastaAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_hasta']	=	$fecha;

	}
}

?>