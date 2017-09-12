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

		public function getfullFechaCompletaAttribute()
		{

			$dia =  date('D',strtotime($this->attributes['fecha_inicio']));

			if($dia == 'Mon')
			{
				$dia = 'Lunes';
			}
			if($dia == 'Tue')
			{
				$dia = 'Martes';
			}
			if($dia == 'Wed')
			{
				$dia = 'Miercoles';
			}
			if($dia == 'Thu')
			{
				$dia = 'Jueves';
			}
			if($dia == 'Fri')
			{
				$dia = 'Viernes';
			}
			if($dia == 'Sat')
			{
				$dia = 'Sabado';
			}
			if($dia == 'Sun')
			{
				$dia = 'Domingo';
			}

			$mes =  date('M',strtotime($this->attributes['fecha_inicio']));
			
				switch ($mes) {
					case 'Jan':
						$m = 'Enero';			
						break;	

					case 'Feb':
						$m = 'Febrero';			
						break;		

					case 'Mar':
						$m = 'Marzo';			
						break;	

					case 'Apr':
						$m = 'Abril';			
						break;
					case 'May':
						$m = 'Mayo';			
						break;	
					case 'Jun':
						$m = 'Junio';			
						break;	
					case 'Jul':
						$m = 'Julio';			
						break;				
					case 'Aug':
						$m = 'Agosto';			
						break;	
					case 'Sep':
						$m = 'Septiembre';			
						break;	
					case 'Oct':
						$m = 'Octubre';			
						break;				
					case 'Nov':
						$m = 'Noviembre';			
						break;		
					case 'Dec':
						$m = 'Diciembre';			
						break;
			
				}
			return $dia .' '. date('d',strtotime($this->attributes['fecha_inicio'])) .' de '. $m;

		}

		public function getAno(){
			$a =  date('Y',strtotime($this->attributes['fecha_inicio']));
			return $a;
		}

		public function getMesAttribute(){
			$mes =  date('M',strtotime($this->attributes['fecha_inicio']));
		
			switch ($mes) {
				case 'Jan':
					$m = 'Ene';			
					break;	

				case 'Feb':
					$m = 'Feb';			
					break;		

				case 'Mar':
					$m = 'Mar';			
					break;	

				case 'Apr':
					$m = 'Abr';			
					break;
				case 'May':
					$m = 'May';			
					break;	
				case 'Jun':
					$m = 'Jun';			
					break;	
				case 'Jul':
					$m = 'Jul';			
					break;				
				case 'Aug':
					$m = 'Ago';			
					break;	
				case 'Sep':
					$m = 'Sep';			
					break;	
				case 'Oct':
					$m = 'Oct';			
					break;				
				case 'Nov':
					$m = 'Nov';			
					break;		
				case 'Dec':
					$m = 'Dic';			
					break;
		
			}
			return $m;
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
			return $this->getDiaAttribute() .' '. date('d',strtotime($this->attributes['fecha_inicio'])) .' '.$this->getMesAttribute();
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