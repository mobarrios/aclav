<?php

class NoticiaController extends BaseController
{
	
	protected $moduloId = '53';
	protected $up;
	protected $imgPath 	= 'uploads/contenidos/noticias/'; 

	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();

	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Noticias";
		$data['model']	= Noticias::orderBy('created_at' ,'DESC')->paginate(20);

		return View::make('contenido.noticia.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Noticias";
		$data['action'] = "create";

		$data['clubes']	= Club::all();

		return View::make('contenido.noticia.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();

		$noti   = new Noticias();

		$up 	= $this->up->up($input['imagen'] , $this->imgPath );


		if($input['imagen'] != null)
		{
			if($up != false)
			{
				$input['imagen'] = $up;
			}
			else
			{
			   return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
			}
		}
		
		$noti->titulo = $input['titulo'];
		$noti->fecha  = $input['fecha'];
		$noti->copete = $input['copete'];
		$noti->cuerpo = $input['cuerpo'];
		$noti->fuente = $input['fuente']; 
		$noti->imagen = $input['imagen'];
		$noti->estado = $input['estado'];
		$noti->web_noticia = Input::has('web_noticia') ? true : false ;
		$noti->web_accion = Input::has('web_accion') ? true : false ;
		$noti->web_social = Input::has('web_social') ? true : false ;
		$noti->web_especial = Input::has('web_especial') ? true : false ;
		$noti->web_entrevista = Input::has('web_entrevista') ? true : false ;
		$noti->save();
		

		if($input['posicion_web'] != 0 )
		{
			$noticias_posicion = NoticiasPosicion::where('posicion_web','=',$input['posicion_web'])->first();
			$noticias_posicion->noticias_id = $noti->id;
			$noticias_posicion->save();
		}

		foreach($input['club'] as $club )
		{
			$noti_club  			= new NoticiasClub();
			$noti_club->noticias_id = $noti->id;
			$noti_club->club_id		= $club;
			$noti_club->save();			
		}	

		return $this->getIndex();

	}


	//clickeo en editar
	public function getEdit($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$data['modelo'] = Noticias::find($id);
		$data['modulo'] = "Noticias";
		$data['action'] = "edit";
		$data['clubes']	= Club::all();
		
		return View::make('contenido.noticia.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{


		$id 		= Crypt::decrypt($id);
		$noticia 	= Noticias::find($id);

		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($noticia->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $noticia->imagen;
		}



        //$input['web_social'] 	= Input::has('web_social') ? true : false ;
		//$input['web_noticia'] 	= Input::has('web_noticia') ? true : false ;
		//$input['web_especial'] 	= Input::has('web_especial') ? true : false ;
		//$input['web_entrevista']= Input::has('web_entrevista') ? true : false ;
		//$input['web_accion'] 	= Input::has('web_accion') ? true : false ;

		$noticia->titulo = $input['titulo'];
		$noticia->fecha  = $input['fecha'];
		$noticia->copete = $input['copete'];
		$noticia->cuerpo = $input['cuerpo'];
		$noticia->fuente = $input['fuente']; 
		$noticia->imagen = $input['imagen'];
		$noticia->estado = $input['estado'];
		$noticia->web_noticia 	= Input::has('web_noticia') ? true : false ;
		$noticia->web_accion 	= Input::has('web_accion') ? true : false ;
		$noticia->web_social 	= Input::has('web_social') ? true : false ;
		$noticia->web_especial 	= Input::has('web_especial') ? true : false ;
		$noticia->web_entrevista= Input::has('web_entrevista') ? true : false ;
		$noticia->save();


		//$noticia->fill($input);
		//$noticia->save();

		if($input['posicion_web'] != 0 )
		{
					$noticias_posicion = NoticiasPosicion::where('posicion_web','=',$input['posicion_web'])->first();
					$noticias_posicion->noticias_id = $noticia->id;
					//$noticias_posicion->fill();
					$noticias_posicion->save();
		}

		$notiClub = NoticiasClub::where('noticias_id','=',$noticia->id)->get();
		
		foreach( $notiClub as $nc )
		{
		 $nc->delete();
		}

		if(isset($input['club']))
		{
			foreach($input['club'] as $club )
			{
			$noti_club  			= new NoticiasClub();
			$noti_club->noticias_id = $noticia->id;
			$noti_club->club_id		= $club;
			$noti_club->save();			
			}
		}
		
		
		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$noticia = Noticias::find($id);

		$this->up->del($noticia->imagen, $this->imgPath);
		
		$noticia->delete();
		return $this->getIndex();		
	}

}

?>