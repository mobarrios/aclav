<?php

class BuenaFeBisController extends BaseController
{

	public function postGuardar()
	{
			$input 		= Input::all();

			BuenaFeBis::where('partido_id','=',Session::get('partido_id'))->where('equipo_id','=',Session::get('equipo_id'))->delete();

			if(isset($input['jugador_id']))
			{
				foreach($input['jugador_id'] as $key => $val )
				{

					$jugador_bis = new BuenaFeBis();
					$jugador_bis->partido_id  = Session::get('partido_id');
					$jugador_bis->equipo_id   = Session::get('equipo_id');
					$jugador_bis->buena_fe_id = $key;
					$jugador_bis->save();
				}
			} 


			BuenaFeStaffBis::where('partido_id','=',Session::get('partido_id'))->where('equipo_id','=',Session::get('equipo_id'))->delete();
			
			if(isset($input['staff_id']))
			{
				foreach($input['staff_id'] as $key => $val )
				{
					$staff_bis = new BuenaFeStaffBis();
					$staff_bis->partido_id  = Session::get('partido_id');
					$staff_bis->equipo_id   = Session::get('equipo_id');
					$staff_bis->buena_fe_staff_id = $key;
					$staff_bis->save();
				}
			} 
		
		return Redirect::back(); 
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


		return View::make('club.buenafe.index')->with($data);

	}	

	public function getEdit($id = null)
	{

		$id 				= Crypt::decrypt($id);
		$equipoSexo 		= Equipo::find($id);

		//$data['jugadores']  = Jugador::where('sexo','=',$equipoSexo->sexo)->get();

		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->Orderby('nro','ASC')->get(); 
		$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 
		$data['staffs']		= BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('id','ASC')->get(); 


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
		$habilitaciones->condicion		= 4;
		$habilitaciones->save();


		return $this->getEdit(Crypt::encrypt(Session::get('equipo_id')));
	}

	public function getRepo()
	{


		//$o2_id  	= Crypt::decrypt($o2_id);	
		//$torneo_id   = Crypt::decrypt($torneo_id);

		$data['torneo'] 		= Torneos::find(Session::get('torneo_id'));
		$data['equipo']			= Equipo::find(Session::get('equipo_id'));
		$data['partido']		= Partido::find(Session::get('partido_id'));

		$data['temporada'] 	 	= Temporada::find($data['torneo']->temporada_id);

		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 
		//$data['listaStaff'] = BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->get(); 

		$data['lista'] 		= BuenaFeBis::where('partido_id','=',Session::get('partido_id'))->where('equipo_id','=',Session::get('equipo_id'))->orderBy('id','ASC')->get();
		$data['listaStaff'] = BuenaFeStaffBis::where('partido_id','=',Session::get('partido_id'))->where('equipo_id','=',Session::get('equipo_id'))->get();
		

		$pdf = PDF::loadView('repo/o2bis', $data)->setPaper('A3')->setOrientation('landscape');
	
		return $pdf->stream();



		//$id  = Crypt::decrypt($id);

		$lista	= BuenaFe::where('equipo_id','=',$id)->Orderby('nro','ASC')->get(); 

		$pdf = PDF::loadView('repo/o2bis', array('lista' => $lista))->setPaper('A3')->setOrientation('landscape');
	
		return $pdf->stream();
				
	}
	public function getDetalle( $torneo_id = null , $partido_id = null)
	{
		//$id 				= Crypt::decrypt($id);
		$torneo_id 			= Crypt::decrypt($torneo_id);

		Session::put('torneo_id',$torneo_id);

		Session::put('partido_id',Crypt::decrypt($partido_id));

		$data['partido']	= Partido::find(Crypt::decrypt($partido_id));

		$torneo = Torneos::find($torneo_id);
		
		$data['temporada'] 	 = Temporada::find($torneo->temporada_id);
		
		//$equipoSexo 		= o2::find($id);

		//$data['jugadores']  = Jugador::where('sexo','=',$equipoSexo->Equipo->sexo)->get()->lists('full_name','id');
		//$data['oficiales']	= Oficial::all()->lists('full_name','id');

		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->Orderby('nro','ASC')->get(); 
		// ok 28-10
		//$data['lista']		= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('nro','ASC')->get(); 
		//$data['staffs']		= BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=',Session::get('temporada_actual_id'))->Orderby('id','ASC')->get(); 
	
		$data['lista']		= o2::where('equipo_id','=',Session::get('equipo_id'))->where('torneos_id','=',$torneo_id)->get();

		$data['staffs']		= BuenaFeStaff::all(); 
			
		//$data['o2_id']		= $id;

		//$data['funcion']	= OficialFuncion::all()->lists('funcion','id');



		return View::make('club.buenafebis.detalle')->with($data);
	}
}

?>