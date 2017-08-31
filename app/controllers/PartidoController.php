<?php 

class PartidoController extends BaseController
{
	protected $moduloId       = '83';
	protected $carpetaModulo  = 'torneo.partido';
	protected $ruta           = 'partido';
	protected $data			  = array();

	protected $up;
	protected $imgPath 		 = 'uploads/partidos/reportes/'; 

	//constructor 
	public function __construct()
	{
		$this->up 	= 	new upload();
	}


	public function getRepodel($id_partido = null)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		$partido = Partido::find($id_partido);
		$this->up->del($partido->reporte, $this->imgPath);

		$partido->reporte = null;
		$partido->save();

		
		return Redirect::back();

	}


	public function getNew($id , $idFase)
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		Session::put('fase_id', Crypt::decrypt($idFase));
		Session::put('leg_id', Crypt::decrypt($id));

		//$torneo	= Torneos::find(Session::get('torneo_id'));
		//$this->data['equipo'] = $torneo->Equipo->lists('nombre','id');

		$torneoEquipo = TorneoFase::find(Session::get('fase_id'));

		$this->data['equipo']  = $torneoEquipo->equipo->lists('nombre','id');
		
		//$equipo = TorneoFaseEquipo::where('torneo_fase_id','=',Session::get('fase_id'))->get();


		$this->data['estadio']		= Estadio::lists('nombre','id');
		$this->data['arbitro']		= Arbitro::lists('apellido','id');
		$this->data['supervisor']	= Supervisor::lists('nombre','id');

		return View::make($this->carpetaModulo.'.form')->with($this->data);
	}

	public function postNew()
	{

		$input = Input::all();

		$input['condicional']     = Input::has('condicional') ? true : false ;


		$partido = Partido::create($input);


		$legPartido = new TorneoFaseLegPartido();
		$legPartido->torneo_fase_leg_id = Session::get('leg_id');
		$legPartido->partido_id			= $partido->id;
		$legPartido->save();

		return Redirect::to('torneos/detalle');

	}

	public function getDetalle($id = null, $fase_id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$id 	 =  Crypt::decrypt($id);
		$fase_id =  Crypt::decrypt($fase_id);
		
		Session::put('partido_id',$id);
		Session::put('fase_id',$fase_id);


		//$torneoEquipo 				= TorneoFase::find(Session::get('fase_id'));
		//$this->data['equipo']  		= $torneoEquipo->equipo->lists('nombre','id');
		$this->data['estadio']		= Estadio::lists('nombre','id');
		$this->data['arbitro']		= Arbitro::lists('apellido','id');
		$this->data['supervisor']	= Supervisor::lists('nombre','id');

		$torneoEquipo = TorneoFase::find(Session::get('fase_id'));
		$this->data['equipo']  = $torneoEquipo->equipo->lists('nombre','id');

		$this->data['partido'] 	= Partido::find($id);


		return View::make('torneo.partido.detalle')->with($this->data);
	}


	public function postDetalle()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

			$input =  Input::all();

			if($input['reporte'] != null)
			{
				$up = $this->up->up($input['reporte'] ,$this->imgPath);

				if($up != false)
				{
					$input['reporte'] = $up;

					if($input['repo_old'] =! null)
					{
						$this->up->del($input['repo_old'], $this->imgPath);
						unset($input['repo_old']);
					
					}
					
				}	
			}
			else
			{


				unset($input['reporte']);
				unset($input['repo_old']);
				/*
				return $input['repo_old'];

				if(isset($input['repo_old']))
				{
					$this->up->del($input['repo_old'], $this->imgPath);
					unset($input['repo_old']);
				}

				if(isset($input['reporte']))
				{
					$input['reporte'] = $input['repo_old'];
				}
				else
				{
					unset($input['repo_old']);
				}
				*/
			}

			if($input['local_equipo_id'] == 0 )
			{
				unset($input['local_equipo_id']);
			}
			if($input['visita_equipo_id'] == 0 )
			{
				unset($input['visita_equipo_id']);
			}


		$input['condicional']     = Input::has('condicional') ? true : false ;

		$partido = Partido::find(Session::get('partido_id'));	
		$partido->fill($input);
		$partido->save();



		return Redirect::back();		
	}

	public function getInformedelete($informe = null , $id_partido = null)
	{
		//modulo informes 
		if(!parent::validarPermisos('87','borrar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$partido = Partido::find($id_partido);

		$documento = $partido->$informe;

			$up = $this->up->del($documento , $this->imgPath.'/');

			$partido->$informe = "";
			$partido->save();

		return Redirect::back()->with('warning','Registro Eliminado');

	}

	public function postInforme()
	{
		//modulo informes 
		if(!parent::validarPermisos('87','crear'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}


		$input  =  Input::all();

		$up 	= $this->up->up($input['file'], $this->imgPath);
		
		if($up)
		{
			$partido = Partido::find(Session::get('partido_id'));
			
			if($input['nombre_archivo'] == 'informe_sup_01')
				$partido->informe_sup_01 	= $up;
			if($input['nombre_archivo'] == 'informe_o4')
				$partido->informe_o4		= $up;
			if($input['nombre_archivo'] == 'informe_sup')
				$partido->informe_sup 		= $up;
			if($input['nombre_archivo'] == 'informe_recomendaciones')
				$partido->informe_recomendaciones =  $up;

			$partido->save();
		}

		return Redirect::back();
	
	}

	public function getDownload($informe = null)
	{	

		//modulo informes
		if(!parent::validarPermisos('87','listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}


			$partido = Partido::find(Session::get('partido_id'));

			if($informe == 'informe_sup_01')
			{
				$file = $partido->informe_sup_01; 	
				$nombre_archivo =  $partido->numero_partido.$partido->local_equipo_id->sigla.'-'.$partido->visita_equipo_id->sigla.'(sup-01)';
			}
			if($informe == 'informe_o4')
			{
				$file = $partido->informe_o4;
				$nombre_archivo =  $partido->numero_partido.$partido->local_equipo_id->sigla.'-'.$partido->visita_equipo_id->sigla.'(O-4)';
			
			}
			if($informe == 'informe_sup')
			{
				$file = $partido->informe_sup;
				$nombre_archivo =  $partido->numero_partido.$partido->local_equipo_id->sigla.'-'.$partido->visita_equipo_id->sigla.'(informe-sup)';
			
			}
			if($informe == 'informe_recomendaciones')
			{
				$file = $partido->informe_recomendaciones;
				$nombre_archivo =  $partido->numero_partido.$partido->local_equipo_id->sigla.'-'.$partido->visita_equipo_id->sigla.'(recomendaciones)';
			
			}

				$archivo = File::get(public_path() .'/'.$this->imgPath.'/'.$file);
				$extension = File::extension(public_path() .'/'.$this->imgPath.'/'.$file);

				$headers 	= array(

							'Content-Description' => 'File Transfer',

							'Content-Type' => 'application/".$extension."',

							'Content-Transfer-Encoding' => 'binary',

							'Content-Disposition' => 'inline; filename="'.$nombre_archivo.'.'.$extension.'"',

							'Expires' => 0,

							'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',

							'Pragma' => 'public'

							);


				//$file->visita = $file->visita + 1 ;
				//$file->save();

				return Response::make($archivo, 200, $headers);

	}


	public function getDel($id_partido = null){

		$id = Crypt::decrypt($id_partido);

		TorneoFaseLegPartido::where('partido_id',$id)->delete();
		PartidoPunto::where('partido_id',$id)->delete();
		$costo =  PartidoCosto::where('partido_id',$id)->get();
		
		if($costo->count()!= 0)
			PartidoCostoItem::where('partido_costo_id',$costo->first()->id)->delete();

		Designaciones::where('partido_id', $id)->delete();
		BuenaFeBis::where('partido_id',$id)->delete();
		BuenaFeStaffBis::where('partido_id',$id)->delete();

		return Redirect::back()->with('warning','Eliminado Correctamente');

	}

	public function getHome($accion, $id)
	{
		//modulo ActivarPxP
		$this->moduloId = '83';

		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		if($accion == 'si' )
		{
			$accion = 1;
		}else
		{
			$accion = 0;
		}

		$partido = Partido::find($id);

		$partido->home = $accion;
		$partido->save();

		return Redirect::back();
	}
	
}

?>