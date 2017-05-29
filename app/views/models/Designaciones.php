<?php

class Designaciones extends Eloquent
{
	protected $table 	= 	"designaciones";
	protected $guarded	= 	array('');

	
	public function Partido()
	{
		return $this->belongsTo('Partido');
	}

	public function Arbitro()
	{
		return $this->hasMany('Arbitro');
	}

	public function Supervisor()
	{
		return $this->hasMany('Supervisor');
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



	public function getEstadoAttribute($value)
	{
		switch($value)
		{
			case '0':
				return 'a Confirmar';
			break;
			case '1':
				return 'Aceptado';
			break;
			case '2':
				return 'Rechazado';
			break;
		}		
	}
}

?>