<section class="panel panel-info">
	<header class="panel-heading"></header>
	<div class="panel-body">
		<div class="table-responsive ">
			<table class="table table-striped mg-t datatable">
				<thead>
					<tr>
						<th>Formulario</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($modelo as $modelos)
						<tr>
							<td>{{ $modelos->nombre}}</td>
							<td>
								<a href="formularios/download/{{Crypt::encrypt($modelos->id)}}" class="btn btn-sm btn-white " type="button"><i class="fa fa-download "></i></a>	
								<a href="formularios/del/{{Crypt::encrypt($modelos->id)}}" class="del btn btn-sm btn-white " type="button"><i class="fa fa-times-circle "></i></a>	
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>