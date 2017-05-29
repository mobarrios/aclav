<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th>Menu : {{$menu->nombre}}</th>
						<th class="no-sort" width="8%"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($modelos as $modelo)
						<tr>
						<td>{{ $modelo->nombre}} </td>
						
							<td>
								
								<div class="btn-group pull-right">
									<a type="button" data-toggle="modal" href="submenu/edit/{{ Crypt::encrypt($modelo->id)}}" data-target="#modal" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>
									<a href="submenu/del/{{ Crypt::encrypt($modelo->id) }}" class="btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>