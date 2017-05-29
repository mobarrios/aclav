<?php

class ContenidosController extends BaseController
{
	

	public function getNoticia()
	{
		$data['modulo'] = "Noticias";
		return View::make('contenido.noticia.index')->with($data);
	}

	public function getNoticiaNew()
	{
		$data['modulo'] = "Noticias";
		$data['action'] = "create";
		return View::make('contenido.noticia.form')->with($data);
	}
	public function postNoticiaNew()
	{
		return Input::all();
	}
		
}
?>