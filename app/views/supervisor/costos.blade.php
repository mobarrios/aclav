@extends('template-2/template')

@section('content')
	

<div class="panel panel-default">
	<div class="panel-heading">	
		<b>Costos de Oficiales</b>
		<b class="pull-right">( Nro.{{$partido->numero_partido}} ) 

		@if($partido->local_text == '')
			{{ $partido->local_equipo_id->sigla}}
		@else
			{{$partido->local_text}}
		@endif

		 / 

		@if($partido->visita_text == '')
			{{ $partido->visita_equipo_id->sigla}}
		@else
			{{$partido->visita_text}}
		@endif
		


		</b>
	</div>

	<div class="panel-body">	

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Equipo</th>
				<th>Detalle</th>
				<th>$</th>
			</tr>
		</thead>
		<tbody>
		@if($item != '')
			@foreach($item as $items)
				<tr>
					<td>
					@if($items->equipo_id == 0)
						Aclav
					@else
						{{$items->Equipo->nombre}}
					@endif
					</td>
					<td>
						{{$items->CostoItem->detalle}}

						@if($items->CostoItem->detalle == 'Gastos por Traslado')
							 ( {{$items->traslado_detalle}} ) 
						@endif
					</td>
					<td>

						@if($items->CostoItem->detalle == 'Gastos por Traslado')
							{{$items->traslado_importe}}
						@else
							{{$items->CostoItem->importe}}
						@endif

					</td>
					@if($items->CostoItem->detalle == 'Gastos por Traslado')
						<td>
							<button class="btn-asignar btn btn-xs " data-id='{{$items->id}}' >Completar</button>
						</td>
					@endif
				</tr>
			@endforeach
		@endif
		</tbody>
	</table>




	</div>


	<div class="modal fade" id="modal-traslado">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Gastos de Traslados</h4>
				</div>
				<div class="modal-body">
					<form action="perfil_supervisor/traslado" id='form-traslado' method="POST" class="form-horizontal" role="form">
						<input type="hidden" name="id" id="id" >
						<div class="form-group">
						<label for="exampleInputEmail1">Detalle</label>
						<input  name="detalle" class="form-control"  placeholder="Detalle">
						</div>				
						<div class="form-group">
						<label for="exampleInputEmail1">$ </label>
						<input name="importe" class="form-control"  placeholder="Importe">
						</div>	
						<div class="form-group">
						<button class='btn '>Guardar</button>	
						</div>	
					</form>

				</div>
				<div class="modal-footer">
				
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@endsection

@section('extraJs')
<script type="text/javascript">
	$('.btn-asignar').on('click',function()
	{
		$('#id').val($(this).attr('data-id'));
		$('#modal-traslado').modal('show');

	});
</script>
@endsection
@stop