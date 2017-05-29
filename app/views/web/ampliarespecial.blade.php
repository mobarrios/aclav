@extends('web.base')
@section('contenido')

                    <div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                                
                                    <h2><font color="#f2293a">{{$especial->titulo}}</font></h2>
                                    <div class="clearfix"></div>
                                    <div class="blogmetas">
                                        <ul>
                                            <font color="#ffffff"><li> <i class="fa fa-align-justify"></i> {{$especial->created_at}}</font></li>
                                            
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div> 
                                     <img  style="float: left; margin-right:10px" src="uploads/contenidos/especial/{{$especial->imagen}}"  width="350"  class="thumbnail"> <font color="#ffffff">{{$especial->cuerpo}}</font></div>
                              </div><br><br><br><div class="fb-like" data-href="http://www.aclav.com.ar" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.aclav.com.ar" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                    <!-- Video Box End --> 
                </div>
                
                  

                
                
      @endsection
 