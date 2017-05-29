<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="http://aclav.datachost.com/public/assets/estilosweb/slider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="http://aclav.datachost.com/public/assets/estilosweb/slider/jquery.bxslider.css" rel="stylesheet" />
<style type="text/css">
/* DivTable.com */
.divTable{
	display: table;
	width: 80%;
	height: 50%;

}
.divTableRow {
	display: table-row;
	border: 1px solid #999999;
	border-collapse: collapse;
	margin: 0 0 1em 0;
    caption-side: top;
}
.divTableHeading {
	background-color: #666;
	display: table-header-group;
}
.divTableCell1, .divTableHead {
	border: 0px solid #999999;
	background-color: #000000;
	display: table-cell;
	height: 50%;
	padding: 1px 1px;
	font-family:  "Tahoma", "Arial", sans-serif;
    color:        white;
    border-bottom: #d2d2d2 2px solid;
}
.divTableCell2, .divTableHead {
	border: 0px solid #999999;
	background-color: #000000;
	display: table-cell;
	padding: 1px 1px;
	font-family:  "Tahoma", "Arial", sans-serif;
    color:        white;
    text-align: right;
    border-bottom: #d2d2d2 2px solid;
}
.divTableCell, .divTableHead {
	border: 0px solid #999999;
	display: table-cell;
	padding: 1px 1px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
	width: 14px;
    height: 14px;
}
</style>
<ul class="bxslider">
  @foreach(TorneoFaseLeg::whereRaw('CURDATE() BETWEEN fecha_inicio AND fecha_final')->get() as $leg )
  
       @foreach($leg->Partido as $partido)
        <li>
<div class="divTable" style="border: 1px solid #000;" >
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell1"><font face="Verdana, Arial" size="1"  color="#ffffff"><b>{{date('d-m', strtotime($partido->fecha_inicio))}} {{$partido->dia}}</b></font></div>
<div class="divTableCell1">&nbsp;</div>
<div class="divTableCell2"><font face="Verdana, Arial" size="1"  color="#ffffff"><b>{{$partido->hora}}</b></font></div>
</div>

<div class="divTableRow">
<div class="divTableCell"><img src="http://www.aclav.com/uploads/escudos/phpnfSSsZ_1453233172.png" width="30" height="30" alt=""/></div>
<div class="divTableCell"><font face="Verdana, Arial" size="4"  color="#143965"><b>{{$partido->local_equipo_id->sigla}}</b></font></div>
<div class="divTableCell">&nbsp;</div>
</div>

<div class="divTableRow">
<div class="divTableCell"><img src="http://www.aclav.com/uploads/escudos/phpIRDotg_1442076736.png" width="30" height="30" alt=""/></div>
<div class="divTableCell"><font face="Verdana, Arial" size="4"  color="#143965"><b>{{$partido->visita_equipo_id->sigla}}</b></font></div>
<div class="divTableCell">&nbsp;</div>
</div>
</div>
</div>
 </li>
     @endforeach
  @endforeach
</ul>

<script type="text/javascript">
    
$(document).ready(function(){
  $('.bxslider').bxSlider({
        slideWidth: 265,
        minSlides: 1,
        maxSlides: 5,
        slideMargin: 5,
        infiniteLoop: false,
        hideControlOnEnd: true,
        moveSlides: 5,


    });
});

</script>