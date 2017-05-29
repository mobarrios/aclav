<section class="panel panel-info">
	<header class="panel-heading">Tabla</header>
	<div class="panel-body">
		<div class="table-responsive no-border">
			<table class="table table-bordered table-striped mg-t datatable">
				<thead>
					<tr>
						<th>Creado</th>
						<th>Formulario</th>
						<th class="col-sm-2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($modelo as $modelos)
						<tr>
							<td>{{ $modelos->created_at}} </td>
							<td>{{ $modelos->nombre}}</td>

							<td>
								<div class="btn-group pull-right">
								<a href="formulario/edit/{{ Crypt::encrypt($modelos->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="formulario/del/{{ Crypt::encrypt($modelos->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>