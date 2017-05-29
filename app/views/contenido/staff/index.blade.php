@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="staff/new" class="btn btn-xs btn-success">Cargar Staff</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Imágen</th>
					<th>Fecha</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Interno</th>
					<th>Email</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/staff/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/staff/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="staff/edit/{{Crypt::encrypt($models->id)}}">{{$models->apellido}}</a>
						</td>
						<td>
							{{$models->nombre}}
						</td>

						<td>
							{{$models->tel}}
						</td>

						<td>
							{{$models->email}}
						</td>
												
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop