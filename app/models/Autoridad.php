<?php

class Autoridad extends Eloquent
{
	protected $table 	= 'autoridad';
	protected $fillable = array('apellido','nombre','email','cargo','club_actual','imagen'); 
}

?>