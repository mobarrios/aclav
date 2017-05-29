@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<small>{{$modulo}} : </small><strong>{{$o2->Equipo->nombre}}</strong>


		<a href="#" class='print pull-right'><i class='fa fa-print'></i></a>
			
	</div>

	<div class="panel-body">



		
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
				<tr>
					<th colspan=4>Datos Jugador</th>
					<th colspan=6>Formularios de Habilitación</th>
					<th colspan=1></th>
				</tr>
				<tr>
					<th>Nro</th> 
					<th>Apellido Nombre</th> 
					<th>Fec. Nac.</th> 
					<th>DNI</th> 

					<th>DNI</th> 
					<th>M-4</th> 
					<th>M-8.</th> 
					<th>Feva af/res</th> 
					<th>Feva trf</th> 
					<th>LD</th> 

					<th>Condición</th> 
				</tr>
							
		</thead>
		<tbody>
			@foreach($buena_fe as $hab)

			@if(!$hab->borrado  && $hab->fecha_hasta == 'actual')
			<tr>

				
				<td>{{$hab->nro}}</td>
				<td>{{$hab->jugador->apellido}} {{$hab->jugador->nombre}}</td>
				<td>{{$hab->jugador->fecha_nacimiento}}</td>
				<td>{{$hab->jugador->dni}}</td>

				<td>
					@if($hab->habilitaciones->dni == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->dni == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->dni == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($hab->habilitaciones->m4 == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->m4 == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->m4 == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($hab->habilitaciones->m8 == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->m8 == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->m8 == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($hab->habilitaciones->feva_af == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->feva_af == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->feva_af == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
					
				</td>
				<td>
					@if($hab->habilitaciones->feva_tr == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->feva_tr == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->feva_tr == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($hab->habilitaciones->ld == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($hab->habilitaciones->ld == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($hab->habilitaciones->ld == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>

				<td>
						@if($hab->Habilitaciones->condicion == 'HABILITADO')
							<label class="label label-success">HABILITADO</label>
						@elseif($hab->Habilitaciones->condicion == 'NO HABILITADO')
							<label class="label label-danger">NO HABILITADO</label>
						@else
							<label class="label label-warning">PRECARIO</label>
						@endif
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>


<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
				<tr>
					<th colspan=4>Datos Oficales</th>
					<th colspan=6>Formularios de Habilitación</th>
					<th colspan=1></th>
				</tr>
				<tr>
					<th>Funcion</th> 
					<th>Apellido Nombre</th> 
					<th>Fec. Nac.</th> 
					<th>DNI</th> 

					<th>DNI</th> 
					<th>Tit.</th> 
					<th>M-8</th> 
					<th>Feva AF</th> 
					<th>Mat.</th> 
					<th>Des.</th>

					<th>Condición</th> 
				</tr>
							
		</thead>
		<tbody>
			@foreach($buena_fe_staff as $habStaff)

			@if(!$habStaff->borrado  && $habStaff->fecha_hasta == 'actual')
			<tr>
				<td>{{$habStaff->Funcion->funcion}}</td>
				<td>{{$habStaff->Oficial->full_name}}</td>
				<td>{{$habStaff->Oficial->fecha_nacimiento}}</td>
				<td>{{$habStaff->Oficial->dni}}</td>

				<td>
					@if($habStaff->habilitacionesStaff->dni == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->dni == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->dni == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($habStaff->habilitacionesStaff->tit == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->tit == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->tit == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($habStaff->habilitacionesStaff->m8 == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->m8 == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->m8 == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($habStaff->habilitacionesStaff->feva_af == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->feva_af == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->feva_af == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
					
				</td>
				<td>
					@if($habStaff->habilitacionesStaff->mat == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->mat == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->mat == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>
				<td>
					@if($habStaff->habilitacionesStaff->des == 'si')
						<label class="badge bg-success"> SI </label>
					@endif	
					@if($habStaff->habilitacionesStaff->des == 'no')
						<label class="badge bg-danger"> NO </label>
					@endif	
					@if($habStaff->habilitacionesStaff->des == 'pr')
						<label class="badge bg-warning"> PR </label>
					@endif	
				</td>

				<td>
				
				@if($habStaff->HabilitacionesStaff->condicion == 'HABILITADO')
					<label class="label label-success">HABILITADO</label>
				@elseif($habStaff->HabilitacionesStaff->condicion == 'NO HABILITADO')
					<label class="label label-danger">NO HABILITADO</label>
				@else
					<label class="label label-warning">PRECARIO</label>
				@endif
				
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
	

</div>
	


</div>


@endsection	

@section('extraJs')
	
	<script type="text/javascript">
		$('.print').on('click',function()
		{
			window.print();
   			return false;
		});
	</script>

@endsection

@stop