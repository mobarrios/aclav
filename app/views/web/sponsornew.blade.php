@extends('web.base')
@section('contenido')
<br>
<div class="sections3">
    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
        <h4 class="media-heading"><p><font size="5" color="#f2293a">Sponsors</font></p></h4>
        <br>
        <br>
        <div class="media-body">
            <p><font size="3" color="#000000">Acompañan el desarrollo de la liga las siguientes marcas:</font></p>
        </div>
        <div class="media-body col-xs-12">
            <p><font size="3" color="#000000"><b>Main Sponsors</b></font></p>
        </div>
        @foreach(Sponsor::where('estado','=',2)->get() as $auspiciantes)
            <div class="media-body col-xs-12">
                <img  src="uploads/contenidos/sponsor/{{$auspiciantes->imagen}}"width="220" class="pull-left thumbnail">
            </div>
        @endforeach
        <div class="media-body col-xs-12">
            <p><font size="3" color="#000000"><b>Sponsors Oficiales</b></font></p>
        </div>
        @foreach(Sponsor::where('estado','=',1)->get() as $oficial)
            <div class="media-body col-xs-12">
                <img src="uploads/contenidos/sponsor/{{$oficial->imagen}}" width="220" class="pull-left thumbnail">
            </div>
        @endforeach
        <div class="media-body col-xs-12">
            <p><font size="3" color="#000000"><b>Sponsor Técnico </b></font></p>
        </div>
        @foreach(Sponsor::where('estado','=',3)->get() as $media)
            <div class="media-body col-xs-12">
                <img  src="uploads/contenidos/sponsor/{{$media->imagen}}" width="220" class="pull-left thumbnail">
            </div>
        @endforeach
        <div class="media-body col-xs-12">
            <p><font size="3" color="#000000"><b>Media Sponsor </b></font></p>
        </div>
        @foreach(Sponsor::where('estado','=',4)->get() as $media)
            <div class="media-body col-xs-12">
                <img  src="uploads/contenidos/sponsor/{{$media->imagen}}" width="220" class="pull-left thumbnail">
            </div>
        @endforeach
        <div class="media-body col-xs-12">
            <p><font size="3" color="#000000"><b>Auspiciantes</b></font></p>
        </div>
        @foreach(Sponsor::where('estado','=',0)->get() as $main)
            <div class="media-body col-xs-12">
                <img src="uploads/contenidos/sponsor/{{$main->imagen}}" width="220" class="pull-left thumbnail">

            </div>
        @endforeach
        
        
        
    </div>
</div>
               
@endsection


