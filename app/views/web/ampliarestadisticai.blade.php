@extends('web.base')
@section('contenido')
<br>
                    <div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                                
                                    <h2><font color="#f2293a">{{$models->cuerpo}}</font></h2>
                                    
                                    <div class="clearfix"></div>
                                    <div class="blogmetas">
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div> 
                                    <img style="float: left; margin-right:10px" src="uploads/contenidos/estadisticai/{{$models->imagen}}"></div>
                              </div>
                            </div>
                    <!-- Video Box End --> 
                </div>
                
                  

                
                
      @endsection
 