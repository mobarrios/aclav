@extends('template-2/template')

	@section('content')
		

	<div class="panel panel-default">

		<div class="panel-heading">
			<b>{{$torneo->nombre_torneo}}</b>			
		</div>

		<div class="panel-body">


			<div clas="row">
				@for($i=1;$i<= $cant_grupos;$i++)
				<div class="col-lg-3">
					<section class="panel panel-primary">
						<div class="panel-heading">
						</div>
						<div class="panel-body">	
							<form class="form-horizontal" action="torneos/faseequipoadd">

							<label >Nombre Grupo</label>
							<input type="text" name="nomreGrupo" class="form-control">
							<label>Equipos</label>


								@foreach($torneo->Equipo as $equipo)
								 <ul><input type="checkbox" name="{{$i}}[{{$equipo->id}}]"> {{$equipo->nombre}} </ul>
								@endforeach
			
							<input type="submit" value="guardar">
							</form>
						
						</div>
					</section>
				</div>
				@endfor
			</div>

		
		</div>

	</div>
	@endsection

@stop