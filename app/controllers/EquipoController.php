<?php

class EquipoController extends BaseController
{
	protected $moduloId = '66';


	public function getIndex($id=null)
	{
		
		//$data['model'] =  Equipo::find($id);
		//$data['jugadores']

		//return View::make('club.equipo.detalle')->with($data) ;
		return $this->getDetalle();
	}

	public function getNew($club_id)
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['club_id'] = $club_id;	

		$data['action'] = 'create';

		return View::make('club.equipo.form')->with($data);
	}

	public function postNew()
	{

		$input = Input::all();

		$up 	= new upload();
		$up 	= $up->up($input['escudo'] ,'uploads/escudos/');
		

		if( $up != false)
		{
			$input['escudo'] =  $up;
		}
		else
		{
		   return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
		}

		$input['club_id'] = Session::get('club_id');

		Equipo::create($input);
		
		return Redirect::to('club/detalle')->with('seccess','Equipo creado correctamente'); 

	}

	public function getEdit($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		//$club_id	= Crypt::decrypt($club_id);
		$id 		= Crypt::decrypt($id);

		//$data['club_id'] = $club_id;

		$data['model'] 	 = Equipo::find($id);
		$data['action']  = 'edit';


		return View::make('club.equipo.form')->with($data);
	}

	public function postEdit($id)
	{
		$id 	= Crypt::decrypt($id);
		$model 	= Equipo::find($id);
		$input 	= Input::all();


		if($input['escudo'] != null)
		{

			$up = new upload();
			$up = $up->up($input['escudo'],'uploads/escudos/');

			if($up != false)
			{
				$input['escudo'] = $up;
			}

		}
		else
		{
			$input['escudo'] = $model->escudo;
		}


		$model->fill($input);
		$model->save();

		//return Redirect::to('equipo')->with('success','Registro editado Correctamente');
		return Redirect::back()->with('success','Registro editado Correctamente');
		
		
	}

	public function getDel($id , $club_id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id 	= Crypt::decrypt($id);

		Equipo::find($id)->delete();

		return Redirect::to('club/detalle/'.$club_id)->with('success','Equipo eliminado correctamente'); 
	}

	public function getDetalle($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		if($id == null)
		{
			//va desde el club
			$id = Session::get('equipo_id');

		}
		else
		{	
			//desde el admin
			$id = Crypt::decrypt($id);
			Session::put('equipo_id',$id);

		}

		Session::put('club_id',Equipo::find($id)->club_id);
		
		$data['equipo_id'] 	 = $id;

		$data['model'] 		 = Equipo::find($id);
		//$data['jugadores']   = BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->where('jugador_id','!=','0')->get();
		//$data['staffs']		 = BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->where('oficial_id','!=','0')->get();
		$data['partidos']	 = Partido::where('local_equipo_id','=',Session::get('equipo_id'))->orWhere('visita_equipo_id','=',Session::get('equipo_id'))->get();

		$data['formularios'] = Formulario::all();

		$data['temporadas'] =  Temporada::where('actual','=',1)->get();

		$data['torneos'] 	=  Temporada::where('actual','=',1)->first()->Torneos;

		$data['o2']			=  o2::where('equipo_id','=',$id)->get();


		return View::make('club.equipo.detalle')->with($data);
	}

}
?>