<?php

class Entrevistas extends Eloquent
{
	protected $table 	= 'entrevista';
	protected $fillable = array('titulo','copete','cuerpo','fuente','imagen','estado'); 
}

?>