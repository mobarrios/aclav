<?php

class ProvinciaController extends BaseController
{
	protected $moduloId       = '42';
	protected $up;
	protected $imgPath 	= 'uploads/provincia/'; 

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

		$data['modulo'] = "Provincia";
		$data['model']	= Provincia::all();

		return View::make('provincia.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Provincia";
		$data['action'] = "create";
		return View::make('provincia.form')->with($data);
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
		Provincia::create($input);

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
		$data['modelo'] = Provincia::find($id);
		$data['modulo'] = "Provincia";
		$data['action'] = "edit";

		return View::make('provincia.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$provincia 	= Provincia::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($provincia->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $provincia->imagen;
		}
		

		$provincia->fill($input);
		$provincia->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);
		Provincia::find($id)->delete();

		return $this->getIndex();		
	}

}

?>