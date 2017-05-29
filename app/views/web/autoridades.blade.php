@extends('web.base')
@section('contenido')
<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
                    <h4 class="media-heading"><p><font size="5" color="#f2293a">Autoridades de la ACLAV</font></p></h4><br><br>
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            @foreach($model as $models)

                        

                        <div class="media">   
                        <img class="thumbnail" src="uploads/contenidos/autoridad/{{$models->imagen}}" width="100">
                            <div class="media-body">
                                <b> <p><font size="3" color="#f2293a">{{$models->nombre}} &nbsp;{{$models->apellido}} </font></p></b>
                                
                                <p> <font size="3" color="#000000"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;{{$models->cargo}}</font></p>
                                <p> <font size="3" color="#000000"><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;{{$models->club_actual}}</font></p>
                            </div>
                        </div>
                        <br>

                        @endforeach

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection