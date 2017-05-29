<?php

class SubMenu extends Eloquent
{
	
	protected $table 	= 	"sub_menu";
	protected $fillable =	array('nombre','menu_id','modulos_id','icon');
	
	public function menu()
	{
		return $this->belonsTo('Menu');
	}

	public function modulo()
	{
		return $this->belongsTo('Modulos','modulos_id');
	}
}

?>
