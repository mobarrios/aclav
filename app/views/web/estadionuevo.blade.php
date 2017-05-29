@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                        <figure> 
                            <!-- Video Thumbnail Start --> 
                           

                        <div class="media">

                        
                        <h4 class="media-heading"><p><font size="5" color="#f2293a">{{$models->nombre}}</font></p></h4><br><br>
                            <div class="media-body"><address>
                              <strong><p><font size="3" color="#000000">Dirección: </strong>{{$models->direccion}}</font></p><br>
                              <strong><p><font size="3" color="#000000">Ciudad: </strong>{{$models->ciudad}}</font></p><br>
                              <strong><p><font size="3" color="#000000">Provincia: </strong>{{$models->provincia}}</font></p><br>
                              <strong><p><font size="3" color="#000000">Teléfono: </strong>{{$models->telefono}}</font></p><br><br>
                              <strong><p><font size="3" color="#000000">Capacidad: </strong>{{$models->capacidad}}</font></p><br>
                              
                              <div class="mapsec"> {{$models->mapa}} </div>
                              <br><br>
<center>
<div class="row">
                              <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                              <a href="uploads/estadio/{{$models->imagen}}" class="lightbox-gallery">
                              <img src="uploads/estadio/{{$models->imagen}}" class="thumbnail" width="150">
                              </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                              <a href="uploads/estadio/{{$models->imagen1}}" class="lightbox-gallery">
                              <img src="uploads/estadio/{{$models->imagen1}}" class="thumbnail" width="150">
                              </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                              <a href="uploads/estadio/{{$models->imagen2}}" class="lightbox-gallery">
                              <img src="uploads/estadio/{{$models->imagen2}}" class="thumbnail" width="150">
                              </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                              <a href="uploads/estadio/{{$models->imagen3}}" class="lightbox-gallery">
                              <img src="uploads/estadio/{{$models->imagen3}}" class="thumbnail" width="150">
                              </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                              <a href="uploads/estadio/{{$models->imagen4}}" class="lightbox-gallery">
                              <img src="uploads/estadio/{{$models->imagen4}}" class="thumbnail" width="150">
                              </a>
                              </div>
 </div>
</center>
                                
                            </div>

                        </div>

                       
                    </div>
                    </div>
               
            </div>
       
  
</figure>
                   

  

                
      @endsection        
                        

                
                