<?php

class Entrevista extends Eloquent
{
	protected $table 	= 'entrevista';
	protected $fillable = array('titulo','copete','cuerpo','fuente','imagen','estado'); 
}

?>