@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

    
                         <h4 class="media-heading"><p><font size="5" color="#f2293a">Equipos Serie A1</font></p></h4><br><br>
                        <div class="clearfix"></div>
                        <ul class="list-group">
                            @foreach($model_id as $id)
                            <?php $models = Equipo::find($id); ?>

                            @if($models->id != 15)
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                    <li class="list-group-item">
                                        <center>
                                            <a href="web/masculinonuevo/{{$models->id}}"><img class="thumbnail1" src="uploads/escudos/{{$models->escudo}}" width="100" height="100">
                                            <br><br><p><font size="2"><strong>{{$models->nombre}}</strong></font></p></a>
                                        </center>
                                    </li>

                                    
                                </div>
                            @endif
                            @endforeach
                            
                        </ul>
                    
                    </div>
               
            </div>
       

                  

               
      @endsection        
                        
