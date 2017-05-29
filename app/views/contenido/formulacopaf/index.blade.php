@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="formulacopaf/new" class="btn btn-xs btn-success">Cargar Formulario Copa Desafío</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px"></th>
					<th></th>
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
								<a href="uploads/contenidos/formulacopaf/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/formulacopaf/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td style="width:850px">
							{{$models->cuerpo}}
						</td>
						
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						

					<td>
								<div class="btn-group pull-right">
								<a href="formulacopaf/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="formulacopaf/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop