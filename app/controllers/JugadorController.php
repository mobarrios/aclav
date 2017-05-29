<?php

class JugadorController extends BaseController
{

	protected $moduloId = '1';


	public function getBuscar()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		$this->getIndex(Input::get('buscar'));

		$data['buscar']	 = Input::get('buscar');
		$data['jugador'] = Jugador::where('nombre','like','%'.Input::get('buscar').'%')->orWhere('apellido','like','%'.Input::get('buscar').'%')->orWhere('dni','like','%'.Input::get('buscar').'%')->paginate(10);

		$data['action']	 = 'create';
		$data['section'] = 'list';

		return View::make('jugador.index')->with($data);
	}


	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		$rest['buscar']	 = '';
		$rest['jugador'] 	= Jugador::orderBy('apellido','ASC')->get();

		$rest['action']		= "create";
		$rest['section']	= 'list';

		return View::make('jugador.index')->with($rest);
		
	}


	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$rest['action'] 	= "create";
		$rest['section']	= 'form';
		$rest['posicion']	= array('O'=>'Opuesto','A'=>'Armador','L'=>'Libero','C'=>'Central','PR'=>'Punta Receptor', 'U'=>'Univesal');

		$rest['equipo']		= Equipo::lists('nombre','id');
		$rest['pais']		= Pais::lists('nombre','id');

		return View::make('jugador.index')->with($rest);
	}


	public function postNew()
	{
		
		$input 	= Input::all();

		if($input['foto']!= null)
		{
			$up 	= new upload();
			$up 	= $up->up($input['foto'] ,'uploads/jugadores/');

			if( $up != false)
			{
				$input['foto'] =  $up;
			}
			else
			{
				return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
			}
		}
	


		if(Jugador::create($input))
		{
			return Redirect::to('jugador')->with('success','Registro creado Correctamente');

		}else{

			return Redirect::to('jugador')->with('danger','Error');
		}


		/*
		if($this->saveDataFromRequest('new'))
		{
			return Redirect::to('jugador')->with('success','Registro creado Correctamente');

		}else{

			return Redirect::to('jugador')->with('danger','Error');
		}*/

	
	}


	public function getDel($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$jugador = Jugador::find(Crypt::decrypt($id));
		
		$up = new upload();
		$up->del($jugador->foto,'uploads/jugadores/');

		$jugador->delete();

		return Redirect::to('jugador')->with('success','Registro Eliminado Correctamente');
	}


	public function getEdit($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$rest['jugador'] 	= Jugador::find(Crypt::decrypt($id));
		$rest['action'] 	= "edit";
		$rest['section']	= 'form';
		$rest['posicion']	= array('O'=>'Opuesto','A'=>'Armador','L'=>'Libero','C'=>'Central','PR'=>'Punta Receptor', 'U'=>'Univesal');


		$rest['equipo']		= Equipo::lists('nombre','id');
		$rest['pais']		= Pais::lists('nombre','id');

		return View::make('jugador.index')->with($rest);
	}

	public function postEdit($id = null)
	{
		$input = Input::all();

		$jugadorNuevo = Jugador::find(Crypt::decrypt($id));


		if($input['foto'] != null)
		{
			$upload = new upload();
			$up = $upload->up($input['foto'], 'uploads/jugadores/');

			if($up != false)
			{
				if($input['foto'] != "")
				{
					$upload->del($jugadorNuevo->foto,'uploads/jugadores/');
				}		

				$input['foto'] = $up;
			}			
		}
		else
		{
			$input['foto'] = $jugadorNuevo->foto;
		}


		$jugadorNuevo->fill($input);

		if(	$jugadorNuevo->save())
			{
				//return Redirect::to('jugador')->with('success','Registro editado Correctamente');
				return Redirect::back()->with('success','Registro editado Correctamente');
			
			}else{

				return Redirect::to('jugador')->with('danger','Error');
			}

	}

	
	public function getDetalle($id=null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$rest['jugador'] 	= Jugador::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';

		return View::make('jugador.index')->with($rest);
	}



	
	

}


?>