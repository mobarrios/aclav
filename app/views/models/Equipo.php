<?php

Class Equipo extends Eloquent
{

	protected $table = 'equipo';
	//protected $fillable = array('nombre','sexo','club_id','escudo');
	protected $guarded = array('');


	public function PartidoCostoItem()
	{
		return $this->hasMany('PartidoCostoItem');
	}

	public function Club()
	{
		return $this->belongsTo('club');
	}

	//REALACIONA CON LA TABLA INTERMEDIA
	public function Torneo()
	{
		 return $this->belongsToMany('Torneo');
	}

	public function TablaPosicion()
	{
		 return $this->hasMany('TablaPosicion');
	}

	public function o2()
	{
		return $this->hasMany('o2');
	}

}

	
?>