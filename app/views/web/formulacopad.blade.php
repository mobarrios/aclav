@extends('web.base')
@section('contenido')
<br>
                    <div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                                @foreach($model as $models)
                                    <h4><p><font size="5" color="#f2293a">Presudamericano</font></p></h4>
                                    

                                    <div class="blogmetas">
                                        <ul>
                                           <br><br>
                                            
                                        </ul>
                                    </div>
                                    <font color="#000000">
                                    <div> <a href="uploads/contenidos/formulacopad/{{$models->imagen}}" class="lightbox-gallery img-responsive">
                                    <img style="float: left; margin-right:10px" src="uploads/contenidos/formulacopad/{{$models->imagen}}"  width="350"  height="250" class="thumbnail"></a><p><font size="3" color="#000000">{{$models->cuerpo}}</font></p></div>
                              </div><br><br>

                              @endforeach
                            </div>
                    <!-- Video Box End --> 
                </div>
                
                  

                
                
      @endsection
 