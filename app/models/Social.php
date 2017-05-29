<?php

class Social extends Eloquent
{
	protected $table 	= 'social';
	protected $fillable = array('titulo','copete','cuerpo','fuente','imagen','estado'); 
}

?>