@extends('web_nueva.template')
@section('css')
<style>

.condicional{

background-color: red;
color: #fff;
padding: 3px 7px;
display: inline;
padding: .2em .6em .3em;
font-size: 75%;
font-weight: bold;
line-height: 1;
color: #ffffff;
text-align: center;
white-space: nowrap;
vertical-align: baseline;
border-radius: .25em;
}


</style>
@endsection
@section('site-content')

 <div class="site-content1">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

          <div class="row">

          <!-- Content -->
          <div class="content col-md-12">

            <!-- inicio encabezado temporadas -->
            <div class="card1 card--clean">
              <header class="card__header card__header--shop-filter">
                <div class="shop-filter">
                  <h4 class="shop-filter__result">Calendario y Resultados - {{$torneo->nombre_torneo}} </h4>
                 
                  {{-- <ul class="shop-filter__params">
                    <li class="shop-filter__control">
                      <select class="form-control input-sm">
                      @foreach($temporadas as $temporada)
                        <option value="{{$temporada->id}}">Temporada  {{$temporada->nombre_temporada}}</option>
                      @endforeach
                      </select>
                    </li>                
                  </ul>     --}}              
                </div>
              </header>                     
            </div>
            <!-- fin encabezado temporadas -->

            <!-- inicio Encabezado fases -->
            <div class="card1">              
              <div>                
                <center>
                    <a href="#" class="allFases btn btn-default1 btn-outline btn-xs card-header__button">
                    </font><i class="fa fa-bars"></i>
                    </a>   

                      @foreach($fases as  $fase)
                        <label  class="fase btn btn-default1 btn-outline btn-xs card-header__button" data-id="{{$fase->id}}">{{$fase->nombre}}</label>
                      
                      @endforeach
                  
                </center>       
              </div>             
            </div>              
            <!-- fin Encabezado fases-->

            <!-- inicio Encabezado weekends ocultos -->

              @foreach($fases as $fase )
                <div class="card1 weeks card{{$fase->id}}" style="display: none;">  
                <center>
                    <a href="#" class="allLegs btn btn-default1 btn-outline btn-xs card-header__button">
                    </font><i class="fa fa-bars"></i>
                    </a>   
                      @foreach($fase->leg as $leg)            
                        <a href="#" class="leg btn btn-default1 btn-outline btn-xs card-header__button" data-id='{{$leg->id}}'>{{$leg->nombre}}</a>
                      @endforeach     
                 </center>                            
              </div>
              @endforeach

            
            
            <!-- fin Encabezado weekends ocultos -->

            <!-- comienzo Encabezado por equipos -->
            <div class="card">                             
              <center>
                    <a href="#" class="allTeams btn btn-default2 btn-outline btn-xs card-header__button">
                      </font><i class="fa fa-bars"></i>
                    </a>  
                    @foreach($torneo->Equipo as $equipo)
                      @if($equipo->id != 15)
                        <a class="equipo btn btn-default2 btn-outline btn-xs card-header__button" equipo-id="{{$equipo->id}}" >
                          <img src="uploads/escudos/{{$equipo->escudo}}" title="{{$equipo->nombre}}" >
                        </a>
                      @endif
                    @endforeach
              </center>                                   
            </div> 
            <!-- fin Encabezado por equipos -->


               @foreach($partidos as $partido_calendario)
                  <?php $partido = Partido::find($partido_calendario->partido_id); ?>

                  @if(!empty($partidos_today[0]->partido_id))
                    @if($partido->id == $partidos_today[0]->partido_id)
                    <div id="today"></div>
                    @endif
                  @endif

                  @if(isset($partidos_proximo))
                    @if($partido->id == $partidos_proximo[0]->partido_id)
                    <div id="today"></div>
                    @endif
                  @endif


                  <div  class="partido card1" fase-id='{{$partido_calendario->torneo_fase_id}}' leg-id='{{$partido_calendario->leg_id}}' 

                   local-id="{{ ($partido->local_text == '') ? $partido->local_equipo_id->id: '' }}"
                    visita-id = "{{ ($partido->visita_text == '') ? $partido->visita_equipo_id->id: '' }}"
                    style="{{ $partido->condicional == true ? "background-color:#f5e6e6;" : "" }}">

                          <div class="card__content1">                
                              <!-- comienzo titulos -->
                              <header class="game-result__header1 game-result__header--alt" >
                                <span class="game-result__league"><b>N° {{$partido->numero_partido}}</b>
                                   @if($partido->condicional)
                                  <b  class=" condicional">CONDICIONAL</b>
                                  
                                  @endif

                                </span>
                                
                               


                                  <h3 class="game-result__title">{{$partido_calendario->fase}} :  {{$partido_calendario->leg}}</h3>

                                  <time class="game-result__league1"><b>{{$partido->getFechaDeInicio()}} | {{ $partido->hora}}</b></time>
                              </header>                         
                              <!-- fin titulos -->                    
                              <!-- comienzo primer Equipo -->
                              <div class="widget-game-result__main">                        
                                    <div class="widget-game-result__team widget-game-result__team--first">
                                        <figure class="widget-game-result__team-logo">
                                          <img src="uploads/escudos/{{ ($partido->local_text == '') ? $partido->local_equipo_id->escudo: ''  }}" alt="">
                                        </figure>
                                    <div class="widget-game-result__team-info">
                                          <h2 class="game-result__date"><font size="2"><p>
                                            @if($partido->local_text == '')
                                              {{$partido->local_equipo_id->nombre }} 
                                            @else
                                              {{$partido->local_text}}    
                                            @endif
                                          </p></font></h2>
                                    </div>
                              </div>
                              <!-- fin primer Equipo -->                
                              <!-- comienzo resultado medio -->
                              @if($partido->estado == '' || $partido->estado == 0)
                                <div class="widget-game-result__score-wrap">
                                  <div class="widget-game-result__score">
                                      <p class="widget-game-result__title"><p>{{$partido->getfullFechaCompletaAttribute()}} <br> {{$partido->hora}} hs.</p></p>
                                      <div class="game-result__date"><font size="3"><p>{{ isset($partido->Estadio->nombre) ? $partido->Estadio->nombre : '' }}</p></font></div>             
                                        
                                        @if($partido->televisado == 1 )
                                           <a class="chac" href="{{$partido->televisado_url ? $partido->televisado_url  : '#' }}" target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Play"><img src="assets/webnueva/images/tyc_play.png"></a> <span style="font-weight:100;color:#CD3243">
                                       @elseif($partido->televisado == 2 )

                                       <a class="chac" href="{{$partido->televisado_url ? $partido->televisado_url  : '#' }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Sports" target="_blank" ><img src="assets/webnueva/images/tyc_tv.png"></a> <span style="font-weight:100;color:#CD3243">

                                        @endif

                                        <span style="font-weight:100;color:#CD3243"> | </span>  
                                        <a href="{{route('informacion',$partido->id)}}" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información" target="_blank"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                                        <a href="{{route('porequipo')}}" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas" target="_blank"><i class="fa fa-bar-chart"></i></a>                            
                                    </div>                        
                                </div>
                              @else
                              <div class="widget-game-result__score-wrap">
                                  <div class="widget-game-result__score">
                                      <h3 class="widget-game-result__title"><p>{{$partido->local_set}} - {{$partido->visita_set}}</p></h3>
                                      <div class="game-result__date"><font size="3">
                                      <p>
                                           @foreach(array_chunk($partido->puntoPartido->toArray(),3) as $punto)
                                            @foreach($punto as $p)
                                              {{ $p['puntos_local'] }}-{{ $p['puntos_visita'] }} / 
                                            @endforeach
                                          <br>
                                          @endforeach 
                                      </p>
                                      </font></div>          
                                        
                                        @if($partido->televisado == 1 )
                                           <a class="chac" href="{{$partido->televisado_url ? $partido->televisado_url  : '#' }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Play" target="_blank" >
                                           <img src="assets/webnueva/images/tyc_play.png" ></a> <span style="font-weight:100;color:#CD3243"> |
                                        @elseif($partido->televisado == 2 )
              
