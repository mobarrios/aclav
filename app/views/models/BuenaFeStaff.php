<?php
class BuenaFeStaff extends Eloquent
{
	protected $table = 'buena_fe_staff';
	protected $guarded = array('');


	public function BuenaFeStaffBis()
	{
		return $this->hasMany('BuenaFeStaffBis');
	}

	public function Oficial()
	{
		return $this->belongsTo('Oficial');
	}

	public function Funcion()
	{
		return $this->belongsTo('OficialFuncion','oficial_funcion_id');
	}

	public function o2()
	{
		return $this->belongsTo('o2');
	}

	public function HabilitacionesStaff()
	{
		return $this->hasOne('HabilitacionesStaff');
	}

	public function getFechaDesdeAttribute($value)
	{
		$value = date("d-m-Y",strtotime($value)); 
		return $value;
	}

	public function setFechaDesdeAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_desde']	=	$fecha;

	}
	public function getFechaHastaAttribute($value)
	{
		if($value == '1969-12-31')
			return 'actual';
		else	
			return date("d-m-Y",strtotime($value)); 
		//$value = date("d-m-Y",strtotime($value)); 
		//return $value;
	}

	public function setFechaHastaAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_hasta']	=	$fecha;

	}
}

?>