<?php

class Modulos extends Eloquent
{
	protected $table 	= 'modulos';
	protected $fillable = array('modulo');

	public function profilesModulos()
	{
		return $this->hasOne('ProfilesModulos');
	}

	public function profile($profiles_id)
	{		
		$profile = ProfilesModulos::where('profiles_id','=',$profiles_id)->where('modulos_id',"=",$this->id)->get();
		
		return $profile;
	}	


	public function subMenu()
	{
		return $this->hasOne('SubMenu');
	}
	



}
?>