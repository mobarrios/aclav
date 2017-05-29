<!DOCTYPE html>
<html lang="es">
<head>

<base href="{{ asset('')}}">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACLAV - Asociación de Clubes Liga Argentina de Voleibol</title>
<!--// Responsive //-->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--// Stylesheets //-->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<link href="assets/estilosweb/css/normalize.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 




<script>
   $(document).ready(function()
   {
      $("#mostrarmodal").modal("show");
   });
</script>


<style type="text/css">
  .iconGris{
    -webkit-filter: grayscale(100%);
-moz-filter: grayscale(100%);
filter: grayscale(100%);
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
    filter: gray; /* IE6-9 */
    
  }
</style>




<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
    @include('web.menu')
<br>
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <img src="http://www.aclav.com/assets/estilosweb/images/popup.png" class="img-responsive">
     </div>
         
        
      </div>
   </div>
</div>



<br>


<div class="contents">
        <div class="custom-container">

           @yield('puntoxpunto') 


         
            
            <div class="row"> 
                
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection"> 
                    <!-- Contents Section Started -->
                    <div class="sections">
                        @yield('contenido')

                    </div>
                    
                    

                    <!-- Contents Section End --> 
                </div>
                <!-- Content Column End --> 
                <!-- INICIO TWITTER -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
                    <!-- Interactive Tabs Widget start -->
                    @include('web.lateral')
                    <!-- Recent Post Widget end -->

                </div>
                @include('web.sponsor')
            </div>
        </div>
    </div>

<!-- Footer Start -->
    <footer class="style1">
        <div class="custom-container">
           @include('web.footer') 
            
        </div>
    </footer>
    <!-- Footer End --> 

                
   

<!-- Wrapper End -->

<!--// Javascript //-->
<script type="text/javascript" src="assets/estilosweb/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/functions.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/responsiveCarousel.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/slimbox2.js"></script>



<!--// Menu Desplegable 
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
//-->
<script src="assets/estilosweb/js/bootstrap-hover-dropdown.js"></script>



<!--INICIO CODIGO ANALYTICS -->

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." :
"http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost +
"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-1567990-7");

pageTracker._setDomainName("none");

pageTracker._setAllowLinker(true);

pageTracker._trackPageview();

} catch(err) {}</script>

<!--FIN CODIGO ANALYTICS -->


