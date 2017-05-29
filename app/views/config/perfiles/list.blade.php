<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive no-border">
			<table id="datatable" class="table table-bordered table-striped mg-t ">
				<thead>
					<tr>
						<th>Grupo </th>
							<th class="no-sort" width="10%"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($perfiles as $perfil)
						<tr>
							<td>{{ $perfil->grupo}} </td>
							<td>
								<div class="btn-group pull-right">
								<a href="modulos/edit/{{ Crypt::encrypt($perfil->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-lock"></i></a>
								<a href="perfiles/edit/{{ Crypt::encrypt($perfil->id) }}" class="btn btn-sm  btn-success" type="button"><i class="fa fa-edit"></i></a>
								<a href="perfiles/del/{{ Crypt::encrypt($perfil->id) }}" class="btn btn-sm  btn-danger" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>