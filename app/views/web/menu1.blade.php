

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body { padding-top: 70px; min-height: 410px }
    .tab-content p { padding: 10px 0; }
  </style>

  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="navigationstrip stickynav">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/">INICIO</a>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated">SERIE A1 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Calendario</a></li>
              <li><a href="#">Resultados</a></li>
              <li><a href="#">Posciones</a></li>
              <li><a href="#">Estadisticas</a></li>
              <li><a href="#">Llave Play Off</a></li>
              <li><a href="#">Copa ACLAV 2014</a></li>
              <li><a href="#">Clasificatorio Sudamericano</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">SERIE A2 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Calendario</a></li>
              <li><a tabindex="-1" href="#">Resultados</a></li>
              <li><a tabindex="-1" href="#">Posciones</a></li>
              <li><a tabindex="-1" href="#">Estadisticas Individuales</a></li>
              <li><a tabindex="-1" href="#">Estadisticas por Equipo</a></li>
              
<!--               
              BOOTSTRAP 3 DOES NOT SUPPORT SUBMENUS: https://github.com/twbs/bootstrap/pull/6342#issuecomment-11594010
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">I Am Said Submenu</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Why Would</a></li>
                  <li><a tabindex="-1" href="#">A Home Tab</a></li>
                  <li><a tabindex="-1" href="#">Have Dropdowns?</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">One More Time! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Menu Item 1</a></li>
                      <li><a tabindex="-1" href="#">Menu Item Blue</a></li>
                    </ul>
                  </li>

                </ul>
              </li>    
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Got Hover Dropdowns?</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Why Would</a></li>
                  <li><a tabindex="-1" href="#">A Home Tab</a></li>
                  <li><a tabindex="-1" href="#">Have Dropdowns?</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">One More Time! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Menu Item 1</a></li>
                      <li><a tabindex="-1" href="#">Menu Item Blue</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
-->
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">NOTICIAS <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Entrevistas</a></li>
              <li><a tabindex="-1" href="#">Especiales</a></li>
              <li><a tabindex="-1" href="#">Noticias</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">EQUIPOS <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Serie A1</a></li>
              <li><a tabindex="-1" href="#">Estadios A1</a></li>
              <li><a tabindex="-1" href="#">Serie A2</a></li>
              <li><a tabindex="-1" href="#">Liga Femenina</a></li>
              <li><a tabindex="-1" href="#">Estadios LAF</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">TRIBUNAL <b class="caret"></b></a>
            
          </li>


         <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">MULTIMEDIA <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Galerías ACLAV</a></li>
              <li><a tabindex="-1" href="#">ACLAV Tv</a></li>
              <li><a tabindex="-1" href="#">Descargas</a></li>
              <li><a tabindex="-1" href="#">Plataforma de Video</a></li>
              <li><a tabindex="-1" href="#">Aplicación Mobile Android</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">INSTITUCIONAL <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Staff ACLAV</a></li>
              <li><a tabindex="-1" href="#">Autoridades ACLAV</a></li>
            </ul>
          </li>
        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  </header><!-- .container -->

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

</body>
</html>