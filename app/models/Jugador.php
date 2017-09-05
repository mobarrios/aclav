<?php 

class Jugador extends Eloquent
{
	
	protected $table = 'jugador';

 	//protected $fillable = array('nombre', 'apellido', 'dni','pais_id','sexo','lugar_nacimiento','fecha_nacimiento','foto');
 	protected $guarded	= array('');

 	
 	public function getFullNameAttribute()
 	{
 		return $this->attributes['apellido'].', '.$this->attributes['nombre'];
 	}

 	public function Club()
 	{
 		return $this->belongsTo('club');
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
 
 	public function BuenaFe()
	{
		return $this->hasMany('buenafe')->orderBy('nro','ASC');
	}


	public function Pais()
	{
		return $this->belongsTo('Pais');
	}

	public function Posicion($val)
	{
		if($val == 'O'){
		return 'Opuesto';
		};

		if($val == 'A'){
		return 'Armador';
		};

		if($val == 'L'){
		return 'Libero';
		};

		if($val == 'C'){
		return 'Central';
		};

		if($val == 'PR'){
		return 'Punta Receptor';
		};

		if($val == 'U'){
		return 'Universal';
		};

	}
	/*
	public function getPaisIdAttribute($value)
	{
		$pais = Pais::find($value);
		return $pais->nombre;

	}
	*/

}

?>