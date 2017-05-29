@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                           

                        <div class="media">

                         
                        <h4 class="media-heading"><font color="#ff4f5e">{{$models->nombre}}</font></h4><br><br>
                            <div class="media-body"><address>
                              <strong>Escudo: </strong><img class="thumbnail" src="uploads/escudos/{{$models->escudo}}" width="50"><br>
                              <strong>Sigla ACLAV: </strong>{{$models->sigla}}<br>
                             
                              <br><br>
<center>

</center>
                                
                            </div>

                        </div>

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                