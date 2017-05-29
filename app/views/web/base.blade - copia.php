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
<link href="assets/estilosweb/css/normalize.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
    @include('web.menu')
<br>
<br>
<br>
<br>

<div class="contents">
        <div class="custom-container">
            @yield('puntoapunto')
           
         
            
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

                
     <a href="#" class="pull-right gotop btn btn-primary backcolor"> <i class="glyphicon glyphicon-hand-up"></i> </a>

<!-- Wrapper End -->

<!--// Javascript //-->
<script type="text/javascript" src="assets/estilosweb/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/functions.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/responsiveCarousel.js"></script>
<script type="text/javascript" src="assets/estilosweb/js/slimbox2.js"></script>



<!--// Menu Desplegable //-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="assets/estilosweb/js/bootstrap-hover-dropdown.js"></script>






<script>

    function pxp()
    {
         $.get('web/pxp',function(data){
             $('#fer').text(data.puntos_local);
             $('#pau').text(data.puntos_visita);
        });
    }
    
    function interval()
    {
        setInterval(function()
        {
           pxp();
           console.log('paso');
        }, 3000);
    }

       // very simple to use!
    $(document).ready(function() 
    {

     //   interval();
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

