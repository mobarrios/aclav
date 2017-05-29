<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="http://aclav.datachost.com/public/assets/estilosweb/carro1/style.css" type="text/css" media="screen">
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/cufon-yui.js" type="text/javascript"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/cufon-replace.js" type="text/javascript"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/FF-cash.js" type="text/javascript"></script>
<script type="text/javascript" src="http://aclav.datachost.com/public/assets/estilosweb/carro1/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://aclav.datachost.com/public/assets/estilosweb/carro1/tms-0.3.js"></script>
<script type="text/javascript" src="http://aclav.datachost.com/public/assets/estilosweb/carro1/tms_presets.js"></script>
<script src="http://aclav.datachost.com/public/assets/estilosweb/carro1/jcarousellite_1.0.1.js" type="text/javascript"></script>



<script type="text/javascript">
$(document).ready(function () {
    $('.carousel .jCarouselLite').jCarouselLite({
        btnNext: '.carousel .next',
        btnPrev: '.carousel .prev',
        speed: 600,
        easing: 'easeOutQuart',
        vertical: false,
        circular: false,
        visible: 5,
        start: 0,
        scroll: 1
    });
});
</script>
</head>

<body>

<aside class="aside">
  <div class="carousel"> <a class="prev"></a> <a class="next"></a>
    <div class="carousel-container">
     
      <div class="jCarouselLite">
        <ul class="carousel-list ">

  
   @foreach(TorneoFaseLeg::whereRaw('CURDATE() BETWEEN fecha_inicio AND fecha_final')->get() as $leg )
     @foreach($leg->Partido as $partido)
          <li>
              <div class="cont">
                <div class="hora">{{$partido->dia}} {{$partido->hora}}</div>
                <div class="divisor"> | </div>
                <div class="equipo">{{$partido->local_equipo_id->sigla}} vs. {{$partido->visita_equipo_id->sigla}}</div>
              </div>
          </li>
      @endforeach
  @endforeach

         
         
        </ul>
      </div>
    </div>
  </div>
</aside>
</body>
</html>
