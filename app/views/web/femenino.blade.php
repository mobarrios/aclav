@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 

    
                         <h4 class="media-heading"><font color="#ff4f5e">Equipos Femeninos</font></h4><br><br>
                        <div class="clearfix"></div>
                        <ul class="list-group">
                            @foreach($model as $models)
                            <div class="col-xs-3 col-sm-3 col-md-2 col-lg-4">
                                <li class="list-group-item"><center><img class="thumbnail" src="uploads/escudos/{{$models->escudo}}" width="50"><a href="web/femeninonuevo/{{$models->id}}">{{$models->nombre}}.</a></center></li>
                                </div>
                            @endforeach
                            
                        </ul>
                    
                    </div>
               
            </div>
       

                   

               
      @endsection        
                        

                