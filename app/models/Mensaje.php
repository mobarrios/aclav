<?php

class Mensaje extends Eloquent
{
	protected $table 	= 'mensaje';
	protected $fillable = array('mensaje','estado'); 
}

?>