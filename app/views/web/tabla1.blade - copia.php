<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
  
  <title>Weekend</title>
  
  <link rel="stylesheet" href="http://www.aclav.com/assets/estilosweb/carro2/style.css" type="text/css" media="screen" />
    
  <script type="text/javascript" src="http://www.aclav.com/assets/estilosweb/carro2/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="http://www.aclav.com/assets/estilosweb/carro2/jcarousellite_1.0.1.pack.js"></script>
  <script type="text/javascript" src="http://www.aclav.com/assets/estilosweb/carro2/captify.tiny.js"></script>
  
  <style type="text/css">

.aside
{
 height: 55px;
 width: 90%;
}
.aside .carousel
{
  position:absolute;
}

.aside .carousel-container
{
  margin: 0 5%;
}

.cont
{

 border: 0px solid white;
 background-color: white;
 width: 120%;
 height: 40px;
float: absolute;
/*box-shadow: 5px 5px 5px ;*/
  
}

.cont .hora
{
  width: 40%;
  font-size: 13px;
  font-family: "Tahoma", "Arial", sans-serif;
  color: black;
  float: left;
  margin-top: 8%;   /* height/2 = 500px / 2 */
  margin-left: 8%;
}

.cont .divisor
{
    width: 10%;
    font-size: 20px;
    color: black;
    float: left;
 color: red;
   margin-top: 4%;   /* height/2 = 500px / 2 */

}

.cont .equipo
{
    width:        40%;
    font-size:    12px;
    font-family:  "Tahoma", "Arial", sans-serif;
    color:        grey;
    float:        right;
    margin-top:   3%;   /* height/2 = 500px / 2 */

}


</style>
  <script type="text/javascript">
    $(function() {
        $(".slider").jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev",
            circular: false,
            visible: 5,
            scroll: 3

        });
    });

    $(document).ready(function(){
      $('img.captify').captify({
        // all of these options are... optional
        // ---
        // speed of the mouseover effect
        speedOver: 'fast',
        // speed of the mouseout effect
        speedOut: 'normal',
        // how long to delay the hiding of the caption after mouseout (ms)
        hideDelay: 500, 
        // 'fade', 'slide', 'always-on'
        animation: 'slide',   
        // text/html to be placed at the beginning of every caption
        prefix: '',   
        // opacity of the caption on mouse over
        opacity: '0.7',         
        // the name of the CSS class to apply to the caption box
        className: 'caption-bottom',  
        // position of the caption (top or bottom)
        position: 'bottom',
        // caption span % of the image
        spanWidth: '150%'
      });
    });

  </script>
  
</head>

<body>
 
  <div id="wrap">
    <div id="list">

      <div class="prev"><img src="http://www.aclav.com/assets/estilosweb/images/prev.png" alt="prev" /></div>
          
        <div class="slider">
          <ul>
          
            @foreach(TorneoFaseLeg::where('fecha_inicio','>=', date('Y-m-d'))->limit(1)->get() as $leg)

              @foreach($leg->Partido as $partido)
                <li>
                  <div class="cont">
                    <div class="hora"><h5>{{$partido->local_equipo_id->sigla}} - {{$partido->visita_equipo_id->sigla}}</h5></div>
                    <div class="divisor"> | </div>
                    <div class="equipo"><h5>{{$partido->dia}} {{date('d-m', strtotime($partido->fecha_inicio))}} {{$partido->hora}}</h5></div>
                  </div>
                </li>
              @endforeach

            @endforeach         
          </ul>
        </div>
      <div class="next"><img src="http://www.aclav.com/assets/estilosweb/images/next.png" alt="next" /></div>
    </div>
  </div>
  
</body>
</html>