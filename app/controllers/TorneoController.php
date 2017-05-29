<?php

class TorneoController extends BaseController
{
	protected $moduloId       = '35';
	protected $carpetaModulo  = 'config.usuarios';
	protected $ruta           = 'usuarios';


	public function getIndex()
	{

        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		return View::make('torneo.index');
	}

	public function getEquiposdel($id = null)
	{
		$data = TorneoEquipo::find($id);
		$data->delete();

        return Redirect::back()->with('danger','Equipo Eliminado Correctamente');
	}

	public function postAddequipo()
	{
		$torneos_id = Input::get('torneos_id');
		$equipos_id = Input::get('equipos_id');

		$find = TorneoEquipo::where('torneo_id', $torneos_id)->where('equipo_id', $equipos_id)->get();

		if($find->count() == 0)
			TorneoEquipo::create(array('torneo_id'=>$torneos_id , 'equipo_id' => $equipos_id));
		else
			return Redirect::back()->with('warning','Equipo Ya se encuentra en el torneo');

		return Redirect::back();


	}


	public function getNew($id = null)
	{


        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$idTorneo = Crypt::decrypt($id);

		$data['series']		= Series::lists('nombre_serie','id');

		$data['torneos']	= Torneos::where('temporada_id','=',Session::get('temporada_actual_id'))->lists('nombre_torneo','id');

		$data['idTorneo']	= $idTorneo;		

		$data['equiposMasculino'] 	= Equipo::where('sexo','=','Masculino')->get();

		$data['equiposFemenino'] 	= Equipo::where('sexo','=','Femenino')->get();

		return View::make('torneo.create')->with($data);

	}
	
	//edita los datos del torneo
	public function getEditdata($id_torneo = null)
	{

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id 	= Crypt::decrypt($id_torneo);
		$torneo = Torneos::find($id);

		$data['model']  = $torneo;

		$data['series']		= Series::lists('nombre_serie','id');

		$data['torneos']	= Torneos::where('temporada_id','=',Session::get('temporada_actual_id'))->lists('nombre_torneo','id');

		$data['idTorneo']	= $id;		
		$data['equiposMasculino'] 	= Equipo::where('sexo','=','Masculino')->lists('nombre','id');

		return View::make('torneo.edit')->with($data);


	}

	public function postEditdata($id_torneo = null)
	{
		$input  = Input::all();

		$id 	= Crypt::decrypt($id_torneo);
		$torneo = Torneos::find($id);

		$torneo->nombre_torneo 	= $input['nombre_torneo'];
		$torneo->fecha_inicio	= $input['fecha_inicio'];
		$torneo->fecha_final 	= $input['fecha_final'];
		$torneo->presenta_o2 	= Input::has('presenta_o2') ? true : false ;
		$torneo->save();

		return Redirect::to('temporada');

	}


	//agrega el torneo
	//public function getEdit()
	public function postEdit()
	{

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$input 	 = Input::all();

		$input['actualiza_o2'] = Input::has('actualiza_o2') ? true : false ;
		$input['presenta_o2']  = Input::has('presenta_o2') ? true : false ;


		$torneo  = Torneos::create($input);		

		 //$torneo->id;
		foreach ($input['my-select'] as $value) {

			$torneoEquipo = new TorneoEquipo;
			$torneoEquipo->equipo_id = $value;
			$torneoEquipo->torneo_id = $torneo->id;
			$torneoEquipo->save();

			$equipo = Equipo::find($value);
			$equipo->o2 = 1;
			$equipo->save();

			// crea o2 x equipo x torneo
			$o2 = new o2();
			$o2->torneos_id  = $torneo->id;
			$o2->equipo_id   = $value;
			$o2->save();


			//o2 de otro torneo
			if($input['o2'] != 0)
			{	
			   $this->replicaO2($input['o2'], $value ,$o2->id);
			}
			

			/*//crea la lista de buena fe
			for($i=1 ; $i <= 20 ; $i++)
			{
				$buenaFe	  = new BuenaFe();
				$buenaFe->nro = $i;
				$buenaFe->temporada_id  = Session::get('temporada_actual_id');
				$buenaFe->equipo_id	   = $value;
				$buenaFe->save();
			}*/
			
		}



	return Redirect::to('temporada')->with('success','Torneo creado correctamente.');

	}

