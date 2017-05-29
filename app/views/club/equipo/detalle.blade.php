@extends('template-2.template')


@section('content')


<div class="col-md-3">
	<div class="pd-md text-center ">
    @if($model->escudo != "")
     <img src="uploads/escudos/{{$model->escudo}}" class="avatar avatar-lg img-rounded">
    @endif
	   
	</div>
	<p class="text-center">{{$model->nombre}}
	    <br>
	    <small>
	        <i>{{$model->denominacion}}</i>
	    </small>
	</p>
	<hr>
	<p class="text-center">
	    <small>{{$model->sigla}}</small>
	    <br>
	    <small class="characters"></small>
	    <br>
	    <small class="words"></small>
	    <br>
	    <small class="paragraphs"></small>
	</p>
</div>
<div class="col-md-9  bg-white">
	<br>

<section>
                                <ul id="myTab2" class="nav nav-tabs">
                                    <li >
                                        <a href="#datos" data-toggle="tab">Datos</a>
                                    </li>
                                     <li >
                                        <a href="#jugadores" data-toggle="tab">O2</a>
                                    </li>
                                    <li >
                                        <a href="#o2bis" data-toggle="tab">O2-bis</a>
                                    </li>
                                        <!--
                                        <li >
                                        <a href="#staff" data-toggle="tab">Temporadas</a>
                                        </li>
                                        -->
                                    <li >
                                        <a href="#costos" data-toggle="tab">Costos</a>
                                    </li>
                                    <li >
                                        <a href="#formularios" data-toggle="tab">Formularios</a>
                                    </li>

                                </ul>
                                <section class="panel">
                                    <div class="panel-body">
                                       
                                        <div id="myTabContent2" class="tab-content">
                                            
                                            <div class="tab-pane active" id="datos">

                                                <div>
                                                     <h5>Nombre del Equipo:</h5>
                                                     {{$model->nombre }}
                                                </div>
                                               
                                                <div>
                                                     <h5>Historia:</h5>
                                                     {{$model->historia }}
                                                </div>
                                               
                                                 <a href="equipo/edit/{{Crypt::encrypt($model->id)}}" class="btn btn-xs btn-info pull-right"> Editar Datos</a>
                                                

                                                
                                            </div>
                                            
                                            <div class="tab-pane" id="jugadores">


                                                  @include('club.equipo.o2')
                                                 

                                        
                                            </div>

                                            <div class="tab-pane" id="o2bis">


                                            @include('club.equipo.o2Bis')
                                          
                                           
                                            </div>

                                            <!--
                                            <div class="tab-pane" id="staff">
                                             <table class="table table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Temporada</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                             @foreach($temporadas as $temporada)
                                                            <tr>
                                                            <td> 
                                                               <a href="buena_fe" >{{$temporada->nombre_temporada}} </a>
                                                            </td>
                                                        </tr>
                                                           
                                                            @endforeach
                                                       
                                                    </tbody>
                                                </table>
                                               
                                            </div>
                                            -->


                                            <div class="tab-pane" id="costos">

                                              @include('costo.detalle_club')
                                             
                                            </div>

                                            <div class="tab-pane" id="formularios">
                                             <table class="table table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Formularios</th>
                                                            <th>Descargar</th>
                                                            <th>Subir</th>
                                                            <th>Estado</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                             @foreach($formularios as $formulario)
                                                                <tr>
                                                                    <td> 
                                                                      {{$formulario->nombre}} 
                                                                    </td>
                                                                    <td> 
                                                                     <a href='download/{{Crypt::encrypt($formulario->id)}}' ><i class="fa fa-download"></i></a>
                                                                    </td>
                                                                    <td> 
                                                                    @if($formulario->is_formulario)
                                                                       <a href='upload/{{Crypt::encrypt($formulario->id)}}'  data-toggle="modal" data-target="#modal" ><i class="fa fa-upload"></i></a>
                                                                   @endif
                                                                    </td>

                                                                      @if(isset($formulario->Estado($equipo_id,$formulario->id)->estado))
                                                        
                                                                        <td>
                                                                          <span class="label label-warning">{{$formulario->Estado($equipo_id,$formulario->id)->estado}}</span>
                                                                           
                                                                          @if($formulario->Estado($equipo_id,$formulario->id)->estado == 'Subido')
                                                                            
                                                                                 <a href='download_formulario_equipo/{{Crypt::encrypt($formulario->id)}}/{{Crypt::encrypt($equipo_id)}}' ><i class="fa fa-download"></i></a>

                                                                        
                                                                                 <a href='delete_formulario_equipo/{{Crypt::encrypt($formulario->id)}}/{{Crypt::encrypt($equipo_id)}}' ><i class="del fa fa-times-circle"></i></a>
                                                                                 

                                                                        @endif
                                                                        </td>
                                                                   
                                                                      @else
                                                                        
                                                                        <td></td>
                                                                        <td></td>
                                                                      @endif
                                                                 
                                                                </tr>
                                                            @endforeach
                                                       
                                                    </tbody>
                                                </table>
                                               
                                            </div>
                                         </div>
                                    </div>
                                </section>
                            </section>

</div>


@stop