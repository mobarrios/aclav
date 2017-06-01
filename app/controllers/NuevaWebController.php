<?php

class NuevaWebController extends BaseController
{
	public function getHomeNoticias()
	{
		$noticias = NoticiasPosicion::with('noticias')->get();
        return View::make('web_nueva.inicio');
	}

	public function getNoticias()
	{	

		$noticias = Noticias::all();
		
		//return View::make('otro.index')->with($noticias);
	}

	
	public function getNoticia($id = null)
	{	

		$noticias = Noticias::find($id);
		dd($noticias);
		return View::make('otro.index')->with($noticias);
	}


	public function accion(){
		dd('accion');
	}

	public function sponsornew(){
		dd('sponsornew');
	}


	public function historia(){
		dd('historia');
	}

	public function autoridades(){
		dd('autoridades');
	}

	public function staff(){
		dd('staff');
	}

	public function contacto(){
		
		return View::make('web_nueva.contacto');
	}

	public function social(){
		dd('social');
	}


}

?>