<?php

class Staff extends Eloquent
{
	protected $table 	= 'staff';
	protected $fillable = array('apellido','nombre','email','cargo','tel','imagen'); 
}

?>