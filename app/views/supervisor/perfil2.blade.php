@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		 Supervisor
	</div>

	<div class="panel-body">

@foreach($torneos as $torneo)
	

	@foreach($torneo->torneofase as $fase)
		
		@foreach($fase->leg as $leg)

				
			@foreach($leg->PartidoDesignaciones as $model)

				@if($model->supervisor_1_id == Auth::user()->supervisor_id || $model->supervisor_2_id == Auth::user()->supervisor_id  )
						
						<h4><strong>{{$torneo->nombre_torneo}} </strong></h4>

						{{$leg->nombre}}	


			<div class="table-responsive no-border">
			<table class="table  table-striped ">
				<thead>
					<tr>
						<th>Nro.</th>
						<th>Fecha</th>
						<th>Local</th>
						<th>Visita</th>
						<th>Estadio</th>
						<th>Arbitro 1</th>							
						<th>Arbitro 2</th>
						<th>Sup. 1</th>
						<th>Sup. 2</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $model->numero_partido}}</td>
							<td>{{ $model->fecha_inicio}} / {{ $model->hora}}</td>
							<td>
								@if($model->local_text == '')
									{{ $model->local_equipo_id->sigla}}
								@else
									{{$model->local_text}}
								@endif
							</td>
							<td>
								@if($model->visita_text == '')
									{{ $model->visita_equipo_id->sigla}}
								@else
									{{$model->visita_text}}
								@endif
							</td>
							<td>{{ isset($model->Estadio->nombre) ? $model->Estadio->nombre  : '' }}</td>
							<td>
								@if($model->Arbitro1)
									{{$model->Arbitro1->full_name}}
									<br>
									<span class="label label-primary">{{ isset($model->Arbitro1->arbitro1designacion($model->id)->estado) ? $model->Arbitro1->arbitro1designacion($model->id)->estado  : '' }}</span>					 				
					 			@endif	
							</td>
							<td>
								@if($model->Arbitro2)
									{{$model->Arbitro2->full_name }} 
									<br>
										<span class="label label-primary">{{ isset($model->Arbitro2->arbitro2designacion($model->id)->estado) ? $model->Arbitro2->arbitro2designacion($model->id)->estado  : '' }}</span>					 		
								@endif
							</td>

							<td>
								@if($model->Supervisor1)
									{{$model->Supervisor1->full_name }} 
									<br>
										<span class="label label-primary">{{ isset($model->Supervisor1->supervisor1designacion($model->id)->estado) ? $model->Supervisor1->supervisor1designacion($model->id)->estado  : '' }}</span>
								@endif
							</td>

							<td>
								@if($model->Supervisor2)
									{{$model->Supervisor2->full_name }} 
									<br>
										<span class="label label-primary">{{ isset($model->Supervisor2->supervisor2designacion($model->id)->estado) ? $model->Supervisor2->supervisor2designacion($model->id)->estado  : '' }}</span>				 		
								@endif	
							</td>

							<td>
							<a href="perfil_supervisor/costos/{{$model->id}}" class='btn btn-default btn-xs'  >Costos</a>
							</td>
							
							@if(Auth::user()->supervisor_id != "")

								@foreach($model->Designaciones  as $designa)

									@if( $designa->supervisor_1_id == Auth::user()->supervisor_id || $designa->supervisor_2_id == Auth::user()->supervisor_id)
										
										@if($designa->estado == "a Confirmar")
											
											<td>
												
												<button class='btn-modal btn btn-default btn-xs' data-id='{{$model->id}}'>Designa.</button>						
											</td>

										@endif
									@endif

								@endforeach

							@endif
							</tr>
					
					</tbody>   
				</table>
				@endif
			@endforeach
			@endforeach
			@endforeach
			@endforeach
		</div>

	</div>

	     	
	</div>

</div>


<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Designaciones</h4>
			</div>
			<div class="modal-body">

			<table class="table">
					<tbody>
						<tr>
							<td><a href="#" class="btn  btn-success confirmaArbitro">Confirmar</a>
							</td>
							<td>	
							</td>
						</tr>
						<tr>
							<td>
							<a href="#" class="btn btn-danger rechazaArbitro">Rechazar</a></td>

									<td><input class="form-control" type="text" name="causa" placeholder="Motivo" id="causa" required>
							</td>
						</tr>
					</tbody>
				</table>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection	

@section('extraJs')
	
<script type="text/javascript">

	$('.btn-modal').on('click',function(){
		$('#modal-id').modal('show');
	});
	

	$('.confirmaArbitro').on('click',function()
	{
		if (!confirm("Desea Confirmar Asistencia al Partido?"))
		{
		return false;
		}

		$(this).attr('href', 'perfil_supervisor/confirmar/'+ $('.btn-modal').attr('data-id'));
	});

	$('.rechazaArbitro').on('click',function(){
		 
		 
		if(!confirm("Desea Rechazar Asistencia al Partido?")){
		return false;
		}

		if($('#causa').val() == ""){
			alert('debe completa el motivo');
			return false;
		} 	
	    
		$(this).attr('href', 'perfil_supervisor/rechazar/'+ $('.btn-modal').attr('data-id') +'/'+$('#causa').val());

	});
</script>

@endsection

@stop