@extends('template-2/template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$torneo->nombre_torneo}}</b>

		<a href="torneos/fase" class="btn btn-xs btn-success pull-right">Crear Fase</a>
	</div>

	<div class="panel-body">

		@foreach($torneo_fase as $fase)
		<section class="panel panel-dark">

			<div class="panel-heading">
				{{$fase->nombre}}
				<a href="torneos/fasedel/{{Crypt::encrypt($fase->id)}}" class="del fa fa-times pull-right" ><a>
				<a href="torneos/faseedit/{{Crypt::encrypt($fase->id)}}" class="fa fa-edit pull-right" ><a>
			</div>
			<div class="panel-body">
				<section class="panel ">
						<div id="accordion" class="panel-group">

					@foreach($fase->leg as $legs)
					
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong><a class="collapsed" href="#{{$legs->id}}" data-parent="#accordion" data-toggle="collapse">{{$legs->nombre}} </a></strong>
									<div class="pull-right">
										desde : <strong>{{$legs->fecha_inicio}}</strong>
										hasta : <strong>{{$legs->fecha_final}}</strong>
									
											<a href="torneos/editleg/{{$legs->id}}" class="btn  btn-xs"><i class="fa fa-edit"></i></a>
									|		<a href="torneos/delleg/{{$legs->id}}" class="del btn btn-xs"><i class="fa fa-times"></i></a>
										
									</div>
								</div>
						
							<div id="{{$legs->id}}" class="panel-collapse collapse " style="height: 0px;">
						

							<!--	<div id="{{$legs->id}}" class="panel-collapse collapse" style="height: 0px;">-->

									<div class="panel-body">

								
											<div class="table-responsive">
												<table class="table  table-hover">
													<thead>
														<tr>
															<th style="width: 5%">Nro.</th>
															<th style="width: 10%">Datos</th>
															<th style="width: 20%">Equipos</th>
															<th style="width: 15%">Resultado</th>
															<th style="width: 20%">Datos</th>
															<th style="width: 5%">PxP</th>
															<th style="width: 5%"></th>		
															<th style="width: 5%"></th>								
														</tr>
													</thead>
													<tbody>
														@foreach($legs->partido as $partido)
														
														<tr>
															<td>
																<a href='partido/detalle/{{Crypt::encrypt($partido->id)}}/{{Crypt::encrypt($fase->id)}}' class="btn btn-xs btn-default">{{$partido->numero_partido}}</a>
															</td>
															<td>
																<div class="row">
																	<div class="col-xs-12">
																		<small>Fecha : </small> <b>{{ $partido->fecha_inicio }}</b>
																	</div>
																	<div class="col-xs-12">
																		<small>Hora : </small><b>{{ $partido->hora }}</b>
																	</div>
																	<div class="col-xs-12">
																		<small>Riesgo : </small> <b>{{ $partido->riesgo }}</b>
																	</div>
																	

																</div>
															</td>
															<td>		
																<div class="row">
																	<div class="col-xs-12">

																		@if($partido->local_text != '')
																			{{$partido->local_text}}
																		@else
																			{{$partido->local_equipo_id->nombre}}
																			<div class="col-xs-3"style="width:60px" >
																			<i class="thumbnail">
																				<img src="uploads/escudos/{{$partido->local_equipo_id->escudo }}" >
																			</i>
																		</div>
																		@endif

																		
																	</div>
			
																	<div class="col-xs-12">

																		@if($partido->visita_text != '')
																			{{$partido->visita_text}}
																		@else
																			{{$partido->visita_equipo_id->nombre}}
																			<div class="col-xs-3"style="width:60px">
																			<i class="thumbnail">
																				<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo }}" >
																			</i>
																		</div>
																		@endif
																		
																		
																	</div>
																</div>
															</td>
															<td>
																<div class="row">
																	<div class="col-xs-12">
																			<div class="col-xs-2 badge bg-danger">
																				{{$partido->local_set}}
																			</div>
																			@foreach($partido->puntoPartido as $punto)
																				<div class="col-xs-2">
																					{{$punto->puntos_local}}
																				</div>
																			@endforeach
															
																	</div>
																	<br><br>
																	<div class="col-xs-12">
																			<div class="col-xs-2 badge bg-danger">
																			{{$partido->visita_set}}
																			</div>
																			
																			@foreach($partido->puntoPartido as $punto)
																				<div class="col-xs-2">
																					{{$punto->puntos_visita}}
																				</div>
																			@endforeach
																	</div>
																</div>
															</td>
															<td>
																<ul>
																	<li><small>Estadio :   </small>
																		{{ isset($partido->Estadio->nombre) ? $partido->Estadio->nombre  : '' }}
																	</li>
																	<li><small>Ref.1 : </small>
																		@if($partido->Arbitro1)
																			{{$partido->Arbitro1->full_name}} 
																		@endif
																	</li>
																	<li><small>Ref.2 : </small>
																		@if($partido->Arbitro2)
																			{{$partido->Arbitro2->full_name}} 
																		@endif
																	</li>
																	<li><small>Sup.1:</small>
																		@if($partido->Supervisor1)
																			{{$partido->Supervisor1->full_name}} 
																		@endif
																    </li>
																    <li><small>Sup.2:</small>
																		@if($partido->Supervisor2)
																			{{$partido->Supervisor2->full_name}} 
																		@endif
																    </li>
																</ul>	
															</td>
															
															<td style="width: 60px;">
																<!--<a href="puntoxpunto/index/{{Crypt::encrypt($partido->id)}}/{{Crypt::encrypt($fase->id)}}"><i class="fa fa-laptop"></i></a></td>-->
																	<div class="btn-group">
																		@if($partido->pxp == 0)
																			<a href="puntoxpunto/mostrar/si/{{$partido->id}}" class="btn btn-default btn-xs">si</a>
																			<button class="btn btn-danger btn-xs">no</button>
																		@else
																			<button class="btn btn-success btn-xs">si</button>
																			<a href="puntoxpunto/mostrar/no/{{$partido->id}}" class="btn btn-default btn-xs">no</a>
																		@endif
																	</div>
															<td>
																	@if($partido->estado == 0)
																		<span class="label label-success"> No Comenzado</span>
																	@elseif($partido->estado == 1)
																		<span class="label label-danger"> Comenzado</span>
																	@else
																		<span class="label label-primary">Finalizado</span>
																	@endif
															</td>
															<td>
															<a href="partido/del/{{Crypt::encrypt($partido->id)}}" class="del fa fa-times" ><a>
															</td>

														</tr>
														@endforeach
													</tbody>
												</table>
											
										
											<a href="partido/new/{{Crypt::encrypt($legs->id)}}/{{Crypt::encrypt($fase->id)}}" class="btn btn-xs btn-success">Crear Partido</a>	

											</div>
									</div>

								</div>


							</div>
						
					@endforeach
						</div>
					</section>

					@if($fase->tipo_fase_id == 1)
						<a href="torneos/tabla/{{Crypt::encrypt($fase->id)}}" class="btn btn-xs btn-success pull-right">Tabla de Posiciones <i class="fa fa-table"></i></a>		
					@endif
							
				<a href="torneos/leg/{{Crypt::encrypt($fase->id)}}" class="btn btn-xs btn-success pull-left">Crear Leg</a>	
			</div>
		</section>		
		@endforeach

	</div>


	</div>




@endsection
@stop