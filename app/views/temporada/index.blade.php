@extends('template-2.template')

@section('content')

<section  class="panel bg-none">
  <header class="panel-heading">
    <b>TEMPORADAS</b>
    <div class="btn-group pull-right">
      <a href="{{$modulo}}/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
      <a href="{{$modulo}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
    </div>
  </header>

  <div class="panel-body">
  {{--*/ $count = 1 /*--}}

    @foreach(Temporada::orderBy('actual','DESC')->get() as $datas)

        @if($count == 1)
          {{--*/ $in = 'in' /*--}}
        @else
          {{--*/ $in = '' /*--}}
        @endif

      <div class="panel-group" id="accordion">
        <div class="panel panel-dark">
          
          <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$datas->id}} ">
            <b> {{$datas->nombre_temporada}} </b>
            </a> 
              @if($datas->actual == 1)
                  <label class="label label-danger">ACTIVA</label>
              @endif
          <div class="pull-right">
            <small class="text-muted">desde : {{$datas->fecha_inicio}}  </small>
            <small class="text-muted">hasta : {{$datas->fecha_final}} </small>
          </div>
          

          </div>

            <div id="collapse{{$datas->id}}" class="panel-collapse collapse {{$in}} ">
              <div class="panel-body">                
  
                <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th>Torneo</th>
                      <th>Serie</th>
                      <th>Inicio</th>
                      <th>Final</th>
                      <th>Web</th>
                      <th>o2 Web</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($datas->Torneos as $torneos)
                      <tr>
                        <td><a  class="label label-warning" href="torneos/detalle/{{Crypt::encrypt($torneos->id)}}" >{{$torneos->nombre_torneo }}</a></td>
                        <td>{{$torneos->serie_id }}</td>
                        <td>{{$torneos->fecha_inicio }}</td>
                        <td>{{$torneos->fecha_final}}</td> 
                        <td>
                          @if($torneos->muestra_web == 1)
                              <a href="torneos/cambiarestadoweb/{{Crypt::encrypt($torneos->id)}}/0" class="btn btn-xs btn-danger">Desactivar</a>
                          @else
                              <a href="torneos/cambiarestadoweb/{{Crypt::encrypt($torneos->id)}}/1" class="btn btn-xs btn-success">Activar</a>
                          @endif
                        </td>   
                        <td>
                          @if($torneos->o2_web == 1)
                              <a href="torneos/cambiarestadoo2web/{{Crypt::encrypt($torneos->id)}}/0" class="btn btn-xs btn-success">Ocultar</a>
                          @else
                              <a href="torneos/cambiarestadoo2web/{{Crypt::encrypt($torneos->id)}}/1" class="btn btn-xs btn-danger">Mostrar</a>
                          @endif
                        </td>   
                        <td>
                          <div class="btn-group pull-right">

                              @if(Auth::user()->usuario == 'admin')
                                <a href="costo/admin/{{Crypt::encrypt($torneos->id)}}" class="btn btn-xs btn-white">$ Aclav</a>
                              @endif 
                              <a href="torneos/editdata/{{Crypt::encrypt($torneos->id)}}" class="btn btn-xs btn-white"><i class="fa fa-edit"></i></a>
                              <a href="torneos/del/{{Crypt::encrypt($torneos->id)}}" class="del btn btn-xs btn-white"><i class="fa fa-times-circle"></i></a>
                              
                          </div>
                        </td>   
                        
                      </tr>
                    @endforeach

                  </tbody>
                </table>

                      <a href="torneos/new/{{Crypt::encrypt($datas->id)}}" type="button" class="btn btn-info  btn-xs">Crear Torneo</a> <br>
                      <br>
                      <a href="temporada/edit" type="button" class="btn btn-default  btn-xs">Editar Temporada</a>
                      <a href="temporada/cerrar" type="button" class="cerrar_temporada btn btn-danger  btn-xs">Cerrar Temporada</a>
                      
                        
              </div>

            </div>
          </div>
        </div>

       {{--*/ $count++ /*--}}

    @endforeach
  
     


      

  

</div>




  </div>

</section>






@stop