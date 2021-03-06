
<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>Cameo | Responsive Admin Dashboard</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="ui-bootstrap/css/bootstrap.min.css">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="ui-bootstrap/css/main.min.css">
    <!-- /core styles -->

    <!-- page styles -->
    <link rel="stylesheet" href="ui-bootstrap/css/slider.css">
    <link rel="stylesheet" href="ui-bootstrap/css/toastr.css">
    <!-- /page styles -->

    <meta href="{{ asset('assets/') }}" >
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="ui-bootstrap/js/modernizr.js"></script>
</head>

<!-- body -->

<body>
    <div class="app">

        <!-- top header -->
        <header class="header header-fixed navbar bg-white">

            <div class="brand bg-success">
                <a href="#" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

                <a href="index.html" class="navbar-brand text-white">
                    <i class="fa fa-microphone mg-r-xs"></i>
                    <span>Cameo
                        <b>ADMIN</b>
                    </span>
                </a>
            </div>

            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="Search Workspace">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="profile.html">
                        +Gerald Theodore Morris
                    </a>
                </li>

                <li class="notifications dropdown hidden-xs">
                    <a href="#" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <div class="badge badge-top bg-danger animated flash">3</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                        <div class="panel bg-white no-border no-margin">
                            <div class="panel-heading no-radius">
                                <small>
                                    <b>Notifications</b>
                                </small>
                                <small class="pull-right">
                                    <a href="#" class="mg-r-xs">mark as read</a>&#8226;
                                    <a href="#" class="fa fa-cog mg-l-xs"></a>
                                </small>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">
                                        <span class="pull-left mg-t-xs mg-r-md">
                                            <img src="img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
                                        </span>
                                        <div class="m-body show pd-t-xs">
                                            <span>Dean Winchester</span>
                                            <span>Posted on to your wall</span>
                                            <small>2 mins ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <span class="pull-left mg-t-xs mg-r-md">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                                <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </span>
                                        <div class="m-body show pd-t-xs">
                                            <span>145 MB download in progress.</span>
                                            <div class="progress progress-xs mg-t-xs mg-b-xs">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                </div>
                                            </div>
                                            <small>Started 23 mins ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <span class="pull-left mg-t-xs mg-r-md">
                                            <img src="img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
                                        </span>
                                        <div class="m-body show pd-t-xs">
                                            <span>Application</span>
                                            <span>Where is my workspace widget</span>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="panel-footer no-border">
                                <a href="#">See all notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="quickmenu mg-r-md">
                    <a href="#" data-toggle="dropdown">
                        <img src="img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="#">
                                <div class="pd-t-sm">
                                    gerald@morris.com
                                    <br>
                                    <small class="text-muted">4.2 MB of 51.25 GB used</small>
                                </div>
                                <div class="progress progress-xs no-radius no-margin mg-b-sm">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">Settings</a>
                        </li>
                        <li>
                            <a href="#">Upgrade</a>
                        </li>
                        <li>
                            <a href="#">Notifications
                                <div class="badge bg-danger pull-right">3</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">Help ?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="signin.html">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /top header -->

        <section class="layout">
            <!-- sidebar menu -->
            <aside class="sidebar canvas-left bg-dark">
                <!-- main navigation -->
                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-coffee"></i>
                                <span>Framework</span>
                            </a>
                        </li>
                        <li class="dropdown active show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-h"></i>
                                <span>UI Elements</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="buttons.html">
                                        <span>Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms.html">
                                        <span>Forms</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables.html">
                                        <span>Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">
                                        <span>Calendar</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="components.html">
                                        <span>Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="sortable.html">
                                        <span>Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chart.html">
                                        <span>Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="editor.html">
                                        <span>Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps.html">
                                        <span>Google Maps</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="vector.html">
                                        <span>Vector Maps</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets.html">
                                        <span>Widgets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icons.html">
                                        <span>Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <span>Grid</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="boxed.html">
                                        <span>Boxed</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="horizontal.html">
                                        <span>Horizontal menu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="horizontal_boxed.html">
                                        <span>Horizontal Boxed</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="small-sidebar.html">
                                        <span>Small sidebar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="right-sidebar.html">
                                        <span>Right Sidebar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="right-sidebar-collapsible.html">
                                        <span>Right Sidebar collapsible</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="both.html">
                                        <span>Mixed menus</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="collapsible.html">
                                        <span>Collapsible Menu</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="app.html">
                                        <span>App layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="mail.html">
                                <i class="fa fa-envelope"></i>
                                <span>Mailbox</span>
                                <div class="badge badge-opac pull-right">8</div>
                            </a>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-file"></i>
                                <span>Pages</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="tasks.html">
                                        <span>Tasks</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <span>Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signin.html">
                                        <span>Signin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html">
                                        <span>Signup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lock.html">
                                        <span>Lock Screen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <span>404 Page</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        <span>500 Page</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <span>Blank</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-gift"></i>
                                <span>Extras</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="mail_alt.html">
                                        <span>Mail Alt.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email.html">
                                        <span>Email Template</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="subscription.html">
                                        <span>Subscription</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <span>Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="feed.html">
                                        <span>Feed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="chat.html">
                                <i class="fa fa-comment"></i>
                                <span>Chat</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /main navigation -->


                <!-- footer -->
                <footer>
                    <div class="about-app pd-md animated pulse">
                        <a href="#">
                            <img src="img/about.png" alt="">
                        </a>
                        <span>
                            <b>Cameo</b>&#32;is a responsive admin template powered by bootstrap 3.
                            <a href="#">
                                <b>Find out more</b>
                            </a>
                        </span>
                    </div>

                    <div class="footer-toolbar pull-left">
                        <a href="#" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>

                        <a href="#" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>
                <!-- /footer -->
            </aside>
            <!-- /sidebar menu -->

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    Progress bars
                                </header>
                                <div class="panel-body">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>

                                    <small>Striped Progress Bars</small>
                                    <div class="progress progress-sm progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>

                                    <small>Animated Progress Bar</small>
                                    <div class="progress progress-sm progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                    <small>Stacked Progress Bars</small>

                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only">20% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                            <span class="sr-only">10% Complete (danger)</span>
                                        </div>
                                    </div>

                                    <small>Sizing</small>


                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>

                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>

                                </div>
                            </section>


                            <section class="panel">
                                <div class="panel-body tool-button">
                                    <button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top</button>
                                    <button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
                                    <button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
                                    <button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom</button>
                                    <button class="btn btn-sm btn-danger" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Toggle popover</button>
                                    <button class="btn btn-white btn-sm" data-toggle="modal" data-target=".bs-modal-sm">Modal</button>
                                    <button class="btn btn-white btn-sm" data-toggle="toastr">Toastr</button>
                                </div>
                            </section>

                            <section class="panel">
                                <header class="panel-heading">
                                    Dropdowns
                                </header>
                                <div class="panel-body demo">
                                    <div class="dropdown mg-r">
                                        <button class="btn dropdown-toggle sr-only" type="button" data-toggle="dropdown">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Action</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Another action</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Something else here</a>
                                            </li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle sr-only" type="button" data-toggle="dropdown">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation" class="dropdown-header">Dropdown header</li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Another action</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Something else here</a>
                                            </li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation" class="dropdown-header">Dropdown header</li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </section>

                            <section>
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Brand</a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active">
                                                <a href="#">Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Link</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Separated link</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">One more separated link</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li>
                                                <a href="#">Link</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </section>

                            <section class="panel bg-none">
                                <div class="text-center">
                                    <ul class="pagination pagination-lg">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center">

                                    <ul class="pagination">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center">

                                    <ul class="pagination pagination-sm">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="pager">
                                    <li>
                                        <a href="#">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#">Next</a>
                                    </li>
                                </ul>

                                <ol class="breadcrumb">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">UI Elements</a>
                                    </li>
                                    <li class="active">Breadcrumbs</li>
                                </ol>

                                <div class="well">Shattered Dremland!</div>
                            </section>
                        </div>
                        <div class="col-lg-6">
                            <section class="panel bg-none">
                                <div class="panel-group" id="accordion">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Your eyes can deceive you. Don't trust them. I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- I care. So, what do you think of her, Han? Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p>You don’t need to see his identification … These aren’t the droids you’re looking for … He can go about his business … Move along.</p>
                                                    <small>Obi-Wan Kenobi, Jedi Knight</small>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Your eyes can deceive you. Don't trust them. I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- I care. So, what do you think of her, Han? Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="panel">
                                <header class="panel-heading">Alerts</header>

                                <div class="panel-body">

                                    <div class="alert alert-success">
                                        <strong>Well done!</strong>You successfully read this important alert message.
                                    </div>
                                    <div class="alert alert-info">
                                        <strong>Heads up!</strong>This alert needs your attention, but it's not super important.
                                    </div>
                                    <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Warning!</strong>Best check yo self, you're not looking too good.
                                    </div>

                                    <div class="alert alert-danger">
                                        <strong>Oh snap!</strong>Change a few things up and try submitting again.
                                    </div>


                                    <div class="alert alert-danger fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p>Change this and that and try again.</p>
                                        <p>
                                            <button type="button" class="btn btn-danger btn-sm">Take this action</button>
                                            <button type="button" class="btn btn-white btn-sm">Or do this</button>
                                        </p>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <ul id="myTab2" class="nav nav-tabs">
                                    <li class="">
                                        <a href="#home" data-toggle="tab">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">Messages</a>
                                    </li>
                                    <li>
                                        <a href="#notifications" data-toggle="tab">Notifications</a>
                                    </li>
                                </ul>
                                <section class="panel">
                                    <div class="panel-body">
                                        <div id="myTabContent2" class="tab-content">
                                            <div class="tab-pane" id="home">
                                                <p>Home</p>
                                            </div>
                                            <div class="tab-pane active" id="profile">
                                                <p>Profile</p>
                                            </div>
                                            <div class="tab-pane " id="messages">
                                                <p>Messages</p>
                                            </div>
                                            <div class="tab-pane" id="notifications">
                                                <p>Notifications</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section>

                            <section>
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="pull-right">
                                        <a href="#messages2" data-toggle="tab">Messages</a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="#profile2" data-toggle="tab">Profile</a>
                                    </li>
                                    <li class="active pull-right">
                                        <a href="#home2" data-toggle="tab">Home</a>
                                    </li>
                                </ul>
                                <section class="panel">
                                    <div class="panel-body">
                                        <div id="myTabContent" class="tab-content">
                                            <div class="tab-pane active" id="home2">
                                                <p>Home</p>
                                            </div>
                                            <div class="tab-pane" id="profile2">
                                                <p>Profile</p>
                                            </div>
                                            <div class="tab-pane" id="messages2">
                                                <p>Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section>

                            <section class="panel bg-none">
                                <p class="text-center mg-b">
                                    <span class="label label-default">Default</span>
                                    <span class="label label-primary">Primary</span>
                                    <span class="label label-success">Success</span>
                                    <span class="label label-info">Info</span>
                                    <span class="label label-warning">Warning</span>
                                    <span class="label label-danger">Danger</span>
                                    <span class="label label-white">White</span>
                                    <span class="label label-dark">White</span>
                                </p>
                                <p class="text-center">
                                    <span class="badge bg-default">01</span>
                                    <span class="badge bg-primary">12</span>
                                    <span class="badge bg-success">35</span>
                                    <span class="badge bg-info">813</span>
                                    <span class="badge bg-warning">2134</span>
                                    <span class="badge bg-danger">55</span>
                                    <span class="badge bg-white">88</span>
                                    <span class="badge bg-dark">88</span>
                                </p>
                            </section>



                            <section class='panel'>
                                <header class="panel-heading">
                                    Bootstrap Sliders
                                </header>
                                <div class="panel-body">
                                    <div class="sliders text-center">
                                        <div class="slider-default">
                                            <input type="text" data-slider-value="1" value="1">
                                        </div>

                                        <div class="slider-primary">
                                            <input type="text" data-slider-value="2" value="2">
                                        </div>

                                        <div class="slider-warning">
                                            <input type="text" data-slider-value="3" value="3">
                                        </div>

                                        <div class="slider-success slider-striped">
                                            <input type="text" data-slider-value="5" value="5">
                                        </div>

                                        <div class="slider-dark slider-striped">
                                            <input type="text" data-slider-value="8" value="8">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="panel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">
                                                <div class="item active">

                                                    <div class="row">
                                                        <div class="col-sm-3 text-center">
                                                            <img class="img-circle avatar avatar-md" src="img/face4.jpg" alt="">
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>Your eyes can deceive you. Don't trust them. I don't know what you're talking about.</p>
                                                            <small>
                                                                <i>Someone famous</i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-sm-3 text-center">
                                                            <img class="img-circle avatar avatar-md" src="img/face5.jpg" alt="">
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>Your eyes can deceive you. Don't trust them. I don't know what you're talking about.</p>
                                                            <small>
                                                                <i>Another famous person</i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-sm-3 text-center">
                                                            <img class="img-circle avatar avatar-md" src="img/face1.jpg" alt="">
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>Your eyes can deceive you. Don't trust them. I don't know what you're talking about.</p>
                                                            <small>
                                                                <i>The same famous person</i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control">
                                                <i class="fa fa-chevron-left"></i>
                                            </a>
                                            <a data-slide="next" href="#quote-carousel" class="right carousel-control">
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    Panel Heading
                                    <small class="pull-right text-white">
                                        <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="#"></a>
                                        <a class="fa fa-refresh panel-refresh pd-r-xs" href="#"></a>
                                        <a class="fa fa-times panel-remove" href="#"></a>
                                    </small>
                                </div>
                                <div class="panel-body">
                                    Your eyes can deceive you. Don't trust them. I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- I care. So, what do you think of her, Han? Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

        <div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h5 class="modal-title text-center" id="myModalLabel">Subscription</h5>
                    </div>
                    <div class="modal-body">
                        <form id="payment-form" method="post">
                            <div class="form-group">
                                <label>Name on Card</label>
                                <input type="text" class="form-control input-sm">
                            </div>

                            <div class="form-group">
                                <label>Card Number</label>
                                <input type="text" autocomplete="off" class="form-control input-sm">
                            </div>

                            <div class="row">
                                <div class="col-xs-4">
                                    <label>CVC</label>
                                    <input autocomplete='off' class='form-control input-sm' placeholder='ex. 311' type='text'>
                                </div>
                                <div class='col-xs-4'>
                                    <label>Expiration</label>
                                    <input class='form-control input-sm' placeholder='MM' type='text'>
                                </div>
                                <div class='col-xs-4'>
                                    <label> </label>
                                    <input class='form-control input-sm' placeholder='YYYY' type='text'>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Pay »</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <script src="ui-bootstrap/min/main.min.js"></script>

    <!-- page scripts -->
    <script src="ui-bootstrap/js/slider/bootstrap-slider.js"></script>
    <script src="ui-bootstrap/js/toastr/toastr.js"></script>
    <script src="ui-bootstrap/js/jquery.blockUI.js"></script>
    <!-- /page scripts -->



    <script src="ui-bootstrap/js/components.js"></script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-50530436-1', 'nyasha.me');
    ga('send', 'pageview');
    </script>

</body>
<!-- /body -->

</html>