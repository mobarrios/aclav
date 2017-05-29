<?php

class OficialController extends BaseController
{
	protected $moduloId       = '39';
	protected $up;
	protected $imgPath 	= 'uploads/oficial/'; 

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

		$data['modulo'] = "Oficial";
		$data['model']	= Oficial::orderBy('apellido')->get();

		return View::make('oficial.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Oficial";
		$data['action'] = "create";
		$data['funciones']	= OficialFuncion::lists('funcion', 'id');
		
		return View::make('oficial.form')->with($data);
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

		Oficial::create($input);

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
		$data['modelo'] = Oficial::find($id);
		$data['modulo'] = "Oficial";
		$data['action'] = "edit";
		$data['funciones']	= OficialFuncion::lists('funcion', 'id');
		

		return View::make('oficial.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$oficial 	= Oficial::find($id);
		$input  	= Input::all();	

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($oficial->imagen, $this->imgPath);
				
				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $oficial->imagen;
		}
		

		$oficial->fill($input);
		$oficial->save();

		//return $this->getIndex();
			return Redirect::back()->with('Alert','Dato Editado correctamente');
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);
		Oficial::find($id)->delete();

		return $this->getIndex();		
	}

	public function getDetalle($id=null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$rest['model'] 	= Oficial::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']	= 'oficial';


		return View::make('oficial.detalle')->with($rest);
	}

}

?>