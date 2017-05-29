<?php

class Noticias extends Eloquent
{
	protected $table = 'noticias';

	public function club()
	{
		return $this->belongsToMany('club','noticias_club');
	}
}

?>