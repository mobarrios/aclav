<?php

class TorneoFase extends Eloquent
{
	protected $table 		= 'torneo_fase';
	protected $fillable 	= array('torneo_id','tipo_fase_id','sistema_punto_id','nombre','cant_grupos');


	public function Torneos()
	{
		return $this->belongsTo('Torneos');
	}

	public function equipo()
	{
		return $this->belongsToMany('Equipo','torneo_fase_equipo','torneo_fase_id');
	}


	public function leg()
	{
		return $this->hasMany('TorneoFaseLeg');
	}


	public function getSistemaPuntoIdAttribute($value)
	{
		$asignacion = SistemaPuntoAsignacion::find($value);
		return $asignacion;
	}

	public function TablaPosicion()
	{
		return $this->hasMany('TablaPosicion','fase_id')->orderBy('puntos','DESC')->orderBy('partido_ganado','DESC')->orderBy('set_coeficiente','DESC')->orderBy('punto_coeficiente','DESC');
	}
		
	

}

?>