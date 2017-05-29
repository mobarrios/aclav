<?php

class o2 extends Eloquent
{
	protected $table = 'o2';
	protected $guarded = array('');

	public function Torneos()
	{
		return $this->belongsTo('Torneos');
	}

	public function BuenaFe()
	{
		return $this->hasMany('BuenaFe')->orderBy('nro','ASC');
	}
	
	public function BuenaFeStaff()
	{
		return $this->hasMany('BuenaFeStaff');
	}

	public function Equipo()
	{
		return $this->belongsTo('Equipo');
	}
}

?>