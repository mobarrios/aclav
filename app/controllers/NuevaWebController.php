<?php

class NuevaWebController extends BaseController
{
	public function getHomeNoticias()
	{
		$noticias = NoticiasPosicion::with('noticias')->get();
		dd($noticias);
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
		dd('contacto');
	}

	public function social(){
		dd('social');
	}


}

?>