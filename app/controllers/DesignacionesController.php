<?php

class DesignacionesController extends BaseController
{
	protected $moduloId       = '48';
	protected $data;
	protected $input;

	public function __construct()
	{
		$this->data['modulo']	= 	'designaciones';
		$this->input 			= 	Input::all();
	}


	public function getIndex()
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$this->data['action'] 			= 'create' ;
		$this->data['models'] 			= Partido::all();
		$this->data['arbitros']			= Arbitro::all();
		$this->data['designaciones'] 	= Designaciones::all();

		$temporada = Temporada::where('actual',1)->first();

		$this->data['torneos']			= Torneos::where('temporada_id',$temporada->id)->get();


		return View::make('designaciones.index')->with($this->data);
	}


	public function getSupervisor($partidoId = null)
	{	
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		Session::put('partido_id',Crypt::decrypt($partidoId));
		return View::make('designaciones/supervisor');
	}


	public function postSuper()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$designaciones = Designaciones::where('partido_id','=',Session::get('partido_id'))->where('supervisor_id','=',Auth::user()->supervisor_id)->first();

		$designaciones->estado = $this->input['estado'];
		$designaciones->observaciones = $this->input['observaciones'];
		$designaciones->save();

		return Redirect::back();
	}

	public function getDetalle($id = null,$torneo_id = null)
	{
		
		Session::put('torneo_id',$torneo_id);

		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id 	 = Crypt::decrypt($id);

		Session::put('partido_id',$id);
		
		$this->data['arbitros']			   =  Arbitro::all()->lists('full_name','id');
		$this->data['supervisores']		   =  Supervisor::all()->lists('full_name','id');
		$this->data['partido']		 	   =  Partido::find($id);

		$this->data['designaciones']	   =  Designaciones::where('partido_id','=',$id)->get();


		$this->data['cancelaciones']	   =  Designaciones::where('partido_id','=',$id)->where('estado','=','2')->get();



		$this->data['estado_arbitro_1']    =  Designaciones::where('partido_id','=',$id)->where('arbitro_1_id','=',$this->data['partido']->arbitro_1_id)->first();
		$this->data['estado_arbitro_2']    =  Designaciones::where('partido_id','=',$id)->where('arbitro_2_id','=',$this->data['partido']->arbitro_2_id)->first();

		$this->data['estado_supervisor_1'] =  Designaciones::where('partido_id','=',$id)->where('supervisor_1_id','=',$this->data['partido']->supervisor_1_id)->first();
		$this->data['estado_supervisor_2'] =  Designaciones::where('partido_id','=',$id)->where('supervisor_2_id','=',$this->data['partido']->supervisor_2_id)->first();
		

		return View::make('designaciones.detalle')->with($this->data);
	}



	public function postArbitro1()
	{	

		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$partido 				= Partido::find(Session::get('partido_id'));
		$partido->arbitro_1_id 	= $this->input['arbitro_1_id'];
		$partido->save();


		$designacion 				= new Designaciones();
		$designacion->partido_id 	= Session::get('partido_id');
		$designacion->arbitro_1_id  = $this->input['arbitro_1_id'];
		$designacion->estado 	 	= 0;
		$designacion->save();
		
			//envio de mail
			$oficial 			= Arbitro::find($this->input['arbitro_1_id']);
			$data['partido'] 	= $partido;
			$data['torneo']		= Torneos::find(Session::get('torneo_id'));


			if($oficial->email != null)
			{
				sendMail::send($data, 'mail_designaciones',$oficial->email, $oficial->full_name, 'Designaciones ACLAV');
			}

		return Redirect::back();	
	}

	public function postArbitro2()
	{	

		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$partido 				= Partido::find(Session::get('partido_id'));
		$partido->arbitro_2_id 	= $this->input['arbitro_2_id'];
		$partido->save();


		$designacion 				= new Designaciones();
		$designacion->partido_id 	= Session::get('partido_id');
		$designacion->arbitro_2_id  = $this->input['arbitro_2_id'];
		$designacion->estado 	 	= 0;
		$designacion->save();

			//envio de mail
			$oficial 			= Arbitro::find($this->input['arbitro_2_id']);
			$data['partido'] 	= $partido;
			$data['torneo']		= Torneos::find(Session::get('torneo_id'));


			if($oficial->email != null)
			{
				sendMail::send($data, 'mail_designaciones',$oficial->email, $oficial->full_name, 'Designaciones ACLAV');
			}

		return Redirect::back();	
	}

	public function postSupervisor1()
	{	

		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$partido 					= Partido::find(Session::get('partido_id'));
		$partido->supervisor_1_id 	= $this->input['supervisor_1_id'];
		$partido->save();

		$designacion 					= new Designaciones();
		$designacion->partido_id	 	= Session::get('partido_id');
		$designacion->supervisor_1_id 	= $this->input['supervisor_1_id'];
		$designacion->estado 	 	 	= 0;
		$designacion->save();

			//envio de mail
			$oficial = Supervisor::find($this->input['supervisor_1_id']);
			$data['partido'] = $partido;
			$data['torneo']		= Torneos::find(Session::get('torneo_id'));


			if($oficial->email != null)
			{
				sendMail::send($data, 'mail_designaciones',$oficial->email, $oficial->full_name, 'Designaciones ACLAV');
			}
		
		return Redirect::back();	
	}

	public function postSupervisor2()
	{	
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$partido 					= Partido::find(Session::get('partido_id'));
		$partido->supervisor_2_id 	= $this->input['supervisor_2_id'];
		$partido->save();

		$designacion 					= new Designaciones();
		$designacion->partido_id	 	= Session::get('partido_id');
		$designacion->supervisor_2_id  	= $this->input['supervisor_2_id'];
		$designacion->estado 	 	 	= 0;
		$designacion->save();

			//envio de mail
			$oficial = Supervisor::find($this->input['supervisor_2_id']);
			$data['partido'] = $partido;
			$data['torneo']		= Torneos::find(Session::get('torneo_id'));

			if($oficial->email != null)
			{
				sendMail::send($data, 'mail_designaciones',$oficial->email, $oficial->full_name, 'Designaciones ACLAV');
			}

		return Redirect::back();	
	}

	public function getDel($oficial = null, $oficial_id = null )
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$partido 	= Partido::find(Session::get('partido_id'));
		//$partido->arbitro_1_id 	= $this->input['arbitro_1_id'];
		$partido->$oficial  = 0;
		$partido->save();


		$designaciones =  Designaciones::where('partido_id',Session::get('partido_id'))->where($oficial,$oficial_id)->delete();

		//$designacion 				= new Designaciones();
		//$designacion->partido_id 	= Session::get('partido_id');
		//$designacion->$oficial 		= $oficial_id;
		//$designacion->estado 	 	= 0;
		//$designacion->save();
	
		return Redirect::back();	
	}


}

?>