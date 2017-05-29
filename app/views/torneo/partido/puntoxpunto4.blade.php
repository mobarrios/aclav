@extends('template-2/template')

@section('content') 
<style type="text/css">
    .button
    {
        background-color: black;
        height: 100%;
        width: 100%;
    }
</style>

<div class="col-xs-12"> 
<div class="container">


    <div class="row">

        <div class="col-lg-2 col-xs-3">
            <img class="avatar img-circle"  src="uploads/escudos/{{$partido->local_equipo_id->escudo}}" alt="">
        </div>

        <div class="col-lg-8  col-xs-6 text-center">
             <h1><strong id="labelLocalSet">{{$partido->local_set}}</strong> - <strong id="labelVisitaSet">{{$partido->visita_set}}</strong></h1>


                @foreach($partido->punto_partido as $pto)
                     <span class="label label-default">{{$pto->puntos_local}} - {{$pto->puntos_visita}}</span>
                     .
                     
                     @if($pto->set_actual == 1)
                       
                        <?php $actual = $pto->set_numero ?>
                  
                     @endif

                @endforeach      

                <br>    
                <br>                 
                          <span class="label label-primary">  Set <strong class="set_actual">{{$actual}}</strong></span>    
               

        </div>
                
         <div class="col-lg-2 col-xs-3">
             <img class="avatar img-circle" src="uploads/escudos/{{$partido->visita_equipo_id->escudo}}" alt="">
        </div>
    </div>
    <hr>
@if($partido->estado == 1)
    <div class="row">

        <div class=" col-xs-3">   
            <div class="col-lg-6 col-xs-12">
                <button class="suma_local btn btn-default btn-lg"><i class="fa fa-plus"></i></button>
            </div>
            <div class="col-lg-6 col-xs-12">
                <button  class="resta_local btn btn-default btn-lg"><i class="fa fa-minus"></i></button>
            </div>
        </div>
 

        
        <div class="col-xs-6 text-center">
          <strong>PUNTOS</strong>
          @if(isset($set_actual))
            <h1><strong id="labelLocalPunto">{{$set_actual->puntos_local}}</strong> - <strong id="labelVisitaPunto">{{$set_actual->puntos_visita}}</strong></h1>
            @endif
        </div>


        <div class=" col-xs-3">   
            <div class="col-lg-6 col-xs-12">
                <button class="suma_visita btn btn-default btn-lg"><i class="fa fa-plus"></i></button>
            </div>
            <div class="col-lg-6 col-xs-12">
                <button class="resta_visita btn btn-default btn-lg"><i class="fa fa-minus"></i></button>
            </div>
        </div>
       

        
    </div>
    @endif

    <hr>

    <div class="row">

        <div class=" col-xs-3">   
           
        </div>

        <div class="col-xs-6 text-center">
          <strong>SETS</strong>
          <br>
        
        @if(isset($set_actual))    
            @if($set_actual->puntos_local != $set_actual->puntos_visita)
              @if($partido->estado != 0)
              <button class="terminar_set btn btn-xs btn-success">Terminar Set</button>
              @endif
            @endif
        @endif
          
        </div>

         
        <div class=" col-xs-3">   
          
        </div>
        
    </div>

    
    <hr>
     <div class="row">
        <div class="col-xs-12 text-center">     

        @if($partido->estado == 0)
             {{--<a href="puntoxpunto/empezarpartido" class="comenzar_partido btn btn-success btn-lg">Comenzar Partido ODL</a> --}}
             <button class="comenzar_partido btn btn-success btn-lg"> Comenzar Partido</button>
        @elseif($partido->estado ==1)
             <button class="terminar_partido btn btn-danger btn-lg">Terminar Partido</button>
        @else

              <h1><strong>PARTIDO FINALIZADO</strong></h1>
        
        @endif

         
        </div>    
    </div>


</div>
</div>

<div class="modal fade" id="modal-id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        Esperando Respuesta...
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@endsection

@section('extraJs')

<script type="text/javascript">


function disable()
{
   $('button').prop('disabled',true);
}
function enable()
{
  $('button').prop('disabled',false);
}

$(document).ready(function(){
     disable();
});

$(window).load(function() {
   enable();
});


  $('.suma_local').on('click',function(){
  
    disable();
       $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/puntolocal',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });

    enable();
  });

  $('.resta_local').on('click',function(){
    disable();
        $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/restalocal',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });
    enable();
  });



  $('.suma_visita').on('click',function(){
     disable();

        $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/puntovisita',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });

    enable();
  });

  $('.resta_visita').on('click',function(){
    
  disable();

        $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/restavisita',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });

      enable();
  });


  $('.comenzar_partido').on('click',function(){
     
     disable();
     if (!confirm("Comenzar Partido ?"))
     {
         return false;
     }
     else
     {

     
        $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/empezarpartido',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });


     }
      enable();
   }); 


  $('.terminar_partido').on('click',function(e){

      disable();
      e.preventDefault();


     //if($('.set_actual').html() == "" )
      if($('.terminar_set').length < 1)
      {
        if (!confirm("Terminar Partido ?"))
        {
            enable();
            return false;
        
        }else{

            $.ajax({
              async: false,
              type: 'GET',
              url: 'puntoxpunto/terminarpartido',
                success: function(data) {
                    //callback
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) 
                { 
                   alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }    
              });
        }

      }
      else
      {

           alert('Debe cerrar el SET ACTUAL antes de terminar el partido!');
           enable();

          return false;
      }

      enable();

   }); 

  $('.terminar_set').on('click',function()
  {
     disable();
    if (!confirm("Terminar Set ?")){
       return false;
     } 
     else
     {

        $.ajax({
                async: false,
                type: 'GET',
                url: 'puntoxpunto/terminarset',
                  success: function(data) {
                      //callback
                      location.reload();
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) 
                  { 
                     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  }    
                });

     }
      enable();
   }); 

</script>

@endsection


@stop