@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>Popup Web</b>
			
	</div>

	<div class="panel-body">

		<a href="estadisticae/new" class="btn btn-xs btn-success">Cargar Popup Web</a>

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
								<a href="uploads/contenidos/estadisticae/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/estadisticae/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						
						
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>
									
								
                               <td>
                               	<a href="estadisticae/edit/{{Crypt::encrypt($models->id)}}" class="btn btn-sm  btn-info " type="button">
                               	<i class="fa fa-edit "></i></a>

                               <a href="estadisticae/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
                               </td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop