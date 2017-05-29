<?php

class CostoController extends BaseController
{
	
	protected $moduloId       = '47';
	protected $data = array();


	public function getAdmin($id_torneo = null)
	{	
		$id_torneo = Crypt::decrypt($id_torneo);

		$this->data['modulo'] 		= 	'Costos de Oficiales - ACLAV';
		$this->data['model']		=	PartidoCosto::all();

		$this->data['torneos'] 		= 	Torneos::find($id_torneo);

		$this->data['torneo_fase']	=	TorneoFase::where('torneo_id','=', $id_torneo)->get();

	
		return View::make('costo.detalle_aclav')->with($this->data);
	

	}



	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }



		$this->data['modulo'] 		= 	'Costos de Oficiales';
		$this->data['model']		=	PartidoCosto::all();

		$temporada = Temporada::where('actual',1)->first();
		$this->data['torneo'] 		= 	Torneos::where('temporada_id',$temporada->id)->get();
		//$this->data['torneo_fase']	=	TorneoFase::where('torneo_id','=', Session::get('temporada_actual_id'))->get();
	
		return View::make('costo.index')->with($this->data);
	}


	public function getDetalle($id_partido)
	{	
		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

		$id_partido = Crypt::decrypt($id_partido);

		$torneo	= 	Torneos::where('temporada_id',Session::get('temporada_actual_id'))->first();
		
		$this->data['torneo_equipos']		 = $torneo->Equipo->lists('nombre','id');

		Session::put('partido_id',$id_partido);
			
		$this->data['partido']		 = 	Partido::find($id_partido);
		$this->data['partido_costo'] =  PartidoCosto::where('partido_id','=',$id_partido)->get();


	
		if( $this->data['partido_costo']->count() != 0 ){

			Session::put('partido_costo_id', $this->data['partido_costo']->first()->id);

		}else{

			Session::put('partido_costo_id',0);
		}

		
		$this->data['costo_item'] 	= 	CostoItem::orderBy('detalle','ASC')->lists('detalle','id');	
		
		//oficiales con estado acepatado
		//$oficiales   				= 	Designaciones::where('partido_id','=', $id_partido)->where('estado','=',1)->get();
		
		$oficiales   				= 	Designaciones::where('partido_id','=', $id_partido)->where('estado','!=', 2 )->get();


		$a	= array();


		foreach($oficiales as $oficial)
		{
			if($oficial->arbitro_1_id != 0 )
			{
				$a["a|$oficial->arbitro_1_id"] = 'Arbitro 1 : '. $oficial->Arbitro1->full_name ; 
			}
			
			if($oficial->arbitro_2_id != 0 )
			{
				$a["a|$oficial->arbitro_2_id"] = 'Arbitro 2 : '. $oficial->Arbitro2->full_name ; 
			}
			
			if($oficial->supervisor_1_id != 0 )
			{
				$a["s|$oficial->supervisor_1_id"] = 'Supervisor 1 : '. $oficial->Supervisor1->full_name ; 
			}
			
			if($oficial->supervisor_2_id != 0 )
			{
				$a["s|$oficial->supervisor_2_id"] = 'Supervisor 2 : '. $oficial->Supervisor2->full_name ; 
			}
			
		}

		$this->data['oficiales'] 	= $a;
	
		$this->data['total']		= null;

		return View::make('costo.detalle')->with($this->data);
	}

	public function postAdditem()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }



		$input = Input::all();

		if($input['equipo_id'] == '-1')
		{
			return Redirect::back()->with('warning','seleccionar Equipo')->withInput();
		}
	
		
		if(Session::get('partido_costo_id') == 0 )
		{

			$costo 				  = new PartidoCosto();
			$costo->partido_id 	  = Session::get('partido_id');
			//$costo->equipo_id  	  =	$input['equipo_id'];
			$costo->save();
			Session::put('partido_costo_id',$costo->id);
		}

	
		$costo_item 					= new PartidoCostoItem();
		$costo_item->partido_costo_id	= Session::get('partido_costo_id');
		$costo_item->cantidad	  		= 1;
		$costo_item->equipo_id 			= $input['equipo_id'];
		$costo_item->costo_item_id 		= $input['costo_item_id'];
		
		if($input['oficial'][0] == 'a' ){

			$id =  explode('|', $input['oficial']);
			$costo_item->arbitro_id =  $id[1];

		}
		elseif($input['oficial'][0] == 's' )
		{				
			$id =  explode('|', $input['oficial']);
			$costo_item->supervisor_id =  $id[1];

		}
		
		$costo_item->save();

		return Redirect::back()->withInput();

	}

	public function getDelitem($id)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		$id = Crypt::decrypt($id);

		PartidoCostoItem::find($id)->delete();

		return Redirect::back();
	}
}
?>