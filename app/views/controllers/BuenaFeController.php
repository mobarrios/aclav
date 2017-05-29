<?php

class BuenaFeController extends BaseController
{

	public function getBaja($ente , $id)
	{
		if($ente == 'jugador')
		{
			$bf = BuenaFe::find(Crypt::decrypt($id));
			$bf->fecha_hasta = date('Y-m-d');
			$bf->baja = 1;
			$bf->save();

			return Redirect::back()->with('warning','Jugador dado de Baja');

		}
		elseif($ente == 'staff')
		{
			$bf = BuenaFeStaff::find(Crypt::decrypt($id));
			$bf->fecha_hasta = date('Y-m-d');
			$bf->baja = 1;
			$bf->save();

			return Redirect::back()->with('warning','Oficial dado de Baja');

		}

	}


	public function getPresentar($o2_id)
	{

		if(!parent::validarPermisos('86','editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$o2 = o2::find($o2_id);
		$o2->presentado = 1;
		$o2->save();

		//return Redirect::back()->with('error','O2 Presentado');
		return Redirect::to('equipo');

	}

	public function getCrear($id = null)
	{

		$id 				= Crypt::decrypt($id);
		$equipoSexo 		= Equipo::find($id);

		//crea la lista de buena fe

			for($i=1 ; $i <= 20 ; $i++)
			{
				$buenaFe	  			= new BuenaFe();
				$buenaFe->nro 			= $i;
				$buenaFe->temporada_id  = Session::get('temporada_actual_id');
				$buenaFe->equipo_id	   	= $id;
				$buenaFe->save();
			}

		//crea buena fe staff
			for($i=1; $i<=9 ;$i++)
			{
				$buenaFeStaff 				= new BuenaFeStaff();
				$buenaFeStaff->nro  		= $i;
				$buenaFeStaff->temporada_id = Session::get('temporada_actual_id');
				$buenaFeStaff->equipo_id	= $id;
				$buenaFeStaff->save();			
			}	

		$equipoSexo->o2_creado = 1;
		$equipoSexo->save();

		$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 


		$data['staffs']		= BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('id','ASC')->get(); 
		
		$data['funcion']	= OficialFuncion::lists('funcion','id');
		

		return View::make('club.buenafe.index')->with($data);

	}	

	public function getEdit($id = null , $torneo_id = null , $id_o2 = null , $tipo = false)
	{

		if(!parent::validarPermisos('86','listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id 				= Crypt::decrypt($id);
		$torneo_id 			= Crypt::decrypt($torneo_id);
		
		$equipoSexo 		= o2::find($id);

		$data['jugadores']  = Jugador::where('sexo','=',$equipoSexo->Equipo->sexo)->orderBy('apellido','ASC')->get()->lists('full_name','id');
		$data['oficiales']	= Oficial::orderBy('apellido','ASC')->get()->lists('full_name','id');

		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->Orderby('nro','ASC')->get(); 
		// ok 28-10
		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 
		//$data['staffs']		= BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('id','ASC')->get(); 
	
		$data['torneo']		= Torneos::find($torneo_id);
		$data['temporada']  = Temporada::find($data['torneo']->temporada_id);

		$data['lista']		= o2::find($id);

		$data['staffs']		= BuenaFeStaff::all(); 
			
		$data['o2_id']		= $id;

		$data['funcion']	= OficialFuncion::all()->lists('funcion','id');


		if($tipo == 'jugador')
		{
				$bf  					= BuenaFe::find(Crypt::decrypt($id_o2));
				$data['model_jugador']	= $bf;
		 }
		 else if($tipo == 'staff')
		 {
				$bfs 					= BuenaFeStaff::find(Crypt::decrypt($id_o2));
				$data['model_staff']	= $bfs;

		}
		return View::make('club.buenafe.index')->with($data);
	}	

	public function getBuscar($listaId = null)
	{

		Session::put('listaId', Crypt::decrypt($listaId));
		
		$data['jugador'] = Jugador::orderBy('apellido','ASC')->get();

		return View::make('club.buenafe.listajugadores')->with($data);
	}


	public function getBuscarstaff($listaId = null)
	{

		Session::put('listaStaffId', Crypt::decrypt($listaId));
		
		$data['oficial'] 	= Oficial::all();
		$data['funciones'] 	= OficialFuncion::all(); 

		return View::make('club.buenafe.listaoficiales')->with($data);
	}

	
	public function postAgregarstaff()
	{
		$input = Input::all();

		$staff = BuenaFeStaff::find(Session::get('listaStaffId'));
		
		$staff->oficial_funcion_id  = $input['funcion'];
		$staff->oficial_id 			= $input['oficial'];
		$staff->temporada_id 		= Session::get('temporada_actual_id');
		$staff->equipo_id			= Session::get('equipo_id');
		
		$staff->save();

		//modifica habilitadciones
		$habilitacionesStaff						= new HabilitacionesStaff();
		$habilitacionesStaff->buena_fe_staff_id 	= $staff->id;
		$habilitacionesStaff->condicion				= 'NO HAB.';
		$habilitacionesStaff->save();


		return Redirect::back();
	}


	public function getAgregar($jugadorId = null, $nro = null)
	{
		
		$listaId 				=  Session::get('listaId');
		$idJugador 				=  Crypt::decrypt($jugadorId);

		//agrega jugador a buena fe
		$buenafe 				=  BuenaFe::find($listaId);
		$buenafe->jugador_id 	=  $idJugador;
		$buenafe->equipo_id 	=  Session::get('equipo_id');
		$buenafe->temporada_id 	=  Session::get('temporada_actual_id');
		$buenafe->save();

		//modifica habilitadciones
		$habilitaciones					= new Habilitaciones();
		$habilitaciones->buena_fe_id 	= $buenafe->id;
		$habilitaciones->condicion		= 'NO HAB.';
		$habilitaciones->save();


		return $this->getEdit(Crypt::encrypt(Session::get('equipo_id')));
	}



	//PDF o2
	public function getRepo($o2_id = null, $torneo_id = null)
	{

		$o2_id  	= Crypt::decrypt($o2_id);	
		$torneo_id  = Crypt::decrypt($torneo_id);

		$data['torneo'] 	= Torneos::find($torneo_id);
		$data['equipo']		= Equipo::find(Session::get('equipo_id'));
		
		$data['temporada']  = Temporada::find($data['torneo']->temporada_id);
		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 
		//$data['listaStaff'] = BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->get(); 

		$data['lista'] 		= BuenaFe::where('o2_id','=',$o2_id)->orderBy('nro','ASC')->get();
		$data['listaStaff'] = BuenaFeStaff::where('o2_id','=',$o2_id)->orderBy('nro','ASC')->get();

		$pdf = PDF::loadView('repo/o2', $data)->setPaper('A3')->setOrientation('landscape');
	
		return $pdf->stream();
				
	}

	public function getDelstaff($id)
	{

		if(!parent::validarPermisos('86','borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);

		//$bf = BuenaFeStaff::find($id)->delete();
		$bf = BuenaFeStaff::find($id);
		$bf->borrado = 1 ;
		$bf->save();

		HabilitacionesStaff::where('buena_fe_staff_id','=',$id)->delete();
		/*
		$bf->jugador_id = 0;
		$bf->save();
		*/
		//return $bf;
		return Redirect::back();
	}


	public function getDel($id)
	{

		if(!parent::validarPermisos('86','borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id = Crypt::decrypt($id);

		//$bf = BuenaFe::find($id)->delete();
		$bf 			= BuenaFe::find($id);
		$bf->borrado 	= 1;
		$bf->save();
		
		//del en habilitaciones

		Habilitaciones::where('buena_fe_id','=',$id)->delete();





		/*
		$bf->jugador_id = 0;
		$bf->save();
		*/
		//return $bf;
		return Redirect::back();
	}

	public function postEditjugador()
	{


		if(!parent::validarPermisos('86','editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$input = Input::all();	

		if(isset($input['edit']))
		{
			$bf 				= BuenaFe::find($input['id']);
			$bf->o2_id 			= $input['o2_id'];
			$bf->nro   			= $input['nro'];
			$bf->fecha_desde 	= $input['fecha_desde'];
			$bf->fecha_hasta 	= $input['fecha_hasta'];
			$bf->save();

		}
		else
		{
			$bf = new BuenaFe();
			$bf->o2_id 			= $input['o2_id'];
			$bf->nro   			= $input['nro'];
			$bf->jugador_id  	= $input['jugador_id']; 
			$bf->fecha_desde 	= $input['fecha_desde'];
			$bf->fecha_hasta 	= $input['fecha_hasta'];
			$bf->save();

			//modifica habilitadciones
			$habilitaciones					= new Habilitaciones();
			$habilitaciones->buena_fe_id 	= $bf->id;
			$habilitaciones->condicion		= 'NO HAB.';
			$habilitaciones->save();

		}	

		return Redirect::back();
	}

	public function postEditstaff()
	{

		if(!parent::validarPermisos('86','editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$input = Input::all();

		if(isset($input['edit']))
		{
			$bfs 						= BuenaFeStaff::find($input['id']);
			$bfs->o2_id 				= $input['o2_id'];
			$bfs->oficial_funcion_id    = $input['oficial_funcion_id']; 
			$bfs->oficial_id 			= $input['oficial_id'];
			$bfs->fecha_desde 			= $input['fecha_desde'];
			$bfs->fecha_hasta 			= $input['fecha_hasta'];
			$bfs->save();

		}else{


		$bfs = new BuenaFeStaff();
		$bfs->o2_id 				= $input['o2_id'];
		$bfs->oficial_funcion_id    = $input['oficial_funcion_id']; 
		$bfs->oficial_id 			= $input['oficial_id'];
		$bfs->fecha_desde			= $input['fecha_desde'];
		$bfs->fecha_hasta			= $input['fecha_hasta'];
		$bfs->save();

		//modifica habilitadciones
		$habilitacionesStaff						= new HabilitacionesStaff();
		$habilitacionesStaff->buena_fe_staff_id 	= $bfs->id;
		$habilitacionesStaff->condicion				= 'NO HAB.';
		$habilitacionesStaff->save();

		}



		return Redirect::back();
		
	
	}
}

?>