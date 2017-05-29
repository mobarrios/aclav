<?php

class EstadisticaoController extends BaseController
{
	protected $moduloId = '80';
	
	protected $up;
	protected $imgPath 	= 'uploads/contenidos/estadisticao/'; 

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

		$data['modulo'] = "Estadísticas por Encuentros";
		$data['model']	= Estadisticao::all();

		return View::make('contenido.estadisticao.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Estadísticas por Encuentros";
		$data['action'] = "create";
		return View::make('contenido.estadisticao.form')->with($data);
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

		Estadisticao::create($input);

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
		$data['modelo'] = Estadisticao::find($id);
		$data['modulo'] = "Estadisticao";
		$data['action'] = "edit";

		return View::make('contenido.estadisticao.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$estadisticao 	= Estadisticao::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($estadisticao->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $estadisticao->imagen;
		}
		

		$estadisticao->fill($input);
		$estadisticao->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Estadisticao::find($id)->delete();

		return $this->getIndex();		
	}

}

?>