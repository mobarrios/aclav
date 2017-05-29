<?php

class Oficial extends Eloquent
{
	protected $table 	= 'oficial';
	protected $fillable = array('apellido','nombre','funcion_id','fecha_nacimiento','dni','imagen'); 

	public function getFullNameAttribute()
	{
		return $this->attributes['apellido'].', '.$this->attributes['nombre'];
	}


	public function funcion()
	{
		return $this->belongsTo('OficialFuncion');
	}

	public function BuenaFeStaff()
	{
		return $this->belongsTo('BuenaFeStaff');
	}



		//fechas

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