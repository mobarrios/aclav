<?php

class OficialFuncion extends Eloquent
{
	protected $table 	= 'oficial_funcion';
	protected $fillable = array('funcion'); 

	public function Oficial()
	{
		return $this->hasMany('Oficial');
	}

	public function BuenaFeStaff()
	{
		return $this->hasMany('BuenaFeStaff');
	}
}

?>