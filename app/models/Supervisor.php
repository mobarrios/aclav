<?php

class Supervisor extends Eloquent
{
	protected $table 	= 'supervisor';
	protected $guarded = array(''); 


	public function PartidoCostoItem()
	{
		return $this->hasMany('PartidoCostoItem');
	}

	public function Designaciones()
	{
		return $this->belongsTo('Designaciones');
	}


	public function Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('supervisor_id','=',$this->id)->first();
		
		return $des;
	}

	public function Supervisor1Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('supervisor_1_id','=',$this->id)->first();

		return $des;
	}

	public function Supervisor2Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('supervisor_2_id','=',$this->id)->first();

		return $des;
	}

	
	public function Partido()
	{
		return $this->hasMany('Partido');
	}	

	public function getFullNameAttribute()
	{

		return $this->attributes['apellido'].', '.$this->attributes['nombre'];
	}


	public function Ciudad()
	{
		return $this->belongsTo('Ciudad');
	}
	public function Provincia()
	{
		return $this->belongsTo('Provincia');
	}
	
	
	public function getFechaNacimientoAttribute($value)
 	{
 		$value = date("d-m-Y",strtotime($value)); 
		return $value;
 	}
 	
 	public function setFechaNacimientoAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_nacimiento']	=	$fecha;
	}

}

?>