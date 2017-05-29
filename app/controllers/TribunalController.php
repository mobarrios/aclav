<?php

class TribunalController extends BaseController
{
	protected $moduloId = '68';

	protected $up;
	protected $imgPath 	= 'uploads/tribunal/'; 

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

		$data['modulo'] = "Tribunal";
		$temporada = Temporada::where('actual',1)->first();

		$desde = date('Y-m-d',strtotime($temporada->fecha_inicio));
		$hasta = date('Y-m-d',strtotime($temporada->fecha_final));

		//$data['model']	= Tribunal::whereBetween('vencimiento_sanc',array($desde,$hasta))->orderBy('id','DESC')->paginate(10);

		$data['model']	= Tribunal::where('temporada_id',$temporada->id)->orderBy('id','DESC')->paginate(10);


		return View::make('tribunal.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Tribunal";
		$data['action'] = "create";
		$data['serie']  = Series::lists('nombre_serie','id');
		$data['temporadas'] = Temporada::orderBy('created_at','DESC')->lists('nombre_temporada','id');


		return View::make('tribunal.form')->with($data);
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

		Tribunal::create($input);

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
		$data['modelo'] =  Tribunal::find($id);
		$data['modulo'] = "Tribunal";
		$data['action'] = "edit";
		$data['serie']  = Series::lists('nombre_serie','id');
		$data['temporadas'] = Temporada::orderBy('created_at','DESC')->lists('nombre_temporada','id');



		return View::make('tribunal.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$tribunal	= Tribunal::find($id);
		$input  	= Input::all();

				

		$tribunal->fill($input);
		$tribunal->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Tribunal::find($id)->delete();

		return Redirect::back();		
	}


}

?>