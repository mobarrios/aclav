@extends('template-2/template')

@section('content')
	

<div class="panel panel-default">
	<div class="panel-heading">	
		<b>{{$torneo->nombre_torneo}}</b>
	</div>

	<div class="panel-body">

		@foreach($torneo_fase as $fase)

		<section class="panel panel-dark">
			<div class="panel-heading">
				{{$fase->nombre}}
			</div>
			<div class="panel-body">

				<section class="panel ">
					@foreach($fase->leg as $legs)

						<div class="panel panel-info">
							<div class="panel-heading">
								{{$legs->nombre}}
								<div class="pull-right">
									desde : <strong>{{$legs->fecha_inicio}}</strong>
									hasta : <strong>{{$legs->fecha_final}}</strong>
								</div>
							</div>
					


						<!--	<div id="{{$legs->id}}" class="panel-collapse collapse" style="height: 0px;">-->

						     <div class="panel-body">

									<div class='panel panel-default'>
										<div class="panel-heading" style="height:35px">
											<div class="row col-lg-12">
												<div class="col-lg-1"> Nro.</div>
												<div class="col-lg-2"> Fecha</div>
												<div class="col-lg-1"> Hora</div>
												<div class="col-lg-1"> Local</div>
												<div class="col-lg-1"> Visitante</div>
												<div class="col-lg-2">Estadio</div>	
												<div class="col-lg-2">Arbitro 1</div>
												<div class="col-lg-2">Arbitro 2</div>			
											</div>	
										</div>
									</div>

								@foreach($legs->partido as $partido)

								@if($partido->supervisor_id == 1)
									<div class="panel panel-success">
								@else
								<div class="panel">
								@endif
										<div class="panel-heading" style="height:35px">	
											<a class="panel-collapse" href="#{{$partido->id}}" data-parent="#accordion" data-toggle="collapse">
												<div class="row col-lg-12">
													<div class="col-lg-1"> {{$partido->numero_partido}}</div>
													<div class="col-lg-2"> {{$partido->fecha_inicio}}</div>
													<div class="col-lg-1"> {{$partido->hora}}</div>
													<div class="col-lg-1"> {{$partido->local_equipo_id->sigla}}</div>
													<div class="col-lg-1"> {{$partido->visita_equipo_id->sigla}}</div>
													<div class="col-lg-2">{{ isset($partido->Estadio->nombre) ? $partido->Estadio->nombre  : '' }}</div>		
													<div class="col-lg-2">{{ isset($partido->Arbitro1->nombre) ? $partido->Arbitro1->nombre  : '' }}</div>
													<div class="col-lg-2">{{ isset($partido->Arbitro2->apellido) ? $partido->Arbitro2->apellido  : '' }}</div>		
												</div>
											</a>
										</div>

									<div id="{{$partido->id}}" class="panel-collapse collapse" style="height: auto;">
										<div class="panel-body">
																					
											<div class="row" >

												<div class="col-lg-4">
													{{$partido->local_equipo_id->nombre}}
													<div class="col-lg-5"style="width:100px" >
														<i class="thumbnail">
															<img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" >
														</i>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="col-lg-1">
													<h2>{{$partido->local_set}}</h2>
													</div>

													@foreach($partido->puntoPartido as $punto)
													<div class="col-xs-2">
													{{$punto->puntos_local}}
													</div>
													@endforeach	

													<div class="col-lg-1">
													    <h2> - </h2>
													</div>
													<div class="col-lg-1">
													<h2>{{$partido->visita_set}}</h2>
													</div>
													@foreach($partido->puntoPartido as $punto)
													<div class="col-xs-2">
													{{$punto->puntos_visita}}
													</div>
													@endforeach	
												</div>

												<div class="col-lg-4">
													{{$partido->visita_equipo_id->nombre}}
													<div class="col-lg-5"style="width:100px">
														<i class="thumbnail">
															<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" >
														</i>
													</div>
												</div>
											</div>


											<div class='row' style="height: 30px">
												<div class='col-lg-12'>
													<small>Estadio :   </small>
														{{ isset($partido->estadio_id->nombre) ? $partido->estadio_id->nombre  : '' }}
												</div>
											</div>
											
											<div class='row' style="height: 30px">
												<div class='col-lg-3'>
													<small>Ref.1 : </small>
														@if($partido->Arbitro1)
															{{$partido->Arbitro1->apellido}} {{$partido->Arbitro1->nombre}}
														@endif
												</div>

												<div class='col-lg-3'>
													<small>Ref.2 : </small>
														@if($partido->Arbitro2)
															{{$partido->Arbitro2->apellido}} {{$partido->Arbitro2->nombre}}
														@endif
												</div>


												<div class='col-lg-3'>
													<small>Supervisor 1:</small>
													<a href='designaciones/supervisor/{{Crypt::encrypt($partido->id)}}'  data-toggle="modal" data-target="#modal" ><i class="btn btn-success btn-xs">
													
														@if($partido->Supervisor)
															{{$partido->Supervisor->designacion($partido->id)->estado}}
														@endif
										
													</i></a>
													
												</div>

												<div class='col-lg-3'>
												<small>Supervisor 2:</small>
														@if($partido->Supervisor)
															{{$partido->Supervisor->apellido}} {{$partido->Supervisor->nombre}}
														@endif
												</div>
											</div>

										<div class="row" style="height: 30px">

											<div class='col-lg-6'>
											<small>Estado:</small>
													@if($partido->estado == 0)
													<span class="label label-success"> No Comenzado</span>
												@elseif($partido->estado == 1)
													<span class="label label-danger"> Comenzado</span>
												@else
													<span class="label label-primary">Finalizado</span>
												@endif
											</div>

											<div class='col-lg-6'>
											<small>Riesgo:</small>
												{{$partido->riesgo}}
											</div>

											</div>	

										

											<div class='row' style="height: 30px">

											<div class='col-lg-3'>
												<small>SUP O1 :   </small>
												
													<a href='download/{{Crypt::encrypt(4)}}' ><i class="fa fa-download"></i></a>

													@if($partido->supervisor_id == Auth::user()->supervisor_id)
														<a href='upload/{{Crypt::encrypt(4)}}'  data-toggle="modal" data-target="#modal" ><i class="fa fa-upload"></i></a>
													@endif
														
											</div>

											<div class='col-lg-3'>
												<small>O4: </small>
													<a href='download/{{Crypt::encrypt(5)}}' ><i class="fa fa-download"></i></a>
													@if($partido->supervisor_id == Auth::user()->supervisor_id)
													<a href='upload/{{Crypt::encrypt(5)}}'  data-toggle="modal" data-target="#modal" ><i class="fa fa-upload"></i></a>
													@endif
													
											</div>

											<div class='col-lg-3'>
												<small>INFORME: </small>
													<a href='download/{{Crypt::encrypt(4)}}' ><i class="fa fa-download"></i></a>
													@if($partido->supervisor_id == Auth::user()->supervisor_id)
													<a href='upload/{{Crypt::encrypt(4)}}'  data-toggle="modal" data-target="#modal" ><i class="fa fa-upload"></i></a>
													@endif
											</div>


											<div class='col-lg-3'>
												<small>INFORME DISIPLINARIO:</small>
													<a href='download/{{Crypt::encrypt(4)}}' ><i class="fa fa-download"></i></a>
													@if($partido->supervisor_id == Auth::user()->supervisor_id)
													<a href='upload/{{Crypt::encrypt(4)}}'  data-toggle="modal" data-target="#modal" ><i class="fa fa-upload"></i></a>
													@endif
											</div>

											</div>	


																		
											<div class='row'style="height: 30px">
											<div class="col-lg-2">
												@if($partido->pxp_user_id  == Auth::user()->id)
												<a href="puntoxpunto/index/{{Crypt::encrypt($partido->id)}}/{{Crypt::encrypt($fase->id)}}"><i class="btn btn-default fa fa-laptop"></i></a>
												@endif
											</div>	
											</div>									
										</div>
									</div>

								</div>
								@endforeach

							</div>

					

					@endforeach

					</section>					
			</div>
		</section>		
		@endforeach
	</div>
</div>




@endsection
@stop