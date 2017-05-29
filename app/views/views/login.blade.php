<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <base href="{{ asset('')}}">
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />

    <title>ACLAV</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/template-2/bootstrap/css/bootstrap.min.css">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="assets/template-2/min/main.min.css">
    <!-- /core styles -->

    <!-- page styles -->
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="assets/template-2/vendor/modernizr.js"></script>
</head>

<body class="bg-dark">
    <div class="app-user">
        <div class="user-container">
            <section class="panel panel-default">

                <header class="panel-heading" style="background-color:#143965 ">
                    <img src="assets/estilosweb/images/logo_vs2.png"/>
                </header>
                <div class="bg-white user pd-lg">
                    <h6>
                        <strong>Bienvenido.</strong></h6>

                        <form role="form" action="login" method="post">
                        <input name="usuario" type="text" class="form-control mg-b-sm" placeholder="Usuario" required autofocus>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">No cerrar sesión.
                        </label>
                        <div class="text-right mg-b-sm mg-t-sm">
                            <a href="#">Olvidaste la Contraseña</a>
                        </div>
                        <button class="btn btn-default btn-block" type="submit">Ingresar</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-50530436-1', 'nyasha.html');
    ga('send', 'pageview');
    </script>

</body>

</html>