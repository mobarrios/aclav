<?php

class TablaPosicion extends Eloquent
{
	protected $table = 'tabla_posicion';
	protected $guarded = array('');	

	public function Equipo()
	{
		return $this->belongsTo('Equipo');
	}

	public function TorneoFase()
	{
		return $this->belongsTo('TorneoFase');
	}
	
	
}
?>