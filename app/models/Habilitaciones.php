<?php

class Habilitaciones extends Eloquent
{
	protected $table 	= 'habilitaciones';
	protected $guarded  = array('');

	public function BuenaFe()
	{
		return $this->belongsTo('BuenaFe');
	}

	public function getDniAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getM4Attribute($value)
	{	
		return $this->estados($value);
	}

	public function getM8Attribute($value)
	{	
		return $this->estados($value);
	}

	public function getFevaAfAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getFevaTrAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getLdAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getCondicionAttribute($value)
	{	
		return $this->estados($value);
	}


	//set atributes

	public function setDniAttribute($value)
	{
		$this->attributes['dni'] = $this->estadosReturn($value) ;
	}

	public function setM4Attribute($value)
	{
		$this->attributes['m4'] = $this->estadosReturn($value) ;
	}
	public function setM8Attribute($value)
	{
		$this->attributes['m8'] = $this->estadosReturn($value) ;
	}
	public function setFevaAfAttribute($value)
	{
		$this->attributes['feva_af'] = $this->estadosReturn($value) ;
	}
	public function setFevaTrAttribute($value)
	{
		$this->attributes['feva_tr'] = $this->estadosReturn($value) ;
	}
	public function setLdAttribute($value)
	{
		$this->attributes['ld'] = $this->estadosReturn($value) ;
	}
	public function setCondicionAttribute($value)
	{
		$this->attributes['condicion'] = $this->estadosReturn($value) ;
	}



	public function estadosReturn($value)
	{

		switch($value)
		{
			case 'no':
				return '0';
			break;
			
			case 'si':
				return '1';
			break;

			case 'pr':
				return '2';
			break;

			case 'HAB.':
				return '3';
			break;

			case 'NO HAB.':
				return '4';
			break;

			case 'PRECARIO':
				return '5';
			break;
		}

	}


	public function estados($estado) 
	{
		switch($estado)
		{
			case '0':
				return 'no';
			break;
			
			case '1':
				return 'si';
			break;

			case '2':
				return 'pr';
			break;

			case '3':
				return 'HABILITADO';
			break;

			case '4':
				return 'NO HABILITADO';
			break;

			case '5':
				return 'PRECARIO';
			break;
		}

	}
}

?>