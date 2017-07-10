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
                                            
                                                <span class="fuente-1"><h4><p><font size="5" color="#f2293a">Historia</font></p></h4></span>
                                                
                                           
                                        </figure>

                        
                       
                            <div class="media-body">
                              
                                <p><font size="3" color="#000000"> {{$model->cuerpo}} </font></p>
                            </div>
                        

                        <br>
                        

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                