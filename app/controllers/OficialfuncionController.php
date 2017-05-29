<?php

class OficialfuncionController extends BaseController
{
	
	protected $moduloId = '78';
	protected $up;
	protected $imgPath 	= 'uploads/oficialfuncion/'; 

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

		$data['modulo'] = "Oficialfuncion";
		$data['model']	= OficialFuncion::all();

		return View::make('oficialfuncion.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Oficialfuncion";
		$data['action'] = "create";
		return View::make('oficialfuncion.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();
		/*$up 	= $this->up->up($input['imagen'] , $this->imgPath );

			if($up != false)
			{
				$input['imagen'] = $up;
			}
*/
		OficialFuncion::create($input);

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
		$data['modelo'] = OficialFuncion::find($id);
		$data['modulo'] = "Oficialfuncion";
		$data['action'] = "edit";

		return View::make('oficialfuncion.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$oficialfuncion 	= OficialFuncion::find($id);
		$input  	= Input::all();

		
		

		$oficialfuncion->fill($input);
		$oficialfuncion->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		OficialFuncion::find($id)->delete();

		return $this->getIndex();		
	}

}

?>