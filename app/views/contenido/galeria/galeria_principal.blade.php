@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="galeria/new" class="btn btn-xs btn-success">Cargar Galeria Principal</a>




		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px">Thumbnail</th>
					<th>Fecha</th>
					<th>Titulo</th>
					<th>Accion</th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/galeria/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/galeria/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="galeria/edit/{{Crypt::encrypt($models->id)}}">{{$models->titulo}}</a>
						</td>
						
                               <td><a href="galeria/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop