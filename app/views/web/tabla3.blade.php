<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="http://aclav.datachost.com/public/assets/estilosweb/slider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="http://aclav.datachost.com/public/assets/estilosweb/slider/jquery.bxslider.css" rel="stylesheet" />

<style type="text/css">
    .cont{
    text-align: center;
        height: 106;
    margin-top: -15;
    margin-right: 3%;
    background-color: #000000; 
    border: 1px;
    border-color: #ffffff;
    }


  .cont .hora
{
  width: 35%;
  font-size: 12px;
  font-family: "Tahoma", "Arial", sans-serif;
  color: white;
  float: left;
  margin-top: 2%;   /* height/2 = 500px / 2 */
  margin-right: 3%;
  margin-left: 8%;
}

.cont .divisor
{
    text-align: center;
    width: 7%;
    font-size: 20px;
    color: black;
    float: left;
    color: #143963;
    margin-top: 0%;   /* height/2 = 500px / 2 */
    margin-left: 0%;

}

.cont .equipo
{

    width:        14%;
    font-size:    12px;
    font-family:  "Tahoma", "Arial", sans-serif;
    color:        green;
    float:        left;
    margin-top:   0%;   /* height/2 = 500px / 2 */
    margin-right: 8%;

}

.cont .fer
{
    text-align: center;
    width:        100%;
    font-size:    14px;
    font-family:  "Tahoma", "Arial", sans-serif;
    color:        white;
    margin-top:   0%;   /* height/2 = 500px / 2 */
 }

.cont .medio
{
    text-align: center;
    background-color: #daa321; 
    border: 1px;
    border-color: #ffffff;   

}

</style>



<ul class="bxslider">
  @foreach(TorneoFaseLeg::whereRaw('CURDATE() BETWEEN fecha_inicio AND fecha_final')->get() as $leg )
  
       @foreach($leg->Partido as $partido)
        <li>
        <div class="cont">
          <center> 
            <div class="fer">{{date('d-m', strtotime($partido->fecha_inicio))}} {{$partido->dia}}<font color="#143963"> </font><font color="#ffffff" align="right">{{$partido->hora}}</font></div> 
            <div class="medio"><hr></div> 
            <div class="fer">{{$partido->local_equipo_id->sigla}}<font color="#143963"> </font><font color="#ffffff" align="left">{{$partido->visita_equipo_id->sigla}}</font></div>       
          </center>
        </div>
        
        </li>
     @endforeach
  @endforeach
</ul>

<script type="text/javascript">
    
$(document).ready(function(){
  $('.bxslider').bxSlider({
        slideWidth: 280,
        minSlides: 1,
        maxSlides: 5,
        slideMargin: 5,
        infiniteLoop: false,
        hideControlOnEnd: true,
        moveSlides: 5,


    });
});

</script>