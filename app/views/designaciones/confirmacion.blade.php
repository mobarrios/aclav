@extends('template-2.template')

@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>Designacion </b>
			
	</header>

	<div class="panel-body">

	@foreach($designaciones as $designa)



		@if(($designa->arbitro_1_id != 0 && $designa->arbitro_1_id == Auth::user()->arbitro_id) || ($designa->arbitro_2_id != 0 && $designa->arbitro_2_id == Auth::user()->arbitro_id)  || ($designa->supervisor_1_id != 0 && $designa->supervisor_1_id == Auth::user()->supervisor_id) || ($designa->supervisor_2_id != 0 && $designa->supervisor_2_id == Auth::user()->supervisor_id ))
		
		<form action="designaciones/confirmar" method="POST" role="form">

			<input type="hidden" name="designacion_id" value="{{$designa->id}}">
			<div class="form-group">
			<label id="motivo">Estado</label>
			<span class="label label-success pull-right">{{$designa->estado}}</span>
				<select name="estado"  class="form-control">
					<option>seleccionar</option>
					<option value="1" >Aceptar</option>
					<option value="2" >Rechazar</option>
				</select>
			</div>
			<div class="form-group">
				<label id="motivo">Motivo</label>
				<input name="observaciones" class="form-control" type="text">
			</div>
			<div class="form-group">	
				<button class="btn btn-default form-control" type="submit">Aceptar</button>
			</div>
		</form>

		@endif
	@endforeach

	</div>
	

</section>

@endsection