	public function getDetalle($id = null)
	{

        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		if($id == "")
		{
			$id = Session::get('torneo_id');

		}else{

			$id  	= Crypt::decrypt($id);
			//id de torneo en variable de session
			Session::put('torneo_id',$id);
		}


		$data['torneo'] 		= 	Torneos::find($id);
		$data['torneo_fase']	=	TorneoFase::where('torneo_id','=', $id)->get();
		//$data['actual']			=   TorneoFaseLeg::where('fecha_inicio','>=', date('Y-m-d'))->limit(1)->first()->id ;
	

		return View::make('torneo.detalle')->with($data);
	}



	public function getFase()
	{

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$data['sistema_punto'] 	= SistemaPunto::lists('nombre','id');
		$data['tipo_fase']		= TipoFase::lists('nombre','id');

		$torneo	= Torneos::find(Session::get('torneo_id'));

		//$this->data['equipo'] = $torneo->Equipo->lists('nombre','id');
		//$data['equipos_torneo']	= TorneoEquipo::where('torneo_id','=', Session::get('torneo_id'))->get();
		$data['equipos_torneo'] = $torneo->Equipo;

		return View::make('torneo.fase.form')->with($data);

	}

	/*
	public function postFaseequipoadd()
	{

		$input = Input::all();

		foreach ($input['my-select'] as $value) {

			$torneoFaseGrupoTorneoEquipo = new TorneoFaseGrupoEquipo;

				$torneoFaseGrupoTorneoEquipo->equipo_id 			= 	$value;
				$torneoFaseGrupoTorneoEquipo->torneo_fase_grupo_id 	= 	$input['torneo_fase_grupo_id'] ;

			$torneoFaseGrupoTorneoEquipo->save();

		}
		return $this->getDetalle();
		
	}*/

	public function getFaseadd()
	{

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$input 					=	Input::all();
	

		$input['torneo_id']		=	Session::get('torneo_id');
		$torneoFase 			= 	TorneoFase::create($input);

		
			foreach ($input['my-select'] as $value) {

				$torneoFaseEquipo = new TorneoFaseEquipo;
				$torneoFaseEquipo->equipo_id = $value;
				$torneoFaseEquipo->torneo_fase_id = $torneoFase->id;
				$torneoFaseEquipo->save();

				if($input['tipo_fase_id'] == 1)
				{
					$tabla 				= new TablaPosicion();
					$tabla->fase_id 	= $torneoFase->id;
					$tabla->equipo_id	= $value;
					$tabla->save();
				}
			}
		

		

		/*
			$data['cant_grupos']	= 	$torneo['cant_grupos'];
			for($i=1 ; $i <= $torneo['cant_grupos']; $i++)
			{
				if($i == $torneo['cant_grupos'])
				{
		
				}
				$torneoFaseGrupo = new TorneoFaseGrupo();
				$torneoFaseGrupo->numero_grupo 	 = $i;
				$torneoFaseGrupo->torneo_fase_id = $torneo->id;

				$torneoFaseGrupo->save();
			}
		*/

		//$data['fase_grupo'] 	= 	TorneoFaseGrupo::where('torneo_fase_id','=',$torneo->id)->get();

		//$data['torneo'] 		=	Torneos::find(Session::get('torneo_id')); 	

		//return View::make('torneo.fase.equipo_grupo2')->with($data);

		return $this->getDetalle();
	}


	public function getDel($id)
	{


        if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);

		TorneoEquipo::where('torneo_id',$id)->delete();

		$torneoFase = TorneoFase::where('torneo_id',$id);	
		
		if($torneoFase->count() != 0)
		{
			 TorneoFaseEquipo::where('torneo_fase_id',$torneoFase->first()->id)->delete();
			 TablaPosicion::where('fase_id',$torneoFase->first()->id)->delete();

				$torneoFaseLeg = TorneoFaseLeg::where('torneo_fase_id',$torneoFase->first()->id);

				if($torneoFaseLeg->count() != 0 )
				{
					  TorneoFaseLegPartido::where('torneo_fase_leg_id',$torneoFaseLeg->first()->id)->delete();
					  $torneoFaseLeg->delete();
				}

			$torneoFase->delete();
		}

		

		$o2  = o2::where('torneos_id',$id);
		
		if($o2->count() != 0)
		{
			$buenaFe = BuenaFe::where('o2_id',$o2->first()->id);
			
			if($buenaFe->count() != 0)
			{
			
				BuenaFeBis::where('buena_fe_id',$buenaFe->first()->id)->delete();
				Habilitaciones::where('buena_fe_id',$buenaFe->first()->id)->delete();
				$buenaFe->delete();
			}
			
			$buenaFeStaff = BuenaFeStaff::where('o2_id',$o2->first()->id);

			if($buenaFeStaff->count() != 0)
			{
				BuenaFeStaffBis::where('buena_fe_staff_id',$buenaFeStaff->first()->id)->delete();
				HabilitacionesStaff::where('buena_fe_staff_id',$buenaFeStaff->first()->id)->delete();

				$buenaFeStaff->delete();
			}

			$o2->delete();
		}		

