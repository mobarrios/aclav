<div class="sections11">

</div>
<style type="text/css">

.Rotate-90
{
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;  
}
</style>

@if($partidosDiarios->count() != 0)

  <div class="sections9">
  <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
                      <!-- Video Box Start -->
                      <div class="videoboxf">
                          
                              <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 "> 
                      <!-- empieza -->
                      <div>
                                                      
                                  <table width="100%" bgcolor="#143965">
                                      <tr>
                                          <td  bgcolor="#143965"><img src="assets/estilosweb/images/sv.jpg"></td>
                                    </tr>
                                </table>                          
                          
                       </div>
                      <!-- termina --> 
                  </div>

                  @foreach($partidosDiarios as $pxp)

                      <div id='pxpOnline'></div>
                      <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12"> 
                          <!-- empieza -->
                          <div>  
                                  
                              <table bgcolor="#cccccc" width="100%" class="table" border="1" bordercolor="#999999" >
                                  <tr>
                                      <td width="10" bgcolor="#ffffff" ><b><font face="Verdana, Arial" size="2" color="#143965"><small id="equipoLocal">{{$pxp->local_equipo_id->sigla}}</small></font></b></td>
                                      <td width="10" align="center" class="danger"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_total_local">{{$pxp->local_set}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_1_Local">{{isset($pxp->puntoPorSet(1)->puntos_local)? $pxp->puntoPorSet(1)->puntos_local : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_2_Local">{{isset($pxp->puntoPorSet(2)->puntos_local)? $pxp->puntoPorSet(2)->puntos_local : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_3_Local">{{isset($pxp->puntoPorSet(3)->puntos_local)? $pxp->puntoPorSet(3)->puntos_local : '0'}}</small></font></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_4_Local">{{isset($pxp->puntoPorSet(4)->puntos_local)? $pxp->puntoPorSet(4)->puntos_local : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small id="partido_{{$pxp->id}}_set_5_Local">{{isset($pxp->puntoPorSet(5)->puntos_local)? $pxp->puntoPorSet(5)->puntos_local : '0'}}</small></font></b></td>
                                   
                                  </tr>

                                  <tr>
                                      <td width="10"  bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2"  color="#143965"><small  id="equipoVisita">{{$pxp->visita_equipo_id->sigla}}</small></font></b></td>
                                      <td width="10" align="center" class="danger"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_total_visita">{{$pxp->visita_set}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_1_Visita">{{isset($pxp->puntoPorSet(1)->puntos_visita)? $pxp->puntoPorSet(1)->puntos_visita : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_2_Visita">{{isset($pxp->puntoPorSet(2)->puntos_visita)? $pxp->puntoPorSet(2)->puntos_visita : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_3_Visita">{{isset($pxp->puntoPorSet(3)->puntos_visita)? $pxp->puntoPorSet(3)->puntos_visita : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_4_Visita">{{isset($pxp->puntoPorSet(4)->puntos_visita)? $pxp->puntoPorSet(4)->puntos_visita : '0'}}</small></font></b></td>
                                      <td width="10" align="center" bgcolor="#ffffff"><b><font face="Verdana, Arial" size="2" color="#143965"><small id="partido_{{$pxp->id}}_set_5_Visita">{{isset($pxp->puntoPorSet(5)->puntos_visita)? $pxp->puntoPorSet(5)->puntos_visita : '0'}}</small></font></b></td>
                                      
                                  </tr>


                              </table> 
                                                       
                          </div>
                      </div>
                      
                  @endforeach

                          <!-- termina --> 
                  
                              
                      </div>
                      <!-- Video Box End --> 
                  </div>
    </div> 

@endif