@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

		<a href="galeria/new" class="btn btn-xs btn-success">Cargar Galeria</a>

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th style="width:150px">Galería</th>
					<th>SubGalería</th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
				@foreach($model as $models)

					<tr>
						<td>
							<div>
								<a href="uploads/contenidos/galeria/{{$models->imagen}}" class="thumbnail" >
									<img src="uploads/contenidos/galeria/{{$models->imagen}}" width="150" >
								</a>
								<a href="galeria/edit/{{Crypt::encrypt($models->id)}}">{{$models->titulo}}</a>
							</div>
						</td>
						<td>
							<table>
								<th style="width:50px"></th>

								@foreach($models->GaleriaSub as $sub)
									<td>
										<a href="uploads/contenidos/galeria/{{$models->id}}/{{$sub->imagen}}" class="thumbnail" >
											<img src="uploads/contenidos/galeria/{{$models->id}}/{{$sub->imagen}}" width="50" >
										</a>	
										<a href="galeria/subdetalle/{{Crypt::encrypt($models->id)}}/{{Crypt::encrypt($sub->id)}}" class="btn-link" >{{$sub->titulo}}</a>
									</td>
								@endforeach

							</table>
							<div>
								<a href="galeria/addsubgaleria/{{Crypt::encrypt($models->id)}}" class="btn btn-xs btn-success pull-right" type="button">+ Sub Galeria</a>
							</div>
                   			 
						</td>
						
                       <td>                       
                       <a href="galeria/delete/{{Crypt::encrypt($models->id)}}" class="del btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
                       </td>
						
					</tr>

				@endforeach
				
			</tbody>
		</table>

	</div>

</div>


@endsection	

@stop