		Torneos::find($id)->delete();
		

		return Redirect::back();

	}

	public function getFasedel($id)
	{


        if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);
		TorneoFase::find($id)->delete();

		return Redirect::back();

	}

	public function getDelleg($id)
	{	


        if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		//Session::put('torneo_fase_id', Crypt::decrypt($id));


		TorneoFaseLeg::find($id)->delete();

		return Redirect::back();
	}



	public function getLeg($id)
	{	

        if(!parent::validarPermisos(88,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		Session::put('torneo_fase_id', Crypt::decrypt($id));

		return View::make('torneo.leg.form');
	}


	public function postLeg()
	{
		$input = Input::all();
		$input['torneo_fase_id'] = Session::get('torneo_fase_id');

		TorneoFaseLeg::create($input);

		return $this->getDetalle();
	}



	public function getTabla($id = null )
	{

        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);

		$data['cont'] = 1;

		$data['torneo'] = Torneos::find(Session::get('torneo_id'));
		$data['fase']	= TorneoFase::find($id);
		$data['tablas'] = TablaPosicion::where('fase_id','=',$id)->orderBy('puntos','DESC')->orderBy('partido_ganado','DESC')->orderBy('set_coeficiente','DESC')->orderBy('punto_coeficiente','DESC')->get();


		return View::make('torneo.leg.tabla_posicion')->with($data);
	}



	public function getCambiarestadoweb($id = null, $estado = null)
	{


        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		//return $id. $estado;

		$torneo = Torneos::find(Crypt::decrypt($id));
		$torneo->muestra_web = $estado;
		$torneo->save();

		return Redirect::back()->with('success','Estado Actualizado Correctametne') ;
	}


	public function getCambiarestadoo2web($id = null, $estado = null)
	{

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

      	$torneos_all = Torneos::all();
      	foreach ($torneos_all as $torneo)
      	{
      		$torneo->o2_web = 0;
      		$torneo->save();
      	}


		$torneo 			= Torneos::find(Crypt::decrypt($id));
		$torneo->o2_web 	= $estado;
		$torneo->save();

		return Redirect::back()->with('success','Estado Actualizado Correctametne') ;
	}


	//----------------------------------------------

	public function replicaO2($torneo_id, $equipo_id, $o2_id)
	{
		$o2 	= o2::where('torneos_id','=',$torneo_id)->where('equipo_id','=',$equipo_id);
		
		//no hay datos de o2
		if($o2->count() != 0)
			$o2 = $o2->first()->id; 
		else
			return ;

		$bf  	= BuenaFe::where('o2_id','=',$o2)->get();
		$bfs 	= BuenaFeStaff::where('o2_id','=',$o2)->get(); 


		foreach($bf as $buenafe)
		{
			if(!$buenafe->borrado)
			{
			$nuevoO2 				= new  BuenaFe();
			$nuevoO2->o2_id 	  	= $o2_id;
			$nuevoO2->nro   	  	= $buenafe->nro;
			$nuevoO2->jugador_id  	= $buenafe->jugador_id;
			$nuevoO2->fecha_desde 	= $buenafe->fecha_desde;
			$nuevoO2->fecha_hasta 	= $buenafe->fecha_hasta;
			$nuevoO2->save();
			$this->replicaHabilitacionesJugadores($nuevoO2->id, $buenafe->id);
			}	

		}
		
		foreach($bfs as $buenafeStaff)
		{
			if(!$buenafeStaff->borrado)
			{
			$nuevoO2Staff 						= new  BuenaFeStaff();
			$nuevoO2Staff->o2_id 	  			= $o2_id;
			$nuevoO2Staff->nro   	  			= $buenafeStaff->nro;
			$nuevoO2Staff->oficial_id  			= $buenafeStaff->oficial_id;
			$nuevoO2Staff->oficial_funcion_id  	= $buenafeStaff->oficial_funcion_id;
			$nuevoO2Staff->fecha_desde 			= $buenafeStaff->fecha_desde;
			$nuevoO2Staff->fecha_hasta			= $buenafeStaff->fecha_hasta;
			$nuevoO2Staff->save();

			$this->replicaHabilitacionesStaff($nuevoO2Staff->id , $buenafeStaff->id);
			}
		}
		
	}	

	
	public function replicaHabilitacionesJugadores($nuevo_bf_id = null, $viejo_bf_id =null)
	{
		$habilitaciones = Habilitaciones::where('buena_fe_id','=',$viejo_bf_id)->get();

		foreach($habilitaciones as $hab)
		{


			$nueva_hab 				= new Habilitaciones();
			$nueva_hab->buena_fe_id = $nuevo_bf_id;
			$nueva_hab->dni 		= $hab->dni;
			$nueva_hab->m4			= $hab->m4;
			$nueva_hab->m8			= $hab->m8;
			$nueva_hab->feva_af		= $hab->feva_af;
			$nueva_hab->feva_tr		= $hab->feva_tr;
			$nueva_hab->feva_tr_tipo= $hab->feva_tr_tipo;
			$nueva_hab->ld 			= $hab->ld;
			$nueva_hab->condicion	= $this->Estados($hab->condicion);
			$nueva_hab->carnet 		= $hab->carnet;	
			$nueva_hab->save();
		}		


	}

	public function replicaHabilitacionesStaff($nuevo_bf_id = null, $viejo_bf_id =null)
	{
		$habilitaciones = HabilitacionesStaff::where('buena_fe_staff_id','=',$viejo_bf_id)->get();

		foreach($habilitaciones as $hab)
		{
			
			$nueva_hab 						= new HabilitacionesStaff();
			$nueva_hab->buena_fe_staff_id 	= $nuevo_bf_id;
			$nueva_hab->dni 				= $hab->dni;
			$nueva_hab->tit					= $hab->tit;
			$nueva_hab->m8					= $hab->m8;
			$nueva_hab->feva_af				= $hab->feva_af;
			$nueva_hab->mat 				= $hab->mat;
			$nueva_hab->des 				= $hab->des;
			$nueva_hab->condicion			= $this->Estados($hab->condicion);
			$nueva_hab->carnet 				= $hab->carnet;
			$nueva_hab->save(); 

		}	

	}

	//edita fase
	public function getFaseedit($id = null)
	{
		
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        $data['model'] = TorneoFase::find(Crypt::decrypt($id));


		$data['sistema_punto'] 	= SistemaPunto::lists('nombre','id');
		$data['tipo_fase']		= TipoFase::lists('nombre','id');

		$torneo	= Torneos::find(Session::get('torneo_id'));

		$data['equipos'] = $torneo->Equipo->lists('nombre','id');
		//$data['equipos_torneo']	= TorneoEquipo::where('torneo_id','=', Session::get('torneo_id'))->get();
		$data['equipos_torneo'] = $torneo->Equipo;
		
		return View::make('torneo.fase.form_edit')->with($data);
	}
	
	public function postFaseedit()
	{
		$input 			= Input::all();
		$fase			= TorneoFase::find($input['id']);
		$fase->nombre 	= $input['nombre'];
		$fase->save();

		return $this->getDetalle();
	}

	public function getFaseequiporemove($equipoId , $fasesId)
	{

	 
			$fase = TorneoFaseEquipo::where('torneo_fase_id',$fasesId)->where('equipo_id', $equipoId)->first()->delete();
			$tabla=  TablaPosicion::where('fase_id',$fasesId)->where('equipo_id',$equipoId)->first()->delete();

			return  Redirect::back();

	}


	//edita leg
	public function getEditleg($id_leg = null)
	{

        if(!parent::validarPermisos(88,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$data['model'] = TorneoFaseLeg::find($id_leg);

		return View::make('torneo.leg.form')->with($data);
	}
	public function postEditleg()
	{
		$input 	= 	Input::all();
		$leg 	=	TorneoFaseLeg::find($input['id']);

		$leg->nombre 		= $input['nombre']; 	
		$leg->fecha_inicio	= $input['fecha_inicio'];
		$leg->fecha_final	= $input['fecha_final'];

		$leg->save();

		return $this->getDetalle();
	}

	public function Estados($values)
	{
		switch ($values) {
		
			case 'HABILITADO':
				return 'HAB.';
			break;
			case 'NO HABILITADO':
				return 'NO HAB.';
			break;
			case 'PRECARIO':
				return 'PRECARIO';
			break;
			
		}

	}

	//activa desactiva mustra web tabla
	public function getTablaweb($id = null, $status = null)
	{
		$fase = TorneoFase::find($id);
		$fase->tabla_web = $status;
		$fase->save();

		return  Redirect::back();
	}

	// edita  los datos de la tabla diractamtene de la base de datos
	public function getTablaEdit($id = null, $data = null , $value = null )
	{
		$tabla =  TablaPosicion::find($id);

		$tabla->$data = $value;
		$tabla->save();

		return response::json(true);
	
	}
	
}



?>