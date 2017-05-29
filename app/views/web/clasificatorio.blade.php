@extends('web.base')
@section('contenido')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="contents">
        <div class="custom-container">
            <div class="row"> 
                <!-- Bread Crumb Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Estad&iacute;sticas</li>
                    </ol>
                </div>
                <!-- Bread Crumb End -->
                <!-- Content Column Start -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection"> 
                    <!-- Contents Section Started -->
                    <div class="sections">
                        <h2 class="heading">Clasificatorio</h2>
                        <div class="clearfix"></div>
                        <div class="media"></div>
                        <div class="media">
                          <div class="media-body">
                            <div class="media">
                              
                            </div>
                          </div>
                      </div>
                        <div class="media">
                          <div class="media-body">
                        <h4 class="media-heading">Aca Clasificatorio</h4>
                                <p> Aca va Clasificatorio.</p>
                            </div>
                        </div>
                        <div class="media"></div>
                        <div class="media">
                          <div class="media-body"> </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                    </div>
                    <!-- Contents Section End --> </div>
                <!-- Content Column End --> 
                <!-- Gray Sidebar Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
                    <!-- Interactive Tabs Widget start -->
                    <div class="widget">
                        <div class="interactivetabs"> 
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="intertabs">
                                <li class="active"><a href="#twittertab" data-toggle="tab"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#blogtab" data-toggle="tab"><i class="fa fa-comments"></i>Facebook</a></li>
                                <li><a href="#abouttab" data-toggle="tab"><i class="fa fa-video-camera"></i>Videos</a></li>
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
                                        <div class="fb-like-box" data-href="https://www.facebook.com/ACLAV.Voley" data-width="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                                    </ul>
                          </div>
                                <!-- Blog Tab End -->
                                <!-- Video List Tab Start -->
                                <div class="tab-pane fade" id="abouttab">
                                    <div class="videolistsmall">
                                        <ul class="bloglist">
                                            <li>
                                                <div class="media">
                                                	<a href="#" class="pull-left">
                                                    	<img class="media-object img-responsive hovereffect" src="assets/estilosweb/images/img16.jpg" alt="" />
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="blogdetail-double-sidebar.html">Muestra</a><a href="#l"></a></h5>
                                                        <ul>
                                                          <li><i class="fa fa-clock-o"></i>10:56</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                	<a href="#" class="pull-left">
                                                    	<img class="media-object img-responsive hovereffect" src="assets/estilosweb/images/img17.jpg" alt="" />
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="blogdetail-double-sidebar.html">Muestra</a><a href="video-detail-double-sidebar.html"></a></h5>
                                                        <ul>
                                                          <li><i class="fa fa-clock-o"></i>10:56</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                	<a href="#" class="pull-left">
                                                    	<img class="media-object img-responsive hovereffect" src="assets/estilosweb/images/img18.jpg" alt="" />
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="blogdetail-double-sidebar.html">Muestra</a><a href="#"></a></h5>
                                                        <ul>
                                                          <li><i class="fa fa-clock-o"></i>10:56</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Video List Tab End -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Interactive Tabs Widget End -->
                    <!-- Calendar Widget start -->
                    
                    <div class="clearfix"></div>
                    <!-- Calendar Widget End -->
                    <!-- Comments Widget start -->
                    <center>
                    <p class="heading"><img src="assets/estilosweb/images/svoley.jpg" class="img-responsive hovereffect" /></p>
                    <p class="heading"><img src="assets/estilosweb/images/appVoley300x250.jpg" class="img-responsive hovereffect" /></p>
                    </center>
                        <div class="widget">
                        
                    </div>
                    <div class="widget">
                      <h2 class="heading">Newsletter</h2>
                      <div class="search">
                            <form action="#">
                                <input type="text" placeholder="Ingresar Email" />
                                <button class="btn btn-primary btn-xs backcolor"><i class="fa fa-arrow-right"></i></button>
                            </form>
                        </div>
                  </div>
                    <!-- Comments Widget End -->
                    <!-- Small Video Posts Widget start -->
                  <div class="clearfix"></div>
                    <!-- Advertisement End -->
                    <!-- Recent Post Widget start -->
                    <div class="widget"></div>
                    <div class="clearfix"></div>
                    <!-- Recent Post Widget end -->
                </div>
                <!-- Gray Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Contents End -->

    <!-- Footer Start -->
    <!-- Footer End --> 
  

  

                
      @endsection
</html>          