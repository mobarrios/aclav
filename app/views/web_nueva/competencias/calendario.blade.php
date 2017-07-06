@extends('web_nueva.template')
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
                  <h4 class="shop-filter__result">Calendario y Resultados</h4>
                  <ul class="shop-filter__params">
                    <li class="shop-filter__control">
                      <select class="form-control input-sm">
                        <option>Temporada 2016-2017</option>
                        <option>Temporada 2015-2016</option>
                        <option>Temporada 2014-2015</option>
                      </select>
                    </li>                
                  </ul>                  
                </div>
              </header>                     
            </div>
            <!-- fin encabezado temporadas -->

            <!-- inicio Encabezado fases -->
            <div class="card1">              
              <div>                
                <center>
                  <form name="formulario"> 
                    <a href="#" class="btn btn-default1 btn-outline btn-sm card-header__button"></font><i class="fa fa-bars"></i></a>           
                    <input id="fase1" name="fase" type="radio" value="t2" onclick="showMe()" > 
                      <label class="btn btn-default1 btn-outline btn-sm card-header__button" for="fase1">Fase Regular</label>
                    <input id="fase2" name="fase" type="radio" value="t3" onclick="showMe()" > 
                      <label class="btn btn-default1 btn-outline btn-sm card-header__button" for="fase2">Play Off</label>
                  </form>
                </center>       
              </div>             
            </div>              
            <!-- fin Encabezado fases-->

            <!-- inicio Encabezado weekends ocultos -->
            <div class="card1" id="oculto1" style="display: none;">              
              <center>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button"></font><i class="fa fa-bars"></i></a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 1</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 2</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 3</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 4</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 5</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 6</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 7</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 8</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 9</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 10</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 11</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">WKD 12</a>
              </center>                                   
            </div>
            <div class="card1" id="oculto2" style="display: none;">                             
              <center>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button"></font><i class="fa fa-bars"></i></a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Cuartos de Final 1 y 2</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Cuartos de Final 3</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Semifinal 1 y 2</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Semifinal 3 y 4</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Semifinal 5</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Final 1 y 2</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Final 3 y 4</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Final 5 y 6</a>
                <a href="#" class="btn btn-default1 btn-outline btn-xs card-header__button">Final 7</a>
              </center>                                   
            </div>     
            <!-- fin Encabezado weekends ocultos -->

            <!-- comienzo Encabezado por equipos -->
            <div class="card">                             
              <center>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/001.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/002.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/003.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/004.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/005.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/006.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/007.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/008.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/009.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/010.png" title="aca va el nombre del club completo"></a>
                  <a href="#" class="btn btn-default2 btn-outline btn-xs card-header__button"><img src="assets/webnueva/images/samples/logos/011.png" title="aca va el nombre del club completo"></a>                
              </center>                                   
            </div> 
            <!-- fin Encabezado por equipos -->


            <!-- Inicio de una fecha -->
            <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                  <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 155</b></span>
                      <h3 class="game-result__title">Weekend 12</h3>
                      <time class="game-result__league1"><b>Sabado, 20 de Marzo, 2017</b></time>
                  </header>                         
                  <!-- fin titulos -->                    
                  <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e002.jpg" alt="">
                            </figure>
                        <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Ciudad Voley</p></font></h2>
                        </div>
                  </div>
                  <!-- fin primer Equipo -->                
                  <!-- comienzo resultado medio -->
                  <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <h3 class="widget-game-result__title"><p>3 - 0</p></h3>
                          <div class="game-result__date"><font size="3"><p>25-22 / 25-22 / 25-21 <br> 26-24 / 15-15 </p></font></div>          
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports"><img src="assets/webnueva/images/tyc_tv.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                  </div>
                  <!-- fin resultado medio -->                   
                  <!-- comienzo segundo Equipo -->
                  <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e004.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>Gigantes del Sur</p></font></h2>
                        </div>
                  </div>
                  <!-- fin segundo Equipo -->
              </div>
            </div>
            </div>              
            <!-- fin de una fecha -->

            <!-- Inicio de una fecha -->
            <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                  <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 170</b></span>            
                      <h3 class="game-result__title">Cuartos de final 1 y 2</h3>
                      <time class="game-result__league1"><b>Sabado, 20 de Marzo, 2017</b></time>
                  </header>                         
                  <!-- fin titulos -->                    
                  <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e002.jpg" alt="">
                            </figure>
                        <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Ciudad Voley</p></font></h2>
                        </div>
                  </div>
                  <!-- fin primer Equipo -->                
                  <!-- comienzo resultado medio -->
                  <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <h3 class="widget-game-result__title"><p>3 - 0</p></h3>
                          <div class="game-result__date"><p>25-22 / 25-22 / 25-21 <br> 26-24 / 15-15 </p></div>         
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports"><img src="assets/webnueva/images/tyc_tv.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                  </div>
                  <!-- fin resultado medio -->                   
                  <!-- comienzo segundo Equipo -->
                  <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e004.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>Gigantes del Sur</p></font></h2>
                        </div>
                  </div>
                  <!-- fin segundo Equipo -->
              </div>
            </div>
            </div>              
            <!-- fin de una fecha -->

            <!-- Inicio de una fecha -->
            <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                  <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 155</b></span>
                      <h3 class="game-result__title">Weekend 12</h3>
                      <time class="game-result__league1"><b>Sabado, 20 de Marzo, 2017</b></time>
                  </header>                         
                  <!-- fin titulos -->                    
                  <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e002.jpg" alt="">
                            </figure>
                        <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Ciudad Voley</p></font></h2>
                        </div>
                  </div>
                  <!-- fin primer Equipo -->                
                  <!-- comienzo resultado medio -->
                  <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <h3 class="widget-game-result__title"><p>3 - 0</p></h3>
                          <div class="game-result__date"><font size="3"><p>25-22 / 25-22 / 25-21 <br> 26-24 / 15-15 </p></font></div>          
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports"><img src="assets/webnueva/images/tyc_tv.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                  </div>
                  <!-- fin resultado medio -->                   
                  <!-- comienzo segundo Equipo -->
                  <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e004.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>Gigantes del Sur</p></font></h2>
                        </div>
                  </div>
                  <!-- fin segundo Equipo -->
              </div>
            </div>
            </div>              
            <!-- fin de una fecha -->

            <!-- Inicio de una fecha -->
            <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                  <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 170</b></span>            
                      <h3 class="game-result__title">Cuartos de final 1 y 2</h3>
                      <time class="game-result__league1"><b>Sabado, 20 de Marzo, 2017</b></time>
                  </header>                         
                  <!-- fin titulos -->                    
                  <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e002.jpg" alt="">
                            </figure>
                        <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Ciudad Voley</p></font></h2>
                        </div>
                  </div>
                  <!-- fin primer Equipo -->                
                  <!-- comienzo resultado medio -->
                  <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <h3 class="widget-game-result__title"><p>3 - 0</p></h3>
                          <div class="game-result__date"><p>25-22 / 25-22 / 25-21 <br> 26-24 / 15-15 </p></div>         
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports"><img src="assets/webnueva/images/tyc_tv.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                  </div>
                  <!-- fin resultado medio -->                   
                  <!-- comienzo segundo Equipo -->
                  <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e004.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>Gigantes del Sur</p></font></h2>
                        </div>
                  </div>
                  <!-- fin segundo Equipo -->
              </div>
            </div>
            </div>              
            <!-- fin de una fecha -->

            <!-- Inicio de una fecha -->
      <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 660</b></span>
                      <h3 class="game-result__title">Final 3 y 4</h3>
                      <time class="game-result__date"><font size="1"></font></time>
                  </header>                         
                    <!-- fin titulos -->                    
                    <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e001.jpg" alt="">
                            </figure>
                          <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Alianza Jesus Maria</p></font></h2>
                        </div>
                    </div>
                    <!-- fin primer Equipo -->                
                    <!-- comienzo resultado medio -->
                    <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <p class="widget-game-result__title"><p>Jueves 25 de Junio <br> 22.00 hs.</p></p>
                          <div class="game-result__date"><font size="3"><p>Microest. Lomas de Zamora </p></font></div>             
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports Play"><img src="assets/webnueva/images/tyc_play.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                    </div>
                <!-- fin resultado medio -->                    
                    <!-- comienzo segundo Equipo -->
                    <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e008.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>PSM Voley</p></font></h2>
                        </div>
                    </div>
                    <!-- fin segundo Equipo -->
              </div>
        </div>
            </div>              
