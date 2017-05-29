<?php

class TestController extends BaseController
{

	protected $moduloId = '2';

	public function crear()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}
	}

	public function eliminar()
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}
		
	}

	public function editar()
	{
		
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}
		

	}

	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}
		
		//


	}


}



?>