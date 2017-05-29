<?php

class Club extends Eloquent
{
	protected $table = 'club';
	protected $fillable = array('nombre','tipo','federacion','nacionalidad','denominacion','escudo');

	public function Equipo()
	{
        return $this->hasMany('Equipo');
	}

	public function Jugador()
	{
		return $this->hasMany('Jugador');
	}

	public function Noticias()
	{
		return $this->belongsToMany('Noticias','noticias_club');
	}
}
?>
