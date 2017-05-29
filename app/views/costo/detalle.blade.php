@extends('template-2/template')

@section('content')
	

<div class="panel panel-default">
	<div class="panel-heading">	
		<b>Costos de Oficiales</b>
		<p class="pull-right">
		Nro. {{$partido->numero_partido}} 
		(
		@if($partido->local_text == "")
				{{$partido->local_equipo_id->sigla}}
		@else
				{{$partido->local_text}}
		@endif
		)-(
		@if($partido->visita_text == "")
				{{$partido->visita_equipo_id->sigla}}
		@else
				{{$partido->visita_text}}
		@endif

		)
		


		</p>
	</div>

	<div class="panel-body">	

		@if($partido_costo->count() != 0)
			{{Form::model($partido_costo->first(),array('url' => 'costo/additem') )}}
		@else
			{{ Form::open(array('url' => 'costo/additem')) }}
		@endif
			
	
		{{Form::label('Equipo','Equipo')}}
		{{Form::select('equipo_id',array('-1'=>'Seleccionar', '0'=>'Aclav') + $torneo_equipos, -1 , array('class'=>'form-control'))}}
		

		{{Form::label('Item')}}
		{{Form::select('costo_item_id',$costo_item, null, array('class'=>'form-control'))}}
		{{Form::label('Oficial')}}
		{{Form::select('oficial', array('0'=>'Seleccionar') + $oficiales , null , array('class'=>'form-control'))}}
		<br>
		{{Form::submit('Agregar',array('class'=>'btn btn-success'))}}
		{{Form::close()}}

		<br>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Pago</th>
					<th>Detalle</th>
					<th>Asignado</th>
					<th>$</th>
					<th></th>					
				</tr>
			</thead>
			<tbody>


				@foreach(PartidoCostoItem::where('partido_costo_id','=',Session::get('partido_costo_id'))->get() as $costo)
				<tr>
					<td>
					@if($costo->equipo_id != 0)
						{{$costo->Equipo->nombre}}
					@else
						Aclav
					@endif
					</td>
					<td>
						{{$costo->CostoItem->detalle}}

                        @if($costo->CostoItem->detalle == 'Gastos por Traslado')
                             ( {{$costo->traslado_detalle}} ) 
                        @endif


					</td>
					<td>
						<?php 
						if($costo->CostoItem->detalle == 'Gastos por Traslado')
						{
						$total = $total + $costo->traslado_importe;
						}

						//$total = $total + ($costo->cantidad * $costo->CostoItem->importe)

						?>   

						@if($costo->arbitro_id != 0)
							{{$costo->Arbitro->full_name}}
						@endif
						@if($costo->supervisor_id != 0)
							{{$costo->Supervisor->full_name}}
						@endif
					</td>
					<td>
							@if($costo->CostoItem->detalle == 'Gastos por Traslado')
							   $  {{$costo->traslado_importe}}
							@else
							   $ {{$costo->CostoItem->importe}}
							@endif

					</td>
					<?php $total = $total + ($costo->cantidad * $costo->CostoItem->importe)?>
					<td>
						<a href="costo/delitem/{{Crypt::encrypt($costo->id)}}"><i class="del fa fa-times-circle"></i></a>
					</td>
				</tr>

						

				@endforeach
			</tbody>
			<tfooter>
				<td colspan='3'>Total a Pagar </td>

				<td>$ {{$total}}</td>
			</tfooter>
		</table>






	</div>

</div>


@endsection
@stop