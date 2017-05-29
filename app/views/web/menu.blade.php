
<div class="navigationstrip stickynav navbar navbar-fixed-top">
        	<div class="custom-container">
            	<div class="row">
                   <div class="col-lg-12 col-md-9 col-sm-6 col-xs-4">
                    	<div class="navigation">
                           <div class="navbar yamm navbar-default">
                                <div class="row">
                                    



                                    
                                    
                                    <div class="navbar-header" bgcolor="#143965">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle" bgcolor="#143965">
                                            <img src="assets/estilosweb/images/b_menu.jpg" class="img-responsive"/>
                                        </button>
                                       
                                    </div>








                                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                           <li class="dropdown">
                                           	<a href="web"><img src="assets/estilosweb/images/logo_vs_menu.png" class="img-responsive"/></a></li>

                                            
                                            

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Competencias</a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                              
                                                                    <ul class="list-unstyled">
     @foreach(Temporada::with('Torneos')->where('actual','=',1)->get() as $temporada)
        <b style="color: red;">{{$temporada->nombre_temporada}}</b>

         @foreach(Torneos::where('temporada_id',$temporada->id)->where('muestra_web','=',1)->orderBy('posicion','ASC')->get() as $torneo )

              <li class="dropdown-submenu"><a tabindex="-1" href="#"><b>{{$torneo->nombre_torneo}}</b></a>
 <ul class="dropdown-menu">
            <li><a href="web/calendario/{{Crypt::encrypt($torneo->id)}}">Calendario </a></li>
            <li><a href="web/resultado/{{Crypt::encrypt($torneo->id)}}">Resultados</a></li>
            <li><a href="web/posicion/{{Crypt::encrypt($torneo->id)}}">Posiciones</a></li>
 </ul>
            </li>
           
           @endforeach  

    @endforeach

                                                            
                                    <li><a href="web/tribunal/{{Crypt::encrypt($torneo->id)}}"><b>Tribunal de Disciplina </b></a></li>
                                                                     
                                                                     

                                    <li class="dropdown-submenu"><a tabindex="-1" href="#"><b>Formula de Juego</b></a>
                                         <ul class="dropdown-menu">
                                                    <li><a href="web/formulacopaa">Liga Argentina de Voleibol</a></li>
                                                    <li><a href="web/formulacopab">Copa ACLAV</a></li>
                                                    <li><a href="web/formulacopac">Copa Argentina</a></li>
                                                    <!--<li><a href="web/formulacopad">Presudamericano</a></li>-->
                                                    <li><a href="web/formulacopae">Copa Master</a></li>
                                                    <li><a href="web/formulacopaf">Copa Desafío</a></li>
                                         </ul>
                                    </li>






                                                                    </ul>
                                                               

                                                                
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Equipos</a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="web/masculino">Participantes</a></li>
                                                                        <li><a href="web/estadio">Estadios</a></li>
                                                                       
                                                                   
                                                                        </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Estadísticas</a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        <li><b>Serie A1</b></li>
                                                                        <li><a href="web/estadisticai">Estadisticas Individuales</a></li>
                                                                        <li><a href="web/estadisticae">Estadisticas por Equipo</a></li>
                                                                        <li><a href="web/estadisticao">Antecedentes entre equipos</a></li>
                                                                        <li><a href="web/estadisticaj">Mejores Jugadores</a></li>
                                                                        <li><a href="web/estadisticac">Curiosidades</a></li>
                                                                        <li><a href="web/estadisticar">Record</a></li>
                                                                        
                                                                        </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Noticias</a>

                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        
                                                                        
                                                                        <li><a href="web/noticia">Noticias</a></li>
                                                                        <li><a href="web/entrevista">Entrevistas</a></li>
                                                                        <li><a href="web/especial">Especiales</a></li>
                                                                        
                                                                    </ul>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Multimedia</a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="web/galeriaprincipal">Fotogalería</a></li>
                                                                        <li><a href="web/archivo">Descargas</a></li>
                                                                        <li><a href="https://www.youtube.com/user/VoleyACLAV" target="_blank">YouTube</a></li>
                                                                        <li><b>Aplicación Mobile</b></li>
                                                                        <li><a href="https://play.google.com/store/apps/details?id=co.kaver.supervoley" target="_blank">Android</a></li>
                                                                        <li><a href="https://play.google.com/store/apps/details?id=co.kaver.supervoley" target="_blank">IOS</a></li>
                                                                     </ul>
                                                                 </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Marketing</a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="web/accion">Departamento de Marketing</a></li>
                                                                        <li><a href="web/sponsornew">Sponsors</a></li>
                                                                        
                                                                     </ul>
                                                                 </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" data-hover="dropdown">Institucional</a>
                                                <ul class="dropdown-menu">
                                                    <li> 
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="web/historia">Historia</a></li>
                                                                        <li><a href="web/autoridades">Autoridades ACLAV</a></li>
                                                                        <li><a href="web/staff">Staff ACLAV</a></li>
                                                                        <li><a href="web/social">ACLAV Social</a></li>
                                                                        <li><a  href="web/contacto">Contacto</a></li>
                                                                     </ul>
                                                                 </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            
                                             </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 