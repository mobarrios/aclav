<?php

class ArbitroController extends BaseController
{
	protected $moduloId		= '44';	
	protected $up;
	protected $imgPath 		= 'uploads/arbitro/'; 	


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

		$data['modulo'] = "Arbitro";
		$data['model']	= Arbitro::orderBy('apellido')->get();
		return View::make('arbitro.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Arbitro";
		$data['action'] = "create";
		return View::make('arbitro.form')->with($data);
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

		Arbitro::create($input);

		return $this->getIndex();

	}


	//clickeo en editar
	public function getEdit($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id 			=  Crypt::decrypt($id);
		$data['modelo'] =  Arbitro::find($id);
		$data['modulo'] = "Arbitro";
		$data['action'] = "edit";

		return View::make('arbitro.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$arbitro	= Arbitro::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($arbitro->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $arbitro->imagen;
		}
		

		$arbitro->fill($input);
		$arbitro->save();

		return $this->getIndex();
	}

	//clickeo en editar
	public function getEditperfil($id)
	{
		if(!parent::validarPermisos(85 ,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$id = Crypt::decrypt($id);
		$data['modelo'] =  Arbitro::find($id);
		$data['modulo'] = "Arbitro";
		$data['action'] = "edit";

		return View::make('arbitro.form')->with($data);
	}

	//procesa el formulario editar
	public function postEditperfil($id)
	{

		$id 		= Crypt::decrypt($id);
		$arbitro	= Arbitro::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($arbitro->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $arbitro->imagen;
		}
		

		$arbitro->fill($input);
		$arbitro->save();

		return Redirect::back();
	}

	public function getDetalle($id=null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$rest['model'] 	= Arbitro::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']	= 'arbitro';


		return View::make('arbitro.detalle')->with($rest);
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$id = Crypt::decrypt($id);
		Arbitro::find($id)->delete();

		return $this->getIndex();		
	}

}

?>