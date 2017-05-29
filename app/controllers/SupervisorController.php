<?php

class SupervisorController extends BaseController
{
	protected $moduloId       = '45';
	protected $up;
	protected $imgPath 	= 'uploads/supervisor/'; 

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

		$data['modulo'] = "Supervisor";
		$data['model']	= Supervisor::orderBy('apellido')->get();

		return View::make('supervisor.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Supervisor";
		$data['action'] = "create";
		return View::make('supervisor.form')->with($data);
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

		Supervisor::create($input);

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
		$data['modelo'] = Supervisor::find($id);
		$data['modulo'] = "supervisor";
		$data['action'] = "edit";

		return View::make('supervisor.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 			= Crypt::decrypt($id);
		$supervisor 	= Supervisor::find($id);
		$input  		= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($supervisor->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $supervisor->imagen;
		}
		
		

		$supervisor->fill($input);
		$supervisor->save();

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
		$data['modelo'] =  Supervisor::find($id);
		$data['modulo'] = "Supervisor";
		$data['action'] = "edit";

		return View::make('supervisor.form')->with($data);
	}

	//procesa el formulario editar
	public function postEditperfil($id)
	{

		$id 		= Crypt::decrypt($id);
		$supervisor	= Supervisor::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($supervisor->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $supervisor->imagen;
		}
		

		$supervisor->fill($input);
		$supervisor->save();

		return Redirect::back();
	}



	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);
		Supervisor::find($id)->delete();

		return $this->getIndex();		
	}
	public function getDetalle($id=null)
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        
		$rest['model'] 	= Supervisor::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']	= 'supervisor';


		return View::make('supervisor.detalle')->with($rest);
	}

}

?>