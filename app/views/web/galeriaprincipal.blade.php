@extends('web.base')
@section('contenido')<br>
    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
        <div class="sections3">
            <h4 class="media-heading"><p><font size="5" color="#f2293a">Galería Principal</font></p></h4><br><br>
            <div class="row">

                @foreach($galerias as $galeria)
                    
                 <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        
                            <img class="thumbnail" src="uploads/contenidos/galeria/{{$galeria->imagen}}" width="250"  class="thumbnail"/>
                            <a href="web/galeria/{{$galeria->id}}"><p><font size="3" color="#000000"> {{$galeria->titulo}} </font></p></a>
                        
                 </div>

                @endforeach
             
                
            </div>
        </div>
    </div>
    @endsection