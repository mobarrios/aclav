<?php

class NuevaWebController extends BaseController
{


	public function getNoticias()
	{
		$noticias = Noticias::all();
		return View::make('otro.index')->with($noticias);
	}

	public function getHomeNoticias()
	{
		$noticias = NoticiasPosicion::with('noticias')->get();
		return View::make('otro.index')->with($noticias);
	}
	public function getNoticia($id = null)
	{
		$noticias = Noticias::find($id);
		return View::make('otro.index')->with($noticias);
	}
}

?>