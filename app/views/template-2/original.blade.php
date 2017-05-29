<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>Cameo | Responsive Admin Dashboard</title>

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

<!-- body -->

<body>
    <div class="app">

    <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            @include('template-2/menu')
         
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown show-on-hover quickmenu mg-r-md">
                    <a data-toggle="dropdown" href="#">
                       <i class="fa fa-user avatar img-circle "></i>  {{Auth::user()->usuario}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="usuarios/perfil">Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout"><i class="fa fa-power-off fa-lg"></i>  Salir</a>
                        </li>
                    </ul>
                    </li>
                </ul>

        </div><!--/.nav-collapse -->

    </nav>

        <!-- top header -->
       
        <!-- /top header -->

        <section class="layout">
            <!-- main content -->
            <section class="main-content">

                <header class="header header-fixed navbar bg-dark">
                    <p class="navbar-text">Blank Template
                        <i>
                            <small>(Perfect place to get started)</small>
                        </i>
                    </p>
                </header>

                <!-- content wrapper -->
                <div class="content-wrap">

                    <div class="row">
                        <div class="col-sm-3">
                            <section class="panel">
                                <div class="panel-body">
                                    <span class="circle-icon bg-success">
                                        <i class="fa fa-microphone"></i>
                                    </span>
                                    <div class="stats-info">
                                        <h2 class="no-margin">5468</h2>
                                        New signups
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="panel">
                                <div class="panel-body">
                                    <span class="circle-icon bg-danger">
                                        <i class="fa fa-anchor"></i>
                                    </span>
                                    <div class="stats-info">
                                        <h2 class="no-margin">2,300</h2>
                                        Total equity
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="panel">
                                <div class="panel-body">
                                    <span class="circle-icon bg-default">
                                        <i class="fa fa-magnet"></i>
                                    </span>
                                    <div class="stats-info">
                                        <h2 class="no-margin">3,823</h2>
                                        Views today
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="panel">
                                <div class="panel-body">
                                    <span class="circle-icon bg-warning">
                                        <i class="fa fa-beer"></i>
                                    </span>
                                    <div class="stats-info">
                                        <h2 class="no-margin">1,293</h2>
                                        Hits today
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->

            </section>
            <!-- /main content -->

        </section>

    </div>

    <script src="assets/template-2/min/main.min.js"></script>

    <!-- page scripts -->
    <!-- /page scripts -->



    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-50530436-1', 'nyasha.html');
    ga('send', 'pageview');
    </script>

</body>
<!-- /body -->

</html>