<?php

class HabilitacionesController extends BaseController
{
	protected $moduloId = '75';

	//protected $up;
	//protected $imgPath 	= 'uploads/arbitro/'; 
	protected $data = array();

	//constructor 
	public function __construct()
	{

		//$this->up 	 = 	new upload();
		$this->data['modulo'] 	=  'habilitaciones';
		$this->moduloId = Modulos::where('modulo','=','habilitaciones')->first()->id;


	}


	public function getCarnetstaff($id = null , $id_habilitacion = null)
	{
		$id			= Crypt::decrypt($id);

		//$size	  =  array(0,0,421.259843,307.874016);
		$club 	   = Club::find(Session::get('club_id'))->Equipo->first()->nombre;
		$jugador   = Oficial::find($id); 
		$temporada = Temporada::where('actual',1)->first()->nombre_temporada;


		

		$hab  		= HabilitacionesStaff::find($id_habilitacion);
		
		//$nro 	    = BuenaFeStaff::where('oficial_id','=',$id)->first()->Funcion->funcion;
		$nro 		= BuenaFeStaff::find($hab->buena_fe_staff_id)->Funcion->funcion;


		$pdf 	  = PDF::loadView('repo/carnet_staff_nuevo', array('temporada'=>$temporada,'nro'=>$nro,'club'=> $club ,'jugador' => $jugador))->setPaper('A4')->setOrientation('landscape');
		
		return $pdf->stream();
	}

	public function getCarnet($id = null, $bf_id = null)
	{
		$id  = Crypt::decrypt($id);

		//$size	  =  array(0,0,421.259843,307.874016);
		$club 	   = Club::find(Session::get('club_id'))->Equipo->first()->nombre;
		$jugador   = Jugador::find($id); 
		$nro 	   = BuenaFe::where('id',$bf_id)->first()->nro;
		$temporada = Temporada::where('actual',1)->first()->nombre_temporada;



		$pdf = PDF::loadView('repo/carnet_nuevo', array('temporada'=>$temporada ,'nro'=>$nro,'club'=> $club ,'jugador' => $jugador))->setPaper('A4')->setOrientation('landscape');
		
		return $pdf->stream();
	}


	public function getCambiar($formulario = null  , $id = null , $estado = null )
	{
		
		$habilitaciones = Habilitaciones::find(Crypt::decrypt($id));
		$habilitaciones->$formulario = $estado;
		$habilitaciones->save();


			$habilitaciones = Habilitaciones::find(Crypt::decrypt($id));

			if($habilitaciones->dni == 'no' || $habilitaciones->m4 == 'no' || $habilitaciones->m8 == 'no' || $habilitaciones->feva_af == 'no' || $habilitaciones->feva_tr == 'no' || $habilitaciones->ld == 'no'  )
			{
				$habilitaciones->condicion = 'NO HAB.';
			}
			elseif($habilitaciones->dni == 'pr' || $habilitaciones->m4 == 'pr' || $habilitaciones->m8 == 'pr' || $habilitaciones->feva_af == 'pr' || $habilitaciones->feva_tr == 'pr' || $habilitaciones->ld == 'pr'  )
			{
				$habilitaciones->condicion = 'PRECARIO';
			}
			else
			{
				$habilitaciones->condicion = 'HAB.';
			}

			$habilitaciones->save();

		//return $this->postVer();
		return Redirect::back();
	}



	public function getCambiarstaff($formulario = null  , $id = null , $estado = null )
	{
		
		$habilitaciones = HabilitacionesStaff::find(Crypt::decrypt($id));
		$habilitaciones->$formulario = $estado;
		$habilitaciones->save();


		$habilitaciones = HabilitacionesStaff::find(Crypt::decrypt($id));

			if($habilitaciones->dni == 'no' || $habilitaciones->tit == 'no' || $habilitaciones->m8 == 'no' || $habilitaciones->feva_af == 'no' || $habilitaciones->mat == 'no' || $habilitaciones->des == 'no'   )
			{
				$habilitaciones->condicion = 'NO HAB.';
			}
			elseif($habilitaciones->dni == 'pr' || $habilitaciones->tit == 'pr' || $habilitaciones->m8 == 'pr' || $habilitaciones->feva_af == 'pr' || $habilitaciones->mat == 'pr' || $habilitaciones->des == 'pr'  )
			{
				$habilitaciones->condicion = 'PRECARIO';
			}
			else
			{
				$habilitaciones->condicion = 'HAB.';
			}

		$habilitaciones->save();

		//return $this->postVer();
		return Redirect::back();
	}



	public function getVer($equipo_id = null , $torneo_id = null)
	{
		
		if($equipo_id != null)
		{

			//$id = Input::get('equipo');
			$equipo_id = Crypt::decrypt($equipo_id);
			$torneo_id = Crypt::decrypt($torneo_id);

			//Session::put('equipo_id',$equipo_id);	
			//Session::put('torneo_id',$torneo_id);	
		}
		else
		{

			$equipo_id = Session::get('equipo_id');
			$torneo_id = Session::get('torneo_id');
		}
			

		$o2 = o2::with('Equipo')->where('torneos_id','=',$torneo_id)->where('equipo_id','=', $equipo_id)->first();

		$this->data['o2'] = $o2;
		//$this->data['buena_fe'] = BuenaFe::where('equipo_id','=', $id)->where('jugador_id','!=',0)->get();
		$this->data['buena_fe'] 		= BuenaFe::where('o2_id','=',$o2->id)->orderBy('nro','ASC')->get();
		//return $this->data['buena_fe'];
		$this->data['buena_fe_staff']   = BuenaFeStaff::where('o2_id','=',$o2->id)->get();




		if(parent::validarPermisos($this->moduloId,'editar'))
		{
			return View::make('habilitaciones.editar')->with($this->data);
		}
		else
		{
			return View::make('habilitaciones.detalle')->with($this->data);	
		}

	
	}


	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}
		
		//$temporada = Crypt::decrypt($id);

		//$data['designaciones'] = Designaciones::where('arbitro_id','=',Auth::user()->arbitro_id)->get();

		//$temporada  = Temporada::find($temporada);

		$temporada = Temporada::where('actual','=', 1)->first();

		$this->data['torneos'] 	= Torneos::where('temporada_id','=',$temporada->id)->get();

		$this->data['model'] 	= 	Equipo::where('o2','=',1)->get();

		//$this->data['model']	= Buena

		return View::make('habilitaciones.index')->with($this->data);
	}

	public function getConfirmar($id)
	{

		$designacion = Designaciones::where('partido_id','=',$id)->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$designacion->estado = '1';
		
		$designacion->save();

		return Redirect::back();	
	}

	public function postRechazar()
	{
		$input = Input::all();

		$designacion = Designaciones::where('partido_id','=',$input['partido_id'])->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$designacion->estado = '2';
		$designacion->observaciones = $input['causa'];

		$designacion->save();

		return Redirect::back();	
	}



}
?>