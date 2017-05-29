<?php

class Ciudad extends Eloquent
{
	protected $table 	= 'ciudad_nueva';
	protected $fillable = array('ciudad_nueva_nombre'); 

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