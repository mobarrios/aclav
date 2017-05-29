@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		

			PERFIL ARBITRO
	</div>

	<div class="panel-body">

<div class="table-responsive no-border">
			<table class="table table-bordered table-striped mg-t datatable ">
				<thead>
					<tr>
						<th>Nro. Partido </th>
						<th>Fecha</th>
						<th>Local</th>
						<th>Visita</th>
						<th>Estadio</th>
						<th>Arbitro 1</th>							
						<th>Arbitro 2</th>
						<th>Supervisor</th>
						
						
						<th class="no-sort" width="8%"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($models as $model)
						<tr>
							<td>{{ $model->numero_partido}}</td>
							<td>{{ $model->fecha_inicio}} {{ $model->hora}}</td>
							<td>{{ $model->local_equipo_id->nombre}}</td>
							<td>{{ $model->visita_equipo_id->nombre}}</td>
							<td>{{ isset($model->estadio_id->nombre) ? $model->estadio_id->nombre  : '' }}</td>
							<td>
								@if($model->Arbitro1)
									{{$model->Arbitro1->apellido}} {{$model->Arbitro1->nombre}}
									<br>
									<span class="badge bg-alert">{{ isset($model->Arbitro1->designacion($model->id)->estado) ? $model->Arbitro1->designacion($model->id)->estado  : '' }}</span>
					 			@endif
								 
								
							</td>
							<td>

								@if($model->Arbitro2)
									{{$model->Arbitro2->apellido}} {{$model->Arbitro2->nombre}}
									<br>
									<span class="badge bg-alert">{{ isset($model->Arbitro2->designacion($model->id)->estado) ? $model->Arbitro2->designacion($model->id)->estado  : '' }}</span>
								@endif
								
							</td>
							<td>
									{{ isset($model->Supervisor->id) ? $model->Supervisor->apellido .  $model->Supervisor->nombre: '' }}
							<td>
							<a href="perfil_arbitro/confirmar/{{$model->id}}" class="btn btn-xs btn-success confirmaArbitro">Confirmar</a>
				
							</td>							
							<td>

								<form id="frmRechaza{{$model->id}}" action="perfil_arbitro/rechazar" method="post">
									
									<a   class="btn btn-xs btn-danger rechazaArbitro ">Rechazar </a>

									<input type="hidden" name="partido_id" value="{{$model->id}}">

									<input class="form-control" type="text" name="causa" required="required" id="causa" >

								</form>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>

	</div>

	     	
	</div>

</div>


@endsection	

@stop

