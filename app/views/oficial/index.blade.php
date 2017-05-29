@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="oficial/new" class="btn btn-xs btn-success">Cargar Staff Equipo</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px"></th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Funcion</th>
					<th>Accion</th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/oficial/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/oficial/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->apellido}}
						</td>
						<td>
							{{$models->nombre}}
						</td>
						<td>
							{{$models->funcion->funcion}}
						

					<td>
								<div class="btn-group pull-right">
								<a href="oficial/detalle/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm btn-white" type="button"><i class="fa fa-search"></i></a>
								<a href="oficial/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="oficial/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop