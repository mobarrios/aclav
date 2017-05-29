<?php

class Series extends Eloquent
{
	protected $table = 'serie';	

	public function Tribunal()
	{
		return $this->hasMany('Tribunal');
	}
}

?>