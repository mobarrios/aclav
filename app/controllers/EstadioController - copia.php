<?php

class EstadioController extends BaseController
{


	public function __construct()
	{


	}


	public function getIndex()
	{

		$data['section'] 	=	'Estadio';
		return View::make('estadio.index')->with($data);
	}
}

?>