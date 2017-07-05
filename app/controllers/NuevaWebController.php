<?php

class NuevaWebController extends BaseController
{
	public function getHomeNoticias()
	{
		$noticias = NoticiasPosicion::with('noticias')->get();
        return View::make('web_nueva.inicio');
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


	//Equipos
	public function participantes(){
		return View::make('web_nueva.equipos.participantes');
	}	

	public function estadios(){
		
		$data['model'] = Estadio::where('estado',1)->orderBy('nombre','ASC')->get();
		return View::make('web_nueva.equipos.estadios')->with($data);
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

	public function galeria(){
		$data['model'] = Galeria::orderBy('created_at','DESC')->get();
		return View::make('web_nueva.multimedia.galeria.galerias')->with($data);
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
		$data['model'] = Autoridad::all();
		return View::make('web_nueva.institucional.autoridades')->with($data);
	}

	public function staff(){
		$data['model'] = Staff::all();

		return View::make('web_nueva.institucional.staff')->with($data);
		
	}

	public function contacto(){
		
		return View::make('web_nueva.institucional.contacto');
	}

	


}

?>