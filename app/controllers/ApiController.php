<?php

class ApiController extends BaseController
{
	
	protected $headers;

	public function __construct()
	{
		$this->headers = array(
						'Content-Type' => 'application/pdf',
						'Access-Control-Allow-Origin' => '*',
						'Access-Control-Allow-Credentials' => 'true',
						'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS'
						);

	}

	public function getNoticias()
	{
		$noticias = Noticias::all();
		return Response::json($noticias);
	}

	public function getHomeNoticias()
	{
		$noticias = NoticiasPosicion::with('noticias')->get();
		return Response::json($noticias);
	}
	public function getNoticia($id = null)
	{
		$noticias = Noticias::find($id);
		return Response::json($noticias);
	}
}

?>