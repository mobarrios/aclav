@extends('template-2/template')

@section('content')	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>Partido Nro: {{$partido->numero_partido}}</b>

			Local
			vs
			Visitante

	</div>

		<div class="panel-body">

			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>local</th>
							<th>set</th>
							<th>visita</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="col-xs-3"style="width:120px" >
									<i class="thumbnail">
										<img src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" >
									</i>
								</div>
							</td>

							<td>
							
										<h1><strong id="labelLocalSet">0</strong> - <strong id="labelVisitaSet">0</strong></h1>
										25-20 / 20-25 / 25-10


							</td>

							<td>
								<div class="col-xs-3"style="width:120px" >
									<i class="thumbnail">
										<img src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" >
									</i>
								</div>
							</td>
							<td>
								<span class="label label-danger" id="estado"></span>
							</td>
						</tr>

						<tr>
							<td>								
								<button id="btnAddPuntoLocal" 	class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> </button>	
								<button id="btnRemovePuntoLocal" class="btn btn-danger btn-lg"><i class="fa fa-minus-circle"></i> </button>					
							</td>

							<td>
								<h1>	
									<i id='puntoLocal'>0</i> - <i id="puntoVisita">0</i>
								</h1>
							</td>
							<td>
								<button id="btnAddPuntoVisita" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> </button>		
								<button id="btnRemovePuntoVisita" class="btn btn-danger btn-lg"><i class="fa fa-minus-circle"></i> </button>	
							</td>

						</tr>

						<tr>
							<td>															
							</td>

							<td>	
								<button id="btnEmpezarPartido" class="btn btn-default">Empezar Partido</button>
								<button id="btnTerminarPartido" class="btn btn-default">Terminar Partido</button>
							</td>

							<td>		
							</td>
							
						</tr>
						<tr>
							<td>															
							</td>

							<td>
								<a href="puntoxpunto/addset" class="btn btn-default">Nuevo Set</a>
							</td>

							<td>		
							</td>
							
						</tr>



								
					</tbody>
				</table>
			</div>


			



@endsection

@section('extraJs')

<script type="text/javascript">
	
	function ajax(paramUrl, paramType, callback)
	{
		//var a = "";

			 $.ajax({
				url: paramUrl,
				type: paramType,
				//data: {legajo: $("#legajo").val()},
				dataType: 'JSON',
				//beforeSend: function() 
				//{
				//  $("#respuesta").html('Buscando empleado...');
				//}
				//error: function() 
				//{
					//res = false;
				//},
				success:(callback) 
				//{	
					//alert(respuesta);
					//response(respuesta);
					//callback;
				//}				
			});

		//return a;
	}



	$(document).ready(function(){

		var btnEmpezarPartido 		= $('#btnEmpezarPartido');
		var btnTerminarPartido 		= $('#btnTerminarPartido');	
		var btnAddPuntoLocal 		= $('#btnAddPuntoLocal');
		var btnRemovePuntoLocal 	= $('#btnRemovePuntoLocal');
		var btnAddPuntoVisita 		= $('#btnAddPuntoVisita');
		var btnRemovePuntoVisita 	= $('#btnRemovePuntoVisita');



		ajax('puntoxpunto/partidodata','GET', function(data){

			if(data.estado == 0)
			{
				$('#estado').text('Partido NO Empezado');
				btnTerminarPartido.hide();

			}
			else if(data.estado == 1)
			{

				$('#estado').text('Partido Empezado');
				$('#labelLocalSet').text(data.local_set);
				$('#labelVisitaSet').text(data.visita_set);
		

				btnEmpezarPartido.hide();
			}
			else
			{
				$('#estado').text('Partido Terminado');
			}


		});
		

		//comienza partido
		btnEmpezarPartido.on('click', function()
		{
			res = ajax('puntoxpunto/empezarpartido','GET');
			
			if(res != false)
			{
				$('#estado').text('Partido Empezado');
			}
		});

		
		//añade punto al equipo local
		btnAddPuntoLocal.on('click', function()
		{
			res = ajax('puntoxpunto/puntolocal','GET');	
			
				if(res != false)
				{
					alert(res);

				}else{
					
					alert("fals");
				}

		});

		//añade punto al equipo local
		$('#addPuntoVisita').on('click', function(){
			puntoVisita = ajax('puntoxpunto/puntovisita','GET');

			if(puntoVisita)
			{
				alert(puntoVisita.puntos_visita);
			}

		});
	});

</script>

@endsection

@stop

