<section class="panel panel-info">
	<header class="panel-heading">Tabla</header>
	<div class="panel-body">
		<div class="table-responsive no-border">
		<?php 
			$bc = new BaseController();
			$per = $bc->validarPermisos(97, 'editar');
		?>
			@if($per)
				<a href="xls" class="label label-success">Excel</a>
				<a href="pdf" class="label label-danger">PDF</a>
			@endif
			<div class="col-lg-6">
			<form action="jugador/buscar" method="get">
				<input type="text" placeholder="Buscar" class="form-control" name="buscar" >
			</form>
			</div>
						</br>

			<table class="table table-bordered table-striped mg-t datatable">
				<thead>
					<tr>
						<th class="col-sm-1">DNI/Pasaporte</th>
						<th>Apellido </th>
						<th>Nombre </th>
						<th class="col-sm-2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($jugador as $jugadores)
						<tr>
							<td>{{ $jugadores->dni}} </td>
							<td>{{ $jugadores->apellido}} </td>
							<td>{{$jugadores->nombre}}</td>

							<td>
								<div class="btn-group pull-right">
								<a href="jugador/detalle/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm btn-white" type="button"><i class="fa fa-search"></i></a>
								<a href="jugador/edit/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="jugador/del/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
				
			</table>
			<div class="col-xs-6 mg-t-lg">

	

				
			</div>
		</div>
	</div>
</section>