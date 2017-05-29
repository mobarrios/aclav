<?php

class NoticiasPosicion extends Eloquent

{
	protected $table   ='noticias_posicion';
	protected $guarded = array('');

	public function Noticias()
	{
		return $this->belongsTo('Noticias');
	}
}

?>