<?php

class ClubController extends BaseController
{
	protected $history = array();
	protected $moduloId = '2';


	public function postSearch()
	{
		$data['modelo']  = Club::where('nombre','like', '%'.Input::get('search').'%')->orderBy('nombre','ASC')->get();
		$data['modulo']	 = 'club';
		$data['section'] = 'list';


		return View::make('club/index')->with($data);
	}

	public function getDetalle($id = null)
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}


		if($id == null)
		{
			$id = Session::get('club_id');
		}
		else
		{
			$id = Crypt::decrypt($id);
			Session::put('club_id',$id);
		}

	
		$data['club_id'] = $id;
 		$data['model']   = Club::find($id); 
		
		return View::make('club/detalle')->with($data);
	}

	public function getIndex()
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$this->history = array('hola');


		parent::bread($this->history);

		$data['modelo']  = Club::orderBy('nombre','ASC')->get();
		$data['modulo']	 = 'club';
		$data['section'] = 'list';

		return View::make('club/index')->with($data);
	}


	public function getNew()
	{

		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		//array_push($this->history,'chau');


		$data['modulo']	 = 'club';
		$data['section'] = 'form';
		$data['action'] = 'create';

		return View::make('club/index')->with($data);
	}

	public function postNew()
	{

		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$path = 'uploads/escudos';

		$input = Input::all();

		$file = $input['escudo'];
		
		$upload = new upload();

		$upload = $upload->up($file,$path);

		if( $upload != false)
		{
			$input['escudo'] = $upload; 
		}

		Club::Create($input);

		return Redirect::to('club/index')->with('success','Club creado correctamente.');
	}

	public function getEdit($id)
	{

		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		$data['modulo']	 	= 'club';	
		$data['modelo'] 		= Club::find($id);
		$data['section']	= 'form';
		$data['action']		= 'edit';

		return View::make('club/index')->with($data);

	}	
	public function postEdit($id)
	{


		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}


		$id 	  = Crypt::decrypt($id);
		$modulo   = Club::find($id);
		$input    = Input::all();
		$path 	  =	'uploads/escudos';

		if($input['escudo'])
		{
			$up = new upload();
			$up = $up->up($input['escudo'],$path);

			if( $up != false ) 
			{
				File::delete($path.$modulo->escudo);
				$input['escudo'] =  $up ;
			} 

		}
		else
		{
			$input['escudo'] = $modulo->escudo;
		}
  
        $modulo->fill($input);
    
        if( $modulo->save())
            {
                return Redirect::to('club')->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to('club')->with('danger','Error');
            }

	}
}


