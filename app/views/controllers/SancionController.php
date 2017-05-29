<?php

class SancionController extends BaseController
{
	protected $moduloId = '68';

	protected $up;
	protected $imgPath 	= 'uploads/sancion/'; 

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

		$data['modulo'] = "Sancion";
		$data['model']	= Sancion::orderBy('id','DESC')->paginate(10);

		return View::make('sancion.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Sancion";
		$data['action'] = "create";
		return View::make('sancion.form')->with($data);
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
			else
  {
   return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
  }*/

		Sancion::create($input);

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
		$data['modelo'] =  Sancion::find($id);
		$data['modulo'] = "Sancion";
		$data['action'] = "edit";

		return View::make('sancion.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$sancion	= Sancion::find($id);
		$input  	= Input::all();

				

		$sancion->fill($input);
		$sancion->save();

		return $this->getIndex();
	}

public function getDetalle($id=null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$rest['model'] 	= Sancion::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']	= 'sancion';


		return View::make('sancion.detalle')->with($rest);
	}

public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$id = Crypt::decrypt($id);
		Sancion::find($id)->delete();

		return $this->getIndex();		
	}

}

?>