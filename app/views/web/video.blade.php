@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> 
                         
                        <h4 class="media-heading"><font color="#f2293a">Videos</font></h4><br><br>
                            <div class="media-body"><address>
                              <strong>Título: </strong>{{$models->titulo}}<br>
                             <figure class="dropdownmap"> {{$models->object}} </figure>
</address>
                                
                            </div>

                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                