<script>

    function pxp()
    {      
        $.get('web/pxp',function(data){

        for(var i=0; i < data.length; i++) {

            $('#divPXP').append(i);

            // $('#equipoLocal').text(data[i].local_sigla);
             //$('#equipoVisita').text(data[i].visita_sigla);
             
             //console.log(data[i].punto_partido);
           //  var punto_partido = data[i].punto_partido;

             $('#partido_'+ data[i].partido +'_set_total_local').text(data[i].set_local);
             $('#partido_'+ data[i].partido +'_set_total_visita').text(data[i].set_visita);

    

             for(var key=0 ; key < data[i].punto_partido.length; key++)
             {  


                  
                 // $('#partido_'+data[i].partido+'_set_1_Local').text(data[i].punto_partido[key].set_1_local);
                 // $('#partido_'+data[i].partido+'_set_1_Visita').text(data[i].partido);   
                
              
              
              if(data[i].punto_partido[key].set_numero == 1)
                {
                  $('#partido_'+data[i].partido+'_set_1_Local').text(data[i].punto_partido[key].set_1_local);
                  $('#partido_'+data[i].partido+'_set_1_Visita').text(data[i].punto_partido[key].set_1_visita);   
                }

              if(data[i].punto_partido[key].set_numero == 2)
                {
                  $('#partido_'+data[i].partido+'_set_2_Local').text(data[i].punto_partido[key].set_2_local);
                  $('#partido_'+data[i].partido+'_set_2_Visita').text(data[i].punto_partido[key].set_2_visita);   
                }

              if(data[i].punto_partido[key].set_numero == 3)
                {
                  $('#partido_'+data[i].partido+'_set_3_Local').text(data[i].punto_partido[key].set_3_local);
                  $('#partido_'+data[i].partido+'_set_3_Visita').text(data[i].punto_partido[key].set_3_visita);   
                }

              if(data[i].punto_partido[key].set_numero == 4)
                {
                  $('#partido_'+data[i].partido+'_set_4_Local').text(data[i].punto_partido[key].set_4_local);
                  $('#partido_'+data[i].partido+'_set_4_Visita').text(data[i].punto_partido[key].set_4_visita);   
                }

              if(data[i].punto_partido[key].set_numero == 5)
                {
                  $('#partido_'+data[i].partido+'_set_5_Local').text(data[i].punto_partido[key].set_5_local);
                  $('#partido_'+data[i].partido+'_set_5_Visita').text(data[i].punto_partido[key].set_5_visita);   
                }
             }
        
             console.log('---');


            // $('#set_Local_1_'+data[i].punto_partido.set ).text(data[i].punto_partido.puntos_local);
            // $('#set_Visita_1_'+data[i].punto_partido.set ).text(data[i].punto_partido.puntos_visita);
             
           // console.log(data[i].partido);  
           // console.log(data[i].punto_partido.puntos_local);


               // for(var ii=0 ; ii < punto_partido.length ; ii++)
               // {
                    //console.log(punto_partido[ii].set_numero);
              // }
        }          

      


             /*
             $('#equipoLocal').text(data.local_sigla);
             $('#equipoVisita').text(data.visita_sigla);
             
             $('#setLocal').text(data.set_local);
                $('#set1Local').text(data.set_local_1);
                $('#set2Local').text(data.set_local_2);
                $('#set3Local').text(data.set_local_3);
                $('#set4Local').text(data.set_local_4);
                $('#set5Local').text(data.set_local_5);
                
             $('#setVisita').text(data.set_visita);
                $('#set1Visita').text(data.set_visita_1);
                $('#set2Visita').text(data.set_visita_2);
                $('#set3Visita').text(data.set_visita_3);
                $('#set4Visita').text(data.set_visita_4);
                $('#set5Visita').text(data.set_visita_5);
                */
        });
    }
    
    function interval()
    {
       if($('#pxpOnline').length != 0)
       {

            setInterval(function()
            {
             pxp();
            }, 
            45000);
       }
    }

       // very simple to use!
    $(document).ready(function() 
    {

     
        interval();
     
        /*
        $.ajax({
            url: '/ajax',
            type: 'POST',
            data: {legajo: $("#legajo").val()},
            dataType: 'JSON',
            beforeSend: function() 
            {
                $("#respuesta").html('Buscando empleado...');
            }, error: function() 
            {
                $("#respuesta").html('<div> Ha surgido un error. </div>');
            }, success: function(respuesta) 
            {
                if (respuesta) 
                {

                   /* var html = '<div>';
                    html += '<ul>';
                    html += '<li> Legajo: ' + respuesta.legajo + ' </li>';
                    html += '<li> Nombre: ' + respuesta.nombre + ' </li>';
                    html += '<li> Apellido: ' + respuesta.apellido + ' </li>';
                    html += '<li> Area: ' + respuesta.area + ' </li>';
                    html += '</ul>';
                    html += '</div>';

                    $("#respuesta").html(respuesta);
                } 
                else 
                {
                    $("#respuesta").html('<div> No hay ningún empleado con ese legajo. </div>');
                }
            }
        });*/


    /*
    setInterval(function()
      {
        
        $val = parseInt($('#fer').text()) ;        
        
        $('#fer').text(parseInt($val)+1);

        
        $val = parseInt($('#pau').text()) ;        
        
        $('#pau').text(parseInt($val)+1);


      }, 3000);
    */
    
    
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>


</body>
</html>

