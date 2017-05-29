<?php

class CiudadController extends BaseController
{
	protected $moduloId       = '43';
	protected $up;
	protected $imgPath 	= 'uploads/ciudad/'; 

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

		$data['modulo'] = "Ciudad";
		$data['model']	= Ciudad::all();

		return View::make('ciudad.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$data['modulo'] = "Ciudad";
		$data['action'] = "create";
		return View::make('ciudad.form')->with($data);
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
		Ciudad::create($input);

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
		$data['modelo'] = Ciudad::find($id);
		$data['modulo'] = "Ciudad";
		$data['action'] = "edit";

		return View::make('ciudad.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$ciudad 	= Ciudad::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($ciudad->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $ciudad->imagen;
		}
		

		$ciudad->fill($input);
		$ciudad->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        
		$id = Crypt::decrypt($id);
		Ciudad::find($id)->delete();

		return $this->getIndex();		
	}

}

?>