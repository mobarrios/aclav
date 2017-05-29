@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
	
			Arbitro
	</div>

	<div class="panel-body">


@foreach($torneos as $torneo)

{{$torneos->nombre_torneo}}
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
					@foreach ($models as $model)
						<tr>
							<td>{{ $model->numero_partido}}</td>
							<td>{{ $model->fecha_inicio}} / {{ $model->hora}}</td>
							<td>{{ $model->local_equipo_id->nombre}}</td>
							<td>{{ $model->visita_equipo_id->nombre}}</td>
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

							@if(Auth::user()->arbitro_id != "")

								@foreach($model->Designaciones  as $designa)

								@if( $designa->arbitro_1_id == Auth::user()->arbitro_id || $designa->arbitro_2_id == Auth::user()->arbitro_id)
									
									@if($designa->estado == "a Confirmar")
							
							
							<td>	
								<a href="perfil_arbitro/confirmar/{{$model->id}}" class="btn btn-xs btn-success confirmaArbitro">Confirmar</a>		
							</td>	
							<td>		
								<form id="frmRechaza{{$model->id}}" action="perfil_arbitro/rechazar" method="post">
								
									<input type="submit" class="btn btn-xs btn-danger rechazaArbitro" value="Rechazar">
									
									<input type="hidden" name="partido_id" value="{{$model->id}}">

									<input class="form-control" type="text" name="causa" placeholder="Motivo" id="causa" required>

								</form>
							</td>
							@endif
								@endif

								@endforeach

							@endif
							
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	@endforeach

	</div>

	     	
	</div>

</div>


@endsection	

@section('extraJs')
	
<script type="text/javascript">

	$('.confirmaArbitro').on('click',function()
	{
		 if (!confirm("Desea Confirmar Asistencia al Partido?"))
	        {
	         return false;
	        }
	});

	$('.rechazaArbitro').on('click',function(){
		 
		 //if($('#causa').val() == ""){

		 //	alert('completar Motivo');
	//		return false;		
		 //}else
		 

		 	 if (!confirm("Desea Rechazar Asistencia al Partido?")){
	      		return false;
	     		}
		 
		
	    

	});
</script>

@endsection
@stop

