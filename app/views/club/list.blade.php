<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive">

			{{Form::open(array('url'=>'club/search'))}}
			<div class="input-group">
			<input name="search" type="text" class="form-control" placeholder="Buscar...">
			<span class="input-group-btn">
			<a class="btn btn-default" type="submit"><span class='fa fa-search'></span></a>
			</span>
			</div><!-- /input-group -->
			{{Form::close()}}

			<table class="table  table-striped mg-t datatable ">
				<thead>
					<tr>

						<th style="width:70px"></th>
						<th>Nombre</th>
						<th>Federación</th>
						<th class="no-sort" width="8%"></th>
					</tr>

				</thead>
				<tbody>
					@foreach ($modelo as $modelos)
						<tr>
							<td>
								<div class="col-xs-4"style="width:70px" >
									<a href="club/detalle/{{Crypt::encrypt($modelos->id)}}" class="thumbnail">
										<img src="uploads/escudos/{{$modelos->escudo}}" >
									</a>
								</div>
						
							</td>
							<td>
								{{$modelos->nombre}}<br>
								
							</td>
							<td>
								{{$modelos->federacion}}
							</td>
							<td>
			<div class="btn-group pull-right">
				<a type="button"  href="{{$modulo}}/edit/{{ Crypt::encrypt($modelos->id)}}" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>
				
			</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
			
		</div>
	</div>
</section>