<!-- fin de una fecha --> 

            <!-- Inicio de una fecha -->
      <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 660</b></span>
                      <h3 class="game-result__title">Final 3 y 4</h3>
                      <time class="game-result__date"><font size="1"></font></time>
                  </header>                         
                    <!-- fin titulos -->                    
                    <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e001.jpg" alt="">
                            </figure>
                          <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Alianza Jesus Maria</p></font></h2>
                        </div>
                    </div>
                    <!-- fin primer Equipo -->                
                    <!-- comienzo resultado medio -->
                    <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <p class="widget-game-result__title"><p>Jueves 25 de Junio <br> 22.00 hs.</p></p>
                          <div class="game-result__date"><font size="3"><p>Microest. Lomas de Zamora </p></font></div>             
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports Play"><img src="assets/webnueva/images/tyc_play.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                    </div>
                <!-- fin resultado medio -->                    
                    <!-- comienzo segundo Equipo -->
                    <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e008.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>PSM Voley</p></font></h2>
                        </div>
                    </div>
                    <!-- fin segundo Equipo -->
              </div>
        </div>
            </div>              
<!-- fin de una fecha --> 


            <!-- Inicio de una fecha -->
      <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 660</b></span>
                      <h3 class="game-result__title">Final 3 y 4</h3>
                      <time class="game-result__date"><font size="1"></font></time>
                  </header>                         
                    <!-- fin titulos -->                    
                    <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e001.jpg" alt="">
                            </figure>
                          <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Alianza Jesus Maria</p></font></h2>
                        </div>
                    </div>
                    <!-- fin primer Equipo -->                
                    <!-- comienzo resultado medio -->
                    <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <p class="widget-game-result__title"><p>Jueves 25 de Junio <br> 22.00 hs.</p></p>
                          <div class="game-result__date"><font size="3"><p>Microest. Lomas de Zamora </p></font></div>             
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports Play"><img src="assets/webnueva/images/tyc_play.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                    </div>
                <!-- fin resultado medio -->                    
                    <!-- comienzo segundo Equipo -->
                    <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e008.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>PSM Voley</p></font></h2>
                        </div>
                    </div>
                    <!-- fin segundo Equipo -->
              </div>
        </div>
            </div>              
