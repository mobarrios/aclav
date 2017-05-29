@extends('web.base')
@section('contenido')
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media">   
                        <img src="uploads/contenidos/autoridad/{{$models->imagen}}" width="250">
                            <div class="media-body">
                              <h4 class="media-heading"><img src="assets/estilosweb/images/recepcion.png"> <font color="#ff4f5e">{{$models->apellido}}</font><p><font color="#ffffff"> {{$models->nombre}} </font></p></h4>
                                
                            </div>
                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection
                            
                        

                