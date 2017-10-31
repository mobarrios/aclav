<?php

class NuevaWebController extends BaseController
{	

	//constructor 
	public function __construct()
	{
		$this->data['nueevio'] 	= 	"new upload()";

	}


	public function getHomeNoticias()
	{
		$data['model'] 			 =  NoticiasPosicion::with('noticias')->get();
		$data['social_ultima'] 	 =  Noticias::where('fecha','<=', date('Y-m-d'))->where('web_social','=',1)->orderBy('created_at','=','ASC')->first();
		//Tabla partidos
		$data['partidosDiarios'] = 	Partido::where('pxp',1)->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
		$data['resultados'] 	 =	Partido::where('home',1)->where('estado','=', 2 )->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
		$data['proximos_partidos'] 	 =	Partido::where('home',1)->where('estado','')->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
		
		//$data['video_ultimo']	 =  Video::where('estado','=',1)->orderBy('created_at','=','DESC')->first();
		$data['videos'] = Video::where('estado','=',1)->orderBy('id','DESC')->take(5)->get();
		

		$data['banner_superior'] =  Banner::where('posicion','=',3)->first();
		$data['banner_inferior'] =  Banner::where('posicion','=',2)->first();
		$data['goleador']        =  Goleador::where('estado','=',1)->first();

		$data['count']			 = 	'1';
		$data['torneos'] 	 	 = 	Torneos::find(19);
		$data['fases'] 			 = 	TorneoFase::where('torneo_id','=',19)->get();
		$data['tablas']			 =  TorneoFase::where('tabla_web',1)->get();

		//modal pop up
		$data['modal_pop']		 =  Estadisticae::where('estado','=',1)->first();
		
        return View::make('web_nueva.inicio')->with($data);
	}
	/*
	public function getNoticias()
	{	
		$data['model']		    = Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=',1)->orderBy('id','DESC')->paginate(5);

		
		
		//return View::make('web_nueva.noticias.noticias')->with($data);
		dd('notiicas');
	}
	*/

	//Competencias
	public function temporadas(){
 		$data['goleador']       =  Goleador::where('estado','=',1)->first();
 		$data['temporadas'] 	=  Temporada::orderBy('id','desc')->get();
 		$data['series'] 		=  Series::all();
 		
 		$data['torneos']		=  Torneos::all();

		return View::make('web_nueva.competencias.anteriores')->with($data);
	}

	public function getTorneos(){
		
		$temporada_id = Input::get('temporada_id');
		$serie_id     = Input::get('serie_id');
		$torneos = Torneos::where('temporada_id', $temporada_id)->where('serie_id', $serie_id)->get();
		return Response::json($torneos);
		
	}

	public function getSeries(){
		$temporada_id = Input::get('temporada_id');

		$torneos = Torneos::where('temporada_id', $temporada_id)->select('serie_id')->distinct()->get();
		$series  = array();

		foreach ($torneos as $value) {
			$serie = Series::where('nombre_serie' ,$value->serie_id)->first();
			
			$data['id'] = $serie->id;
			$data['nombre_serie'] = $serie->nombre_serie;
			
			array_push($series, $data);

		}
		$data['nombre_serie'] = "Seleccione Serie";
		array_unshift($series, $data);
		return Response::json($series);
	}	


