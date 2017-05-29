@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                            <figure class="gallery">
                                            
                                                <h4 class="media-heading"><font color="#ff4f5e">Estadísticas por Equipo</font></h4>
                                                
                                           
                                        </figure>

                        
                       
                            <div>
                              
                                <img class="img-responsive" src="uploads/contenidos/estadisticai/{{$models->imagen}}">
                            </div>
                        

                        <br>
                        

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection             