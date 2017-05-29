<section class="panel panel-info">
	<header class="panel-heading">Tabla</header>
	<div class="panel-body">
		<div class="table-responsive no-border">
			<table class="table table-bordered table-striped mg-t datatable">
				<thead>
					<tr>
						<th>Cod.</th>
						<th>Modulo </th>
						<th class="col-sm-2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($modulos as $modulo)
						<tr>
							<td>{{ $modulo->id}} </td>
							<td>{{ $modulo->modulo}} </td>
							<td>
								<div class="btn-group pull-right">
								<a href="modulos/editar/{{ Crypt::encrypt($modulo->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="modulos/del/{{ Crypt::encrypt($modulo->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>