	public function calendario($id =  null , $legId = null)
	{
		
		if(Input::get('torneo_id'))
		{
			$data['torneo'] 	= 	Torneos::find(Input::get('torneo_id'));	
			$data['fases']		=	TorneoFase::where('torneo_id','=', Input::get('torneo_id'))->get();	
			Session::put('torneo_id', Input::get('torneo_id') );

		}
		else
		{
			$data['torneo'] 	= 	Torneos::find($id);
			$data['fases']		=	TorneoFase::where('torneo_id','=', $id)->get();	
			Session::put('torneo_id', $id );
		}

		$data['temporadas'] = 	Temporada::all();

		$act = array();

		
		// foreach($data['fases'] as $fase)
		// {
		
		// $actual = TorneoFaseLeg::where('torneo_fase_id','=', $fase->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
			
		// 	if(!is_null($actual))
		// 	{
		// 		array_push($act, $actual->id);
		// 	}

			
		// }

		// //$data['leg_actual'] = 	TorneoFaseLeg::where('torneo_fase_id','=', $data['fase']->first()->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
		// $data['leg_actual'] = $act;
		$legs = array();

		if($legId != null)
		{
			$data['legs'] = TorneoFaseLeg::where('id', $legId)->get();
		}
		else
		{
			foreach ($data['fases'] as $fase ) 
			{

				foreach ($fase->leg as $leg ) 
				{
					/*	
					 $ob = DB::table('partido')
       					->join('torneo_fase_leg_partido', 'torneo_fase_leg_partido.partido_id', '=', 'partido.id')
						->where('torneo_fase_leg_id', $leg->id)
						->orderBy('partido.fecha_inicio','ASC')
						->orderBy('partido.hora','ASC')
						->get();
					*/

					array_push($legs, $leg);
				}
			}

			$data['legs'] = $legs;
		}

		/*
		 $data['legs'] = DB::table('partido')
        ->join('torneo_fase_leg_partido', 'torneo_fase_leg_partido.partido_id', '=', 'partido.id')
        ->join('torneo_fase_leg', 'torneo_fase_leg_partido.torneo_fase_leg_id', '=', 'torneo_fase_leg.id')
        ->join('torneo_fase', 'torneo_fase_leg.id','=' ,'torneo_fase.tipo_fase_id')
        ->where('torneo_fase.torneo_id',$data['torneo']->id)
        ->get();
		*/

		//todas las fases donde sea torneo=id
		$data['partidos'] = DB::table('torneo_fase')
			->where('torneo_fase.torneo_id', $data['torneo']->id)
			->join('torneo_fase_leg', 'torneo_fase_leg.torneo_fase_id', '=', 'torneo_fase.id')
			->join('torneo_fase_leg_partido', 'torneo_fase_leg_partido.torneo_fase_leg_id','=','torneo_fase_leg.id')
			->join('partido', 'torneo_fase_leg_partido.partido_id','=','partido.id')
			->orderBy('partido.fecha_inicio', 'ASC')
			->orderBy('partido.hora','ASC')
			->select('partido.id as partido_id', 'torneo_fase.id as torneo_fase_id', 'torneo_fase_leg.id as leg_id', 'torneo_fase.nombre as fase', 'torneo_fase_leg.nombre as leg')
            ->get();


		$data['today'] =  date('d-m-Y');
		$data['sesion_calendario'] = 1;

		return View::make('web_nueva.competencias.calendario')->with($data);
	}


	public function partidoReporte($id){

		$partido = Partido::find($id);
		$file = PDF::loadFile("uploads/partidos/reportes/".$partido->reporte);
	
	    $headers = array(
	              'Content-Type: application/pdf',
	            );

	    return Response::download($file, 'filename.pdf', $headers);

		//return $file->download();

	}

	public function formula($id){
		$data['torneo'] 	= 	Torneos::find($id);

		switch ($data['torneo']->formula) {
			case 'a':
				$data['formula'] = Formulacopaa::all()->first();
				$data['formula']->letra = 'a';
				break;
			case 'b':
				$data['formula'] = Formulacopab::all()->first();
				$data['formula']->letra = 'b';
				break;
			case 'c':
				$data['formula'] = Formulacopac::all()->first();
				$data['formula']->letra = 'c';
				break;		
			case 'd':
				$data['formula'] = Formulacopad::all()->first();
				$data['formula']->letra = 'd';
				break;
			case 'e':
				$data['formula'] = Formulacopae::all()->first();
				$data['formula']->letra = 'e';
				break;
			case 'f':
				$data['formula'] = Formulacopaf::all()->first();
				$data['formula']->letra = 'f';
				break;				
		}
		

		$data['sesion_formula'] = 1;
		
		return View::make('web_nueva.competencias.formula')->with($data);	
	}

	public function posiciones($id){

		$data['count']			= 	'1';
		$data['torneo'] 		= 	Torneos::find($id);
		$data['fases'] 			= 	TorneoFase::where('torneo_id','=',$id)->get();
		$data['sesion_posiciones'] = 1;
		return View::make('web_nueva.competencias.posiciones')->with($data);	
	}

	public function tribunal($id){
		$temporada = Temporada::where('actual',1)->first();
		$data['torneo'] 	= 	Torneos::find($id);
		$desde = date('Y-m-d',strtotime($temporada->fecha_inicio));
		$hasta =date('Y-m-d',strtotime($temporada->fecha_final));
		$data['sesion_tribunal'] = 1;
		//$data['model']	= Tribunal::whereBetween('vencimiento_sanc',array($desde,$hasta))->orderBy('id','DESC')->paginate(10);

		$data['model']	= Tribunal::where('temporada_id',$temporada->id)->orderBy('id','DESC')->paginate(10);
		return View::make('web_nueva.competencias.tribunal')->with($data);	
	}

