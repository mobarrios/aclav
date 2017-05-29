@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="autoridades/new" class="btn btn-xs btn-success">Cargar Autoridad</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Imágen</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Cargo</th>
					<th>Email</th>		
					<th>Accion</th>	
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/autoridad/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/autoridad/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							<a href="autoridades/edit/{{Crypt::encrypt($models->id)}}">{{$models->apellido}}</a>
						</td>
						<td>
							{{$models->nombre}}
						</td>
						<td>
							{{$models->cargo}}
						</td>
						<td>
							{{$models->email}}
			
						</td>
                               <td><a href="autoridades/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop