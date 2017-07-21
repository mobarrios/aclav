<?php

class NuevaWebController extends BaseController
{
	public function getHomeNoticias()
	{
		$data['model'] = NoticiasPosicion::with('noticias')->get();
		$data['social_ultima'] 	 = Noticias::where('fecha','<=', date('Y-m-d'))->where('web_social','=',1)->orderBy('created_at','=','ASC')->first();
		
		$data['partidosDiarios'] = 	Partido::where('pxp','=', 1 )->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
	
		$data['video_ultimo']	 = Video::where('estado','=',1)->orderBy('created_at','=','DESC')->first();
		$data['banner_superior'] =  Banner::where('posicion','=',3)->first();
		$data['banner_inferior'] =  Banner::where('posicion','=',2)->first();

		
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
	public function calendario(){
		return View::make('web_nueva.competencias.calendario');
	}

	public function formula(){
		return View::make('web_nueva.competencias.formula');	
	}

	public function posiciones(){
		return View::make('web_nueva.competencias.posiciones');	
	}

	public function tribunal(){
		return View::make('web_nueva.competencias.tribunal');	
	}

	//Equipos
	public function participantes(){
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
		$data['models'] = Oficial::find($id);
		return View::make('web_nueva.equipos.detalle_staff')->with($data);
	}
	public function detalle_equipo($id){
		   $temporada_actual 	=  Temporada::where('actual','=','1')->first()->id;
		   $torneos    			=  Torneos::where('o2_web',1)->first();


		   $data['jugadores']   =  o2::where('torneos_id','=',$torneos->id)->where('equipo_id','=',$id)->get();
		   $data['staffs']		=  o2::where('torneos_id','=',$torneos->id)->where('equipo_id','=',$id)->get();


		   
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

	public function jugador($id){
		$data['models'] = Jugador::find($id);
		return View::make('web_nueva.equipos.jugador')->with($data);
	}

	public function estadios(){
		
		$data['model'] = Estadio::where('estado',1)->orderBy('nombre','ASC')->get();
		return View::make('web_nueva.equipos.estadios')->with($data);
	}

	public function detalle_estadio($id){
		$data['models']	= Estadio::find($id);
		return View::make('web_nueva.equipos.detalle_estadio')->with($data);

	}


	//Estadisticas
	public function jugadores(){
		return View::make('web_nueva.estadisticas.jugadores');
	}



	public function individuales(){
		return View::make('web_nueva.estadisticas.individuales');
	}

	public function entreequipos(){
		return View::make('web_nueva.estadisticas.entreequipos');
	}

	public function porequipo(){
		return View::make('web_nueva.estadisticas.porequipo');
	}

	public function records(){
		return View::make('web_nueva.estadisticas.records');
	}
	public function curiosidades(){
		return View::make('web_nueva.estadisticas.curiosidades');
	}


	//noticias
	public function detalle_noticias($id){
		$data['model'] = Noticias::find($id);
		return View::make('web_nueva.noticias.detalle_noticia')->with($data);
	}


	public function noticias(){
		$data['model']		    = Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=',1)->orderBy('id','DESC')->paginate(5);

		return View::make('web_nueva.noticias.noticias')->with($data);
	}
	
	public function entrevistas(){
		$data['model']			 = Noticias::where('estado','=',1)->where('web_entrevista','=', 1)->orderBy('fecha','DESC')->paginate(5);

		return View::make('web_nueva.noticias.entrevistas')->with($data);
	}

	public function especiales(){
		$data['model'] 			= Noticias::where('web_especial','=',1)->where('web_especial','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web_nueva.noticias.especial')->with($data);
	}
	
	public function social(){
		$data['model'] = Noticias::where('estado','=',1)->where('web_social','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web_nueva.noticias.social')->with($data);
	}
	


	//Multimedia
	public function descargas(){
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
		$galerias = Galeria::orderBy('created_at','DESC')->get();
		$g = $galerias->toArray();

		$data['model'] = array_chunk($g, 4);

		return View::make('web_nueva.multimedia.galeria.galerias')->with($data);
	}

	public function detalle_galeria($id){
		$data['models'] = GaleriaSub::where('galeria_id','=',$id)->orderBy('created_at','ASC')->paginate(4);
		return View::make('web_nueva.multimedia.galeria.detalle_galeria')->with($data);
	}

	public function album($id){
		$data['models'] = GaleriaImagenes::where('galeria_sub_id','=',$id)->orderBy('created_at','DESC')->paginate(8);
		return View::make('web_nueva.multimedia.galeria.album')->with($data);
	}

	public function videos(){
			return View::make('web_nueva.multimedia.videos');
	}


	//institucional
	public function accion(){
		dd('accion');
	}

	public function sponsors(){
		$data['model'] = Sponsor::all();



		return View::make('web_nueva.institucional.sponsors')->with($data);
	}


	public function historia(){
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
		
		return View::make('web_nueva.institucional.contacto');
	}

	


}

?>