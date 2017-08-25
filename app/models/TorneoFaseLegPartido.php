<?php

class TorneoFaseLegPartido extends Eloquent
{
	
	protected $table 	=	'torneo_fase_leg_partido';
	protected $fillable	= 	array('*');


	public function TorneoFaseLeg()
	{
		return $this->belongsTo('TorneoFaseLeg','torneo_fase_leg_id');
	}
}
?>