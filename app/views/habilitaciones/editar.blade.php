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
					<th colspan=4 style="text-align:center" >Datos Jugador</th>
					<th colspan=7 style="text-align:center" >Formularios de Habilitación</th>
					<th colspan=1></th>
				</tr>
				<tr>
					<th>Nro</th> 
					<th>Apellido Nombre</th> 
					<th>Fec. Nac.</th> 
					<th>DNI</th> 

					<th>DNI</th> 
					<th>M-4</th> 
					<th>M-8</th> 
					<th>FEVA AF/RES</th> 
					<th>FEVA TRF</th> 
					<th>FEVA TRF Tipo</th>
					<th>LD</th> 

					<th>Condición</th> 
					<th>Carnet</th> 
				</tr>
							
		</thead>
		<tbody>

			@foreach($buena_fe as $hab)

			@if(!$hab->borrado && $hab->fecha_hasta == 'actual')
			 

			<tr>
				<td>{{$hab->nro}}</td>
				<td>{{$hab->jugador->full_name}}</td>
				<td>{{$hab->jugador->fecha_nacimiento}}</td>
				<td>{{$hab->jugador->dni}}</td>

				<td>		
							@if($hab->Habilitaciones->dni == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->dni == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/dni/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
						@if($hab->Habilitaciones->m4 == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->m4 == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/m4/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($hab->Habilitaciones->m8 == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->m8 == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/m8/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($hab->Habilitaciones->feva_af == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->feva_af == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/feva_af/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>	
							@if($hab->Habilitaciones->feva_tr == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->feva_tr == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/feva_tr/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($hab->Habilitaciones->feva_tr_tipo == 1)
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-success">S/P</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/2' class="btn btn-xs btn-default">Intra</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/3' class="btn btn-xs btn-default">Inter</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/4' class="btn btn-xs btn-default">FIVB</a>
								</div>

							@elseif($hab->Habilitaciones->feva_tr_tipo == 2 )
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-default">S/P</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/2' class="btn btn-xs btn-warning">Intra</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/3' class="btn btn-xs btn-default">Inter</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/4' class="btn btn-xs btn-default">FIVB</a>
								</div>
							@elseif($hab->Habilitaciones->feva_tr_tipo == 3)
								<div class="btn-group">
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-default">S/P</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/2' class="btn btn-xs btn-default">Intra</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/3' class="btn btn-xs btn-warning">Inter</a>
									<a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/4' class="btn btn-xs btn-default">FIVB</a>
								</div>
							@elseif($hab->Habilitaciones->feva_tr_tipo == 4)
								<div class="btn-group">
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-default">S/P</a>
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/2' class="btn btn-xs btn-default">Intra</a> 
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/3' class="btn btn-xs btn-default">Inter</a>
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/4' class="btn btn-xs btn-warning">FIVB</a>
								 </div>
							@else
								<div class="btn-group">
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-default">S/P</a>
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/2' class="btn btn-xs btn-default">Intra</a> 
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/3' class="btn btn-xs btn-default">Inter</a>
								   <a href='habilitaciones/cambiar/feva_tr_tipo/{{Crypt::encrypt($hab->habilitaciones->id)}}/4' class="btn btn-xs btn-default">FIVB</a>
								 </div>

							@endif

				</td>
				<td>
							@if($hab->Habilitaciones->ld == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($hab->Habilitaciones->ld == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiar/ld/{{Crypt::encrypt($hab->habilitaciones->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
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
				<td>
					@if($hab->Habilitaciones->carnet == 1)
					<div class="btn-group">
						<a href='habilitaciones/cambiar/carnet/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-success">Si</a>
						<a href='habilitaciones/cambiar/carnet/{{Crypt::encrypt($hab->habilitaciones->id)}}/0' class="btn btn-xs btn-default">No</a> 
					</div>
					@else
					<div class="btn-group">
						<a href='habilitaciones/cambiar/carnet/{{Crypt::encrypt($hab->habilitaciones->id)}}/1' class="btn btn-xs btn-default">Si</a>
						<a href='habilitaciones/cambiar/carnet/{{Crypt::encrypt($hab->habilitaciones->id)}}/0' class="btn btn-xs btn-danger">No</a> 
					</div>
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
					<th colspan=4 style="text-align:center" >Datos Oficales</th>
					<th colspan=6 style="text-align:center" >Formularios de Habilitación</th>
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
					<th>Carnet</th> 
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
							@if($habStaff->HabilitacionesStaff->dni =='si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->dni == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/dni/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
						@if($habStaff->HabilitacionesStaff->tit == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->tit == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/tit/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($habStaff->HabilitacionesStaff->m8 == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->m8 == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/m8/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($habStaff->HabilitacionesStaff->feva_af == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->feva_af == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>
							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/feva_af/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				
				<td>
							@if($habStaff->HabilitacionesStaff->mat == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->mat == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/mat/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
							@endif
				</td>
				<td>
							@if($habStaff->HabilitacionesStaff->des == 'si')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-success">Si</a>
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a>
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@elseif($habStaff->HabilitacionesStaff->des == 'no')
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-danger">No</a>
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-default">Pr</a>
								</div>

							@else
								<div class="btn-group">
									<a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/si' class="btn btn-xs btn-default">Si</a>
								   <a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/no' class="btn btn-xs btn-default">No</a> 
								   <a href='habilitaciones/cambiarstaff/des/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/pr' class="btn btn-xs btn-warning">Pr</a>
								 </div>
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
				<td>
					@if($habStaff->HabilitacionesStaff->carnet == 1)
					<div class="btn-group">
						<a href='habilitaciones/cambiarstaff/carnet/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/1' class="btn btn-xs btn-success">Si</a>
						<a href='habilitaciones/cambiarstaff/carnet/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/0' class="btn btn-xs btn-default">No</a> 
					</div>
					@else
					<div class="btn-group">
						<a href='habilitaciones/cambiarstaff/carnet/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/1' class="btn btn-xs btn-default">Si</a>
						<a href='habilitaciones/cambiarstaff/carnet/{{Crypt::encrypt($habStaff->habilitacionesStaff->id)}}/0' class="btn btn-xs btn-danger">No</a> 
					</div>
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