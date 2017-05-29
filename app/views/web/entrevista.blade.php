@extends('web.base')
@section('contenido')
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> <a href="web/ampliarentrevista/{{Crypt::encrypt($models->id)}}" class="pull-left">  
                        <img src="uploads/contenidos/entrevistas/{{$models->imagen}}" width="250"></a>
                            <div class="media-body">
                              <h4 class="media-heading"><img src="assets/estilosweb/images/recepcion.png"> <a href="web/ampliarentrevista/{{Crypt::encrypt($models->id)}}"><font color="#ff4f5e">{{$models->titulo}}</font></a></h4>
                                <p><font color="#ffffff"> {{$models->copete}} </font></p>
                            </div>
                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection
                            
                        

                