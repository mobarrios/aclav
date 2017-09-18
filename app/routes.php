<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});*/


// ruta de logueo sin autorizar
/*Route::get('web', function()
{
	 return View::make('web.index');

});
*/

require(__DIR__ . '/web_nuevaRoute.php');


Route::group(array('prefix' => 'api'), function()
{
    Route::get('noticia/{id?}', 'ApiController@getNoticia');
    Route::get('noticias', 'ApiController@getNoticias');
    Route::get('homeNoticias', 'ApiController@getHomeNoticias');


});




Route::get('',function(){
	
	return Redirect::to('web');
});


Route::group(array('prefix' => 'web_old'), function()
{

	//set database original
		//Config::set('database.default','mysql');	
	//--

	//consulta entre fechas actual
	// @foreach(TorneoFaseLeg::whereRaw('CURDATE() BETWEEN fecha_inicio AND fecha_final')->get() as $leg )

	Route::get('', function()
	{	
		$date = date('Y-m-d');
		$time = date('H:i',time() + 60 * 60);

		$data['social_ultima'] 	 = Noticias::where('fecha','<=', date('Y-m-d'))->where('web_social','=',1)->orderBy('created_at','=','ASC')->first();
		
		$data['especial_ultima'] = Noticias::where('fecha','<=', date('Y-m-d'))->where('web_especial','=',1)->orderBy('created_at','=','ASC')->first();
		$data['video_ultimo']	 = Video::where('estado','=',1)->orderBy('created_at','=','DESC')->first();

		$data['banner_superior'] =  Banner::where('posicion','=',3)->first();
		$data['banner_inferior'] =  Banner::where('posicion','=',2)->first();
		
		//$data['partidosDiarios'] = 	Partido::where('fecha_inicio','=', $date )->where('hora','<=', $time)->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
		$data['partidosDiarios'] = 	Partido::where('pxp','=', 1 )->orderBy('fecha_inicio','ASC')->orderBy('hora','ASC')->get();
		
		$noticias				 =  Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=', 1 )->orderBy('created_at','ASC')->get();

		//$data['weekends']      =  TorneoFaseLeg::where('fecha_inicio','<=',$date)->where('fecha_final','>=',$date)->get();

		//$data['weekends']      	 =  TorneoFaseLeg::whereBetween('fecha_inicio', array('2014-10-17', '2014-10-21'))->get(); //where('fecha_inicio','<=',$date)->get();

		
		//$data['weekends'] 	 =  	TorneoFaseLeg::find(Session::get('torneo_actual_id'));
		$data['count']			 = 	'1';
		$data['torneos'] 	 	 = 	Torneos::find(19);
		$data['fases'] 			 = 	TorneoFase::where('torneo_id','=',19)->get();
		$data['tablas']			 =  TorneoFase::where('tabla_web',1)->get();


	//	return $data['weekends'];
		$principales 	= array();
		$secundarias	= array();

		$count = 1;

		foreach($noticias  as $noti)
		{
			if($count <= 6)
			{
				 array_push($principales ,$noti);
			}
			elseif($count >= 7 && $count <= 10)
			{
				 array_push($secundarias ,$noti);
			}
			
			$count++;
		}

		//return $principales;

		$data['principales']	= $principales;
		$data['secundarias']	= $secundarias;

		
		

		//$data['torneosMasculinos']			= Torneos::where('muestra_web','=',1)->where('serie_id','=',1)->get();
		//$data['torneosFemeninos']			= Torneos::where('muestra_web','=',1)->where('serie_id','=',2)->get();
		
		 return View::make('web.index')->with($data);
	});

	Route::get('/download/{id}', function($id){

				$id 		= Crypt::decrypt($id);

				$file 		= Archivo::find($id);
				$contenido  = file_get_contents('uploads/contenidos/archivo/'.$file->archivo);

				$archivo 	= $file->archivo; 
				$trozos 	= explode(".", $archivo); 
				
				$extension 	= end($trozos);  

				$headers 	= array(

							'Content-Description' => 'File Transfer',

							'Content-Type' => 'application/".$extension."',

							'Content-Transfer-Encoding' => 'binary',

							'Content-Disposition' => 'inline; filename="'.$file->archivo.'"',

							'Expires' => 0,

							'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',

							'Pragma' => 'public'

							);


				//$file->visita = $file->visita + 1 ;
				//$file->save();

				return Response::make($contenido, 200, $headers);
		});


	Route::get('/pxp', function()
	{
		//if(Request::ajax())
		//{
			$date = date('Y-m-d');

			$buscaPartido 	= Partido::where('fecha_inicio','=', $date )->get();

			$data 	= array();
			$puntos = array();

			foreach($buscaPartido as $partido)
			{
				$puntoPartido = PartidoPunto::where('partido_id','=',$partido->id)->get();
				//$puntoPartido = Response::json($puntoPartido);
				$puntos = array();

				foreach($partido->puntoPartido as $pto)
				{
					array_push($puntos, array(
						'set_numero'=>$pto->set_numero,
						'set_'.$pto->set_numero.'_local' => $pto->puntos_local,
						'set_'.$pto->set_numero.'_visita' => $pto->puntos_visita,

						));
				}
							 
				array_push($data , array(
							
							'partido'	 	=> $partido->id,
							//'local_sigla'	=> $partido->local_equipo_id->sigla,
							//'visita_sigla'	=>$partido->visita_equipo_id->sigla,
							'set_local'		=> $partido->local_set,
							'set_visita'	=> $partido->visita_set,
							
					

							'punto_partido' => $puntos

							
							 ));


							 /*	
							 	$puntoPartido 	= PartidoPunto::where('partido_id','=',$partido->id)->get();
										
										foreach($puntoPartido as $punto)
										{
											 $data[] = array(
											'set_local_'.$punto->set_numero => $punto->puntos_local,
											'set_visita_'.$punto->set_numero => $punto->puntos_visita
											);
										}

										/*$data['partido'] =  array(
											'local_sigla'=>$partido->local_equipo_id->sigla,
											'visita_sigla'=>$partido->visita_equipo_id->sigla,
											'set_local'=>$partido->local_set,
											'set_visita'=>$partido->visita_set,
										);*/	
			}


			return Response::json($data);

			/*
			$puntos = PartidoPunto::where('partido_id','=','12')->first();

			$res = array('puntos_local'=>$puntos->puntos_local,'puntos_visita'=>$puntos->puntos_visita);
			//return $puntos->puntos_local;
			return Response::json($res);
			*/
 		//}

		 //return Response::json("hola");
	});

	Route::post('/news', function(){

		$input  =  Input::all();
		
		Newsletter::create($input);

		return Redirect::back();
	});

  Route::get('/masculino', function()
  {

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

   //$data['model'] = Equipo::where('sexo','=','Masculino')->get();

   return View::make('web.masculino')->with($data);

  });	

  Route::get('/femenino', function()
  {
   $data['model'] = Equipo::where('sexo','=','Femenino')->get(); 
   return View::make('web.femenino')->with($data);
  });

  Route::get('/masculino/detalle/{id}',function($id){

  		$data['models'] = Jugador::find($id);

  		return View::make('web.jugadordetalle')->with($data);
  });

	//prueba lista de jugadores
  Route::get('/masculinonuevo/{id}',function($id){

	$temporada_actual 	=  Temporada::where('actual','=','1')->first()->id;	
   	$torneo     		=  Torneos::where('temporada_id',$temporada_actual)->where('o2_web',1)->first();

    $data['models']  	=  Equipo::find($id);
    $data['o2']			=  o2::where('equipo_id',$id)->where('torneos_id',$torneo->id)->get();

  	return View::make('web.masculinonuevo2')->with($data);

  });

  Route::get('/masculinonuevoOLD/{id}', function($id)
  {

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


   return View::make('web.masculinonuevo')->with($data);
  });

  Route::get('/femeninonuevo/{id}', function($id)
  {
   $data['models'] = Equipo::find($id);
   return View::make('web.femeninonuevo')->with($data);
   
  });

	Route::get('/estadio', function()
	{
		$data['model'] = Estadio::where('estado',1)->orderBy('nombre','ASC')->get();
		return View::make('web.estadio')->with($data);
	});

	Route::get('/estadionuevo/{id}', function($id)
	{

		$data['models']	= Estadio::find($id);

		return View::make('web.estadionuevo')->with($data);
	});


	Route::get('/video', function()
	{
		$data['model'] = Autoridad::all();
		return View::make('web.video')->with($data);
	});

	Route::get('/tabla', function()
	{
		return View::make('web.tabla');
	});

	Route::get('/tabla1', function()
	{
		return View::make('web.tabla1');
	});

	Route::get('/tabla2', function()
	{
		return View::make('web.tabla2');
	});

	Route::get('/autoridades', function()
	{
		$data['model'] = Autoridad::all();
		return View::make('web.autoridades')->with($data);
	});
	
	Route::get('/staff', function()
	{
		$data['model'] = Staff::all();
		return View::make('web.staff')->with($data);
	});

	Route::get('/staffdetalle/{id}',function($id){

		$data['models'] = Oficial::find($id);
		return View::make('web.staffdetalle')->with($data);

	});

	Route::get('/contacto', function()
	{
		$data['model'] = Contacto::all();
		return View::make('web.contacto')->with($data);
	});

	Route::get('/social', function()
	{
		$data['tituloSeccion'] = "Aclav Social";
		$data['model'] = Noticias::where('estado','=',1)->where('web_social','=',1)->orderBy('fecha','DESC')->paginate(5);

		return View::make('web.noticia')->with($data);
	});

	Route::get('/marketing', function()
	{
		$data['model'] = Marketing::all();
		return View::make('web.marketing')->with($data);
	});

	Route::get('/sponsor', function()
	{
		$data['model'] = Sponsor::all();
		return View::make('web.sponsor')->with($data);
	});

	
	Route::get('/accion', function()
	{
		$data['tituloSeccion'] = "Acciones";

		$data['model'] = Noticias::where('estado','=',1)->where('web_accion','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web.noticia')->with($data);
	});

	
	Route::get('/sponsornew', function()
	{
		$data['model'] = Sponsornew::all();
		return View::make('web.sponsornew')->with($data);
	});

	Route::get('/historia', function()
	{
		$data['model'] = Historia::all();
		return View::make('web.historia')->with($data);
	});

	Route::get('/estadisticae', function()
	{
		$data['model'] = Estadisticae::all();
		return View::make('web.estadisticae')->with($data);
	});

	Route::get('/estadisticao', function()
	{
		$data['model'] = Estadisticao::all();
		return View::make('web.estadisticao')->with($data);
	});

	Route::get('/estadisticaj', function()
	{
		$data['model'] = Estadisticaj::all();
		return View::make('web.estadisticaj')->with($data);
	});

	Route::get('/estadisticac', function()
	{
		$data['model'] = Estadisticac::all();
		return View::make('web.estadisticac')->with($data);
	});

	Route::get('/estadisticar', function()
	{
		$data['model'] = Estadisticar::all();
		return View::make('web.estadisticar')->with($data);
	});

	Route::get('/estadisticai', function()
	{
		$data['model'] = Estadisticai::all();
		return View::make('web.estadisticai')->with($data);
	});

	Route::get('/ampliarestadisticai/{id}', function($id)
	{
		$data['models'] = Estadisticai::find($id);
		return View::make('web.ampliarestadisticai')->with($data);
	});

	Route::get('/formulacopaa', function()
	{
		$data['model'] = Formulacopaa::all();
		return View::make('web.formulacopaa')->with($data);
	});

	Route::get('/formulacopab', function()
	{
		$data['model'] = Formulacopab::all();
		return View::make('web.formulacopab')->with($data);
	});
	Route::get('/formulacopac', function()
	{
		$data['model'] = Formulacopac::all();
		return View::make('web.formulacopac')->with($data);
	});

	Route::get('/formulacopad', function()
	{
		$data['model'] = Formulacopad::all();
		return View::make('web.formulacopad')->with($data);
	});

	Route::get('/formulacopae', function()
	{
		$data['model'] = Formulacopae::all();
		return View::make('web.formulacopae')->with($data);
	});

	Route::get('/formulacopaf', function()
	{
		$data['model'] = Formulacopaf::all();
		return View::make('web.formulacopaf')->with($data);
	});

		Route::get('/entrevista', function()
	{
		//return View::make('web.entrevista');
		$data['tituloSeccion']	= "Entrevistas";
		$data['model']			 = Noticias::where('estado','=',1)->where('web_entrevista','=', 1)->orderBy('fecha','DESC')->paginate(5);

		return View::make('web.noticia')->with($data);
	});

	
	
	Route::get('/posicion/{id}', function($id)
	{
		$id = Crypt::decrypt($id);

		$data['count']			= 	'1';
		$data['torneos'] 		= 	Torneos::find($id);
		$data['fases'] 			= 	TorneoFase::where('torneo_id','=',$id)->get();

		return View::make('web.posicion')->with($data);
	});
	
	Route::get('/calendario/{id}', function($id)
	{	
	
		$id = Crypt::decrypt($id);

		$data['torneo'] 	= 	Torneos::find($id);
		$data['fases']		=	TorneoFase::where('torneo_id','=', $id)->get();	

		$act = array();

		foreach($data['fases'] as $fase)
		{
			$actual = TorneoFaseLeg::where('torneo_fase_id','=', $fase->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
			
			if(!is_null($actual))
			{
				array_push($act, $actual->id);
			}
			
		}


		//$data['leg_actual'] = 	TorneoFaseLeg::where('torneo_fase_id','=', $data['fase']->first()->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
		$data['leg_actual'] = $act;


		return View::make('web.calendario')->with($data);
	});
	
	Route::get('/resultado/{id}', function($id)
	{
		$id = Crypt::decrypt($id);

		$data['torneo'] 	= 	Torneos::find($id);
		$data['fases']		=	TorneoFase::where('torneo_id','=', $id)->get();

		$act = array();

		foreach($data['fases'] as $fase)
		{
			$actual = TorneoFaseLeg::where('torneo_fase_id','=', $fase->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
			
			if(!is_null($actual))
			{
				array_push($act, $actual->id);
			}
			
		}

		//$data['leg_actual'] = 	TorneoFaseLeg::where('torneo_fase_id','=', $data['fase']->first()->id)->where('fecha_final','>=',date('Y-m-d'))->where('fecha_inicio','<=',date('Y-m-d'))->first();
		$data['leg_actual'] = $act;



		
		return View::make('web.resultado')->with($data);
	});
	
	Route::get('/estadistica', function()
	{
		return View::make('web.estadistica');
	});
	
	Route::get('/llave', function()
	{
		return View::make('web.llave');
	});
	
	Route::get('/copaaclav', function()
	{
		return View::make('web.copaaclav');
	});
	
	Route::get('/clasificatorio', function()
	{
		return View::make('web.clasificatorio');
	});
	
	Route::get('/archivo', function()
	{
		$data['model'] = Archivo::orderBy('created_at','DESC')->get();
		return View::make('web.archivo')->with($data);
	});

	Route::get('/tribunal/{id}', function($id)
	{
		$temporada = Temporada::where('actual',1)->first();
		
		$desde = date('Y-m-d',strtotime($temporada->fecha_inicio));
		$hasta =date('Y-m-d',strtotime($temporada->fecha_final));

		//$data['model']	= Tribunal::whereBetween('vencimiento_sanc',array($desde,$hasta))->orderBy('id','DESC')->paginate(10);

		$data['model']	= Tribunal::where('temporada_id',$temporada->id)->orderBy('id','DESC')->paginate(10);
		
		//$data['model'] = Tribunal::orderBy('created_at','DESC')->paginate(10);
		return View::make('web.tribunal')->with($data);
	});
	
	Route::get('/ampliarnoticia/{id}', function($id)
	{
		$data['noticia'] = Noticias::find($id);
		return View::make('web.ampliarnoticia')->with($data);
	});

	Route::get('/noticia', function()
	{
		$data['tituloSeccion']	= "Noticias";
		$data['model']		    = Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=',1)->orderBy('id','DESC')->paginate(5);

		return View::make('web.noticia')->with($data);
	});

	Route::post('/noticias/buscar', function()
	{

		$data['tituloSeccion']	= "Noticias";
		$data['model']		    = Noticias::where('cuerpo','like','%'.Input::get('buscar').'%')->orWhere('titulo','like','%'.Input::get('buscar').'%')->orWhere('copete','like','%'.Input::get('buscar').'%')->where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->orderBy('id','DESC')->get();

		return View::make('web.buscar')->with($data);
	});


	Route::get('/original', function()
	{
		 return View::make('web.original');
	});

	Route::get('/galeriaprincipal', function()
	{
		$data['galerias'] = Galeria::orderBy('created_at','DESC')->get();
		 return View::make('web.galeriaprincipal')->with($data);
	});

	
	Route::get('/galeria/{id}', function($id)
	{

		$data['galerias'] = GaleriaSub::where('galeria_id','=',$id)->orderBy('created_at','ASC')->get();

		 return View::make('web.galeria')->with($data);
	});

	Route::get('/galeriaampliada/{id}', function($id)
	{

		$data['models'] = GaleriaImagenes::where('galeria_sub_id','=',$id)->orderBy('created_at','DESC')->paginate(20);


		 return View::make('web.galeriaampliada')->with($data);
	});


	


	Route::get('/especial', function()
	{
		$data['tituloSeccion']  = "Noticias Especiales";
		$data['model'] 			= Noticias::where('web_especial','=',1)->where('web_especial','=',1)->orderBy('fecha','DESC')->paginate(5);
		return View::make('web.noticia')->with($data);
	});
		
});



Route::get ('login' ,array('uses' => 'LoginController@logIn' ));
Route::post('login' ,array('uses' => 'LoginController@logIn' ));
Route::get ('logout',array('uses' => 'LoginController@logOut'));




//ruta sistema con autorizacion


Route::group(array('before' => 'auth'), function()
{

		
		Route::get('mail',function(){

			$data['partido'] = "partido";

			sendMail::send($data, 'mail', 'paulaparisi@aclav.com','Paula Parisi','Designaciones Pendientes!');

			return "enviado";

		});


		
		Route::get('original',function(){

			return View::make('template-2/original');
		});





		//prueba
		Route::get('prueba',function()
		{


				//DELETE DATOS
				/*
				$torneo = o2::where('torneos_id','=',19)->get();


				foreach($torneo as $bf)					
				{
				
					foreach ($bf->BuenaFe as $bf)
					{
						BuenaFe::find($bf->id)->delete();
						Habilitaciones::find($bf->habilitaciones->id)->delete();
					}	

					if($bf->BuenaFeStaff)
					{
						foreach($bf->buenafestaff as $bfs)
						{
						BuenaFeStaff::find($bfs->id)->delete();
						HabilitacionesStaff::find($bfs->HabilitacionesStaff->id)->delete();
						
						}
					}
					
				}
				*/
			
				/*// REPLICA BUENA FE y HABILITACIONES
				$torneo = o2::where('torneos_id','=',1)->get();


				foreach($torneo as $bf)					
				{
				
					
					// creo o2 
					$no2 				= new o2();
					$no2->torneos_id 	= 19;
					$no2->presentado 	= $bf->presentado;
					$no2->equipo_id 	= $bf->equipo_id;
					$no2->save();


				foreach($bf->BuenaFeStaff as $b)
					{
						// creo bf 
						$nb 						= new BuenaFeStaff();
						$nb->o2_id 					= $no2->id;
						$nb->nro 					= $b->nro;
						$nb->oficial_funcion_id 	= $b->oficial_funcion_id;
						$nb->oficial_id 			= $b->oficial_id;
						$nb->save();


						//creo hab
						$nueva_hab 						= new HabilitacionesStaff();
						$nueva_hab->buena_fe_staff_id 	= $nb->id;
						$nueva_hab->dni 				= $b->HabilitacionesStaff->dni;
						$nueva_hab->tit					= $b->habilitacionesStaff->tit;
						$nueva_hab->m8					= $b->habilitacionesStaff->m8;
						$nueva_hab->feva_af				= $b->habilitacionesStaff->feva_af;
						$nueva_hab->mat 				= $b->habilitacionesStaff->mat;
						$nueva_hab->des 				= $b->habilitacionesStaff->des;
						$nueva_hab->condicion			= $b->habilitacionesStaff->condicion;
						$nueva_hab->carnet 				= $b->habilitacionesStaff->carnet;
						$nueva_hab->save(); 

					}

					foreach($bf->BuenaFe as $b1)
					{
						// creo bf 
						$nb1 				= new BuenaFe();
						$nb1->o2_id 		= $no2->id;
						$nb1->nro 			= $b1->nro;
						$nb1->jugador_id 	= $b1->jugador_id;
						$nb1->fecha_desde 	= $b1->fecha_desde;
						$nb1->fecha_hasta 	= $b1->fecha_hasta;
						$nb1->save();


						//creo hab
						$nueva_hab1 				= new Habilitaciones();
						$nueva_hab1->buena_fe_id = $nb1->id;
						$nueva_hab1->dni 		= $b1->habilitaciones->dni;
						$nueva_hab1->m4			= $b1->habilitaciones->m4;
						$nueva_hab1->m8			= $b1->habilitaciones->m8;
						$nueva_hab1->feva_af		= $b1->habilitaciones->feva_af;
						$nueva_hab1->feva_tr		= $b1->habilitaciones->feva_tr;
						$nueva_hab1->feva_tr_tipo= $b1->habilitaciones->feva_tr_tipo;
						$nueva_hab1->ld 			= $b1->habilitaciones->ld;
						$nueva_hab1->condicion	= $b1->habilitaciones->condicion;
						$nueva_hab1->carnet 		= $b1->habilitaciones->carnet;
						$nueva_hab1->save(); 

					}



	
			



					//creo hab



						//foreach($bf->BuenaFe as $b){

						//new bf
						//$new = new buenafe();
						//$new->o2_id = 
						//$new->nro   = $b->nro;
						//$new->jugardor_id = $b->jugador_id;
						//$new->fecha_desde = $b->fecha_desde;
						//$new->fecha_hasta = $b->fecha_hasta;

						//echo $b->habilitaciones->id;


						

			
						
					//	$hab = Habilitaciones::find($b->habilitaciones->id);
					//	echo $hab;
					//}
				}
				*/
				return;
		});


		Route::get('getTorneos/{id}',function($id){

			$torneos = Torneos::where('temporada_id','=',$id)->get();
			return Response::json($torneos);
		});

		Route::post('postImage', function(){

			$image = GaleriaImagenes::find(Input::get('image_id'));

			$image->owner = Input::get('input_owner');
			$image->save();

			//$credito = Input::get('')
		});

		Route::get('getTemporadas',function(){
			$temporadas = Temporada::all();
			return Response::json($temporadas);
		});


		if(Session::has('db'))
		{
			Config::set('database.default',Session::get('db'));
		}
		
		Route::get('xls',function(){

			Excel::create('aclav', function($excel) {

				$data  = Jugador::all();

				$excel->sheet('hoja', function($sheet) use($data) {

					$sheet->fromModel($data);

				});

			})->download('xls');
		});

		//Route::controller('puntoxpunto/pxp', 'PuntoXPuntoController');


		Route::get('pdf',function(){

			/*$data = array('novedades' => Jugador::all() );

			$pdf = PDF::loadView('jugador.list', $data);

			return $pdf->stream();
			*/
			$data = Jugador::orderBy('apellido','ASC')->get();

			$pdf = PDF::loadView('reporte', array('data' => $data));
			$pdf->setPaper('a4', 'landscape');
			return $pdf->stream('lista');
				
			//$pdf = App::make('dompdf');
			//$pdf->loadHTML('<h1>Test</h1>');
			//$pdf->loadView('reporte');
			// return $pdf->download('invoice.pdf');
			//return $pdf->stream();
		});


		Route::get('home', array('uses' => 'HomeController@getIndex'));
		//Route::controller('/', 	'HomeController');

		Route::get('pxp', array('uses' => 'HomeController@getIndex'));
		
		//edita tabla 
		Route::get('tabla/{id?}/{data?}/{value?}',	'TorneoController@getTablaEdit');
	

		Route::controller('torneos',	'TorneoController');
		Route::controller('modulos',	'ModulosController');
		Route::controller('usuarios',	'UsuariosController');
		Route::controller('perfiles',	'PerfilesController');
		Route::controller('temporada', 	'TemporadaController');
		Route::controller('club', 		'ClubController');
		Route::controller('equipo', 	'EquipoController');
		Route::controller('jugador', 	'JugadorController');
		Route::controller('menu',	 	'MenuController');
		Route::controller('submenu',	'SubMenuController');
		Route::controller('buenafe',	'BuenaFeController');
		Route::controller('buenafebis',	'BuenaFeBisController');
		
		Route::controller('formularios','FormularioController');
		Route::controller('banner',     'BannerController');
		Route::controller('sponsor',    'SponsorController');
		Route::controller('historia',   'HistoriaController');
		Route::controller('marketing',   'MarketingController');
		Route::controller('designaciones', 'DesignacionesController');
		
		Route::controller('arbitro', 	'ArbitroController');
		Route::controller('perfil_arbitro', 'PerfilArbitroController');

		Route::controller('estadio', 	'EstadioController');
		Route::controller('provincia', 	'ProvinciaController');
		Route::controller('ciudad', 	'CiudadController');
		Route::controller('supervisor', 'SupervisorController');
		Route::controller('perfil_supervisor', 'PerfilSupervisorController');

		Route::Controller('noticias',    	'NoticiaController');
		Route::Controller('entrevistas', 	'EntrevistaController');
		Route::Controller('especial',    	'EspecialController');
        Route::Controller('staff',    	 	'StaffController');
        Route::Controller('autoridades', 	'AutoridadController');
        Route::Controller('puntoxpunto', 	'PuntoXPuntoController');
        Route::Controller('partido', 	 	'PartidoController');
        Route::Controller('social', 	 	'SocialController');
        Route::Controller('contacto', 	 	'ContactoController');
        Route::Controller('video', 	 	 	'VideoController');
        Route::Controller('galeria', 	 	'GaleriaController');
        Route::Controller('archivo', 	 	'ArchivoController');
        Route::Controller('habilitaciones',	'HabilitacionesController');
        Route::Controller('intercambio',	'IntercambioController');
        Route::Controller('oficial',		'OficialController');
        Route::Controller('ticket',			'TicketController');
        Route::Controller('oficialfuncion',	'OficialfuncionController');
        Route::Controller('tribunal',		'TribunalController');
        Route::Controller('estadisticae',	'EstadisticaeController');
        Route::Controller('estadisticao',	'EstadisticaoController');
        Route::Controller('estadisticaj',	'EstadisticajController');
        Route::Controller('estadisticac',	'EstadisticacController');
        Route::Controller('estadisticar',	'EstadisticarController');
        Route::Controller('estadisticai',	'EstadisticaiController');
        Route::Controller('formulacopaa',	'FormulacopaaController');
        Route::Controller('formulacopab',	'FormulacopabController');
        Route::Controller('formulacopac',	'FormulacopacController');
		Route::Controller('formulacopad',	'FormulacopadController');
        Route::Controller('formulacopae',	'FormulacopaeController');
        Route::Controller('formulacopaf',	'FormulacopafController');
        Route::Controller('goleador',	    'GoleadorController');
        Route::Controller('playoffweb',	    'PlayoffwebController');
        Route::Controller('sancion',	    'SancionController');

        Route::Controller('costo','CostoController');
        Route::Controller('costo/admin/{torneo_id?}','CostoController');
        Route::Controller('costo_item','CostoItemController');

		Route::controller('otro', 	'OtroController');

		//upload formulario
		Route::get('/upload/{id}',function($id)
		{
			return View::make('formulario.form.uploadFormulario');
		});


		Route::post('/upload/{id}',function($id)
		{
			$input 			= Input::all();
			$formulario_id 	= Crypt::decrypt($id);

			$path 	= 'uploads/formularios/'.Session::get('equipo_id').'/';

			if(!File::exists($path))
			{
				File::makeDirectory($path ,0777);
			}
				

			
			$up = new upload();
			$up = $up->up($input['file'], $path );

			if($up != false){

				$formularioequipo =  FormularioEquipo::where('formulario_id',$formulario_id)->where('equipo_id',Session::get('equipo_id'))->first();

				if(is_null($formularioequipo))
				{
		
					$formularioequipo = new FormularioEquipo();
					$formularioequipo->formulario_id = $formulario_id;
					$formularioequipo->equipo_id = Session::get('equipo_id');
			
				}

				$formularioequipo->estado = 'Subido';
				$formularioequipo->file = $up; 
				$formularioequipo->save();


				 return Redirect::back()->with('warning','Formulario Subido Correctamente.');
			}
			

		});

		Route::get('/delete_formulario_equipo/{id_formulario}/{id_equipo}',function( $formulario,$id){


			$id 		= Crypt::decrypt($id);
			$formulario	= Crypt::decrypt($formulario);


			$file 		= FormularioEquipo::where('formulario_id',$formulario)->where('equipo_id',$id)->first();
			$path 		= 'uploads/formularios/'.$id.'/';


			$up 		= new upload();
			$up 		= $up->del($file->file, $path );			

			$file->delete();

				 return Redirect::back()->with('warning','Formulario Eliminado Correctamente.');


		});

		Route::get('/download_formulario_equipo/{id_formulario}/{id_equipo}', function($formulario,$id){

			$id 		= Crypt::decrypt($id);
			$formulario	= Crypt::decrypt($formulario);

			$file 		= FormularioEquipo::where('formulario_id',$formulario)->where('equipo_id',$id)->first();


			$contenido  = file_get_contents('uploads/formularios/'.$id.'/'.$file->file);

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

			return Response::make($contenido, 200, $headers);
		});

		//download formulario
		Route::get('/download/{id}', function($id){

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
		});
				
		//  Route::post('postImage', array('as'=>'postImage','uses'=>'GaleriaController@postImage'));    

});


