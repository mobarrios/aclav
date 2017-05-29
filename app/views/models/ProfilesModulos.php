<?php

class ProfilesModulos extends Eloquent
{
	protected $table = 'profiles_modulos';



	public function modulos()
	{
		return $this->belongsTo('Modulos','modulos_id');
	}
}
?>