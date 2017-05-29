@extends('template-2.template')

@section('content')
	


<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">


<div class="tabbable">
	
	<ul class="nav nav-tabs">
		@foreach($torneo as $torneos)
			<li><a href="#{{$torneos->id}}" data-toggle="tab">{{$torneos->nombre_torneo}}</a></li>
		@endforeach
	</ul>

	<div class="tab-content">

	@foreach($torneo as $torneos)

	<div class="tab-pane " id="{{$torneos->id}}">
		<div class="table-responsive no-border">

		@foreach($torneos->TorneoFase as $fase)
			<h5><strong>{{$fase->nombre}}</strong></h5>
								
					@foreach($fase->leg as $legs)

						<div class="panel-heading">
							<a class="collapsed" href="#leg{{$legs->id}}" data-parent="#accordion" data-toggle="collapse">
								{{$legs->nombre}}
							</a>
						</div>

						<div id="leg{{$legs->id}}" class="panel-collapse collapse" style="height: 0px;">
						    <div class="panel-body">
								
								<table class="table  table-striped">
								<thead>
									<tr>
										<th>Nro.</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Local</th>
										<th>Visita</th>
										<th>Estadio</th>
										<th colspan="4">Oficiales</th>
										<th></th>
									</tr>
								</thead>
								<tbody>

								@foreach($legs->partido as $partido)

									@if($partido->supervisor_id == 1)
									
									@else
									
									@endif
										<tr>
											<td>{{$partido->numero_partido}}</td>
											<td>{{$partido->fecha_inicio}}</td>
											<td>{{$partido->hora}}</td>

											@if($partido->local_text == "")
												<td>{{$partido->local_equipo_id->sigla}}</td>
											@endif

											@if($partido->visita_text == "")
												<td>{{$partido->visita_equipo_id->sigla}}</td>
											@endif
											
											<td>{{ isset($partido->Estadio->full_name) ? $partido->Estadio->full_name  : '' }}</td>

											<td>{{ isset($partido->Arbitro1->full_name) ? $partido->Arbitro1->full_name  : '' }}</td>
											<td>{{ isset($partido->Arbitro2->full_name) ? $partido->Arbitro2->full_name  : '' }}</td>
											<td>{{ isset($partido->Supervisor1->full_name) ? $partido->Supervisor1->full_name  : '' }}</td>
											<td>{{ isset($partido->Supervisor2->full_name) ? $partido->Supervisor2->full_name  : '' }}</td>
											
											<td>
											<a href="costo/detalle/{{Crypt::encrypt($partido->id)}}" class="btn btn-xs btn-default">Costos</a>
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

</div>


@endsection	

@stop