<a class="chac" href="{{$partido->televisado_url ? $partido->televisado_url  : '#' }}" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TyC Sports">
                                           <img src="assets/webnueva/images/tyc_tv.png"></a> <span style="font-weight:100;color:#CD3243"> |
                                        @endif

                                         </span>  
                                       <a href="{{route('informacion',$partido->id)}}" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                                        <a href="uploads/partidos/reportes/{{$partido->reporte}}" target="_blank" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                                    </div>                        
                              </div>
                              @endif
                              <!-- fin resultado medio -->                   
                              <!-- comienzo segundo Equipo -->
                              <div class="widget-game-result__team widget-game-result__team--first">
                                    <figure class="widget-game-result__team-logo">
                                      <img src="uploads/escudos/{{ ($partido->visita_text == '') ? $partido->visita_equipo_id->escudo: ''  }}" alt="">
                                    </figure>
                                    <div class="widget-game-result__team-info">
                                        <h2 class="game-result__date"><font size="2"><p>
                                    
                                          @if($partido->visita_text == '')
                                            {{$partido->visita_equipo_id->nombre }} 
                                          @else
                                            {{$partido->visita_text}}    
                                          @endif
                                        </p></font></h2>
                                    </div>
                              </div>
                              <!-- fin segundo Equipo -->
                          </div>
                          </div>
                        </div>         
                  @endforeach
                             


        
                  </section>
                  </div>
                </div>
            </div>
            <!-- Game Scoreboard / End -->
            <br>         
          </div>
        </div>
      </div>
    </div>