	//Equipos
	public function participantes(){
		   $data['goleador']        =  Goleador::where('estado','=',1)->first();
		   $temporada_actual 	= Temporada::where('actual','=','1')->first()->id;
		   $torneos = Torneos::where('temporada_id',$temporada_actual)->get();

		   $equipoArr = array();

		   foreach($torneos as $torneo)
		   {
		   		foreach($torneo->Equipo as $equipo)
		   		{
		   			if(!in_array($equipo->id, $equipoArr))
		   				array_push($equipoArr, $equipo->id);
		   		}
		   }

		   $data['model_id'] =  $equipoArr;

		return View::make('web_nueva.equipos.participantes')->with($data);
	}	

	public function detalle_staff($id){
		$data['models'] 	=  Oficial::find($id);
		$data['goleador']   =  Goleador::where('estado','=',1)->first();
		return View::make('web_nueva.equipos.detalle_staff')->with($data);
	}
	public function detalle_equipo($id){
		   $data['goleador']    =  Goleador::where('estado','=',1)->first();
		   $temporada_actual 	=  Temporada::where('actual','=','1')->first()->id;
		   $torneos    			=  Torneos::where('o2_web',1)->first();


		   $data['jugadores']   =  o2::where('torneos_id','=',$torneos->id)->where('equipo_id','=',$id)->first()->BuenaFe;
		   
		   $data['staffs']		=  o2::where('torneos_id','=',$torneos->id)->where('equipo_id','=',$id)->first()->BuenaFeStaff;


		   
		   $torneos_ex 			= Torneos::where('temporada_id',$temporada_actual)->where('o2_web','1')->get();
		   $ex_jugadores        = array();
		   $ex_staffs	        = array();

		   $id_jugadores		= array();
		   $id_staff 			= array();

		   $data_actual 		= array();
		   $data_ex		 		= array();

			$data_actual_staff 	= array();
			$data_ex_staff 		= array();



		   foreach($torneos_ex as $t)
		   {
		  		 foreach(o2::where('torneos_id',$t->id)->where('equipo_id',$id)->get() as $o2)
		  		 {

		  	 		foreach( $o2->BuenaFe as $bf ){
		  	 			
		  	 			if(!$bf->borrado){

		  	 				if(strtotime($bf->fecha_hasta) <= strtotime(date('d-m-Y')) || $bf->fecha_hasta == 'actual' & strtotime($bf->fecha_hasta) == strtotime('31-12-1969') ){
		  	 								
								if($bf->Jugador->id != '175'){
			 						if(!in_array($bf->Jugador->id, $id_jugadores)){
			 							array_push($id_jugadores, $bf->Jugador->id); 
			 							array_push($data_actual , array('jugador_id' => $bf->Jugador, 'buena_fe'=> $bf));
			  	 					}
			  	 				}
			  	 				
		 					}else{
		 						
		 						if(!in_array($bf->Jugador->id, $ex_jugadores)){
		 							array_push($ex_jugadores, $bf->Jugador->id); 
									array_push($data_ex , array('jugador_id' => $bf->Jugador, 'buena_fe'=> $bf));
		 						}

		 					}	
		  	 			}
		  	 			

		 				/*
			 	 		if(strtotime($bf->fecha_hasta) >= strtotime(date('d-m-Y')) || $bf->fecha_hasta != 'actual' && strtotime($bf->fecha_hasta) != strtotime('31-12-1969')){

			 	 			if(!in_array($bf->Jugador->id, $id_jugadores)){

			 	 					array_push($ex_jugadores, $bf);
				 					array_push($id_jugadores, $bf->Jugador->id); 
				 			}
				 		}
						*/
		  		 		/*
		  		 		if(!in_array($bf->Jugador->id , $id_jugadores))
		  		 		{
		  		 				if(strtotime($bf->fecha_hasta) <= strtotime(date('d-m-Y')) )
					 			{
					 				array_push($ex_jugadores, $bf);
					 				//array_push($id_jugadores, $bf->id);
					 			}
			  		 			array_push($id_jugadores, $bf->Jugador->id);
		  		 		}
		*/
		  		 	
		  		 	}

		  		
		  		 	foreach($o2->BuenaFeStaff as $bfs){
		  		 
		  		 		if(!$bfs->borrado){
		  	 				if(strtotime($bfs->fecha_hasta) <= strtotime(date('d-m-Y')) || $bfs->fecha_hasta == 'actual' && strtotime($bfs->fecha_hasta) == strtotime('31-12-1969') ){
		  	 								
		  	 				
			 						if(!in_array($bfs->Oficial->id.$bfs->funcion->id, $id_staff )){

			 							array_push($id_staff, $bfs->Oficial->id.$bfs->funcion->id ); 
			 							array_push($data_actual_staff , array('staff_id' => $bfs->Oficial, 'buena_fe_staff'=> $bfs));
			  	 					}
			  	 				
		 					}else{
		 						
		 						if(!in_array($bfs->Oficial->id, $ex_staffs)){

		 							array_push($ex_staffs, $bf->Oficial->id); 
									array_push($data_ex_staff , array('staff_id' => $bfs->Oficial, 'buena_fe_staff'=> $bfs));
		 						}

		 					}	
		  	 			}
		  	 			

		  		 /*
		  		 	 		if(strtotime($bfs->fecha_hasta) >= strtotime(date('d-m-Y')) || $bfs->fecha_hasta != 'actual' && strtotime($bfs->fecha_hasta) != strtotime('31-12-1969') )
			  		 			{
			  		 				if(!in_array($bfs->Oficial->id, $id_staff))
			 	 					{
			  		 					array_push($ex_staffs, $bfs);
			  		 					array_push($id_staff,$bfs->Oficial->id); 
			  		 				}
			  		 			}

		  		 	*/	
		  
		  		 		

		  		 		/*
		  		 		if(!in_array($bfs->Oficial->id , $id_staff))
		  		 		{

			  		 		if($bfs->fecha_hasta != 'actual')
			  		 		{
			  		 			if(strtotime($bfs->fecha_hasta) <= strtotime(date('d-m-Y')) )
				 				{
				 					array_push($ex_staffs, $bfs);
				 				}
			  		 		}
			  		 		array_push($id_staff, $bfs->Oficial->id);
		  		 		}
		  		 		*/ 
		  		 	}			
		  		 }
		   }



		   $data['ex_id_staff'] 	= $id_staff;
		   $data['ex_id_jugador'] 	= $id_jugadores;
		  
		  $data['jugadores_actuales'] 	= $data_actual;
		  $data['jugadores_baja'] 		= $data_ex;

		  $data['staffs_actuales'] 	= $data_actual_staff;
		  $data['staffs_baja'] 		= $data_ex_staff;


		  $data['ex_jugadores']  = $ex_jugadores;
		  $data['ex_staffs']	 = $ex_staffs;


		   //$data['jugadores']	= BuenaFe::where('equipo_id','=',$id)->where('temporada_id','=', $temporada_actual)->where('jugador_id','!=','0')->get();
		   //$data['staffs']		= BuenaFeStaff::where('equipo_id','=',$id)->where('temporada_id','=', $temporada_actual)->where('oficial_id','!=','0')->get();
		   $data['models']  	= Equipo::find($id);



		return View::make('web_nueva.equipos.detalle_equipo')->with($data);
	}

