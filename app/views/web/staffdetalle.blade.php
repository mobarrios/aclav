@extends('web.base')
@section('contenido')<br>
<div class="sections3">


                        
                        <div class="clearfix"></div>
                        <!-- Nav tabs -->
                        <div class="tabsect">
                            <ul class="nav nav-tabs" id="newTab">
                                <li class="active"><a href="#home" data-toggle="tab"><p><font size="5">{{$models->nombre}} {{$models->apellido}}</font></p></a></li>
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="avatar">
                                    <figure>
                                        <img class="thumbnail" src="uploads/oficial/{{$models->imagen}}" width="200">
                                    </figure>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                <div class="blogtext">
                                    <div class="clearfix"></div>
                                    
                                    <p>
                                    <p><font size="3" color="#000000"><b>Apellido:</b>&nbsp;&nbsp;{{$models->apellido}}</font></p>
                                    <p><font size="3" color="#000000"><b>Nombre:</b>&nbsp;&nbsp;{{$models->nombre}}</font></p>
                                    <p><font size="3" color="#000000"><b>Fecha Nac.:</b>&nbsp;&nbsp;{{$models->fecha_nacimiento}}</font></p>
                                     <p><font size="3" color="#000000"><b>Función:</b>&nbsp;&nbsp;{{$models->funcion->funcion}}</font></p>
                                    </p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div></div>
                                
                            </div>
                        </div>
                    </div>
                
      @endsection        
                        
                        

                