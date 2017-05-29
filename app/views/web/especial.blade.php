@extends('web.base')
@section('contenido')
<div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> <a href="web/ampliarespecial/{{Crypt::encrypt($models->id)}}" class="pull-left">  
                        <img src="uploads/contenidos/especial/{{$models->imagen}}" width="250"></a>
                            <div class="media-body col-xs-12">
                              <h4 class="media-heading"><img src="assets/estilosweb/images/recepcion.png"> <a href="web/ampliarespecial/{{Crypt::encrypt($models->id)}}"><font color="#ff4f5e">{{$models->titulo}}</font></a></h4>
                                <p><font color="#ffffff"> {{$models->copete}} </font></p>
                            </div>
                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection
                            
                        

                