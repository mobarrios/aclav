<?php

class o2Staff extends Eloquent
{
	protected $table = 'o2_staff';
	protected $guarded = array('');

	public function Torneos()
	{
		return $this->belongsTo('Torneos');
	}

	public function BuenaFe()
	{
		return $this->hasMany('BuenaFe');
	}

	public function BuenaFeStaff()
	{
		return $this->hasMany('BuenaFeStaff');
	}

}

?>