<?php

class Provincia extends Eloquent
{
	protected $table 	= 'provincia_nueva';
	protected $fillable = array('provincia_nombre'); 


	public function Arbitro()
	{
		return $this->hasMany('Arbitro');
	}

	public function Supervisor()
	{
		return $this->hasMany('Supervisor');
	}
	public function Estadio()
	{
		return $this->hasMany('Estadio');
	}
}

?>