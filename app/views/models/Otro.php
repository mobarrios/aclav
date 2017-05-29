<?php

class Otro extends Eloquent
{
	
	protected $table	 	= 'otro';
	protected $guarded  	= array('');

	public function PartidoCostoItem()
	{
		return $this->hasMany('PartidoCostoItem');
	}

	public function Partido()
	{
		return $this->hasMany('Partido');
	}	

	public function Designaciones()
	{
		return $this->belongsTo('Designaciones');
	}

	public function Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('arbitro_id','=',$this->id)->first();

		return $des;
	}

	public function Arbitro1Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('arbitro_1_id','=',$this->id)->first();

		return $des;
	}

	public function Arbitro2Designacion($idPartido)
	{
		//$ret = Partido::find($idPartido);
		$des = Designaciones::where('partido_id','=',$idPartido)->where('arbitro_2_id','=',$this->id)->first();

		return $des;
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


	public function getTipoAttribute($value)
 	{
 		switch ($value) {
 			case '1':
 				return 'Evaluador Arbitral';
 				break;
 			case '2':
 				return 'Observador ACLAV';
 				break;
 			case '3':
 				return 'Delegado ACLAV';
 				break;
 
 		}
		return $value;
 	}
}

?>