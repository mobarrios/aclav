@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="banner/new" class="btn btn-xs btn-success">Crear Banners</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:50px"></th>
					<th></th>
					<th></th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/banner/{{$models->imagen}}" class="thumbnail">
									<img src="uploads/contenidos/banner/{{$models->imagen}}" width="50" height="50" >
								</a>
							</div>
						</td>
						<td>
							{{$models->created_at}}
						</td>
						<td>


							{{Str::limit($models->url,100,  '...')}}


						</td>
						<td>
							
							@if($models->posicion == 3)

								<span class="label label-primary">Superior Noticias</span>

							@elseif($models->posicion == 2)

								<span class="label label-primary">Inferior Noticias</span>

							@elseif($models->posicion == 1)
								
								<span class="label label-primary">Superior Lateral</span>
							@else
								
								<span class="label label-primary">Inferior Lateral</span>
							@endif
			
						

					<td>
								<div class="btn-group pull-right">
								<a href="banner/edit/{{ Crypt::encrypt($models->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="banner/delete/{{ Crypt::encrypt($models->id) }}" class="del btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop