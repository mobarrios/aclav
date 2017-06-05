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
		$data['model']		    = Noticias::where('fecha','<=', date('Y-m-d'))->where('estado','=',1)->where('web_noticia','=',1)->orderBy('id','DESC')->paginate(5);

		
		
		return View::make('web_nueva.noticias.noticias')->with($data);
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
		
		 return View::make('web_nueva.institucional.contacto');
	}

	public function social(){
		dd('social');
	}


}

?>