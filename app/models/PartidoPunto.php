<?php

class PartidoPunto extends Eloquent
{
	protected $table = 'partido_punto';

	public function partido()
	{
		return $this->belongsTo('Partido');
	}

	public function estadio(){
		return $this->belongsTo('Estadio');
	}

}

?>