	public function informacion($id){
		
		
		$data['partido'] 		   = Partido::find($id);	
		$data['torneo'] = Torneos::find(Session::get('torneo_id'));
		if($data['partido']->estado != '' || $data['partido']->estado != 0){
		
			/*	
			$data['jugadores_locales'] = BuenaFeBis::where('partido_id', $data['partido']->id)->where('equipo_id', $data['partido']->local_equipo_id->id)->get();
			
			$data['jugadores_visitantes'] = BuenaFeBis::where('partido_id', $data['partido']->id)->where('equipo_id',$data['partido']->visita_equipo_id->id)->get();
			*/
			
			$data['jugadores_locales'] = DB::table('buena_fe_bis')
            ->join('buena_fe', 'buena_fe_bis.buena_fe_id', '=', 'buena_fe.id')
            ->join('jugador', 'buena_fe.jugador_id', '=', 'jugador.id')
            ->where('buena_fe_bis.partido_id', $data['partido']->id)
            ->where('buena_fe_bis.equipo_id', $data['partido']->local_equipo_id->id)
            ->orderBy('buena_fe.nro','ASC')
            ->get();

            $data['jugadores_visitantes'] = DB::table('buena_fe_bis')
            ->join('buena_fe', 'buena_fe_bis.buena_fe_id', '=', 'buena_fe.id')
            ->join('jugador', 'buena_fe.jugador_id', '=', 'jugador.id')
            ->where('buena_fe_bis.partido_id', $data['partido']->id)
            ->where('buena_fe_bis.equipo_id', $data['partido']->visita_equipo_id->id)
            ->orderBy('buena_fe.nro','ASC')
            ->get();

			$data['staff_local'] = BuenaFeStaffBis::where('partido_id', $data['partido']->id)->where('equipo_id', $data['partido']->local_equipo_id->id)->get();
		
			$data['staff_visitante'] = BuenaFeStaffBis::where('partido_id', $data['partido']->id)->where('equipo_id', $data['partido']->visita_equipo_id->id)->get();	
		}

		$data['torneo_fase'] = TorneoFaseLegPartido::where('partido_id', $data['partido']->id)->get()->first();
		$data['sesion_calendario'] = 1;
		return View::make('web_nueva.competencias.informacion')->with($data);
	}

