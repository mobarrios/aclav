<?php

class PuntoXPuntoController extends BaseController
{

	protected $moduloId     = '50';
	protected $data			=	array();


	public function postEdit()
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        //return $this->recalcularTabla();

		$input = Input::all();

		foreach($input as $val =>$key)
		{


			$a = explode('_',$val);

			$eq = $a[0];
			$id = $a[1];

			if($eq == 'local')
			{
				$partido = PartidoPunto::find($id);
				$partido->puntos_local = 	$key;
				$partido->save();
			}

			if($eq == 'visita')
			{
				$partido = PartidoPunto::find($id);
				$partido->puntos_visita =	$key;
				$partido->save();
			}
		
						
		}

		$p = Partido::find(Session::get('partido_id'));
		$p->local_set	= 	$input['set_local'];
		$p->visita_set  =	$input['set_visita'];
		$p->save();

		
		return Redirect::back();
	}



	public function getMostrar($accion, $id)
	{
		//modulo ActivarPxP
		$this->moduloId = '84';

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

		$partido->pxp = $accion;
		$partido->save();

		return Redirect::back();
	}
	
	public function getIndex($id = null ,$idFase = null)
	{

		if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


		//$partido = Partido::where('fecha_inicio','=',date('Y-m-d'))->where('local_equipo_id','=',Auth::user()->equipo_id)->get();
		$partido = Partido::where('pxp','=',1)->where('local_equipo_id','=',Auth::user()->equipo_id)->get();
		
		foreach($partido as $p)
		{
			$fase = TorneoFaseLegPartido::where('partido_id','=',$p->id)->get();

			foreach($fase as $f)
			{
				$leg = TorneoFaseLeg::find($f->torneo_fase_leg_id);

				$fase = $leg->torneo_fase_id;

				Session::put('fase_id',$fase);

			}

		}

//return Session::get('fase_id');

		if($partido->count() != 0)
		{
			if($id == "")
			{
				$id = Session::get('partido_id');
			}
			else
			{
				$id 	= Crypt::decrypt($id);
				$idFase = Crypt::decrypt($idFase);

				Session::put('partido_id',$id);
				Session::put('fase_id',$idFase);
			}
			//prueba
			Session::put('partido_id',$partido->first()->id);

			
			//$puntos = PartidoPunto::where('partido_id','=',$id)->where('id','=', Session::);

			/*foreach($puntos as $punto)
			{
			$set 	=	$punto->set_numero;
			$punto->puntos_local;
			}*/


			//$this->data['partidoPunto']	


			if(Session::get('set_id') == "")
			{
			$this->data['partido_punto']	= PartidoPunto::find(Session::get('set_id'));
			}
			else
			{
			$this->data['partido_punto'] = "";
			}

			$this->data['partido']	 		= Partido::find(Session::get('partido_id'));//Partido::find($id);
			$this->data['actual'] ="";

			$this->data['set_actual'] = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();


			//$this->data['partido_punto']	= PartidoPunto::find(Session::get('set_id'));

			/*$partido_punto 			 = PartidoPunto::where('partido_id','=',$id)->get();


			if($partido_punto->count() == 0)
			{
			$this->data['puntosLocal']	 = 0;
			$this->data['puntosVisita']	 = 0;
			Session::put('set_numero',0);
			}
			else
			{
			$this->data['puntosLocal']	 = $partido_punto->puntos_local;
			$this->data['puntosVisita']	 = $partido_punto->puntos_visita;

			Session::put('local_equipo_id',  $this->data['partido']->local_equipo_id);
			Session::put('visita_equipo_id', $this->data['partido']->visita_equipo_id);
			}

			*/

			if($this->data['partido']->estado == 0 )
				$this->getEmpezarpartido();

			$this->data['partido']	 		= Partido::find(Session::get('partido_id'));//Partido::find($id);


			return View::make('torneo.partido.puntoxpunto4')->with($this->data);

			}

		return Redirect::back()->with('danger','No tiene Partidos Designados');
		

	}

	public function getPuntos()
	{
		$partido = Partido::find(Session::get('partido_id'));

		return Response::json($partido->puntoPartido);
	}


	public function getPartidodata()
	{
		$partido = Partido::find(Session::get('partido_id'));


	/*	foreach($partido_estado->puntoPartido as $pto)
		{
			$res['set_numero']   = $pto->set_numero;
			$res['puntos_local'] = $pto->puntos_local;
			$res['puntos_visita']= $pto->puntos_visita;
		}
	*/
		return Response::json($partido);

	}

	


	public function getAddsetlocal()
	{
		$partido_set = Partido::find(Session::get('partido_id'));

		$partido_set->local_set = ($partido_set->local_set) + 1 ;

		$partido_set->save();

		//$this->data['puntosLocal'] = $partido_punto->puntos_local;

		return $this->getIndex();
		//return Redirect::back()->with($this->data);

	}

	public function getAddsetvisita()
	{
		$partido_set = Partido::find(Session::get('partido_id'));

		$partido_set->visita_set = ($partido_set->visita_set) + 1 ;

		$partido_set->save();

		//$this->data['puntosLocal'] = $partido_punto->puntos_local;

		return $this->getIndex();
		//return Redirect::back()->with($this->data);

	}


	public function getRemsetlocal()
	{
		$partido_set = Partido::find(Session::get('partido_id'));

		$partido_set->local_set = ($partido_set->local_set) - 1 ;

		$partido_set->save();

		//$this->data['puntosLocal'] = $partido_punto->puntos_local;

		return $this->getIndex();
		//return Redirect::back()->with($this->data);

	}

	public function getRemsetvisita()
	{
		$partido_set = Partido::find(Session::get('partido_id'));

		$partido_set->visita_set = ($partido_set->visita_set) - 1 ;

		$partido_set->save();

		//$this->data['puntosLocal'] = $partido_punto->puntos_local;

		return $this->getIndex();
		//return Redirect::back()->with($this->data);

	}

	public function getAddset()
	{
		$partido_punto				=	new PartidoPunto();		
		$partido_punto->set_numero 	=   Session::get('set_numero') + 1;
		$partido_punto->partido_id 	=   Session::get('partido_id');
		$partido_punto->save();

		Session::put('set_id',$partido_punto->id);
		Session::put('set_numero',$partido_punto->set_numero);

		return $this->getIndex();
	}




			public function getPuntolocal()
			{
		
				//$partido_punto = PartidoPunto::find(Session::get('set_id'));
				$partido_punto = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();
			
				$partido_punto->puntos_local = ($partido_punto->puntos_local) + 1 ;

				$partido_punto->save();

				return Redirect::back();

				//$this->data['puntosLocal'] = $partido_punto->puntos_local;

				//return $this->getIndex();
				//return Redirect::back()->with($this->data);
				//return Response::json($partido_punto->puntos_local);
				
				//return Response::json($partido_punto);

			}

			public function getRestalocal()
			{
				
				//$partido_punto = PartidoPunto::find(Session::get('set_id'));
				$partido_punto = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();
			
			

				if($partido_punto->puntos_local != 0)
				{
						$partido_punto->puntos_local = ($partido_punto->puntos_local) - 1 ;
						$partido_punto->save();
				}
				

				//$this->data['puntosLocal'] = $partido_punto->puntos_local;

				//return $this->getIndex();
				return Redirect::back();
				//return Redirect::back()->with($this->data);
				//return Response::json($partido_punto->puntos_local);
				
				//return Response::json($partido_punto);

			}

			public function getPuntovisita()
			{
				
			//	$partido_punto = PartidoPunto::find(Session::get('set_id'));
			
				$partido_punto = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();
			

				$partido_punto->puntos_visita = ($partido_punto->puntos_visita) + 1 ;

				$partido_punto->save();

				//$this->data['puntosVisita'] = $partido_punto->puntos_visita;

				//return $this->getIndex();
				//return Redirect::back()->with($this->data);
				//return Response::json($partido_punto->puntos_local);
				
				//return Response::json($partido_punto);
				return Redirect::back();

			}

			public function getRestavisita()
			{
				
				//$partido_punto = PartidoPunto::find(Session::get('set_id'));

					$partido_punto = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();
		
				if($partido_punto->puntos_visita != 0)
				{ 
				$partido_punto->puntos_visita = ($partido_punto->puntos_visita) - 1 ;

				$partido_punto->save();

				}
				return Redirect::back();

				//$this->data['puntosVisita'] = $partido_punto->puntos_visita;

				//return $this->getIndex();
				//return Redirect::back()->with($this->data);
				//return Response::json($partido_punto->puntos_local);
				
				//return Response::json($partido_punto);

			}

	public function getEmpezarpartido()
	{	
		//for($i=1 ; $i <= 100000000000 ; $i++)
		//{

		//}
		
		//return Response::json($i);
		$partido = Partido::find(Session::get('partido_id'));



		if($partido->estado == 0)
		{
			//crea los 5 sets
			for($i=1 ; $i <=5 ; $i++)
			{
				$partido_punto				=	new PartidoPunto();	


				//set actual 1 
				if($i == 1)
				{
					$partido_punto->set_actual = 1;
				}
				else
				{
					$partido_punto->set_actual = 0;
				}	

				$partido_punto->set_numero 	=   $i ;
				$partido_punto->partido_id 	=   Session::get('partido_id');
				$partido_punto->save();
			}
			


			//cambia el estado del partido
			$partido 					= Partido::find(Session::get('partido_id'));
			$partido->estado 			= 1;
			$partido->save();

			Session::put('set_id', $partido_punto->id);
			Session::put('set_numero', 1);
		}
		
			//return $this->getIndex();
			return Redirect::back();
			//return Response::json(1);
		

	}

	public function getTerminarset()
	{
		$set = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_actual','=',1)->first();

		if($set->set_numero == 5)
		{

				$set->set_actual = 0;
				$set->save();
				
				$partido = Partido::find(Session::get('partido_id'));

				if($set->puntos_local > $set->puntos_visita)
				{
					$partido->local_set = $partido->local_set + 1;
					$partido->save();

				}

				if($set->puntos_visita > $set->puntos_local)
				{
					$partido->visita_set = $partido->visita_set + 1;
					$partido->save();

				}
		}
		else
		{ 

				$set->set_actual = 0;
				$set->save();

				$set_siguiente = PartidoPunto::where('partido_id','=',Session::get('partido_id'))->where('set_numero','=',$set->set_numero + 1)->first();
				$set_siguiente->set_actual = 1;
				$set_siguiente->save();


				$partido = Partido::find(Session::get('partido_id'));

				if($set->puntos_local > $set->puntos_visita)
				{
					$partido->local_set = $partido->local_set + 1;
					$partido->save();

				}

				if($set->puntos_visita > $set->puntos_local)
				{
					$partido->visita_set = $partido->visita_set + 1;
					$partido->save();

				}
		}

		return Redirect::back();
		
	}

	public function getTerminarpartido()
	{
	
		 //cambia el estado del partido
		$partido 					= Partido::find(Session::get('partido_id'));

		if($partido->estado == 1 )
		{			
		$partido->estado 			= 2;
		$partido->save();
		

		$idLocal 	= $partido->local_equipo_id->id;
		$idVisita	= $partido->visita_equipo_id->id;

		$local 		= $partido->local_set;
		$visita 	= $partido->visita_set;
		
		$sistema 		=  TorneoFase::find(Session::get('fase_id'));


		if($sistema->tipo_fase_id == 1)
		{

			$punto_partido	=  PartidoPunto::where('partido_id','=',Session::get('partido_id'))->get();

			$pto_local 	= null;
			$pto_visita = null;

			foreach($punto_partido as $pto)
			{	
				$pto_local  =  $pto_local + $pto->puntos_local;
				$pto_visita =  $pto_visita + $pto->puntos_visita;
			}
		
			//si gana el local
			if($local > $visita)
			{	
				//asignaciona  local
				$asigna 				= $sistema->sistema_punto_id->where('sistema_punto_id','=',$sistema->sistema_punto_id->id)->where('set_gana','=',$local)->where('set_pierde','=',$visita)->first();

				$tabla 					= TablaPosicion::where('fase_id','=',Session::get('fase_id'))->where('equipo_id','=',$idLocal)->first();
				

				$tabla->puntos 			= $tabla->puntos + $asigna->punto_gana;
				$tabla->partido_ganado 	= $tabla->partido_ganado + 1;
				$tabla->partido_total	= $tabla->partido_total + 1;


				$tabla->set_ganado		= $tabla->set_ganado + $local;
				$tabla->set_perdido		= $tabla->set_perdido + $visita;	


				if($tabla->set_perdido != 0)
				{
					$tabla->set_coeficiente	= $tabla->set_ganado / $tabla->set_perdido;
				}
				else
				{
					$tabla->set_coeficiente	= 1000;

				}		

				$tabla->punto_ganado		= $tabla->punto_ganado + $pto_local;
				$tabla->punto_perdido		= $tabla->punto_perdido + $pto_visita;	

				if($tabla->punto_perdido != 0)
				{
					$tabla->punto_coeficiente 	= $tabla->punto_ganado / $tabla->punto_perdido;
				}
				else
				{
					$tabla->punto_coeficiente = 1000;
				}
		

				if($tabla->racha > 0){

					$tabla->racha  = $tabla->racha + 1;
				
				}else{

					$tabla->racha  = 1;
				}
				
				$tabla->save();
			


				//asignacion a visita
				$tabla1 					= TablaPosicion::where('fase_id','=',Session::get('fase_id'))->where('equipo_id','=',$idVisita)->first();
				$tabla1->puntos 			= $tabla1->puntos + $asigna->punto_pierde;
				$tabla1->partido_perdido 	= $tabla1->partido_perdido  + 1;
				$tabla1->partido_total		= $tabla1->partido_total    + 1;

				$tabla1->set_ganado			= $tabla1->set_ganado + $visita;
				$tabla1->set_perdido		= $tabla1->set_perdido + $local;
				
				if($tabla1->set_perdido != 0){
						$tabla1->set_coeficiente	= $tabla1->set_ganado / $tabla1->set_perdido;
				}else{
						$tabla1->set_coeficiente	= 1000;

				}

				$tabla1->punto_ganado		= $tabla1->punto_ganado + $pto_visita;
				$tabla1->punto_perdido		= $tabla1->punto_perdido + $pto_local;	

				
				if($tabla1->punto_perdido != 0)
				{
					$tabla1->punto_coeficiente 	= $tabla1->punto_ganado / $tabla1->punto_perdido;
				}
				else
				{
					$tabla1->punto_coeficiente = 1000;
				}


				if($tabla1->racha > 0)
				{
					$tabla1->racha = - 1;

				}else{

					$tabla1->racha = $tabla1->racha - 1 ;				
				}
				
				$tabla1->save();

			}

			//si gana visiti
			if($visita > $local)
			{
			
				$asigna1 				= $sistema->sistema_punto_id->where('sistema_punto_id','=',$sistema->sistema_punto_id->id)->where('set_gana','=',$visita)->where('set_pierde','=',$local)->first();

				$tabla 					= TablaPosicion::where('fase_id','=',Session::get('fase_id'))->where('equipo_id','=',$idVisita)->first();


				$tabla->puntos 			= $tabla->puntos + $asigna1->punto_gana;
				$tabla->partido_ganado 	= $tabla->partido_ganado + 1;
				$tabla->partido_total	= $tabla->partido_total + 1;

				$tabla->set_ganado		= $tabla->set_ganado + $visita;
				$tabla->set_perdido		= $tabla->set_perdido + $local;			
				
				if($tabla->set_perdido != 0){
					$tabla->set_coeficiente	= $tabla->set_ganado / $tabla->set_perdido;
				}else{
					$tabla->set_coeficiente	= 1000;

				}

				
				$tabla->punto_ganado	= $tabla->punto_ganado + $pto_visita;
				$tabla->punto_perdido	= $tabla->punto_perdido + $pto_local;	
				
				if($tabla->punto_perdido != 0)
				{
					$tabla->punto_coeficiente 	= $tabla->punto_ganado / $tabla->punto_perdido;
				}
				else
				{
					$tabla->punto_coeficiente = 1000;
				}

				if($tabla->racha > 0){

					$tabla->racha  = $tabla->racha + 1;

				}else{

					$tabla->racha  = 1;
				}
				//$tabla->racha 			= $tabla->racha + 1;

				$tabla->save();


				$tabla1 					= TablaPosicion::where('fase_id','=',Session::get('fase_id'))->where('equipo_id','=',$idLocal)->first();
				$tabla1->puntos 			= $tabla1->puntos + $asigna1->punto_pierde;			
				$tabla1->partido_perdido 	= $tabla1->partido_perdido  + 1;
				$tabla1->partido_total		= $tabla1->partido_total    + 1;

				$tabla1->set_ganado			= $tabla1->set_ganado  + $local;
				$tabla1->set_perdido		= $tabla1->set_perdido + $visita;

				if($tabla1->set_perdido != 0){
					$tabla1->set_coeficiente	= $tabla1->set_ganado / $tabla1->set_perdido;
				}else{
					$tabla1->set_coeficiente	= 1000;

				}

			
				$tabla1->punto_ganado		= $tabla1->punto_ganado +  $pto_local;
				$tabla1->punto_perdido		= $tabla1->punto_perdido + $pto_visita;	
				
				if($tabla1->punto_perdido != 0)
				{
					$tabla1->punto_coeficiente 	= $tabla1->punto_ganado / $tabla1->punto_perdido;
				}
				else
				{
					$tabla1->punto_coeficiente = 1000;
				}

				if($tabla1->racha > 0)
				{
					$tabla1->racha = - 1;

				}else{

					$tabla1->racha = $tabla1->racha - 1 ;				
				}
				
			//	$tabla1->racha				= -1;
				$tabla1->save();


			}
		}


			Session::put('set_id', "");
			Session::put('set_numero', "");

		 }

		//return Redirect::to('torneos/detalle');
		return Redirect::to('home');
	
	}

	public function recalcularTabla()
	{
		
		$sistema 	=  TorneoFase::find(Session::get('fase_id'));
		$tfl  		=  TorneoFaseLeg::where('torneo_fase_id',Session::get('fase_id'))->get();

		$tabla 		=  array();
 
		foreach($tfl as $tflp)
		{
		
			$tflp 	= TorneoFaseLegPartido::where('torneo_fase_leg_id',$tflp->id)->get();

			foreach ($tflp as $a) 
			{
				
				$partido 	=  Partido::find($a->id) ;


				if($partido->estado == 2)
				{

					$pp 		=  PartidoPunto::where('partido_id',$partido->id)->get();
					$local 		= $partido->local_equipo_id->id;
					$visita 	= $partido->visita_equipo_id->id;

					$asigna 	= $sistema->sistema_punto_id->where('sistema_punto_id','=',$sistema->sistema_punto_id->id)->where('set_gana','=',$partido->local_set)->where('set_pierde','=',$partido->visita_set)->first();

					$pl = 0;
					$pv = 0;

					foreach($pp as $pts)
					{
						$pl = $pl + $pts->puntos_local;
						$pv = $pv + $pts->puntos_visita;
					}

					if($partido->local_set > $partido->visita_set)
					{
						//echo 'partido'.$partido->numero_partido .'= ganolocal';
						$tabla = TablaPosicion::where('fase_id',Session::get('fase_id'))->where('equipo_id',$local)->first();

							$tabla->puntos 			= $tabla->puntos + $asigna->punto_gana;
							$tabla->partido_ganado 	= $tabla->partido_ganado + 1;
							$tabla->partido_total	= $tabla->partido_total + 1;

							$tabla->set_ganado		= $tabla->set_ganado + $partido->local_set;
							$tabla->set_perdido		= $tabla->set_perdido + $partido->visita_set;			

							if($tabla->set_perdido != 0)
							{
								$tabla->set_coeficiente	= $tabla->set_ganado / $tabla->set_perdido;
							}
							else
							{
								$tabla->set_coeficiente	= 1000;
							}


							$tabla->punto_ganado	= $tabla->punto_ganado + $pl;
							$tabla->punto_perdido	= $tabla->punto_perdido + $pv;	

							if($tabla->punto_perdido != 0)
							{
								$tabla->punto_coeficiente 	= $tabla->punto_ganado / $tabla->punto_perdido;
							}
							else
							{
								$tabla->punto_coeficiente = 1000;
							}

							if($tabla->racha > 0)
							{
								$tabla->racha  = $tabla->racha + 1;
							}
							else
							{
								$tabla->racha  = 1;
							}





						echo $tabla;


					}
					else
					{
						echo 'partido'.$partido->numero_partido .'= ganovisita';
					}

					echo '<br>';
				}
				


				//array_push($tabla, $data);

				//echo 'partido nro'. $partido->numero_partido.'<br>';
				//echo '-local'.$local.'='.$partido->local_set.'('.$pl.')<br>';
				//echo '-visita'.$visita.'='.$partido->visita_set.'('.$pv.')<br>';
				//echo'------<br>';


			}	
	
		}
		
		return;
	}

}

?>