<?php

class TorneoFaseLeg extends Eloquent
{
	protected 	$table 		=	'torneo_fase_leg';
	//protected	$fillable	=	array('*');
	protected $guarded = array();


	public function fase()
	{
		return $this->belongsTo('TorneoFase','torneo_fase_id');
	}

	public function partido()
	{
		return $this->belongsToMany('Partido','torneo_fase_leg_partido')->orderBy('numero_partido','ASC');
	}

	public function partidoDesignaciones()
	{
		return $this->belongsToMany('Partido','torneo_fase_leg_partido')->orderBy('fecha_inicio','DESC');
	}

	// ordena x numero partido para la seccion Resultados
	public function partidoResultados()
	{
		return $this->belongsToMany('Partido','torneo_fase_leg_partido')->orderBy('numero_partido','ASC');
	}

	public function partidoCalendario()
	{
		return $this->belongsToMany('Partido','torneo_fase_leg_partido')->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC');
	}


			//fechas

			public function getFechaInicioAttribute($value)
			{
				$value = date("d-m-Y",strtotime($value)); 
				return $value;
			}

			public function setFechaInicioAttribute($value)
			{
				$fecha = date("Y-m-d",strtotime($value)); 
				$this->attributes['fecha_inicio']	=	$fecha;

			}

			public function getFechaFinalAttribute($value)
			{
				$value = date("d-m-Y",strtotime($value)); 
				return $value;
			}

			public function setFechaFinalAttribute($value)
			{
				$fecha = date("Y-m-d",strtotime($value)); 
				$this->attributes['fecha_final']	=	$fecha;

			}

	

}

?>