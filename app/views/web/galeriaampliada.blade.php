@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <!-- Video Box Start -->
                    

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <!-- Contents Section Started -->
                    <div class="sections">
                        
                        <div class="clearfix"></div>
                        <div class="row">
                          @foreach($models as $imagen)
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure class="thumbnail"> 
                                <a href="uploads/contenidos/galeria/{{$imagen->GaleriaSub->Galeria->id}}/{{$imagen->GaleriaSub->id}}/{{$imagen->imagen}}"  class="lightbox-gallery"> 
                                <img src="uploads/contenidos/galeria/{{$imagen->GaleriaSub->Galeria->id}}/{{$imagen->GaleriaSub->id}}/{{$imagen->imagen}}" width="350" height="173">

                                 </a>
                                 <br>
                                <p><font size="3" color="#5887bb">Crédito: {{$imagen->owner}}</font>  </p>  
                                    
                                </figure>
                            </div>
                            @endforeach
                        </div>
                        {{$models->links()}}
                    </div>   
                    </div> </div>
</div>
      @endsection        
                        
