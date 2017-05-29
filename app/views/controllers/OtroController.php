<?php

class OtroController extends BaseController
{
	protected $moduloId		= '46';	
	protected $up;
	protected $imgPath 		= 'uploads/otro/'; 	
	protected $tipos 		= array();



	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();

		$tipos = array('1'=>'Evaluador Arbitral', '2'=>'Observador ACLAV', '3'=>'Delegado ACLAV');

		$this->tipos = $tipos;

	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Otro";
		$data['model']	= Otro::orderBy('apellido')->get();

		return View::make('otro.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['modulo'] = "Otro";
		$data['action'] = "create";
		$data['tipos']  = $this->tipos;

		return View::make('otro.form')->with($data);
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

		Otro::create($input);

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
		$data['modelo'] =  Otro::find($id);
		$data['modulo'] = "Otro";
		$data['action'] = "edit";
		$data['tipos'] = $this->tipos;

		return View::make('otro.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$arbitro	= Otro::find($id);
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
		$data['modelo'] =  Otro::find($id);
		$data['modulo'] = "Otro";
		$data['action'] = "edit";

		$data['tipos'] = $this->tipos;
		
		return View::make('otro.form')->with($data);
	}

	//procesa el formulario editar
	public function postEditperfil($id)
	{

		$id 		= Crypt::decrypt($id);
		$arbitro	= Otro::find($id);
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

		$rest['model'] 		= Otro::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';
		$rest['modulo']		= 'otro';


		return View::make('otro.detalle')->with($rest);
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$id = Crypt::decrypt($id);
		Otro::find($id)->delete();

		return $this->getIndex();		
	}

}

?>