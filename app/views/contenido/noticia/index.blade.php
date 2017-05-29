@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">
		<a href="noticias/new" class="btn btn-xs btn-success pull-right">Crear Noticia</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
				
					<th style="width:50px">Imágen</th>
					<th>Fecha</th>
					<th>Título</th>
					<th>Copete</th>
					<th>Pos.Web</th>
					<th>Estado</th>
					<th>Accion</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/noticias/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/noticias/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>
							<a href="noticias/edit/{{Crypt::encrypt($models->id)}}">{{$models->titulo}}</a>
						</td>
						<td>
							{{$models->copete}}
						</td>
						<td>
							@foreach($models->NoticiasPosicion as $pos)
									{{$pos->posicion_web}}
							@endforeach
						</td>
						<td>
							@if($models->estado == 1)

								<span class="label label-primary">Activo</span>

							@else

								<span class="label label-danger">Inactivo</span>

							@endif
			
						</td>


								<td><a href="noticias/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a></td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	{{$model->links()}}
	</div>

</div>


@endsection	

@stop