@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="media-heading"><font color="#f2293a">Tribunal de Disciplina</font></h4><br><br>
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            
                    @foreach ($model  as $models)
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><img src="assets/estilosweb/images/sancion.png" /> {{$models->resolucion}}</a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <font color="#000000">Jugador/Staff:&nbsp;&nbsp;</font>{{$models->jugador}}<br />
                                        <font color="#000000"><b>Sanción:</b>&nbsp;&nbsp;</font>{{$models->sancion}}<br />
                                        <font color="#000000"><b>Cantidad de Fechas:</b>&nbsp;&nbsp;</font>{{$models->cant_fecha}}<br />
                                        
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            
                        
                        

                       @endforeach
                        {{$model->links()}}
                    </div>
                    </div>
               
            </div>
</figure><br>
                   
 @endsection
                            
