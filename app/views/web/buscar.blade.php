@extends('web.base')
@section('contenido')<br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>


        @if($tituloSeccion == 'Aclav Social')

            @include('web/social')

        @endif

        @if($tituloSeccion == 'Acciones')

            @include('web/mark')

        @endif

<div class="sections3">

<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 

                    <!-- Video Box Start -->
                    <div class="blogtext">

                       

                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> <a href="web/ampliarnoticia/{{Crypt::encrypt($models->id)}}" class="pull-left">  
                        <img src="uploads/contenidos/noticias/{{$models->imagen}}" width="220" class="thumbnail"></a>
                            <div class="media-body">
                              <h4 class="media-heading"> <a href="web/ampliarnoticia/{{$models->id}}"><font color="#000000">{{$models->fecha}} - </font><font color="#ff4f5e">{{$models->titulo}}</font></a></h4>
                                <p><font color="#000000"> {{$models->copete}} </font></p>
                            </div>
                        </div>

                        @endforeach

                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   


                
      @endsection
                            
                        

                