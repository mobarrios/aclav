<?php

class GaleriaController extends BaseController
{
	protected $moduloId = '54';	
	protected $up;
	protected $imgPath 	= 'uploads/contenidos/galeria/'; 

	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();

	}

	public function getImagendel($imgid)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id 	= 	Crypt::decrypt($imgid);

		$img 	= 	GaleriaImagenes::find($id);

		$path 	= $this->imgPath . $img->GaleriaSub->Galeria->id .'/'. $img->GaleriaSub->id .'/';
		

		$up 	= $this->up->del($img->imagen , $path );


		$img->delete();
		return Redirect::back();

	}

	public function postSubdetalle($subid , $id)
	{


		$input 	= Input::all();
		$id 	= Crypt::decrypt($id);
		$subid  = Crypt::decrypt($subid);


		$path 	=  $this->imgPath .'/'.	$subid .'/'.$id ;

		$up 	= $this->up->up($input['imagen'] , $path );

			if($up != false)
			{
				$input['imagen'] = $up;
			}

		$img = new GaleriaImagenes();
		$img->galeria_sub_id = $id;
		$img->imagen 		 = $input['imagen'];
		$img->owner 		 = $input['owner'];
		$img->save();

		return Redirect::back();
	}

	public function getSubdetalle($galid , $subid)
	{
		
		$img = GaleriaImagenes::where('galeria_sub_id','=',Crypt::decrypt($subid))->get();
		
		$data['galeria_id'] = Crypt::decrypt($galid);
		

		$data['sub']	= GaleriaSub::find(Crypt::decrypt($subid));
		$data['model']	= $img;

		return View::make('contenido.galeria.detalle_sub')->with($data);
	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Galeria";
		$data['model']	= Galeria::all();

		return View::make('contenido.galeria.index')->with($data);
	}

	public function getAddsubgaleria($id)
	{


		$data['modulo'] = "Sub-Galeria";
		//$data['model']	= Galeria::all();
		$data['action'] = "create";

		return View::make('contenido.galeria.form_sub_galeria')->with($data);
	}

	public function postAddsubgaleria($id)
	{
		$input  = Input::all();
		$id 	= Crypt::decrypt($id);

		$path =  $this->imgPath ."/".$id;	

		$sub = new GaleriaSub();

		$up 	= $this->up->up($input['imagen'] , $path );

			if($up != false)
			{
				$input['imagen'] = $up;
			}

		$sub->galeria_id  	=  $id ;
		$sub->titulo 	  	=  $input['titulo'];
		$sub->fuente	  	=  $input['fuente'];
		$sub->imagen 		=  $input['imagen'];

		$sub->save();

		return $this->getIndex();
	}



	//cuando clikeo en boton nuevo
	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$data['modulo'] = "Galeria";
		$data['action'] = "create";
		return View::make('contenido.galeria.form_galeria')->with($data);
	}



	//procesa el formulario nuevo
	public function postNew()
	{
		$input  = Input::all();

		$up 	= $this->up->up($input['imagen'] , $this->imgPath );

			if($up != false)
			{
				$input['imagen'] = $up;
			}

		$galeria = Galeria::create($input);

		//return $this->getIndex();

		Session::put('galeria_id',$galeria->id);

		return Redirect::back();

	}


	//clickeo en editar
	public function getEdit($id)
	{	
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Session::put('galeria_id',$id);

		$data['modelo'] = Galeria::find($id);
		$data['modulo'] = "Galeria";


		$data['action'] = "edit";

		return View::make('contenido.galeria.form')->with($data);
	}

	//procesa el formulario editar
	public function postEdit($id)
	{

		$id 		= Crypt::decrypt($id);
		$galeria 	= Galeria::find($id);
		$input  	= Input::all();

		if($input['imagen'] != null)
		{
			$up 	= $this->up->up($input['imagen'] , $this->imgPath );
			
			if($up != false)
			{
				$this->up->del($galeria->imagen, $this->imgPath);

				$input['imagen'] = $up;
			}	
		}else
		{
			$input['imagen'] = $galeria->imagen;
		}
		

		$galeria->fill($input);
		$galeria->save();

		return $this->getIndex();
	}

	public function getDelete($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id = Crypt::decrypt($id);
		Galeria::find($id)->delete();

		return $this->getIndex();		
	}

	public function postImagenes()
	{
		$input = Input::all();


		$path =  $this->imgPath . Session::get('galeria_id');	

		$up 	= $this->up->up($input['imagen'] , $path );

		
		if($up != false)
		{
			$input['imagen'] = $up;
		}
		else
		{
			return Redirect::back()->with('danger','Error en el tamaño del  archivo')->withInput();
		}

		$imagenes = new GaleriaImagenes();

		$imagenes->galeria_id 	= Session::get('galeria_id');
		$imagenes->owner=$input['owner'];

		$imagenes->imagen 		= $input['imagen'];
		$imagenes->save();

		


		return Redirect::back();

	}


}

?>