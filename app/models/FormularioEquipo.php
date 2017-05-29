<?php

class FormularioEquipo extends Eloquent
{
	
	protected $table = 'formulario_equipo';
	protected $fillable = array('formulario_id','equipo_id','estado','file');

}

?>