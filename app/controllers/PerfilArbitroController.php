<?php

class PerfilArbitroController extends BaseController
{
	protected $moduloId = '74';

	protected $up;
	//protected $imgPath 	= 'uploads/arbitro/'; 
	protected $model;

	//constructor 
	public function __construct()
	{
		$this->up 	 = 	new upload();
		$this->model =  'perfil_arbitro';
	}

	//al inicio
	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		//$data['designaciones'] = Designaciones::where('arbitro_id','=',Auth::user()->arbitro_id)->get();

		$temp =  Temporada::where('actual',1)->first()->id;

		$data['torneos'] = Torneos::where('temporada_id',$temp)->get();

		$data['models'] = Partido::where('arbitro_1_id','=',Auth::user()->arbitro_id)->orWhere('arbitro_2_id','=',Auth::user()->arbitro_id)->get();
		
		return View::make('arbitro.perfil2')->with($data);
	}

	public function getCostos($id = null)
	{	

		$costos = PartidoCosto::where('partido_id','=',$id)->first();
		$partido = Partido::find($id);

		$data['partido'] = $partido;
		$data['item'] = "";

		if(!is_null($costos))
		{
			$item   		= PartidoCostoItem::where('partido_costo_id','=',$costos->id)->where('arbitro_id','=',Auth::user()->arbitro_id)->get();
			$data['item']	= $item;
		}
		
		
		return View::make('arbitro.costos')->with($data);
	}


	public function getConfirmar($id)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}


		$user_id = Auth::user()->arbitro_id;

			$designacion = Designaciones::where(function($query) use ($id) 
			{
 				$query->where('partido_id', '=', $id);
					
			})->where(function($query) use($user_id)
			{
				$query->where('arbitro_1_id', '=', $user_id)
					  ->orWhere('arbitro_2_id', '=', $user_id);
			})->first();


		//$designacion = Designaciones::where('partido_id','=',$id)->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$designacion->estado = '1';
		
		$designacion->save();

		return Redirect::back();	
	}


	public function getRechazar($id , $motivo)
	{
		
		$user_id = Auth::user()->arbitro_id;
		//$designacion = Designaciones::where('partido_id','=',$input['partido_id'])->where('supervisor_id','=',Auth::user()->supervisor_id)->first();

			$designacion = Designaciones::where(function($query) use ($id) 
			{
 				$query->where('partido_id', '=', $id);
					
			})->where(function($query) use($user_id)
			{
				$query->where('arbitro_1_id', '=', $user_id)
					  ->orWhere('arbitro_2_id', '=', $user_id);
			})->first();


		$designacion->estado = '2';
		$designacion->observaciones = $motivo;

			$partido = Partido::find($id);

			if($partido->arbitro_1_id == $user_id)
			{
				$partido->arbitro_1_id = 0;
			}
			else
			{
				$partido->arbitro_2_id = 0;
			}

			$partido->save();

		$designacion->save();

		return Redirect::back();	
	}


	public function postRechazar()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::back()->with('warning','Acceso denegado a esta seccion');
		}

		$input = Input::all();

		//$designacion = Designaciones::where('partido_id','=',$input['partido_id'])->where('arbitro_id','=',Auth::user()->arbitro_id)->first();

		$id = $input['partido_id'];
		$user_id = Auth::user()->arbitro_id;
		//$designacion = Designaciones::where('partido_id','=',$input['partido_id'])->where('supervisor_id','=',Auth::user()->supervisor_id)->first();

			$designacion = Designaciones::where(function($query) use ($id) 
			{
					$query->where('partido_id', '=', $id);
					
			})->where(function($query) use($user_id)
			{
				$query->where('arbitro_1_id', '=', $user_id)
					  ->orWhere('arbitro_2_id', '=', $user_id);
			})->first();

		$designacion->estado = '2';
		$designacion->observaciones = $input['causa'];

		$designacion->save();

		return Redirect::back();	
	}

	public function postTraslado($item_id = null)
	{
		$input  = Input::all();

		$traslado = PartidoCostoItem::find($input['id']);
		$traslado->traslado_detalle = $input['detalle'];
		$traslado->traslado_importe = $input['importe'];

		$traslado->save();
		
		return Redirect::back();
	}


}

?>