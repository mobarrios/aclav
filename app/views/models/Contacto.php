<?php

class Contacto extends Eloquent
{
	protected $table 	= 'contacto';
	protected $fillable = array('telefono','direccion','email','mapa','estado'); 
}

?>