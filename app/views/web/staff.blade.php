@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
                    <h4 class="media-heading"><p><font size="5" color="#f2293a">Staff de la ACLAV</font></p></h4><br><br>
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                            
                    @foreach ($model  as $models)
                        <div class="avatar">  
                        
                        <img class="thumbnail" src="uploads/contenidos/staff/{{$models->imagen}}" width="100">
                            <div class="media-body">
                              <h5 class="media-heading"> <p><font size="3" color="#f2293a">{{$models->nombre}}&nbsp;{{$models->apellido}} </font></p></a></h5>
                                
                                <li><p><font size="3" color="#000000"><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;{{$models->email}}</font></p></li>
                                <li><p><font size="3" color="#000000"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;{{$models->cargo}}</font></p></li>
                                <li><p><font size="3" color="#000000"><i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;{{$models->tel}}</font></p></li>
                            </div>
                        </div>
                    <br>
                        

                       @endforeach
                    </div>
                    </div>
               
            </div>
</figure><br>
                   
 @endsection
                            
