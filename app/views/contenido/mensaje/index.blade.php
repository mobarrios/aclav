@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="mensaje/new" class="btn btn-xs btn-success">Cargar Nuevo Mensaje</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Id</th>
					<th>Mensaje</th>
					<th>Estado</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="mensaje/edit/{{Crypt::encrypt($models->id)}}">{{$models->id}}</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="mensaje/edit/{{Crypt::encrypt($models->id)}}">{{$models->mensaje}}</a>
						</td>
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">No Activo</span>

							@endif
			
						</td>
                               <td><a href="mensaje/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop