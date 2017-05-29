@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="contacto/new" class="btn btn-xs btn-success">Crear Contacto</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Mapa</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Email</th>
					<th>Estado</th>
					<th>Accion</th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/contacto/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/contacto/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="contacto/edit/{{Crypt::encrypt($models->id)}}">{{$models->telefono}}</a>
						</td>
						<td>
							{{$models->direccion}}
						</td>
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>
                               <td><a href="contacto/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop