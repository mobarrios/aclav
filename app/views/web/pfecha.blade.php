@extends('web.base')
@section('contenido')<br><br><br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 

    
                         <img src="assets/estilosweb/images/pf.png"/ width="241" height="50">
                        <div class="clearfix"></div><br><br><br><br><br><br>
                        <ul class="list-group">


                        <style type="text/css">
/*estilos visuales de la tabla*/
table {
    float: left;
    margin: -20px;
    width:14%;
    margin-left:1%;
    margin-right:1%;
    border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
    color: #666;
    font-size: 12px;
    text-shadow: 1px 1px 0px #fff;
    /*background: #eaebec;*/
    /*border: #fff 0px solid;*/
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 1px;
    /*-moz-box-shadow: 0 1px 2px #d1d1d1;*/
    /*-webkit-box-shadow: 0 1px 2px #d1d1d1;*/
    /*box-shadow: 0px 0px 5px 2px #d1d1d1;*/
    border-spacing:  5px 0;
}
table th {
    padding: 21px 25px 22px 25px;
    border-top: 0px solid #ffffff;
    border-bottom: 0px solid #ffffff;
    background: #ededed;
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top, #ededed, #ebebeb);
}
table tr {
    text-align: center;
    padding-left: 20px;
    border: #d2d2d2 2px solid !important;

}
table td {
    padding: 5px;
    /*border-top: 1px solid #ccc;*/
    /*border-bottom: 1px solid #ccc;*/
    border-left: 0px solid #ffffff;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa); 
      border-bottom: #d2d2d2 2px solid;
    text-align:left;
}

table td:first-child{
  width:10% !important;
}

table td:last-child{
  text-align: right;
}

table tr.even td {
    background: #f6f6f6;
    background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6);
    border-top: #d2d2d2 2px solid;
}

table tr:hover td {
    /*background: #f2f2f2;*/
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}

/*fin estilos visuales de la tabla*/

.table-container
{
    width: 18%;
    overflow-y: auto;
    _overflow: auto;
    margin: 0 0 0em;
    
}
/* añadimos las barras para dispositivos IOS */

.table-container::-webkit-scrollbar
{
    -webkit-appearance: none;
    width: 14px;
    height: 14px;

}
.table-container::-webkit-scrollbar-thumb
{
    border-radius: 0px;
    border: 0px solid #fff;
    background-color: rgba(0, 0, 0, .3);
}

  #separador, #separador td{
    background-color: white !important;
    border: none !important;;
  }

  #separador td,#separador:hover td{
    padding:3px !important;
    background: transparent !important;
  }

  .header{
    border: 2px solid #353333 !important;
  }

  .header td,.header:hover td{
    background: #353333;
    color: white !important;
  }

  .header font{
    color:white;
    text-shadow: 1px 1px 0px #353333;
  }
</style>
                           <ul class="bxslider">
@foreach(TorneoFaseLeg::whereRaw('CURDATE() BETWEEN fecha_inicio AND fecha_final')->get() as $leg )
  
       @foreach($leg->Partido as $partido)

<table width="80%" class="table-responsive">
    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>{{date('d-m', strtotime($partido->fecha_inicio))}} {{$partido->dia}} </b></td>
      <td><font face="Verdana, Arial" size="1"><b>{{$partido->hora}}</b></td>
      
    </tr>
    <tr class="even">
      <td> <img src="http://www.aclav.com/uploads/escudos/phpnfSSsZ_1453233172.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>{{$partido->local_equipo_id->sigla}}</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b></b></td>
    </tr>
    <tr id="separador">
      <td colspan="3"></td>
    </tr>
    <tr>
      <td> <img src="http://www.aclav.com/uploads/escudos/phpIRDotg_1442076736.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>{{$partido->visita_equipo_id->sigla}}</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b></b></td>
      </tr>

    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>Aca iria el nombre del Torneo</b></td>
      <td></td>
      
    </tr>
    
  </table>
  

<!-- <table width="20%">
    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>03/11/2016</b></td>
      <td><font face="Verdana, Arial" size="1"><b>Final</b></td>

    </tr>
    <tr class="even">
      <td> <img src="http://www.aclav.com/uploads/escudos/phpnfSSsZ_1453233172.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>OUV</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>1</b></td>
    </tr>
    <tr id="separador">
      <td colspan="3"></td>
    </tr>
    <tr>
      <td> <img src="http://www.aclav.com/uploads/escudos/phpIRDotg_1442076736.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>PSM</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>3</b></td>
      </tr>


  </table>
<table width="20%">
    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>03/11/2016</b></td>
      <td><font face="Verdana, Arial" size="1"><b>Final</b></td>

    </tr>
    <tr class="even">
      <td> <img src="http://www.aclav.com/uploads/escudos/phpRP1YDW_1473952899.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>AJM</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>1</b></td>
    </tr>
    <tr id="separador">
      <td colspan="3"></td>
    </tr>
    <tr>
      <td> <img src="http://www.aclav.com/uploads/escudos/phpG8OCYx_1471885351.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>RIV</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>3</b></td>
      </tr>


  </table>
<table width="20%">
    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>03/11/2016</b></td>
      <td><font face="Verdana, Arial" size="1"><b>Final</b></td>

    </tr>
    <tr class="even">
      <td> <img src="http://www.aclav.com/uploads/escudos/phpzRti1z_1473276379.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>UVS</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>1</b></td>
    </tr>
    <tr id="separador">
      <td colspan="3"></td>
    </tr>
    <tr>
      <td> <img src="http://www.aclav.com/uploads/escudos/phptkiiaV_1474481574.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>CDM</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>3</b></td>
      </tr>


  </table>

<table width="20%">
    <tr class="header">
      <td border="0" colspan="2" cellspacing="0" cellpadding="0"><font face="Verdana, Arial" size="1"  color="#000000"><b>03/11/2016</b></td>
      <td><font face="Verdana, Arial" size="1"><b>Final</b></td>

    </tr>
    <tr class="even">
      <td> <img src="http://www.aclav.com/uploads/escudos/phpzRti1z_1473276379.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>UVS</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>1</b></td>
    </tr>
    <tr id="separador">
      <td colspan="3"></td>
    </tr>
    <tr>
      <td> <img src="http://www.aclav.com/uploads/escudos/phptkiiaV_1474481574.png" width="30" height="30" alt=""/></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>CDM</b></font></td>
      <td> <font face="Verdana, Arial" size="4"  color="#143965"><b>3</b></td>
      </tr>


  </table>-->

@endforeach
  @endforeach


</ul>
                            
                        </ul>
                    
                    </div>
               
            </div>
       

                   

               
      @endsection        
                        

                