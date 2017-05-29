<br>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sections3">
            <h4 class="media-heading"><p><font size="5" color="#f2293a">Galería de Fotos</font></p></h4><br><br>
            <div class="row">

                @foreach($galerias as $galeria)
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <center><h4><p><font size="3" color="#000000">{{$galeria->titulo}}</font></p></h4></center>
                        <a href="web/galeriaampliada/{{$galeria->id}}" class="thumbnail">
                            <img src="uploads/contenidos/galeria/{{$galeria->Galeria->id}}/{{$galeria->imagen}}">
                        </a>
                       <p><font size="3" color="#000000"> Crédito: {{$galeria->fuente}}</font></p>
                 </div>
                @endforeach
            </div>
        </div>
    </div>