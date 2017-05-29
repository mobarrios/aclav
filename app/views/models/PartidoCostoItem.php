<?php

class PartidoCostoItem extends Eloquent
{

	protected $table 	= 'partido_costo_item';
	protected $guarded 	= array('');	


	public function Equipo()
	{
		return $this->belongsTo('Equipo');
	}
	public function CostoItem()
	{
		return $this->belongsTo('CostoItem');
	}

	public function PartidoCosto()
	{
		return $this->belongsTo('PartidoCosto');
	}

	public function Arbitro()
	{
		return $this->belongsTo('Arbitro');
	}

	public function Supervisor()
	{
		return $this->belongsTo('Supervisor');
	}
}


?>