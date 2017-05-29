@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                           <h4 class="media-heading"><font color="#f2293a">1Departamento de Marketing</font></h4><br><br>
                            @include('web/mark')
                            @foreach($model as $models)

                        <div class="media">  
                        <img src="uploads/contenidos/marketing/{{$models->imagen}}" width="350"><br>
                            <div class="media-body">
                              
                                <p><font color="#000000"> {{$models->cuerpo}} </font></p>
                            </div>
                        </div>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                