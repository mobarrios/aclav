@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="playoffweb/new" class="btn btn-xs btn-success">Cargar PlayOff Web</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/playoffweb/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/playoffweb/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						
						<td>
							<a href="playoffweb/edit/{{Crypt::encrypt($models->id)}}">{{$models->cuerpo}}</a>
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
								<a href="playoffweb/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="playoffweb/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
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