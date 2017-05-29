<div>


 		<ul id="myTab2" class="nav nav-tabs">


     	@foreach($torneos as $torneo)
     	<!-- valida si el equipo esta en el torneo-->
    
     		@foreach($torneo->Equipo as $equipo)

	     		@if($equipo->id == Session::get('equipo_id'))
		     	    <li>
				        <a href="#bis_{{$torneo->id}}" data-toggle="tab">{{$torneo->nombre_torneo}}</a>
				    </li>
			    @endif			

		    @endforeach

		 

		@endforeach	 
 
      	 </ul>
   

    <section class="panel">
        <div class="panel-body">
           
            <div id="myTabContent2" class="tab-content">
     
            @foreach($torneos as $torneo)
					
				<div class="tab-pane" id="bis_{{$torneo->id}}">

					@foreach($torneo->TorneoFase as $fase)

						
									@foreach($fase->Equipo as $eq )

									@if($eq->id == Session::get('equipo_id'))

										<table class="table table-hover">
										<thead>
											<tr>
												<th colspan="5">{{$fase->nombre}}</th>
											</tr>
											<tr>
												<th></th>
												<th>Partido Nro.</th>
												<th>Local</th>
												<th>Visita</th>
												<th></th>
											</tr>
										</thead>
										<tbody>

										@foreach($fase->leg as $leg)

											@foreach($leg->partido as $partido)
							

												@if($partido->local_equipo_id['id'] == Session::get('equipo_id') || $partido->visita_equipo_id['id'] == Session::get('equipo_id') )
														<tr>
															<td>{{$leg->nombre}}</td>
															<td>{{$partido->numero_partido}}</td>
															<td>{{ $partido->local_text ? $partido->local_text : $partido->local_equipo_id->nombre }}</td>
															<td>{{$partido->visita_text ? $partido->visita_text : $partido->visita_equipo_id->nombre }}</td>
															<td><a href="buenafebis/detalle/{{Crypt::encrypt($torneo->id)}}/{{Crypt::encrypt($partido->id)}}"><label class="label label-warning">crear</label></a></td>
														</tr>
												@endif

											@endforeach

										@endforeach

										</tbody>
										</table>


									@endif

									@endforeach
							
					@endforeach

                </div>
                @endforeach
                
             </div>
   
    </section>


</div>