<!-- fin de una fecha --> 

            <!-- Inicio de una fecha -->
      <div class="card1">
              <div class="card__content1">                
                  <!-- comienzo titulos -->
                <header class="game-result__header1 game-result__header--alt">
                    <span class="game-result__league"><b>N° 660</b></span>
                      <h3 class="game-result__title">Final 3 y 4</h3>
                      <time class="game-result__date"><font size="1"></font></time>
                  </header>                         
                    <!-- fin titulos -->                    
                    <!-- comienzo primer Equipo -->
                  <div class="widget-game-result__main">                        
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                              <img src="assets/webnueva/images/e001.jpg" alt="">
                            </figure>
                          <div class="widget-game-result__team-info">
                              <h2 class="game-result__date"><font size="2"><p>Alianza Jesus Maria</p></font></h2>
                        </div>
                    </div>
                    <!-- fin primer Equipo -->                
                    <!-- comienzo resultado medio -->
                    <div class="widget-game-result__score-wrap">
                      <div class="widget-game-result__score">
                          <p class="widget-game-result__title"><p>Jueves 25 de Junio <br> 22.00 hs.</p></p>
                          <div class="game-result__date"><font size="3"><p>Microest. Lomas de Zamora </p></font></div>             
                            <a class="chac" href="#" data-toggle="tooltip" data-placement="bottom" title="TyC Sports Play"><img src="assets/webnueva/images/tyc_play.png"></i></a> <span style="font-weight:100;color:#CD3243"> | </span>  
                            <a href="informacion.html" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Más Información"><i class="fa fa-info-circle"></i></a> <span style="font-weight:100;color:#CD3243"> | </span> 
                            <a href="#" class="partidos-links__link" data-toggle="tooltip" data-placement="bottom" title="Estadísticas"><i class="fa fa-bar-chart"></i></a>                            
                        </div>                        
                    </div>
                <!-- fin resultado medio -->                    
                    <!-- comienzo segundo Equipo -->
                    <div class="widget-game-result__team widget-game-result__team--first">
                        <figure class="widget-game-result__team-logo">
                          <img src="assets/webnueva/images/e008.jpg" alt="">
                        </figure>
                        <div class="widget-game-result__team-info">
                            <h2 class="game-result__date"><font size="2"><p>PSM Voley</p></font></h2>
                        </div>
                    </div>
                    <!-- fin segundo Equipo -->
              </div>
        </div>
            </div>              
<!-- fin de una fecha --> 
           

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