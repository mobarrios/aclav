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
Route::group(array('prefix' => 'web'), function()
{

	Route::get('', function()
	{
		$date = date('Y-m-d');
		$time = time();

		return $time;
		$data['partidosDiarios'] 			= 	Partido::where('fecha_inicio','=', $date )->where('hora','=','')->get();
		//$data['torneosMasculinos']			= Torneos::where('muestra_web','=',1)->where('serie_id','=',1)->get();
		//$data['torneosFemeninos']			= Torneos::where('muestra_web','=',1)->where('serie_id','=',2)->get();

		 return View::make('web.index')->with($data);
	});


	Route::get('/pxp', function()
	{
		//if(Request::ajax())
		//{
			$date = date('Y-m-d');

			$buscaPartido 	= Partido::where('fecha_inicio','=', $date )->get();

			$data = array();

			$puntos = array();

			foreach($buscaPartido as $partido)
			{
				
				array_push($data , array(
								'partido'	 	=>$partido->id,
								'local_sigla'	=>$partido->local_equipo_id->sigla,
								'visita_sigla'	=>$partido->visita_equipo_id->sigla,
								'set_local'		=>$partido->local_set,
								'set_visita'	=>$partido->visita_set
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
	Route::get('/contacto', function()
	{
		$data['model'] = Contacto::all();
		return View::make('web.contacto')->with($data);
	});
	Route::get('/social', function()
	{
		$data['tituloSeccion'] = "Aclav Social";
		$data['model'] = Noticias::where('web_social','=',1)->get();

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

		$data['model'] = Noticias::where('web_accion','=',1)->get();
		return View::make('web.noticia')->with($data);
	});

	
	Route::get('/historia', function()
	{
		$data['model'] = Historia::all();
		return View::make('web.historia')->with($data);
	});

	Route::get('/entrevista', function()
	{
		//return View::make('web.entrevista');
		$data['tituloSeccion']	= "Entrevistas";
		$data['model']			 = Noticias::where('web_entrevista','=', 1)->get();

		return View::make('web.noticia')->with($data);
	});

	
	
	Route::get('/posicion', function()
	{
		return View::make('web.posicion');
	});
	
	Route::get('/calendario', function()
	{
		return View::make('web.calendario');
	});
	
	Route::get('/resultado', function()
	{
		return View::make('web.resultado');
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
	
	Route::get('/tribunal', function()
	{
		return View::make('web.tribunal');
	});
	
	Route::get('/ampliarnoticia/{id}', function($id)
	{
		$data['noticia'] = Noticias::find($id);
		return View::make('web.ampliarnoticia')->with($data);
	});

	Route::get('/noticia', function()
	{
		$data['tituloSeccion']	= "Noticias";
		$data['model']		   = Noticias::where('web_noticia','=',1)->get();

		return View::make('web.noticia')->with($data);
	});

	Route::get('/original', function()
	{
		 return View::make('web.original');
	});

	
	
	Route::get('/galeria', function()
	{
		 return View::make('web.galeria');
	});



	Route::get('/especial', function()
	{
	$data['tituloSeccion']  = "Noticias Especiales";
	$data['model'] 			= Noticias::where('web_especial','=',1)->get();

	return View::make('web.noticia')->with($data);
	});
		
});

Route::get ('login' ,array('uses' => 'LoginController@logIn' ));
Route::post('login' ,array('uses' => 'LoginController@logIn' ));
Route::get ('logout',array('uses' => 'LoginController@logOut'));

//ruta sistema con autorizacion
Route::group(array('before' => 'auth'), function()
{
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

			$data = Jugador::all();

			$pdf = PDF::loadView('reporte', array('data' => $data));
			
			return $pdf->stream();
				
			//$pdf = App::make('dompdf');
			//$pdf->loadHTML('<h1>Test</h1>');
			//$pdf->loadView('reporte');
			// return $pdf->download('invoice.pdf');
			//return $pdf->stream();
		});


		Route::get('home', array('uses' => 'HomeController@getIndex'));
		//Route::controller('/', 	'HomeController');
		
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
		Route::controller('formularios','FormularioController');
		Route::controller('banner',     'BannerController');
		Route::controller('sponsor',    'SponsorController');
		Route::controller('historia',   'HistoriaController');


		Route::Controller('noticias',    'NoticiaController');
		Route::Controller('entrevistas', 'EntrevistaController');
		Route::Controller('especial',    'EspecialController');
        Route::Controller('staff',    	 'StaffController');
        Route::Controller('autoridades', 'AutoridadController');
        Route::Controller('puntoxpunto', 'PuntoXPuntoController');
        Route::Controller('partido', 	 'PartidoController');
        Route::Controller('social', 	 'SocialController');
        Route::Controller('contacto', 	 'ContactoController');

		//upload formulario
		Route::get('/upload/{id}',function($id)
		{
			return View::make('formulario.form.uploadFormulario');
		});


		Route::post('/upload/{id}',function($id)
		{
			$input = Input::all();

			return $input;

			$path 	= '/formularios/'.Session::get('equipo_id').'/';

			if(!File::exists($path))
			{
				File::makeDirectory($path ,0777);
			}
				

			
			$up = new upload();
			$up = $up->up($input['file'], $path );

			if($up != false)
			{
				return $up;
			}
			

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



				$formularioequipo = new FormularioEquipo;
				$formularioequipo->equipo_id 	 = Session::get('equipo_id');
				$formularioequipo->formulario_id = $id;
				$formularioequipo->estado 		 = 'Descargado'; 

				$formularioequipo->save();


				//$file->visita = $file->visita + 1 ;
				//$file->save();

				return Response::make($contenido, 200, $headers);
		});
				
});


