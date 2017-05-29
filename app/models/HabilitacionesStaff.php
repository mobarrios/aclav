<?php

class HabilitacionesStaff extends Eloquent
{
	protected $table = 'habilitaciones_staff';
	protected $guarded = array('');



	public function BuenaFeStaff()
	{
		return $this->belongsTo('BuenaFeStaff');
	}

	public function getDniAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getTitAttribute($value)
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

	public function getMatAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getDesAttribute($value)
	{	
		return $this->estados($value);
	}

	public function getCondicionAttribute($value)
	{	
		return $this->estados($value);
	}

	//set attributes

	public function setDniAttribute($value)
	{
		$this->attributes['dni'] = $this->estadosReturn($value) ;
	}
	public function setTitAttribute($value)
	{
		$this->attributes['tit'] = $this->estadosReturn($value) ;
	}
	public function setM8Attribute($value)
	{
		$this->attributes['m8'] = $this->estadosReturn($value) ;
	}
	public function setFevaAfAttribute($value)
	{
		$this->attributes['feva_af'] = $this->estadosReturn($value) ;
	}
	public function setMatAttribute($value)
	{
		$this->attributes['mat'] = $this->estadosReturn($value) ;
	}
	public function setDesAttribute($value)
	{
		$this->attributes['des'] = $this->estadosReturn($value) ;
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