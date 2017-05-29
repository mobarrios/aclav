<div>

	<ul id="myTab2" class="nav nav-tabs">

     	@foreach($torneos as $torneo)
     	<!-- valida si el equipo esta en el torneo-->
     		@foreach($torneo->Equipo as $equipo)

	     		@if($equipo->id == Session::get('equipo_id'))
		     	    <li>
				        <a href="#{{$torneo->id}}" data-toggle="tab">{{$torneo->nombre_torneo}}</a>
				    </li>
			    @endif

		    @endforeach

		@endforeach	 
 
        
    </ul>

    <section class="panel">
        <div class="panel-body">
           
            <div id="myTabContent2" class="tab-content">
                
           
					@foreach($torneos as $torneo)

					<!-- valida si el equipo esta en el torneo-->
					@foreach($torneo->Equipo as $equipo)

	     				@if($equipo->id == Session::get('equipo_id'))

							<div class="tab-pane active" id="{{$torneo->id}}">
								
							

								@foreach($o2 as $pres)


									@if($pres->torneos_id == $torneo->id)

										

										@if($pres->presentado != 0)
												<h5>O2 Presentado</h5>	
											@if(Auth::user()->profiles_id == 29)
													<a href="buenafe/edit/{{Crypt::encrypt($pres->id)}}/{{Crypt::encrypt($torneo->id)}}" class="btn btn-xs btn-info ">Ver / Crear O2</a>
											@endif
										@else
										
											

											@if($torneo->presenta_o2 || Auth::user()->profiles_id == 29)
												<a href="buenafe/edit/{{Crypt::encrypt($pres->id)}}/{{Crypt::encrypt($torneo->id)}}" class="btn btn-xs btn-info ">Ver / Crear O2</a>
											@endif
											

										@endif

									

											
								
										<!--- si no esta presentado edita -->

									<a href="buenafe/repo/{{Crypt::encrypt($pres->id)}}/{{Crypt::encrypt($torneo->id)}}" class="btn btn-xs btn-danger pull-right" target='_blank'>PDF</a>
									@endif

								@endforeach

							

			
						

			                      <table class="table table-condensed table-hover">

			                        <thead>
			                            <tr>
			                                <th colspan="3" >Jugadores</th>
			                            </tr>
			                            <tr>
			                                <th>nro</th>
			                                <th>Apellido Nombre</th>
			                                <th>Nac.</th>
			                                <th>DNI</th>
			                                <th>Carnet</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                        	
			                        	@foreach($o2 as $jugador)
			                        		@if($jugador->torneos_id == $torneo->id)
			                        			
			                        			@foreach($jugador->BuenaFe as $bf)
			                        				
			                        				@if(!$bf->borrado)
					                        			@if($bf->fecha_hasta == 'actual' ||  strtotime(date('d-m-Y')) >= $bf->fecha_hasta )
							                       			<tr>
							                                  <td> 
							                                     {{$bf->nro}}
							                                  </td>
							                                  <td> 
							                                     
							                                     {{ isset($bf->jugador->apellido) ? $bf->jugador->apellido: '' }} , 
							                                     {{ isset($bf->jugador->nombre) ? $bf->jugador->nombre: '' }}
							                                  </td>
							                                   <td> 
							                                     {{ isset($bf->jugador->fecha_nacimiento) ? $bf->jugador->fecha_nacimiento: '' }}
							                                  </td>
							                                  <td> 
							                                     {{ isset($bf->jugador->dni) ? $bf->jugador->dni: '' }}
							                                  </td>
							                                  <td>

							                                  	@if(isset($bf->habilitaciones->carnet) && $bf->habilitaciones->carnet != 0)
<a href="habilitaciones/carnet/{{Crypt::encrypt($bf->Jugador->id)}}/{{$bf->id}}"><i class="fa fa-print"></i></a>

							                                  	@endif

							                                  </td>
							                                </tr>
							                               @endif
					                               	@endif
					                               
					                       			@endforeach
					                 
			                        		@endif 
			                        	@endforeach

			                       		


			                            
			                           
			                        </tbody>
			                    </table>

			                    
			                <table class="table table-condensed table-hover">
			                        <thead>
			                            <tr>
			                                <th colspan="2" >Staff</th>
			                            </tr>
			                            <tr>
			                                <th>Funcion</th>
			                                <th>Apellido Nombre</th>
			                                <th>Nac.</th>
			                                <th>DNI</th>
			                                <th>Carnet</th>
			                            </tr>
			                        </thead>
			                        <tbody>

										@foreach($o2 as $staff)

			                        		@if($staff->torneos_id == $torneo->id)
			                        	
												@foreach($staff->BuenaFeStaff as $bfs)

												@if(!$bfs->borrado)
												    @if( $bfs->fecha_hasta == 'actual' ||  strtotime(date('d-m-Y')) >= $bfs->fecha_hasta ) 
														<tr>
															<td> 
																{{ isset($bfs->Funcion->funcion) ? $bfs->Funcion->funcion: '' }}
															</td>
															<td> 
																{{ isset($bfs->Oficial->apellido) ? $bfs->Oficial->apellido: '' }}
																{{ isset($bfs->Oficial->nombre) ? $bfs->Oficial->nombre: '' }}
															</td>
															<td> 
																{{ isset($bfs->Oficial->fecha_nacimiento) ? $bfs->Oficial->fecha_nacimiento: '' }}
															</td>
															<td> 
																{{ isset($bfs->Oficial->dni) ? $bfs->Oficial->dni: '' }}
															</td>
															 <td>
							                                	
							                                      @if($bfs->HabilitacionesStaff->carnet != 0)
							                                        <a href="habilitaciones/carnetstaff/{{Crypt::encrypt($bfs->Oficial->id)}}/{{$bfs->HabilitacionesStaff->id}}" target='_blank' ><i class="fa fa-print"></i></a>
							                                      @endif
							                    

							                                  </td>

														</tr>
													@endif
												@endif

											@endforeach
											@endif

										@endforeach


			                           
			                        </tbody>
			                    </table>


							</div>
							@endif

						@endforeach
					@endforeach	 
	            
                </div>
             </div>
      
    </section>


</div>

