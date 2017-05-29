@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">

    
                        <h4 class="media-heading"><p><font size="5" color="#f2293a">Sección Descargas</font></p></h4><br><br>
                        <div class="clearfix"></div>
                        <ul class="list-group">
                            @foreach($model as $models)
                                <p><font size="3" color="#000000"><li class="list-group-item">{{$models->titulo}}<a href="web/download/{{Crypt::encrypt($models->id)}}">  <i class="glyphicon glyphicon-arrow-down"></i></font></p></a></li>
                            @endforeach
                            
                        </ul>
                    
                    </div>
               
            </div>
       

                   

               
      @endsection        
                        

                