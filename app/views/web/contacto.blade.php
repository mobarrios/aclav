@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> 
                         
                        <h4 class="media-heading"><p><font size="5" color="#f2293a">Contactanos</font></p></h4><br><br>
                            <div class="media-body"><address>
                              <p><font size="3" color="000000"><strong>Teléfono: </strong>{{$models->telefono}}<br></font></p>
                              <p><font size="3" color="000000"><strong>Dirección: </strong>{{$models->direccion}}<br></font></p>
                              <p><font size="3" color="000000"><strong>Email de Contacto: </strong>{{$models->email}}<br><br></font></p>
                                <figure class="dropdownmap"> {{$models->mapa}} </figure>
</address>
                                
                            </div>

                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                