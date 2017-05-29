<?php

class StaffController extends BaseController
{
	protected $moduloId = '61';
	protected $up;
	protected $imgPath 	= 'uploads/contenidos/staff/'; 

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

		$data['modulo'] = "Staff";
		$data['model']	= Staff::all();

		return View::make('contenido.staff.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Staff";
		$data['action'] = "create";
		return View::make('contenido.staff.form')->with($data);
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
		Staff::create($input);

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
		$data['modelo'] =  Staff::find($id);
		$data['modulo'] = "Staff";
		$data['action'] = "edit";

		return View::make('contenido.staff.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$staff	    = Staff::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($staff->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $staff->imagen;
		}
		

		$staff->fill($input);
		$staff->save();

		return $this->getIndex();
	}
	
	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Staff::find($id)->delete();

		return $this->getIndex();		
	}


}

?>