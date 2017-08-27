<?php

class Partido extends Eloquent
{
	protected $table	=	'partido';
	protected $guarded	=	array('');
	

	public function PartidoCosto()
	{
		return $this->hasMany('PartidoCosto');
	}

	public function Designaciones()
	{
		return $this->hasMany('Designaciones');
	}

	//puntos x partido 
	public function puntoPartido()
	{
		return $this->hasMany('PartidoPunto')->orderBy('set_numero','ASC');
	}


	public function puntoPorSet($set)
	{
		$pto = PartidoPunto::where('partido_id','=', $this->attributes['id'])->where('set_numero','=',$set)->first();

		return $pto;

	}

	public function ventajaPorSet($set)
	{
		$local = PartidoPunto::where('partido_id','=', $this->attributes['id'])->where('set_numero','=',$set)->first()->puntos_local;
		$visita = PartidoPunto::where('partido_id','=', $this->attributes['id'])->where('set_numero','=',$set)->first()->puntos_visita;
		//$data = [];

		if($local > $visita){
				$data['local'] = '<b>'.$local.'</b>';		
				$data['visita'] = $visita;		
		}
		if($visita > $local){
			$data['visita'] = '<b>'.$visita.'</b>';		
			$data['local'] = $local;
		}
		if($visita == $local){
			$data['visita'] = '<b>'.$visita.'</b>';		
			$data['local'] = $local;
		}

		return $data;									

	}


	// detalle del equipo
	public function getLocalEquipoIdAttribute($value)
	{
		$local	=	Equipo::find($value);

		return $local;
	}

	
	public function getVisitaEquipoIdAttribute($value)
	{
		$visita	=	Equipo::find($value);

		return $visita;
	}


	//detalle del estadio

	/*
	public function getEstadioIdAttribute($value)
	{
		$estadio 	=	Estadio::find($value);

		return $estadio;
	}
	*/

	public function Estadio()
	{	
		return $this->belongsTo('Estadio','estadio_id');
	}
	
	public function Arbitro1()
	{
		return $this->belongsTo('Arbitro','arbitro_1_id');
	}
	
	public function Arbitro2()
	{
		return $this->belongsTo('Arbitro','arbitro_2_id');
	}

	public function Supervisor1()
	{
		return $this->belongsTo('Supervisor','supervisor_1_id');
	}

	public function Supervisor2()
	{
		return $this->belongsTo('Supervisor','supervisor_2_id');
	}


	//detalle del arbitros
	/*public function getArbitro1IdAttribute($value)
	{
		$arbitro 	=	Arbitro::find($value);
		return $arbitro;
	}

	public function getArbitro2IdAttribute($value)
	{
		$arbitro 	=	Arbitro::find($value);

		return $arbitro;
	}

*/


		//fechas

		public function getDiaAttribute()
		{

			$dia =  date('D',strtotime($this->attributes['fecha_inicio']));

			if($dia == 'Mon')
			{
				$dia = 'Lun';
			}
			if($dia == 'Tue')
			{
				$dia = 'Mar';
			}
			if($dia == 'Wed')
			{
				$dia = 'Mie';
			}
			if($dia == 'Thu')
			{
				$dia = 'Jue';
			}
			if($dia == 'Fri')
			{
				$dia = 'Vie';
			}
			if($dia == 'Sat')
			{
				$dia = 'Sab';
			}
			if($dia == 'Sun')
			{
				$dia = 'Dom';
			}

		return $dia;

		}


		public function getFechaInicioAttribute($value)
		{
			if($value == '1969-12-31' )
			{
				return 'a Confirmar';
			}
			else
			{
					$value = date("d-m-Y",strtotime($value));
					return $value; 
			}

		
			
		}

		public function setFechaInicioAttribute($value)
		{
			$fecha = date("Y-m-d",strtotime($value)); 
			$this->attributes['fecha_inicio']	=	$fecha;

		}

		public function getFechaDeInicio(){
			setlocale(LC_ALL,"es_ES");
			$today = $this->attributes['fecha_inicio'];
        	$date_string = utf8_encode(strftime('%d %B %Y', strtotime($today)));
        	return $date_string;
		}

		public function getHoraAttribute($value)
		{
			if($value == Null )
				return 'a Confirmar';
			else
				return $value;
		}


}

?>