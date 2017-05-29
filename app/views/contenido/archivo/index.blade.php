@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="archivo/new" class="btn btn-xs btn-success">Cargar Archivos</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th>Creado</th>
					<th>Titulo</th>
					<th>Desc.</th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							{{$models->titulo}}
						</td>
						<td>
						
						<a href="web/download/{{Crypt::encrypt($models->id)}}"> <i class="btn btn-sm btn-white fa fa-download"></i></font></p></a>
						
						</td>
						

							<td>
								<div class="btn-group pull-right">
								<a href="archivo/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="archivo/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop