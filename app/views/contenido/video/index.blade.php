@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="video/new" class="btn btn-xs btn-success">Subir Video</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Id</th>
					<th>Video</th>
					<th>Titulo</th>
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
							{{$models->object}}
						</td>
						<td>
							<a href="video/edit/{{Crypt::encrypt($models->id)}}">{{$models->titulo}}</a>
						</td>
						
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>
                               <td><a href="video/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop