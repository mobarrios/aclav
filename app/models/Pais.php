<?php

class Pais extends Eloquent
{
	protected $table	=	'pais';

	public function Jugador()
	{
		return $this->hasMany('Jugador');
	}
}
?>