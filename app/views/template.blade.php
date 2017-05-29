<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Aclav</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta href={{asset('')}}>
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- multiSelect -->
		<link href="assets/multiSelect/css/multi-select.css" rel="stylesheet" media="screen">

	

		<style type="text/css">
				body { padding-top: 70px; }
		</style>

	</head>
	<body>




		@include('navbar')
		
		<div class="container">
			<div class="row">
				<div class="span3">
					@yield('submenu')
				</div>
				
				<div class="span9">
					@yield('container')
						

					

                             
                    </div>
                            
                   
							




	</div>
</div>





	


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

		<!-- multiselect JavaScript -->
		<script src="assets/multiSelect/js/jquery.multi-select.js"></script>
		

		<!-- multiselect JavaScript -->
		<script src="assets/quickSearch/jquery.quicksearch.js"></script>

		<script type="text/javascript">  

		$('#search').quicksearch('#datos option', {
		    'delay': 100,
		    /*'selector': 'option',
		    'stripeRows': ['odd', 'even'],
		    'loader': 'span.loading',
		    'noResults': 'option',
		    'bind': 'keyup keydown',
		    'onBefore': function () {
		        console.log('on before');
		    },
		    'onAfter': function () {
		        console.log('on after');
		    },
		    'show': function () {
		        $(this).addClass('show');
		    },
		    'hide': function () {
		        $(this).removeClass('show');
		    }
		    'prepareQuery': function (val) {
		        return new RegExp(val, "i");
		    },
		    'testQuery': function (query, txt, _row) {
		        return query.test(txt);
		    });*/
		});



	
			$( function (){
 
                $("#datos").dblclick( function (){
                    $('#datos option:selected').appendTo("#recibe");
                    //$('#search').val("");
                });

                 $("#recibe").dblclick( function (){
                    $('#recibe option:selected').appendTo("#datos ");
                });
               
            });


			
			
	</script>


	</body>
</html>