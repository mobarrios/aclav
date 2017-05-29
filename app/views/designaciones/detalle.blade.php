@extends('template-2.template')

@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($modulo)}}</b>

		<strong class="pull-right"> ( Nro. {{$partido->numero_partido}} ) 
		@if($partido->local_text == "")
			{{$partido->local_equipo_id->sigla}}
		@else
			{{$partido->local_text}}
		@endif
		 - 
		 @if($partido->visita_text == "")
		 	{{$partido->visita_equipo_id->sigla}} 
		 @else
		 	{{$partido->visita_text}} 
		 @endif
		 </strong>
	
	</header>

	<div class="panel-body">

		<div class="row">
			<div class="col-xs-12">
					<div class="table">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Puesto</th>
									<th>Apellido Nombre</th>
									<th>Estado</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Arbitro 1</td>
									
									@if($partido->Arbitro1)
										
										<td>
										{{Form::model($partido,array('url'=>'designaciones/arbitro1'))}}

											@if($estado_arbitro_1->estado == "Aceptado" || $estado_arbitro_1->estado == "a Confirmar")
												{{$partido->Arbitro1->fullname}}
											@else
												{{Form::select('arbitro_1_id',array('seleccionar') + $arbitros ,Input::old('arbitro_1_id'))}}
												<button class="btn btn-xs "><i class="fa fa-check"></i></button>
												
											@endif
										{{Form::close()}}
										</td>
										<td>
											<span class="badge">	
												{{$estado_arbitro_1->estado}}
											</span>
												{{$estado_arbitro_1->updated_at}}
										</td>
										<td>
											<a href="designaciones/del/arbitro_1_id/{{$partido->Arbitro1->id}}" class="del btn btn-danger btn-xs" >x</a>
										</td>

									@else

										<td>
											{{Form::open(array('url'=>'designaciones/arbitro1'))}}
												{{Form::select('arbitro_1_id',array('seleccionar') + $arbitros)}}
													<button class="btn btn-xs "><i class="fa fa-check"></i></button>
											{{Form::close()}}
										</td>
										<td>
										</td>
										<td>
										</td>

									@endif		
								</tr>

								<tr>
									<td>Arbitro 2</td>
										
										@if($partido->Arbitro2)
										<td>
												{{Form::model($partido,array('url'=>'designaciones/arbitro2'))}}
													@if($estado_arbitro_2->estado == "Aceptado" || $estado_arbitro_2->estado == "a Confirmar")
														{{$partido->Arbitro2->fullname}}
													@else
														{{Form::select('arbitro_2_id',array('seleccionar') + $arbitros, Input::old('arbitro_2_id'))}}
														<button class="btn btn-xs "><i class="fa fa-check"></i></button>
													@endif
												{{Form::close()}}
										</td>
										<td>
											<span class="badge">	
												{{$estado_arbitro_2->estado}}
											</span>
												{{$estado_arbitro_2->updated_at}}
										</td>
										<td>
											<a href="designaciones/del/arbitro_2_id/{{$partido->Arbitro2->id}}" class="del btn btn-danger btn-xs" >x</a>
										</td>

										@else
											<td>
												{{Form::open(array('url'=>'designaciones/arbitro2'))}}
												{{Form::select('arbitro_2_id',array('seleccionar') + $arbitros)}}
												<button class="btn btn-xs "><i class="fa fa-check"></i></button>
												{{Form::close()}}
											</td>
										<td>
										</td>
										<td>
										</td>

									@endif
								</tr>

								<tr>
									<td>Supervisor 1</td>
									@if($partido->Supervisor1)
										<td>
										{{Form::model($partido,array('url'=>'designaciones/supervisor1'))}}
											
											@if($estado_supervisor_1->estado == "Aceptado" || $estado_supervisor_1->estado == "a Confirmar")
												{{$partido->Supervisor1->fullname}}
											@else
											
												{{Form::select('supervisor_1_id',array('seleccionar') + $supervisores,Input::old('supervisor_1_id'))}}
												<button class="btn btn-xs "><i class="fa fa-check"></i></button>
												
											@endif
											{{Form::close()}}
										</td>
										<td>
											<span class="badge">	
												{{$estado_supervisor_1->estado}}
											</span>
												{{$estado_supervisor_1->updated_at}}
										</td>
										<td>
											<a href="designaciones/del/supervisor_1_id/{{$partido->Supervisor1->id}}" class="del btn btn-danger btn-xs" >x</a>
										</td>
									@else
										<td>
											{{Form::open(array('url'=>'designaciones/supervisor1'))}}
											{{Form::select('supervisor_1_id',array('seleccionar') + $supervisores)}}
											<button class="btn btn-xs "><i class="fa fa-check"></i></button>
											{{Form::close()}}
										</td>
										<td>
										</td>
										<td>
										</td>
									@endif		
								</tr>

								<tr>
									<td>Supervisor 2</td>
									@if($partido->Supervisor2)
										<td>
										{{Form::model($partido,array('url'=>'designaciones/supervisor2'))}}
											@if($estado_supervisor_2->estado == "Aceptado"|| $estado_supervisor_2->estado == "a Confirmar" )
												{{$partido->Supervisor2->fullname}}
											@else
												{{Form::select('supervisor_2_id',array('seleccionar') + $supervisores,Input::old('supervisor_2_id'))}}
												<button class="btn btn-xs "><i class="fa fa-check"></i></button>
												
											@endif
											{{Form::close()}}
										</td>
										<td>
											<span class="badge">	
												{{$estado_supervisor_2->estado}}
											</span>
												{{$estado_supervisor_2->updated_at}}
										</td>
										<td>
											<a href="designaciones/del/supervisor_2_id/{{$partido->Supervisor2->id}}" class="del btn btn-danger btn-xs" >x</a>
										</td>
									@else
										<td>
											{{Form::open(array('url'=>'designaciones/supervisor2'))}}
											{{Form::select('supervisor_2_id',array('seleccionar') + $supervisores)}}
											<button class="btn btn-xs "><i class="fa fa-check"></i></button>
											{{Form::close()}}
										</td>
										<td>
										</td>
									@endif		
								</tr>
							</tbody>
						</table>


						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th colspan="2" >Rechazadas</th>
								</tr>
								<tr>
									<th>Oficial</th>
									<th>Motivo</th>
									<th>Fecha</th>
									
								</tr>
							</thead>
							<tbody>
							@foreach($cancelaciones as $cancelacion)

								<tr>
									<td>
										@if($cancelacion->arbitro_1_id != 0)
											{{$cancelacion->Arbitro1->full_name}}
										@endif
										@if($cancelacion->arbitro_2_id != 0)
											{{$cancelacion->Arbitro2->full_name}}
										@endif
										@if($cancelacion->supervisor_1_id != 0)
											{{$cancelacion->Supervisor1->full_name}}
										@endif
										@if($cancelacion->supervisor_2_id != 0)
											{{$cancelacion->Supervisor2->full_name}}
										@endif
									</td>
									<td>{{$cancelacion->observaciones}}</td>
									<td>{{$cancelacion->updated_at}}</td>
								</tr>
							@endforeach

							</tbody>
						</table>
					</div>
			</div>	
		</div>

	
	</div>

</section>

@endsection