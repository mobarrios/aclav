<?php

class FormularioController extends BaseController
{

	protected $moduloId = '51';
	protected $path		= 'uploads/formularios/';

	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['action'] = 'create';
		$data['modelo'] = Formulario::all();
		$data['section'] = 'form';

		return View::make('formulario.index')->with($data);
	}


	public function postNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}

		$input = Input::all();

		$up = new upload();
		$up = $up->up($input['file'],$this->path);

		

		$data['action'] = 'list';
		$data['modelo'] = Formulario::all();
		$data['section'] = 'list';


		if($up != false)
		{
			$input['file'] = $up;

			Formulario::create($input);
		}
		
		//return View::make('formulario.index')->with('success','Creado Correctamente');
		return Redirect::back()->with('success','Creado Correctamente');
	
	}


	public function getDel($formulario_id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

	

		$up 	= new upload();
		$form 	= Formulario::find(Crypt::decrypt($formulario_id));

		$up->del($form->file ,$this->path);

		$form->delete();

	
		return Redirect::back()->with('success','Eliminado Correctamente');
		
	}

	public function editar()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
	}

	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		$data['action'] = 'list';
		$data['modelo'] = Formulario::orderBy('nombre','ASC')->get();
		$data['section'] = 'list';

		return View::make('formulario.index')->with($data);

	}

	public function getDownload($id = null)
	{

		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

				$id 		= Crypt::decrypt($id);

				$file 		= Formulario::find($id);
				$contenido  = file_get_contents('uploads/formularios/'.$file->file);

				$archivo 	= $file->file; 
				$trozos 	= explode(".", $archivo); 
				$extension 	= end($trozos);  

				$headers 	= array(

							'Content-Description' => 'File Transfer',

							'Content-Type' => 'application/".$extension."',

							'Content-Transfer-Encoding' => 'binary',

							'Content-Disposition' => 'inline; filename="'.$file->file.'"',

							'Expires' => 0,

							'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',

							'Pragma' => 'public'

							);



				//$formularioequipo = new FormularioEquipo;
				//$formularioequipo->equipo_id 	 = Session::get('equipo_id');
				//$formularioequipo->formulario_id = $id;
				//$formularioequipo->estado 		 = 'Descargado'; 

				//$formularioequipo->save();


				//$file->visita = $file->visita + 1 ;
				//$file->save();

				return Response::make($contenido, 200, $headers);				
	}
}

?>