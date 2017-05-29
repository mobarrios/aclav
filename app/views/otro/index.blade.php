@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="otro/new" class="btn btn-xs btn-success pull-right">Cargar Otro</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				
					<th style="width:50px">Imágen</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Tipo</th>
					<th></th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/otro/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/otro/{{$models->imagen}}" width="50" height="50" >
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
							{{$models->tipo}}
						</td>
						<td>
								<div class="btn-group pull-right">
								<a href="otro/detalle/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm btn-white" type="button"><i class="fa fa-search"></i></a>
								<a href="otro/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="otro/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
						</td>
					<tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop