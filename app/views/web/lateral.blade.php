<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<br>




<div class="widget">

                        <p > 
                            @if(Banner::where('posicion','=',1)->count() != 0)
                            <a href="{{Banner::where('posicion','=',1)->first()->url}}" target="_blank">
                             <img src="uploads/contenidos/banner/{{Banner::where('posicion','=',1)->first()->imagen}}" class="img-responsive"/>
                            </a>
                            @endif
                        </p>

                        <br>
                        <div class="interactivetabs"> 
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="intertabs">
                                <li class="active"><a href="#twittertab" data-toggle="tab"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#blogtab" data-toggle="tab"><i class="fa fa-comments"></i>Facebook</a></li>
                                <li><a href="#abouttab" data-toggle="tab"><i class="fa fa-video-camera"></i>Instagram</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Twitter Tab Start -->
                                <div class="tab-pane fade in active" id="twittertab">
                                  <a class="twitter-timeline"  href="https://twitter.com/VoleyACLAV"  data-widget-id="487689182769192960">Tweets por @VoleyACLAV</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                                   </div>
                                <!-- Twitter Tab End -->
                                <!-- Blog Tab Start -->
                                <div class="tab-pane fade" id="blogtab">
                                    <ul class="recentposts">
                                        <div class="fb-like-box" data-href="https://www.facebook.com/VoleyACLAV?fref=ts" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                                    </ul>
                          </div>
                                <!-- Blog Tab End -->
                                <!-- Video List Tab Start -->

                                
                                <div class="tab-pane fade" id="abouttab">
                                    
                                        
                                            
                                                
                                                <iframe src="//widgets-code.websta.me/w/914058c623ae?ck=MjAxNi0wOC0wOFQxOTozMzowNi44Mjda" class="websta-widgets" allowtransparency="true" frameborder="0" scrolling="no" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe> 
                                                
                                        
                                    
                                </div>
                                <!-- Video List Tab End -->
                            </div>
                        </div>
                    </div>
                   
                    
                        <div class="widget">
                        
                    </div>
                    <br>
                    <div class="widget">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><br> <img src="assets/estilosweb/images/aclav_buscador.png"/><br></div><br><br><br><br>
                        <div class="search">
                            <form action="web/noticias/buscar" method="post">
                                <input name="buscar" type="text" placeholder="Ingrese Busqueda" />
                                <button class="btn btn-primary btn-xs backcolor"><i class="fa fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <center>
                        @if(Banner::where('posicion','=',0)->count() != 0)
                            @foreach(Banner::where('posicion','=',0)->get() as $ban)
                                <p class="heading">
                                    <a href="{{$ban->url}}" >
                                    <img src="uploads/contenidos/banner/{{$ban->imagen}}"  class="img-responsive"/>
                                    </a>
                                </p>
                            @endforeach
                        @endif
                  


                     

                    <br>
                    
                    </center>
                    <!-- <div class="widget">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><br> <img src="assets/estilosweb/images/aclav_news.png"/><br>
                      <font color="#5887bb">Suscribite a Nuestro Newsletter</font><br>
                      <font color="#ff5666">y enterate todo lo que pasa en el voley argentino !</font></div><br><br><br><br><br><br>
                      <div class="search">
                            <form action="web/news" method="post">
                                <input type="text" placeholder="Ingresar Email" name='email'/>
                                <button class="btn btn-primary btn-xs backcolor" ><i class="fa fa-arrow-right"></i></button>
                            </form>
                        </div>
                  </div>-->
                  



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="playeriframe">

                        
                        <!-- <iframe src="http://www.youtube.com/embed/4Lr5EB7H6Ac?rel=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                    </div>
                </div>


                  
                    <!-- Comments Widget End -->
                  