@endsection     


@section('javascript')

<script type="text/javascript">

var fase_id = 0;
var leg_id = 0;
var teams_id = 0;

   //mustra los legs especifico
    $('.leg').on('click', function(ev)
    { ev.preventDefault();
  
        var id = $(this).attr('data-id');
        leg_id = id;

        $('.partido').hide();

        $('.partido').each(function()
          { 
            if($(this).attr('leg-id') == id )
                  $(this).show();
          });
    });

    // muestra las fases especifica
    $('.fase').on('click',function()
    {
        var id = $(this).attr('data-id');
        fase_id = id;

        $('.weeks').css("display","none");
        $('.card'+id).removeAttr("style");

        $('.partido').hide();

        $('.partido').each(function()
          { 
            if($(this).attr('fase-id') == id )
                  $(this).show();
          });

    });

    //muestra todos los equipos
    $('.allTeams').on('click',function(ev)
    {
      ev.preventDefault();
      
        $('.partido').hide();

        $('.partido').each(function()
        {

          if(fase_id == 0)
          {
                    $(this).show();
          }
          else if( $(this).attr('fase-id') == fase_id )
          {
            if(leg_id == 0 )
            {
                  $(this).show();
            }
            else if( $(this).attr('leg-id') == leg_id )
            {
                    $(this).show();
            }

          }
          // if($(this).attr('fase-id') == fase_id || $(this).attr('leg-id') == leg_id)
          //   $(this).show();
          // else
          //   $(this).show();
        }); 

        teams_id = 0;
    });



    //muestra todos las fases
    $('.allFases').on('click',function(ev)
    {
        ev.preventDefault();

        $('.weeks').css("display","none");

         $('.partido').each(function()
        {
           $(this).show();
        }); 

         fase_id = 0;
    });

    //muestra todos los legs
    $('.allLegs').on('click',function(ev)
    {   ev.preventDefault();

         $('.partido').each(function()
        {
          if(fase_id == $(this).attr('fase-id'))
              $(this).show();
        }); 

       leg_id = 0;
    });

    //filtra equipos
    $('.equipo').on('click',function(){
        var id = $(this).attr('equipo-id');
        //teams_id = id;

        $('.partido').hide();

        $('.partido').each(function()
        {


          if($(this).attr('local-id') == id  ||  $(this).attr('visita-id') == id ){
                    $(this).show();
            } 

              
              // if(teams_id == 0)
              // {
              //   if(fase_id!= 0 && $(this).attr('fase-id') == fase_id) 
              //   {
              //     $(this).show();
              //   }
              // }


          // if($(this).attr('fase-id') == fase_id )
          // {

          //   if($(this).attr('leg-id') == leg_id)

          //     if($(this).attr('local-id') == id  ||  $(this).attr('visita-id') == id )
          //         $(this).show();
            
          // }
          //   else
          // {
          //   $(this).hide();

          // }
          


            
          // if($(this).attr('fase-id') == fase_id || $(this).attr('leg-id') == leg_id )
          // {
          //   if($(this).attr('local-id') == id  ||  $(this).attr('visita-id') == id )
          //   {
          //       $(this).show();
          //   }
          //   else
          //   {
          //     $(this).hide();
          //   }
          // }

        



          //else
          //  $(this).hide();


          //if($(this).css('display') == 'block' )
          //  {
          //    if($(this).attr('local-id') != id  &&  $(this).attr('visita-id') != id )
          //        $(this).hide();
          //  }         
        }); 
     });



    $('html, body').animate({
        scrollTop: parseInt($("#today").offset().top) - 120

    }, 1000);


     

</script>
@endsection   
