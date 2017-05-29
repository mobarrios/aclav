<?php

class Torneos extends Eloquent
{
	protected $table 	=	"torneo";
	protected $fillable	= array('nombre_torneo','serie_id','temporada_id','fecha_inicio','fecha_final','actualiza_o2','actualiza_o2_cantidad','presenta_o2');
	//protected $guarded  = array('');



	public function TorneoFase()
	{
		return $this->hasMany('TorneoFase','torneo_id');
	}


	// EL SEGUNDO PARAMETRO ES LA TABLA INTERMEDIA Y EL 3 Y 4 SON LOS ID DE REALACION
	public function Equipo()
	{
		return $this->belongsToMany('Equipo','torneo_equipo','torneo_id')->orderBy('nombre','ASC');
	}


	 public function Temporada()
    {
        return $this->belongsTo('Temporada');
    }

    public function o2()
    {
    	return $this->hasMany('o2');
    }


	public function getSerieIdAttribute($value)
	{
		$serie = Series::find($value);

		return $serie->nombre_serie;

	}

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