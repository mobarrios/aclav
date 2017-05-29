<?php

class Sponsor extends Eloquent
{
	protected $table 	= 'sponsor';
	protected $fillable = array('url','imagen','posicion','estado'); 
}

?>