<?php

class EstadioController extends BaseController
{
	protected $moduloId       = '40';
	protected $up;
	protected $imgPath 	= 'uploads/estadio/'; 

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

		$data['modulo'] = "Estadio";
		$data['model']	= Estadio::all();

		return View::make('estadio.index')->with($data);
	}


	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
		$data['modulo'] = "Estadio";
		$data['action'] = "create";
		return View::make('estadio.form')->with($data);
	}


	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();

			if($input['imagen'] != null )
			{	
			
				$up 	= $this->up->up($input['imagen']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
				}


			}

			if($input['imagen1'] != null)
			{
				$up 	= $this->up->up($input['imagen1']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen1'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo1')->withInput();
				}


			}

			if($input['imagen2']!= null)
			{
				$up 	= $this->up->up($input['imagen2']  , $this->imgPath );

				if($up  != false)
				{
					$input['imagen2'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo2')->withInput();
				}

			}

			if($input['imagen3'] != null)
			{
				$up 	= $this->up->up($input['imagen3']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen3'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo3')->withInput();
				}

			}
			if($input['imagen4'] != null)
			{
				$up	= $this->up->up($input['imagen4']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen4'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo4')->withInput();
				}


			}
				 

		Estadio::create($input);

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
		$data['modelo'] =  Estadio::find($id);
		$data['modulo'] = "Estadio";
		$data['action'] = "edit";

		return View::make('estadio.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$estadio	= Estadio::find($id);
		$input  	= Input::all();


			
			if($input['imagen'] != null )
			{	
				$up 	= $this->up->up($input['imagen']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
				}
			}
			else
			{
				$input['imagen'] = $estadio->imagen;
			}

	


			if($input['imagen1'] != null)
			{
				$up 	= $this->up->up($input['imagen1']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen1'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo1')->withInput();
				}

			}
			else
			{
				$input['imagen1'] = $estadio->imagen1;
			}



			if($input['imagen2']!= null)
			{
				$up 	= $this->up->up($input['imagen2']  , $this->imgPath );

				if($up  != false)
				{
					$input['imagen2'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo2')->withInput();
				}
			}
			else
			{
				$input['imagen2'] = $estadio->imagen2;
			}


			if($input['imagen3'] != null)
			{
				$up 	= $this->up->up($input['imagen3']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen3'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo3')->withInput();
				}
			}
			else
			{
				$input['imagen3'] = $estadio->imagen3;
			}



			if($input['imagen4'] != null)
			{
				$up	= $this->up->up($input['imagen4']  , $this->imgPath );

				if($up != false)
				{
					$input['imagen4'] = $up;
				}
				else
				{
					return Redirect::back()->with('danger','Error en el tamaño del  archivo4')->withInput();
				}


			}
			else
			{
				$input['imagen4'] = $estadio->imagen4;
			}
				 
		

		$estadio->fill($input);
		$estadio->save();

		return $this->getIndex();
	}

	public function getDelete($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);

		$estadio = Estadio::find($id);

		if($estadio->imagen  != "" )
		{
 			$this->up->del($estadio->imagen,$this->imgPath);
		}
		if($estadio->imagen1  != "" )
		{


 			$this->up->del($estadio->imagen1 ,$this->imgPath);
		}

		if($estadio->imagen2  != "" )
		{

			$this->up->del($estadio->imagen2,$this->imgPath);
		}

		if($estadio->imagen3  != "" )
		{


			$this->up->del($estadio->imagen3,$this->imgPath);
		}
		if($estadio->imagen4  != "" )
		{


 			$this->up->del($estadio->imagen4,$this->imgPath);
		}


		$estadio->delete();

	    return $this->getIndex();


	}

}

?>