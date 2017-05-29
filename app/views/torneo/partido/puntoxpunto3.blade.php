@extends('template-2/template')

@section('content') 

<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
<div class="container">
    <div class="row">
        <div class="col-xs-4 text-center">
        <img class="img-responsive" src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" height="50%"/>
        </div>
        <div class="col-xs-2 text-center">Partido Nro: {{$partido->numero_partido}}</div>
        <div class="col-xs-4 text-center">
        <img class="img-responsive"  src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" height="100%"/>
        </div>
     </div>

   <hr>
   <div class="row">
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-warning "><i class="fa fa-plus"></i></a><a href="#" class="btn btn-success "><i class="fa fa-minus"></i></a></div>
        <div class="col-xs-2 text-center"><span class="badge bg-dark">88</span></div>
        <div class="col-xs-2 text-center"><span class="badge bg-white">PTOS</span></div>
        <div class="col-xs-2 text-center"><span class="badge bg-dark">88</span></div>
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-warning "><i class="fa fa-plus"></i></a><a href="#" class="btn btn-success "><i class="fa fa-minus"></i></a></div>
    </div>
    <hr>
   <div class="row">
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-warning"><i class="fa fa-plus"></i></a><a href="#" class="btn btn-success "><i class="fa fa-minus"></i></a></div>
        <div class="col-xs-2 text-center"><span class="badge bg-dark">88</span></div>
        <div class="col-xs-2 text-center"><span class="badge bg-white">SETS</span></div>
        <div class="col-xs-2 text-center"><span class="badge bg-dark">88</span></div>
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-warning"><i class="fa fa-plus"></i></a><a href="#" class="btn btn-success "><i class="fa fa-minus"></i></a></div>
    </div>
    <hr>


     <div class="row">
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-primary">Fin Set</a></div>
        <div class="col-xs-1 text-center"></div>
        <div class="col-xs-1 text-center"></div>
        <div class="col-xs-1 text-center"></div>
        <div class="col-xs-2 text-center"><a href="#" class="btn btn-warning">Fin Partido</a></div>


    </div>

    </div>
</div>
</div>



@endsection

@stop
