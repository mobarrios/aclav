@extends('template-2.template')

@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($modulo)}}</b>
			
	</header>

	<div class="panel-body">

		<div class="tabbable">
			
			<ul class="nav nav-tabs">
			@foreach($torneos as $torneo)
				<li><a href="#{{$torneo->id}}" data-toggle="tab">{{$torneo->nombre_torneo}}</a></li>
			@endforeach
			</ul>

			<div class="tab-content">

				@foreach($torneos as $torneo)

				<div class="tab-pane " id="{{$torneo->id}}">
					<div class="table-responsive no-border">
						
								@foreach($torneo->TorneoFase as $fase)
									<h4><strong>{{$fase->nombre}}</strong></h4>
								
									@foreach($fase->leg as $leg )	
										<div class="panel-heading">
											<a class="collapsed" href="#leg{{$leg->id}}" data-parent="#accordion" data-toggle="collapse">
												{{$leg->nombre}}
											</a>
										</div>

										<div id="leg{{$leg->id}}" class="panel-collapse collapse" style="height: 0px;">
						  				  <div class="panel-body">
											
											<table class="table table-striped ">
											<thead>
											<tr>
											<th>#</th>
											<th>Nro. </th>
											<th>Fecha / Hora</th>
											<th>Local</th>
											<th>Visita</th>
											<th>Estadio</th>
											<th>Arbitro 1</th>							
											<th>Arbitro 2</th>
											<th>Sup. 1</th>
											<th>Sup. 2</th>
											<th class="no-sort" width="8%"></th>
											</tr>
											</thead>
											<tbody>


										@foreach ($leg->partido as $model)
											

											<tr>
											<td>{{ $model->id}}</td>
											<td>{{ $model->numero_partido}}</td>
											<td>{{ $model->fecha_inicio}} {{ $model->hora}}</td>
											<td>
											@if($model->local_text == "")
													{{ $model->local_equipo_id->nombre }} 
											@else
													{{$model->local_text}}
											@endif
											</td>
											<td>
											@if($model->visita_text == "")
												{{ $model->visita_equipo_id->nombre}}
											@else
												{{$model->visita_text}}
											@endif
											</td>
											<td>
											{{ isset($model->Estadio->nombre) ? $model->Estadio->nombre  : '' }}
											</td>
											<td>
											@if($model->Arbitro1)
											{{$model->Arbitro1->apellido}} {{$model->Arbitro1->nombre}}
											<br>
											
												@foreach($model->Designaciones as $des)
													@if($model->arbitro_1_id == $des->arbitro_1_id)
														@if($des->estado == 'Rechazado')			
															<span class="badge bg-danger">Rechazado</span>
														@elseif($des->estado == 'Aceptado')
															<span class="badge bg-success">Aceptado</span>
														@else
															<span class="badge bg-primary">a Confirmar</span>
														@endif
													@endif
												@endforeach
											</span>
											@endif		
											</td>

											<td>

											@if($model->Arbitro2)
											{{$model->Arbitro2->apellido}} {{$model->Arbitro2->nombre}}
											<br>
						
											@foreach($model->Designaciones as $des)

												@if($model->arbitro_2_id == $des->arbitro_2_id)
												
														@if($des->estado == 'Rechazado')			
															<span class="badge bg-danger">Rechazado</span>
														@elseif($des->estado == 'Aceptado')
															<span class="badge bg-success">Aceptado</span>
														@else
															<span class="badge bg-primary">a Confirmar</span>
														@endif
												@endif

											@endforeach
								
											@endif

											</td>

											<td>
											@if($model->Supervisor1)
											{{$model->Supervisor1->full_name}}
											<br>
											
											@foreach($model->Designaciones as $des)

											@if($model->supervisor_1_id == $des->supervisor_1_id)
											

													@if($des->estado == 'Rechazado')			
														<span class="badge bg-danger">Rechazado</span>
													@elseif($des->estado == 'Aceptado')
														<span class="badge bg-success">Aceptado</span>
													@else
														<span class="badge bg-primary">a Confirmar</span>
													@endif

											@endif

											@endforeach
											
											@endif

											</td>

											<td>
											@if($model->Supervisor2)
											{{$model->Supervisor2->full_name}}
											<br>
											@foreach($model->Designaciones as $des)

											@if($model->supervisor_2_id == $des->supervisor_2_id)
													@if($des->estado == 'Rechazado')			
														<span class="badge bg-danger">Rechazado</span>
													@elseif($des->estado == 'Aceptado')
														<span class="badge bg-success">Aceptado</span>
													@else
														<span class="badge bg-primary">a Confirmar</span>
													@endif
											@endif

											@endforeach
											
											@endif

											</td>
											<td>

											<div class="btn-group pull-right">
											<a href="designaciones/detalle/{{ Crypt::encrypt($model->id)}}/{{$torneo->id}}" class=" btn btn-xs bg-success" type="button"><i class="fa fa-edit"></i></a>
											</div>
											</td>
											</tr>
											
											@endforeach
											</tbody>   
											</table>

										    </div>
										</div>
								
										@endforeach
										@endforeach

											
					</div>

					</div>

				@endforeach

		</div>
	</div>

</section>

@endsection