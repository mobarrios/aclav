<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive">
		


			<table class="table  table-striped mg-t datatable ">
				<thead>
					<tr>
						<th>Equipo</th>
						<th>Genero</th>
						<th class="no-sort" width="15%"></th>
					</tr>

				</thead>
				<tbody>
					@foreach($model->equipo as $mod)
						<tr>
							<td>
								<a href="equipo/detalle/{{Crypt::encrypt($mod->id)}}"  class="btn btn-xs btn-default">{{$mod->nombre}}</a>
							</td>
							<td>
								{{$mod->sexo}}
							</td>
							<td>
									<div class="btn-group pull-right">
									<a href="equipo/edit/{{Crypt::encrypt($mod->id)}}/{{Crypt::encrypt($club_id)}}" type="button"  class="btn btn-xs  btn-success"><i class="fa fa-edit"></i></a>
									<a href="equipo/del/{{Crypt::encrypt($mod->id)}}/{{Crypt::encrypt($club_id)}}" class="btn btn-xs  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
									</div>
							</td>
						</tr>
					@endforeach

				</tbody>   
			</table>

				<a href="equipo/new/{{Crypt::encrypt($club_id)}}" class="btn btn-xs btn-info">Crear Equipo</a>
		</div>
	</div>
</section>