@extends('template-2/template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		<b>Partido Nro : {{$partido->numero_partido}}</b>
	</div>

	<div class="panel-body">
	
		<div class="col-lg-12">
			
			<div class="col-lg-4">
				<h1>Local</h1>
				@if($partido->local_text == "")
					<div style="width:150px" >
						<i class="thumbnail">
							<img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" >
						</i>
					</div>
					<h4>{{$partido->local_equipo_id->nombre}}</h4>
				@else
					<h4>{{$partido->local_text}}</h4>
				@endif
			</div>



			<div class="col-md-4 pull-right">
				<h1>Visitante</h1>
				@if($partido->visita_text == "")
					<div style="width:150px" >
						<i class="thumbnail">
							<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" >
						</i>
					</div>
					<h4>{{$partido->visita_equipo_id->nombre}}</h4>
				@else
					<h4>{{$partido->visita_text}}</h4>
				@endif
				
			</div>
		</div>


		<div class="col-lg-12">

			<section>
				<ul id="myTab2" class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Datos</a></li>
					<li ><a data-toggle="tab" href="#pxp">Punto a Punto</a></li>
					<li ><a data-toggle="tab" href="#reportes">Informes</a></li>
				</ul>
				<section class="panel">
					<div class="panel-body">
						<div id="myTabContent2" class="tab-content">	
							<div id="home" class="tab-pane active">							
								<div class="col-xs-8">
									{{Form::model($partido , array('role'=>'form','enctype' => 'multipart/form-data'))}}
									

									{{ Form::label('label', 'Nro.Partido', array('class' => ' control-label')) }}
				                    {{ Form::text('numero_partido',Input::old('numero_partido'), array('class'=>'form-control'))}}
				                   

									{{ Form::label('label', 'Local', array('class' => ' control-label')) }}

									<div class="row">
										<div class="col-xs-6">
					                    	{{ Form::select('local_equipo_id', array('0'=>'Cambiar') + $equipo , Input::old('local_equipo_id') , array('class'=>'form-control'))}}
					                    </div>
					                    <div class="col-xs-6">
					                    	{{Form::text('local_text',null, array('class'=>'form-control'))}}
					                    </div>
				                    </div>
				                   					             
				                    		{{ Form::label('label', 'Visitante', array('class' => ' control-label')) }}
				                    <div class="row">
										<div class="col-xs-6">
				                    		{{ Form::select('visita_equipo_id', array('0'=>'Cambiar') + $equipo , Input::old('visita_equipo_id') , array('class'=>'form-control'))}}
				                     	</div>
					                    <div class="col-xs-6">
					                   
				                    		{{Form::text('visita_text',null, array('class'=>'form-control'))}}
				                    	</div>
				                    </div>
				                   
									
									{{ Form::label('Fecha', 'Fecha', array('class' => ' control-label')) }}
									
									<div class="input-group mg-b-md input-append date datepicker" data-date="{{date('d-m-Y')}}" data-date-format="dd-mm-yyyy">
										{{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
										<span class="input-group-btn">
											<button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
							

				                    {{ Form::label('hora', 'Hora', array('class' => ' control-label')) }}
				                    {{ Form::text('hora', Input::old('hora'), array('class'=>'form-control' )) }}
				                    <!--
				                    {{ Form::label('label', ' Arbitro 1', array('class' => ' control-label')) }}
				                    {{ Form::select('arbitro_1_id', array('0'=>'Seleccionar') + $arbitro , Input::old('arbitro_1_id') , array('class'=>'form-control'))}}
				                    {{ Form::label('label', ' Arbitro 2', array('class' => ' control-label')) }}
				                    {{ Form::select('arbitro_2_id', array('0'=>'Seleccionar') + $arbitro , Input::old('arbitro_2_id') , array('class'=>'form-control'))}}
				                    {{ Form::label('label', 'Supervisor', array('class' => ' control-label')) }}
				                    {{ Form::select('supervisor_id', array('0'=>'Seleccionar') + $supervisor , Input::old('supervisor_id') , array('class'=>'form-control'))}}
				                	-->
				                    {{ Form::label('label', 'Estadio', array('class' => ' control-label')) }}
				                    {{ Form::select('estadio_id', array('0'=>'Seleccionar') + $estadio , Input::old('estadio_id') , array('class'=>'form-control'))}}
				                    {{ Form::label('label', 'Riesgo Partido', array('class' => ' control-label')) }}
				                    {{ Form::select('riesgo', array('Bajo'=>'Bajo','Medio'=>'Medio','Alto'=>'Alto') , Input::old('riesgo') , array('class'=>'form-control'))}}
								
									{{ Form::label('label', 'Televisado', array('class' => ' control-label')) }}
				                    {{ Form::select('televisado', array('0'=>'No','1'=>'Web','2'=>'TV') , Input::old('televisado') , array('class'=>'form-control'))}}
								
									{{ Form::label('label', 'Condicional', array('class' => ' control-label')) }}
				                    {{ Form::checkbox('condicional') }}
									<br>

									{{ Form::label('label', 'Reporte Partido', array('class' => ' control-label')) }}
									
									@if($partido->reporte != '')
										<span class="label label-warning">{{$partido->reporte}}</span>
										<a href="partido/repodel/{{$partido->id}}" class="del btn btn-xs btn-danger"> <b>x</b></a>
										<br>
										
										
										<input type="hidden" name="repo_old" value="{{$partido->reporte}}">
									@else
										<span class="label label-danger">No</span>
									@endif		
									

				                    {{ Form::file('reporte', Input::old('reporte'), array('class'=>'form-control'))}}
				                   
								
									<br>
									{{Form::submit('Guardar',array('class'=>'form-control btn-success'))}}
									{{Form::close()}}
								</div>
							</div>

							<div id="pxp" class="tab-pane">
								
								@if($partido->estado == 0)
									<a href="puntoxpunto/empezarpartido" class="btn btn-xs btn-success ">Iniciar Partido</a>			
								@elseif($partido->estado == 2)
									<a href="puntoxpunto/recalculartabla" class="btn btn-xs btn-success ">Recalcular Tabla</a>
								@else
									<a href="puntoxpunto/terminarpartido" class="btn btn-xs btn-success ">Cargar Tabla</a>
								@endif
								<hr>

								<form action='puntoxpunto/edit' method='POST' > 
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												
												<th>Set</th>
												<th>Local</th>
												<th>Visitante</th>
											</tr>
										</thead>
										<tbody>

											@foreach($partido->puntoPartido as $punto)
											<tr>
												<td><strong>{{$punto->set_numero}}</strong></td>
												<td><input type='text' name='local_{{$punto->id}}' value='{{$punto->puntos_local}}'></td>	
												<td><input type='text' name='visita_{{$punto->id}}' value='{{$punto->puntos_visita}}'></td>
											</tr>									
											@endforeach
						
												<td>Resultado Partido</td>
												<td><input type='text' name='set_local' value='{{$partido->local_set}}'></td>
												<td><input type='text' name='set_visita' value='{{$partido->visita_set}}'></td>
											</tr>
										</tbody>
									</table>
								<button class="btn btn-success form-control">Actualizar</button>

								
								</form>

							</div>

							<div id="reportes" class="tab-pane">
							
								<table class="table">
									<thead>
										<tr>
											<th>Reporte</th>
											<th>subir</th>
											<th>bajar</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Sup-01</td>

											@if($partido->informe_sup_01 == '')
												<td>
													<a class="upload btn btn-white" data-partido="informe_sup_01"><i class="fa fa-upload"></i></a>
												</td>
												<td></td>
												<td></td>

											@else
												<td></td>
												<td>
													<a class="btn btn-white" href="partido/download/informe_sup_01"><i class="fa fa-download"></i></a>
												</td>
												<td>
													<a  class="btn btn-white del" href="partido/informedelete/informe_sup_01/{{$partido->id}}" ><i class="fa fa-times-circle-o"></i></a>
												</td>
											@endif
											
										</tr>
										<tr>
											<td>O-4</td>
											@if($partido->informe_o4 == '')
												<td>
													<a class="upload btn btn-white" data-partido="informe_o4" ><i class="fa fa-upload"></i></a>
												</td>
												<td></td>
												<td></td>
											@else
												<td></td>
												<td><a href="partido/download/informe_o4"><i class="fa fa-download"></i></a></td>
												<td><a href="partido/informedelete/informe_o4/{{$partido->id}}" class="del"><i class="fa fa-times-circle-o"></i></a></td>
											@endif
										</tr>
										<tr>
											<td>Informe Supervisor</td>
											@if($partido->informe_sup == '')
												<td><a class="upload btn btn-white" data-partido="informe_sup" ><i class="fa fa-upload"></i></a></td>
												<td></td>
												<td></td>
											@else
												<td></td>
												<td><a href="partido/download/informe_sup"><i class="fa fa-download"></i></a></td>
												<td><a href="partido/informedelete/informe_sup/{{$partido->id}}" class="del"><i class="fa fa-times-circle-o"></i></a></td>
											@endif
										</tr>
										<tr>
											<td>Recomendaciones</td>
											@if($partido->informe_recomendaciones == '')
												<td><a class="upload btn btn-white" data-partido="informe_recomendaciones"><i class="fa fa-upload"></i></a></td>
												<td></td>
												<td></td>
											@else
												<td></td>
												<td><a href="partido/download/informe_recomendaciones"><i class="fa fa-download"></i></a></td>
												<td><a href="partido/informedelete/informe_recomendaciones/{{$partido->id}}" class="del"><i class="fa fa-times-circle-o"></i></a></td>
											@endif
										</tr>
									</tbody>
								</table>

							</div>

						</div>
					</div>
				</section>
			
			</section>
		</div>

	</div>

	</div>


	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Informe</h4>
				</div>
				<div class="modal-body">
					<form action="partido/informe" method="POST" enctype="multipart/form-data">
						<label class="nombre_informe"></label>
						<input type="hidden" name="nombre_archivo" class="input_nombre" >
						<input type="file" name="file" class="form-control">
						<br>
						<input class="form-control btn btn-success" type="submit" value="subir">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

@endsection
@section('extraJs')
	
<script type="text/javascript">

	$('.upload').on('click',function(){
		$('#modal-id').modal('show');
		$('.nombre_informe').html($(this).attr('data-partido'));
		$('.input_nombre').val($(this).attr('data-partido'));
		
	});

</script>

@endsection

@stop