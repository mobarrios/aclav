@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="arbitro/new" class="btn btn-xs btn-success pull-right">Cargar Arbitro</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				
					<th style="width:50px">Imágen</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Estado</th>
					<th>Accion</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/arbitro/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/arbitro/{{$models->imagen}}" width="50" height="50" >
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
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						
					<td>
								<div class="btn-group pull-right">
								<a href="arbitro/detalle/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm btn-white" type="button"><i class="fa fa-search"></i></a>
								<a href="arbitro/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="arbitro/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop