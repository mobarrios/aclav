<?php

class TorneoEquipo extends Eloquent
{
	protected $table = 'torneo_equipo';
	protected $fillable = array('equipo_id','torneo_id');


	public function detalleEquipo()
	{
		return $this->belongsTo('Equipo','id');

	}


}

?>