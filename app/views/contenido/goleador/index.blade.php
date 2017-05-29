@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="goleador/new" class="btn btn-xs btn-success">Cargar Goleador</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th>Imágen</th>
					<th>Estado</th>
					<th>Accion</th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/goleador/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/goleador/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						
						<td>
							<a href="goleador/edit/{{Crypt::encrypt($models->id)}}">{{$models->cuerpo}}</a>
						</td>
						
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>
                               <td>
								<div class="btn-group pull-right">
								<a href="goleador/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="goleador/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop