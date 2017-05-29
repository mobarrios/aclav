@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="costo_item/new" class="btn btn-xs btn-success pull-right">Cargar Item</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th>Item</th>
					<th>$</th>
					<th>Accion</th>									
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							{{$models->detalle}}
						</td>
						<td>
							$ {{$models->importe}}
						</td>
				
						<td>
							<a href="costo_item/edit/{{Crypt::encrypt($models->id)}}" class='btn btn-sm btn-white'><i class="fa fa-pencil-square-o "></i></a>
							<a href="costo_item/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm btn-white " type="button"><i class="fa fa-times-circle "></i></a>	
						</td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop