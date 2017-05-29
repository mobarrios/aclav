@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="estadio/new" class="btn btn-xs btn-success pull-right">Cargar Estadio</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				
					<th style="width:50px">Imágen</th>
					<th>Fecha</th>
					<th>Nombre Estadio</th>
					<th>Capacidad</th>
					<th>Estado</th>
					<th>Accion</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/estadio/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/estadio/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="estadio/edit/{{Crypt::encrypt($models->id)}}">{{$models->nombre}}</a>
						</td>
						<td>
							{{$models->capacidad}}
						</td>
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>


								<td><a href="estadio/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop