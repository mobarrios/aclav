@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="oficialfuncion/new" class="btn btn-xs btn-success">Cargar Funcion de Staff</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Id</th>
					<th>Funcion</th>
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
							{{$models->funcion}}
						</td>
						
						
                               <td><a href="oficialfuncion/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop