@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
        @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <div class="row">

          <!-- Content -->
          <div class="content col-md-12">

            <!-- Game Scoreboard -->
            <div class="card">
              <header class="card__header card__header--has-btn">
                <h4><p>Copa Aclav</p></h4>
                
              </header>
              <div class="card__content">
            
                <!-- Game Result -->
                <div class="game-result">
                  <section class="game-result__section">
                    <header class="game-result__header">
                      <div class="match-preview__match-place" align="center">
                      <img src="assets/webnueva/images/copa001.png" alt="">
                      </div>
                    </header>
                    <div class="game-result__content">          
                      <!-- 2nd Team / End -->
                    </div>
                   
                        
                  <div style="text-align: justify-all; font-size:3"> 
                  <p>
                  1. FECHA <br>
                  1.1. La Fase Clasificación se llevará a cabo entre el 20 de octubre y el 05 de noviembre de 2016.<br>
                  1.2. Las Finales de Copa ACLAV se llevaron a cabo el 21 y 22 de diciembre de 2016.<br><br>
                  2. INSTITUCIONES PARTICIPANTES<br>
                  2.1. Participan los once (11) equipos que adquirieron tal derecho para la edicion 2015-2016 de la Serie A1 Masculina ACLAV (ver CAPITULO 1, Consideraciones Generales).<br>
                  2.2. Los equipos mejor clasificados haran de cabeza de serie y seran quienes jugaron de local. Estos deber?n organizar deportivamente el grupo en todos los partidos que se jueguen, haciendose cargo de las mismas obligaciones que le corresponde a un equipo en condicion de local en la Liga Argentina. <br>
                  2.3. En caso que el asociado mejor clasificado no pueda organizar su grupo, la organizacion pasar? al equipo mejor clasificado que le sigue en el mismo, y asi sucesivamente hasta que un equipo acepte la organizacion.<br>
                  2.4. En el caso que ningun equipo del grupo pueda organizar, la ACLAV decidira donde se disputara y como se afrontaron los gastos del grupo.<br>
                  <br>
                  3. FASE CLASIFICACION<br>
                  3.1. La Fase Clasificación de la Copa ACLAV tendrá una duración de tres (3) días.<br>
                  3.2. La distribucion de los equipos en cada una de las zonas se realizara en base a:<br>
                  3.2.1. Los once (11) equipos participantes ser?n distribuidos en tres (3) zonas, de acuerdo a la tabla final de posiciones de la Liga Argentina de Voleibol 2015-2016 y a un criterio geografico.<br>
                  3.3. Se disputara con el sistema Round Robin (todos contra todos) entre los equipos participantes de una misma zona.<br>
                  3.4. Los puntos logrados en cada uno de los partidos contaran para la Tabla General de Posiciones de su zona en la Fase de Clasificacion.<br>
                  3.5. La distribucion de puntos por partido sera similar a la dispuesta para la Liga Argentina de Voleibol (Ver: Formula de Juego Liga Argentina de Voleibol, punto 5).<br>
                  3.6. La baja (voluntaria o producto de sanciones aplicadas) de equipos en competencia sera considerada como eliminacion del equipo, aplicandose la normativa dispuesta en el punto 6 del Capotulo 11 del Manual de Competencia ACLAV 2016-2017.<br>
                  3.7. Los criterios de desempate en la tabla general de posiciones respetaran lo dispuesto en los puntos 7.1.1 al 7.1.3 de la Formula de Juego de la Liga Argentina de Voleibol. En caso de persistir el empate se sortear la clasificacion entre los equipos involucrados.<br>
                  3.8. Finalizada la Fase de Clasificacion, la Tabla de Posiciones establecera la siguiente clasificaci?n para la fase final de la competencia:<br>
                  3.8.1. Los equipos clasificados 1° en su zona y el mejor 2° se clasificaran a la Fase Final de la Copa ACLAV.<br>
                  3.8.2. Los criterios de desempate en la tabla general de posiciones respetaran lo dispuesto en los puntos 7.1.1 al 7.1.3 de la Formula de Juego de la Liga Argentina de Voleibol. En caso de persistir el empate se sorteara la clasificacion entre los equipos involucrados.<br>
                  3.8.3. Los equipos clasificados 3ro y 4to en su zona en la Fase Clasificacion quedaron eliminados de la competencia.<br>
                  3.9. Definicion del mejor 2?: los equipos clasificados 2do. en su zona se ordenar?n en un ranking de acuerdo a la cantidad de puntos obtenidos con las zonas igualadas en cantidad de equipos.<br>
                  Para igualar en cantidad de equipos todas las zonas, a aquellas zonas que tengan mayor cantidad de equipos se les eliminara un partido.<br>
                  Los criterios de eliminacion ser?n: en el caso de un equipo con dos (2) partidos ganados, se eliminara el partido ganado con menor coeficiente de sets o puntos. En el caso de un equipo con un (1) solo partido ganado, se eliminara el partido perdido con menor coeficiente de sets o puntos.<br><br>

                  4. DISTRIBUCI?N DE GRUPOS PARA EL FIXTURE DE FASE CLASIFICACION<br>
                  GRUPO 1: UPCN San Juan Voley Club; Obras UDAP Voley; Gigantes del Sur<br>
                  GRUPO 2: Personal Bol?var; UNTreF Voley; Alianza Jesus Maria; PSM Voley<br>
                  GRUPO 3: Lomas Voley; Ciudad Voley; Deportivo Moron; Rivar Plate<br><br>

                  5. FASE FINAL COPA ACLAV<br>
                  5.1. Semifinales: La Fase Final se compondra de dos (2) series de enfrentamientos a un (1) partido.<br>
                  5.1.1. Los ganadores de las series en semifinal avanzaron a la fase final enfrentandose entre si. Los perdedores se enfrentaron por el tercer y cuarto puesto de la competencia.<br>
                  5.1.2. El tercer y cuarto puesto se definira mediante una (1) serie de enfrentamiento a un (1) partido.<br>
                  5.2. La serie final se compondra de una (1) serie de enfrentamiento a un (1) partido.<br>
                  5.3. El Ganador de la final sera el Campeon de la Copa ACLAV.<br>
                  DIA 1<br>
                  SEMIFINALES<br>
                  1ro GRUPO 1  vs  MEJOR 2do.<br>
                  1ro GRUPO 2  vs  1? GRUPO 3<br>
                  DIA 2<br>
                  3° PUESTO: Perdedores Semifinales<br>
                  FINAL: Ganadores Semifinales<br><br>

                  6. ASPECTOS ORGANIZATIVOS DE LA FASE FINAL DE COPA ACLAV<br>
                  6.1. La organizacio0n de todos los partidos que conforman la Fase Final de Copa ACLAV estaria a cargo de ACLAV junto con el Comite Organizador Local dispuesto por la entidad Organizadora.<br>
                  6.2. Las pautas, condiciones, programas, aspectos organizativos, logistica, entre otros, sera comunicado oportunamente por la Direccion de Competencias ACLAV.
                  </p>


                   

          </div>
        </div>

      </div>
    </div>
    </div>
    </div></div>
    </div>

@endsection
