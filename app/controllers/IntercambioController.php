<?php

class IntercambioController extends BaseController
{
	protected $moduloId = '76';

	protected $up;
	protected $imgPath 	= 'uploads/intercambio/'; 

	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();

	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Intercambio";
		$data['model']	= Intercambio::all();

		return View::make('intercambio.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Intercambio";
		$data['action'] = "create";
		return View::make('intercambio.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();
		
		$up 	= $this->up->up($input['imagen'] , $this->imgPath );

			if($up != false)
			{
				$input['imagen'] = $up;
			}
			else
			  {
			   return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
			  }

		Intercambio::create($input);

		return $this->getIndex();

	}


	//clickeo en editar
	public function getEdit($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$data['modelo'] = Intercambio::find($id);
		$data['modulo'] = "Intercambio";
		$data['action'] = "edit";

		return View::make('intercambio.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{


		$id 		= Crypt::decrypt($id);
		$intercambio 	= Intercambio::find($id);
		$input  	= Input::all();

		
		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($intercambio->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $intercambio->imagen;
		}



		$intercambio->fill($input);
		$intercambio->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$intercambio = Intercambio::find($id);

		$this->up->del($intercambio->imagen, $this->imgPath);
		
		$intercambio->delete();
		return $this->getIndex();		
	}

}

?>