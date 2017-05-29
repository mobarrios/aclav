@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="sancion/new" class="btn btn-xs btn-success pull-right">Cargar Sancion</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				    <th>Sancionado</th>
					<th>Cantidad de Fechas</th>
					<th>Accion</th>
					
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						
						<td>
							{{$models->sancionado}}
						</td>
						
						<td>
							{{$models->cant_fecha}}
						</td>
						<td>
								<div class="btn-group pull-right">
								<a href="sancion/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="sancion/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>

  {{$model->links()}}

@endsection	

@stop