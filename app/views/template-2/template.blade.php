<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <base href="{{asset('')}}">
    <meta charset="UTF-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>ACLAV</title>
         <!-- page styles -->
        <link rel="stylesheet" href="assets/template-2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/template-2/min/main.min.css">
        <link rel="stylesheet" href="assets/template-2/vendor/bootstrap-select/bootstrap-select.css">
   
        <link rel="stylesheet" href="assets/template-2/vendor/slider/slider.css">
        <link rel="stylesheet" href="assets/template-2/vendor/bootstrap-datepicker/datepicker.css">
        <link href="assets/estilosweb/images/favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="assets/template-2/bootstrap/css/menu.css"> 

       <style type="text/css">
        @media print{
            a[href]:after {
                content:"";
            }
        }
       </style>
       

        @yield('extraCss')



        <!-- 
        <link rel="stylesheet" href="assets/template-2/vendor/dropzone/dropzone.css">
        <link rel="stylesheet" href="assets/template-2/vendor/toastr/toastr.css">
        <link rel="stylesheet" href="assets/template-2/vendor/datatables/jquery.dataTables.css">

        <link rel="stylesheet" href="assets/template-2/vendor/toastr/toastr.css">
        <link rel="stylesheet" href="assets/template-2/vendor/datatables/jquery.dataTables.css">

        <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">

        -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="assets/template-2/vendor/modernizr.js"></script>
</head>


<!-- body -->

<body >
    <div class="app">



    <nav class=" header header-fixed  navbar navbar-default navbar-static-top bg-white" role="navigation">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <div class="brand bg-white width-auto">
                <a class="navbar-brand text-white" href="index-2.html"><img src="assets/estilosweb/images/logo_final_aclav.png"></a>
            </div>

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



       


        <section class="layout bg-white">
            <section class="main-content">
            
               <!-- <header class="header header-fixed navbar bg-dark">
                    <p class="navbar-text">
                            Bread
                    </p>
                </header>
                -->
                <div class="content-wrap">
                            @include('partials.msgs') 
                    <div class="row">
                            <div class="col-sm-12">
                            <!--@include('template-2.bread')-->
                                <section class="panel">
                                    <div class="panel-body">

                                     
                                       
                                        @yield('content')
                                     
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                <div class="site-overlay"></div>
            </section>
        </section>

        <div class="modal" id="modal">
            <div class="modal-dialog">     
                <div class="modal-content">
                     @yield('modal')
                </div>
            </div>
        </div>

    </div>
<!-- page scripts -->
     <!-- 
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    -->


    <script src="assets/template-2/min/main.min.js"></script>

    <script src="assets/template-2/vendor/dropzone/dropzone.js"></script>
    <script src="assets/template-2/vendor/parsley.js"></script>
    <script src="assets/template-2/vendor/jquery.maskedinput.min.js"></script>
    <script src="assets/template-2/vendor/fuelux/checkbox.js"></script>
    <script src="assets/template-2/vendor/fuelux/radio.js"></script>
    <script src="assets/template-2/vendor/fuelux/wizard.js"></script>
    <script src="assets/template-2/vendor/fuelux/pillbox.js"></script>
    <script src="assets/template-2/vendor/fuelux/spinner.js"></script>
    <script src="assets/template-2/vendor/slider/bootstrap-slider.js"></script>
    <script src="assets/template-2/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>


    <script src="assets/template-2/vendor/switchery/switchery.js"></script>
    <script src="assets/template-2/vendor/jquery.nestable.js"></script>

    <script src="assets/template-2/vendor/wysiwyg/jquery.hotkeys.js"></script>
    <script src="assets/template-2/vendor/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
   <!-- 
      
     <script src="assets/template-2/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/template-2/js/datatables.js"></script>
    <script src="assets/template-2/vendor/dropzone/dropzone.js"></script>

      <script src="assets/template-2/vendor/toastr/toastr.min.js"></script>

    -->
    <script src="assets/template-2/js/forms.js"></script>

   
   

   
    @yield('extraJs')

    <!--
    <script src="assets/template-2/vendor/jquery.nestable.js"></script>
   <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
      <script src="assets/template-2/vendor/toastr/toastr.min.js"></script>
   --> 

    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            menubar: false,
            statusbar: false,
            theme: "modern",
            width: 1000,
            height: 300,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor"
           ],
           content_css: "css/content.css",
           toolbar: "  styleselect formatselect fontselect fontsizeselect  | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons | insertfile undo redo |", 
           style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
         }); 
    </script>


    <script type="text/javascript">
        
        $(document).ready(function(){  

            // ajax
        $.get('getTemporadas',function(data){
             for(var i=0; i<data.length; i++) {
             $('#temporadas').append('<option value='+data[i].id+'>'+data[i].nombre_temporada +'</option>');
             }
        });
            
            $('#temporadas').on('change',function()
            {   
                $('#torneos').html('<option>Seleccionar Torneo</option>');
                $.get('getTorneos/'+$(this).val() ,function(data){
                    for(var i=0; i<data.length; i++) {
                     $('#torneos').append('<option value='+data[i].id+'>'+data[i].nombre_torneo +'</option>');
                    }
                });
            });
        

       
            $('#habilita_dni_si').on('click', function(){
                alert("si");
            });
            $('#habilita_dni_no').on('click', function(){
                alert("no");
            });
            $('#habilita_dni_pr').on('click', function(){
                alert("pr");
            });
            

            // confirma si elimina el registro (poner class="del" donde se desee)
            $(".del").click(function(){
                if (!confirm("Desea eliminar este registro?"))
                {
                 return false;
                }
            });

             $(".cerrar_temporada").click(function(){
                if (!confirm("Desea Cerrar Temporada ? "))
                {
                 return false;
                }
            });

             $(".borrar_torneo").click(function(){
                if (!confirm("Advertencia, si borra el torneo se eliminarán, los o2, las habilitaciones, los weekends, los legs, los costos y designaciones, Desde Continuar ?"))

                    if(!confirm("Esta seguro de continuar ?"))
                    { return false ; }
                {
                 return false;
                }
            });


             $(".presentar_o2").click(function(){
                if (!confirm("Una vez presentado el o2 no se puede volver a editar , desdea continuar ?"))
                {
                 return false;
                }
            });

             /*$('#datatable').dataTable({       
                     "aoColumnDefs" : [{
                     "bSortable" : false,
                     "aTargets" : [ "no-sort" ]
                 }]
                });
*/
           $('#modal').on('hidden.bs.modal', function () {
                $(this).removeData();
            });
            

            $('#my-select').multiSelect({
                //agrega los buscadores en el header del select
                selectableHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='buscar...'>&nbsp;",
                selectionHeader:  "<input type='text' class='form-control' autocomplete='off' placeholder='buscar...'>&nbsp;",
                
             afterInit: function(ms){
                
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e){
                  if (e.which === 40){
                    that.$selectableUl.focus();
                    return false;
                  }
                });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e){
                  if (e.which == 40){
                    that.$selectionUl.focus();
                    return false;
                  }
                });
                },
                afterSelect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                }

            });    

               
        });

        /*$(document).ready(function()
        {            
            //no filtra la ultima columna de las tabla    
            /*$('#datatable').dataTable({       
                "aoColumnDefs" : [ {
                "bSortable" : false,
                "aTargets" : [ "no-sort" ]
                }]
            });*/

        // });

    </script>



</body>
<!-- /body -->

</html>
