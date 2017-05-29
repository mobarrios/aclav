<?php

class EspecialController extends BaseController
{
	protected $moduloId = '67';

	protected $up;
	protected $imgPath 	= 'uploads/contenidos/especial/'; 

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
		$data['modulo'] = "Especial";
		$data['model']	= Especial::all();

		return View::make('contenido.especial.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Especial";
		$data['action'] = "create";
		return View::make('contenido.especial.form')->with($data);
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

		Especial::create($input);

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
		$data['modelo'] = Especial::find($id);
		$data['modulo'] = "Especial";
		$data['action'] = "edit";

		return View::make('contenido.especial.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$especial	= Especial::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($especial->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $especial->imagen;
		}
		

		$especial->fill($input);
		$especial->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Especial::find($id)->delete();

		return $this->getIndex();		
	}

}

?>