	public function jugador($id){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['models'] = Jugador::find($id);
		return View::make('web_nueva.equipos.jugador')->with($data);
	}

	public function estadios(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Estadio::where('estado',1)->orderBy('nombre','ASC')->get();
		return View::make('web_nueva.equipos.estadios')->with($data);
	}

	public function detalle_estadio($id){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['models']	= Estadio::find($id);
		return View::make('web_nueva.equipos.detalle_estadio')->with($data);

	}


	//Estadisticas
	public function jugadores(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['sesion_jugador']  = 1;
		return View::make('web_nueva.estadisticas.jugadores')->with($data);
	}



	public function individuales(){
		$data['sesion_individuales'] = 1;
		return View::make('web_nueva.estadisticas.individuales')->with($data);
	}

	public function entreequipos(){
		$data['sesion_entreequipos'] = 1;
		return View::make('web_nueva.estadisticas.entreequipos')->with($data);
	}

	public function porequipo(){
		$data['sesion_porequipo'] = 1;
		return View::make('web_nueva.estadisticas.porequipo')->with($data);
	}

	public function records(){
		$data['sesion_records'] = 1;
		return View::make('web_nueva.estadisticas.records')->with($data);
	}
	public function curiosidades(){
		$data['sesion_curiosidades'] = 1;
		return View::make('web_nueva.estadisticas.curiosidades')->with($data);
	}


	//noticias
	public function detalle_noticias($id){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Noticias::find($id);
		return View::make('web_nueva.noticias.detalle_noticia')->with($data);
	}


	public function noticias(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model']		    = Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=',1)->orderBy('created_at' ,'DESC')->paginate(5);

