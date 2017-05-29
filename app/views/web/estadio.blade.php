@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 

    
                         <h4 class="media-heading"><p><font size="5" color="#f2293a">Estadios</font></p></h4><br><br>
                        <div class="clearfix"></div>
                        <ul class="list-group">
                            @foreach($model as $models)
                    
                                 <li class="list-group-item"><a href="web/estadionuevo/{{$models->id}}"><p><font size="2">{{$models->nombre}}</font></p></a></li>
                              
                            @endforeach
                            
                        </ul>
                    
                    </div>
               
            </div>
       

                   

               
      @endsection        
                        

                