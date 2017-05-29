<?php

class Profiles extends Eloquent
{
	
	Protected	$table = 'profiles';
	protected   $fillable = array('grupo','is_equipo','is_arbitro','is_supervisor');

	public function User()
	{
		return $this->hasMany('User','profiles_id')->orderBy('usuario','ASC');
	}

	
}