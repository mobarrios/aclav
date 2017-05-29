@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{($modulo)}}</b>
			
	</div>

	<div class="panel-body">

	<section class="panel bg-none">
	    <div class="panel-group" id="accordion">
	        
	    
		@foreach($torneos as $torneo)


	        <div class="panel panel-white">
	            <div class="panel-heading ">
	            	
	                <a data-toggle="collapse" data-parent="#accordion" href="#{{$torneo->id}}">
	                	{{$torneo->nombre_torneo}}
	                </a>
	            </div>
	            <div id="{{$torneo->id}}" class="panel-collapse collapse">
	                <div class="panel-body">

							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Equipo</th>
									</tr>
								</thead>
								<tbody>
									@foreach($torneo->Equipo as $equipo)
									<tr>
										<td><a href="habilitaciones/ver/{{Crypt::encrypt($equipo->id)}}/{{Crypt::encrypt($torneo->id)}}" class="" >{{$equipo->nombre}}</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						                
	                </div>
	            </div>
	        </div>

	     @endforeach

	    </div>
	</section>



		
	</div>

</div>



@endsection	

@stop