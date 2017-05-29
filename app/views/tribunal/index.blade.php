@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="tribunal/new" class="btn btn-xs btn-success pull-right">Cargar Sancionado</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				    <th>Resolución</th>
					<th>Sancionado</th>
					<th>Sancion</th>
					<th>Temporada</th>
					
					<th>Accion</th>
					
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							{{$models->resolucion}}
						</td>
						<td>
							{{$models->jugador}}
						</td>
						
						<td>
							{{$models->sancion}}
						</td>
						<td>
						@if(!is_null($models->temporada))
							{{$models->temporada->nombre_temporada }}
						@endif
						</td>
						

						<td>
							<div class="btn-group pull-right">
							<a href="tribunal/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
							<a href="tribunal/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
							</div>
						</td>

					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>

  {{$model->links()}}

@endsection	

@stop