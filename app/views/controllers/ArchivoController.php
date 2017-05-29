<?php

class ArchivoController extends BaseController
{
	protected $moduloId = '57';
	protected $up;
	protected $imgPath 	= 'uploads/contenidos/archivo/'; 

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

		$data['modulo'] = "Archivo";
		$data['model']	= Archivo::all();

		return View::make('contenido.archivo.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Archivo";
		$data['action'] = "create";
		return View::make('contenido.archivo.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();

		$up 	= $this->up->up($input['archivo'] , $this->imgPath );

		if($up != false)
		{
			$input['archivo'] = $up;
		}
		else
		{
			return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
		}


		Archivo::create($input);

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

		$data['modelo'] = Archivo::find($id);
		$data['modulo'] = "Archivo";
		$data['action'] = "edit";

		return View::make('contenido.archivo.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$archivo 	= Archivo::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($archivo->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $archivo->imagen;
		}
		

		$archivo->fill($input);
		$archivo->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Archivo::find($id)->delete();

		return $this->getIndex();		
	}

}

?>