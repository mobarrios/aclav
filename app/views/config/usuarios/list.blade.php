<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive no-border">

			<table class="table table-bordered table-striped mg-t datatable ">
				

				<tbody>
				
					@foreach ($grupos as $grupo )
						<tr>
							<td colspan="2" align="center"><strong>{{ $grupo->grupo}} </strong></td>
							
							@foreach($grupo->User as $user)
							<tr>
										<td>{{$user->usuario}}</td>
										<td class="col-xs-1" >
											<div class="btn-group pull-right">
											<a href="usuarios/edit/{{ Crypt::encrypt($user->id) }}" class="btn btn-xs  btn-success " type="button"><i class="fa fa-edit"></i></a>
											<a href="usuarios/del/{{ Crypt::encrypt($user->id) }}" class="btn btn-xs  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
											</div>
										</td >
							</tr>
							@endforeach		
						</tr>
					@endforeach
					
				</tbody>   


				
			</table>
		</div>
	</div>
</section>