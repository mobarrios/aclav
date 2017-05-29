@extends('template-2/template')



@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>Tabla de Posiciones - {{$torneo->nombre_torneo}}  - {{$fase->nombre}}</b>

	</div>

	<div class="panel-body">

	<div class="col-xs-12">
	@if($fase->tabla_web == 1)
		<div class="btn btn-group">
			<a class="btn btn-success btn-xs">SI</a>
			<a href="torneos/tablaweb/{{$fase->id}}/0" class="btn btn-default btn-xs">NO</a>
		<div>
	@else
		<div class="btn btn-group">
			<a href="torneos/tablaweb/{{$fase->id}}/1" class="btn btn-default btn-xs" >SI</a>
			<a class="btn btn-danger btn-xs" >NO</a>
		<div>
	@endif
	</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Pos.</th>
						<th>Cod.</th>
						<th>Equipo</th>
						<th>Pts.</th>
						<th>P.G.</th>
						<th>P.P.</th>
						<th>P.Total</th>
						<th>Set.G.</th>
						<th>Set.P.</th>
						<th>Set.Coef.</th>
						<th>Tantos.G.</th>
						<th>Tantos.P.</th>
						<th>Tantos.Coef.</th>
						<th>Racha</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($tablas as $tabla)
					<tr>
						<td>{{$cont++}}</td>
						<td>{{$tabla->Equipo->sigla}}</td>
						<td>{{$tabla->Equipo->nombre}}</td>


						@if(Auth::user()->profiles_id == 29)

							<td><input size="5" type="text" value="{{$tabla->puntos}}" data="puntos" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->partido_ganado}}" data="partido_ganado" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->partido_perdido}}" data="partido_perdido" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->partido_ganado + $tabla->partido_perdido}}" data="partido_total" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->set_ganado}}" data="set_ganado" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->set_perdido}}" data="set_perdido" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td>
							@if($tabla->set_coeficiente == 1000)
								<input size="5" type="text" value="max." data="set_coeficiente" data-id="{{$tabla->id}}" class="tabla_data">
							@else
								<input size="5" type="text" value="{{$tabla->set_coeficiente}}" data="set_coeficiente" data-id="{{$tabla->id}}" class="tabla_data">
							@endif
							</td>
							<td><input size="5" type="text" value="{{$tabla->punto_ganado}}" data="punto_ganado" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td><input size="5" type="text" value="{{$tabla->punto_perdido}}" data="punto_perdido" data-id="{{$tabla->id}}" class="tabla_data"></td>
							<td>
							@if($tabla->punto_coeficiente == 1000)
								<input size="5" type="text" value="max." data="punto_coeficiente" data-id="{{$tabla->id}}" class="tabla_data">
							@else
								<input size="5" type="text" value="{{$tabla->punto_coeficiente}}" data="punto_coeficiente" data-id="{{$tabla->id}}" class="tabla_data">
							@endif
							</td>
							<td><input size="5" type="text" value="{{$tabla->racha}}" data="racha" data-id="{{$tabla->id}}" class="
							tabla_data"></td>

						@else
							<td>{{$tabla->puntos}}</td>	
							<td>{{$tabla->partido_ganado}}</td>	
							<td>{{$tabla->partido_perdido}}</td>	
							<td>{{$tabla->partido_ganado + $tabla->partido_perdido}}</td>
							<td>{{$tabla->set_ganado}}</td>	
							<td>{{$tabla->set_perdido}}</td>	
							<td>
							@if($tabla->set_coeficiente == 1000)
								max
							@else
								{{$tabla->set_coeficiente}}
							@endif
							</td>
							<td>{{$tabla->punto_ganado}}</td>	
							<td>{{$tabla->punto_perdido}}</td>
							<td>		
							@if($tabla->punto_coeficiente == 1000)
								max.
							@else
								{{$tabla->punto_coeficiente}}
							@endif			
							</td>
							<td>{{$tabla->racha}}</td>


						@endif


					</tr>
					
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


	</div>




@endsection

@section('extraJs')

	<script type="text/javascript">


		$('.tabla_data').on('keyup', function(e) {
			if (e.which == 13) 
			{
				if(confirm('desea modificar este dato?'))
				{
					var data 	= $(this).attr('data');
					var id 		= $(this).attr('data-id');
					var value 	= $(this).val();	
					
					//route torneo controller get tabla edit
					$.get('tabla/'+id+'/'+data+'/'+value ,function(data){
						console.log(data);
					});
				
				}
				else
				{
					return false ;
				}

			}
		});

	</script>

@endsection
@stop