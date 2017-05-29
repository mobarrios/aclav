@extends('web.base')
@section('contenido')<br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>

<p><font size="5" color="#f2293a">
        @if($tituloSeccion == 'Aclav Social')

            @include('web/social')

        @endif

        @if($tituloSeccion == 'Acciones')

            @include('web/mark')

        @endif</font></p>

<div class="sections3">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

                    <!-- Video Box Start -->
                    <div class="blogtext">

                       

                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        <div class="media"> <a href="web/ampliarnoticia/{{$models->id}}" class="pull-left">  
                        <img src="uploads/contenidos/noticias/{{$models->imagen}}" width="220" class="thumbnail"></a>
                            <div class="media-body col-xs-12">
                              <h4 class="media-heading"> <a href="web/ampliarnoticia/{{$models->id}}"><p><font size="3" color="#000000">{{$models->fecha}} - <font size="3" color="#f2293a">{{$models->titulo}}</font></p></a></h4>
                                <p><font size="3" color="#000000"> {{$models->copete}} </font></p>
                            </div>
                        </div>

                        @endforeach

                       {{$model->links()}}
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   


                
      @endsection
                            
                        

                