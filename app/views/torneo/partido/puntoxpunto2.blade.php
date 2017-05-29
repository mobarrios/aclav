@extends('template-2/template')

@section('content')	

<div class="panel panel-default">


		<div class="panel-body">

		<div class="row">

			<div class="col-lg-12 col-xs-12">
				<div class="col-lg-12 col-xs-12">
					
					@if($partido->estado == 0)
						<span class="label label-success">Partido No Comenzado</span>

					@elseif($partido->estado == 1)

						<span class="label label-danger">Partido Comenzado</span>

					@else
						<span class="label label-primary">Partido Finalizado</span>

					@endif
				</div>

				<div class="col-lg-6 col-xs-6 ">
					<div>
						<h3>Local</h3>
							<div class="col-lg-3">
								<i class="thumbnail">
									<img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}"  >
								</i>
							</div>
					</div>			
				</div>

				<div class="col-lg-6 col-xs-6 ">
					<div>
						<h3>Visita</h3>
						<div class="col-lg-3">
						<i class="thumbnail">
							<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" >
						</i>
						</div>
					</div>			
				</div>
							
			
							<div class="col-lg-6 col-xs-6 ">
								<h1><strong>{{$partido->local_set}}</strong></h1>
								<h5><strong>SET</strong></h5>
								<a href="puntoxpunto/addsetlocal"	class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i> </a>	
								<a href="puntoxpunto/remsetlocal" class="btn btn-danger btn-md"><i class="fa fa-minus-circle"></i> </a>	
							</div>

							<div class="col-lg-6 col-xs-6 ">
								<h1><strong>{{$partido->visita_set}}</strong></h1>
								<h5><strong>SET</strong></h5>
								<a href="puntoxpunto/addsetvisita"	class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i> </a>	
								<a href="puntoxpunto/remsetvisita" class="btn btn-danger btn-md"><i class="fa fa-minus-circle"></i> </a>	
							</div>
						

				<div class="col-lg-6 col-xs-6 ">
					<h5><strong>PUNTOS</strong></h5>
					<a href="puntoxpunto/puntolocal"class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i> </a>	
					<a href="puntoxpunto/restalocal"class="btn btn-danger btn-md"><i class="fa fa-minus-circle"></i> </a>	
				</div>

				<div class="col-lg-6 col-xs-6 ">
					<h5><strong>PUNTOS</strong></h5>
					<a href="puntoxpunto/puntovisita"class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i> </a>	
					<a href="puntoxpunto/restavisita"class="btn btn-danger btn-md"><i class="fa fa-minus-circle"></i> </a>	
				</div>

				<div class="col-lg-12 col-xs-12">
					<section class="panel">
						<div class="panel-body ">
							<table class="table">
								<thead>
									<tr>
										
										<th>Set Nro.</th>
										<th>
											<div class="col-lg-3">
											<i class="thumbnail">
												<img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" >
											</i>
											</div>
										</th>
										<th>
											<div class="col-lg-3">
											<i class="thumbnail">
												<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" >
											</i>
											<div>
										</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($partido->puntoPartido as $punto)
											<tr>
												<td><strong>{{$punto->set_numero}}</strong></td>
												<td>{{$punto->puntos_local}}</td>
												<td>{{$punto->puntos_visita}}</td>

											</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</section>
				</div>


				<div class="col-lg-12 col-xs-12">
				
							@if($partido->estado == 0 )
								<a href="puntoxpunto/empezarpartido" class="btn btn-success" > Comenzar </a>

							@elseif($partido->estado == 1)

								<a href="puntoxpunto/terminarpartido" class="btn btn-danger" > Terminar </a>
								<a href="puntoxpunto/addset" class="btn btn-success" >Set</a>

							@else
	
							@endif

				</div>




			</div>

		</div>


		</div>

</div>

@endsection

@stop