		return View::make('web_nueva.noticias.noticias')->with($data);
	}
	
	public function entrevistas(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model']			 = Noticias::where('estado','=',1)->where('web_entrevista','=', 1)->orderBy('fecha','DESC')->paginate(5);

		return View::make('web_nueva.noticias.entrevistas')->with($data);
	}

	public function especiales(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] 			= Noticias::where('web_especial','=',1)->where('web_especial','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web_nueva.noticias.especial')->with($data);
	}
	
	public function social(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Noticias::where('estado','=',1)->where('web_social','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web_nueva.noticias.social')->with($data);
	}
	


	//Multimedia
	public function descargas(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Archivo::orderBy('created_at','DESC')->get();
		return View::make('web_nueva.multimedia.descargas')->with($data);
	}

	public function download($id){

				$id 		= Crypt::decrypt($id);
				$file 		= Formulario::find($id);
				$contenido  = file_get_contents('uploads/formularios/'.$file->file);

				$archivo 	= $file->file; 
				$trozos 	= explode(".", $archivo); 
				$extension 	= end($trozos);  

				$headers 	= array(

							'Content-Description' => 'File Transfer',

							'Content-Type' => 'application/".$extension."',

							'Content-Transfer-Encoding' => 'binary',

							'Content-Disposition' => 'inline; filename="'.$file->file.'"',

							'Expires' => 0,

							'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',

							'Pragma' => 'public'

							);



				$formularioequipo 					= new FormularioEquipo;
				$formularioequipo->equipo_id 	 	= Session::get('equipo_id');
				$formularioequipo->formulario_id 	= $id;
				$formularioequipo->estado 		 	= 'Descargado'; 
				$formularioequipo->save();


				//$file->visita = $file->visita + 1 ;
				//$file->save();

				return Response::make($contenido, 200, $headers);
	}

	public function galeria(){
		//$galerias = Galeria::orderBy('created_at','DESC')->get();
		//$g = $galerias->toArray();


		$data['model'] = Galeria::orderBy('created_at','DESC')->paginate(4);

		return View::make('web_nueva.multimedia.galeria.galerias')->with($data);
	}

	public function detalle_galeria($id)
	{
		$data['models'] = GaleriaSub::where('galeria_id','=',$id)->orderBy('created_at','DESC')->paginate(4);
		return View::make('web_nueva.multimedia.galeria.detalle_galeria')->with($data);
	}

	public function album($id)
	{
		$data['models'] = GaleriaImagenes::where('galeria_sub_id','=',$id)->orderBy('created_at','DESC')->paginate(8);
		return View::make('web_nueva.multimedia.galeria.album')->with($data);
	}

	public function videos(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['models'] = Video::where('estado','=',1)->orderBy('id','DESC')->paginate(4);
		return View::make('web_nueva.multimedia.videos')->with($data);
	}

	public function detalle_video($id){
				$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Video::find($id);
		return View::make('web_nueva.multimedia.detalle_video')->with($data);
	}

	//institucional
	public function accion(){
		dd('accion');
	}

	public function sponsors(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Sponsor::all();
		return View::make('web_nueva.institucional.sponsors')->with($data);
	}


	public function historia(){
		$data['goleador']        =  Goleador::where('estado','=',1)->first();
		$data['model'] = Historia::all()->first();
		return View::make('web_nueva.institucional.historia')->with($data);
	}

	public function autoridades(){

		$staff 		   = Autoridad::all()->toArray();
		$data['model'] = array_chunk($staff, 3);
		return View::make('web_nueva.institucional.autoridades')->with($data);
	}

	public function staff(){
		$staff 		   = Staff::all()->toArray();
		$data['model'] = array_chunk($staff, 3);

		return View::make('web_nueva.institucional.staff')->with($data);
		
	}

	public function contacto(){
		
		$data['model'] = Contacto::where('estado',1)->first();
		return View::make('web_nueva.institucional.contacto')->with($data);
	}

	public function procesar(){
	

		$data['nombre']  = Input::get('nombre');
		$data['email']   = Input::get('email');
		$data['mensaje'] = Input::get('mensaje');
		$data['dia']	 = date("l, F jS, Y");
		$data['hora']	 = date("h:i A");
		
		/*
		sendMail::send($data, 'web_nueva.institucional.mail', 'rochaleandroleonel@gmail.com','Paula Parisi','Designaciones Pendientes!');
		*/
		Mail::send('web_nueva.institucional.mail', $data, function($message)
			{
			  $message->to('info@aclav.com"', 'Philip Brown')
			          ->subject('Aclav web');
			});

		return Redirect::back()->with('msg', 'The Message');
		/*
		$to="info@aclav.com"; /*Your Email

		$subject="Mensaje desde la Web";

		$date=date("l, F jS, Y");
		$time=date("h:i A");

		$type=$_REQUEST['type'];
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$message=$_REQUEST['message'];

		$msg  = "";
		$msg .= "Mensaje recibido desde el Website el dia:  $date, hour: $time.\n";
		$msg .= "Email: $email\n";
		$msg .= "Nombre: $name\n";
		$msg .= "Mensaje: $message\n";


		if($name == "" && $type == 'contact') {
			echo "<div class='alert alert-danger'>
				<a class='close' data-dismiss='alert'>×</a>
				<strong>Cuidado!</strong> Falta su Nombre.
			</div>";

		} else if($email=="") {
			echo "<div class='alert alert-danger'>
				<a class='close' data-dismiss='alert'>×</a>
				<strong>Cuidado!</strong> Falta su Email.
			</div>";

		} else if($message == "" && $type == 'contact') {
			echo "<div class='alert alert-danger'>
				<a class='close' data-dismiss='alert'>×</a>
				<strong>Cuidado!</strong> Ingrese su Mensaje.
			</div>";

		} else {
			mail($to,$subject,$msg,"From:".$email);
			echo "<div class='alert alert-success'>
				<a class='close' data-dismiss='alert'>×</a>
				<strong>Gracias por contactarse, proximamente recibirá noticias nuestras!</strong>
			</div>";
		}
		
		*/
	}




}

?>