@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="provincia/new" class="btn btn-xs btn-success">Cargar Provincia</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Id</th>
					<th>Nombre de la Provincia</th>
					<th>Estado</th>
					<th>Accion</th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							{{$models->id}}
						</td>
						
						<td>
							<a href="provincia/edit/{{Crypt::encrypt($models->id)}}">{{$models->provincia_nombre}}</a>
						</td>
						
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>
                               <td><a href="provincia/delete/{{Crypt::encrypt($models->id)}}" class="btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop