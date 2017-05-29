@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">
	<table class="table table-hover datatable">
		<thead>
				<tr>
		<th><p>Pendientes</p><label class="badge label-primary">{{Ticket::where('estado','=',1)->count()}}</label></th>
		<th><p>Stand By</p><label class="badge label-warning">{{Ticket::where('estado','=',2)->count()}}</label></th>
		<th><p>Finalizados</p><label class="badge label-danger">{{Ticket::where('estado','=',0)->count()}}</label></th>
		</tr>
			</thead>
		</table>
	
		<!-- <a href="ticket/new" class="btn btn-xs btn-success pull-right">Cargar Ticket</a> -->

		<table class="table table-hover datatable">
			<thead>
				<tr>
				    <th>N° de Ticket</th>
					<th>Url/Modulo</th>
					<th>Creado</th>
					<th>Actualizado</th>
					<th>Error</th>
					<th>Estado</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							{{$models->id}}
						</td>
						<td>
							<a href="ticket/edit/{{Crypt::encrypt($models->id)}}">{{$models->titulo}}</a>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							{{$models->updated_at}}
						</td>
						<td>
							{{$models->cuerpo}}
						</td>
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Pendiente</span>

							@elseif($models->estado == 2)

							<span class="label label-warning">Stand By</span>

							@else

								<span class="label label-danger">Finalizado</span>

							@endif
			
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