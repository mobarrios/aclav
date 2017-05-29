<?php

class PlayoffwebController extends BaseController
{
	protected $moduloId = '82';

	protected $up;
	protected $imgPath 	= 'uploads/contenidos/playoffweb'; 

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

		$data['modulo'] = "Playoffweb";
		$data['model']	= Playoffweb::all();

		return View::make('contenido.playoffweb.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Playoffweb";
		$data['action'] = "create";
		return View::make('contenido.playoffweb.form')->with($data);
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

		Playoffweb::create($input);

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
		$data['modelo'] =  Playoffweb::find($id);
		$data['modulo'] = "Playoffweb";
		$data['action'] = "edit";

		return View::make('contenido.playoffweb.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$playoffweb	= Playoffweb::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($playoffweb->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $playoffweb->imagen;
		}
		

		$playoffweb->fill($input);
		$playoffweb->save();

		return $this->getIndex();
	}
	public function getDetalle($id=null)
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		$rest['model'] 	= Playoffweb::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']	= 'playoffweb';


		return View::make('contenido.playoffweb.detalle')->with($rest);
	}

public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Playoffweb::find($id)->delete();

		return $this->getIndex();		
	}

}

?>