<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{asset('')}}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACLAV - Asociación de Clubes Liga Argentina de Voleibol</title>
<!--// Responsive //-->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--// Stylesheets //-->
<link href="assets/estilosweb/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>



   @include('web.menu')
<div class="contents">
        <div class="custom-container">
            

            
            <div class="row"> 
                
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection"> 
                    <!-- Contents Section Started -->
                    <div class="sections">
                                   @include('web/weekend1')

                    </div>
                    

                    <!-- Contents Section End --> 
                </div>
                <!-- Content Column End --> 
                <!-- INICIO TWITTER -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
                    <!-- Interactive Tabs Widget start -->
                    <!-- Recent Post Widget end -->

                </div>

            </div>
        </div>
    </div>
    
  



<!-- Footer Start -->
    <footer class="style1">
        <div class="custom-container">
            
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50738310-1', 'softcircles.net');
  ga('send', 'pageview');

</script>
</body>
</html>