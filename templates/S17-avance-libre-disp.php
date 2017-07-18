<link rel="stylesheet" href="css/one-click.css" />

<div class="container one-click refinanciamiento ">

<div class="container-bck ">
	<header class="m-ofertas m-ofertas__encabezada">
		<h1 class="encabezada__titulo"><strong>Avance de libre disponibilidad</strong> a un Click</h1>  
	</header>  

	<div class="row">
		<div class="col-sm-6 col-informacion">
			<div class="cont">
				<div class="cont-body"> 
					<div class="top">
						<label>Monto :</label> 
						<span><strong>$ 3.500.000</strong>
						</span>
						<div class="clearfix"></div>
					</div>

					<div class="clearfix"></div>
					<hr>

					<label>Plazo</label>
					<select class="selectpicker ">
						<option>60 Meses</option>
						<option>70 Meses</option>
						<option>80 Meses</option>
						<option>90 Meses</option>
					</select>

					<label>Cuenta de Abono</label>
					<select class="selectpicker ">
						<option>0540-4567-3432675541</option>
						<option>0540-4567-3432675541</option>
						<option>0540-4567-3432675541</option>
					</select> 
				</div>
				<div class="cont-footer">
					<p>Tarjeta  de cargo Visa <strong class="pull-right">Enjoy xxxx-4144</strong></p>
					<p>Aumento de cupo temporal <i class="icon-24 blue m03-aviso"></i> <span class="pull-right">$3.500.000</span></p>
					<p class="block-warning" style="margin-bottom: 20px">
						 	Este avance no cambia tu cupo disponible actual, sólo aumenta temporalmente el cupo total de la Tarjeta. Una vez finalices el pago de tus cuotas mensuales volverás a cupo total original.
					</p>
				</div>
			</div>
		</div>
		<span class="arrow arrow-right"></span>
		<div class="col-sm-6 right-cont col-resultado">
			 
			<div class="loader"  >
				<div class="inner-loader">
					<img src="img/loader-un-click.gif" alt="">
					<p>Calculando tu cuota</p>
				</div>
			</div>
			 
			<div class="cont" style="height: 484px;">
				<div class="cont-resultado">
					<div class="cont-header row">   
						<div class="col-sm-12"><p>Tu cuota mensual será: <strong>$ 120.000</strong> </p> </div> 
					</div>
					<div class="cont-body" style="height: 390px;">  
						<table class="table-res">
							<tr>
								<th class="text-right">Monto del avance</th>
								<td class="text-left">3.500.000</td>
							</tr>
							<tr>
								<th class="text-right">Plazo:</th>
								<td class="text-left">24 meses</td>
							</tr>
							<tr>
								<th class="text-right">Tasa mensual:</th>
								<td class="text-left">1.13%</td>
							</tr>
							<tr>
								<th class="text-right"><i class="icon-16 gray d06-masinformacion tooltip-help zindex" title="" data-original-title="Indicador, expresado en forma de porcentaje, que revela el costo de un crédito en un periodo anual, cualquiera sea el plazo pactado para el pago."></i> Cae:</th>
								<td class="text-left">15,76 %</td>
							</tr>
							<tr>
								<th class="text-right">Costo Total:</th>
								<td class="text-left">$ 3.800.000</td>
							</tr>
							
						</table>

						<a href="#" class="btn btn-link" data-toggle="modal" data-target=".detalles-refinanciamiento-modal-lg">Detalles de este Crédito</a>

						<div class="item">
							<label for="acepto" class="ui-marmots-label-check marmots-label-left">
								<input class="tooltip-validation-invalid" id="acepto" type="checkbox" name="acepto1"> He leído y acepto los <a href="#" data-toggle="modal" data-target=".terminos-modal-lg">términos y condiciones</a> de este producto 
							</label> 
							<div class="tooltip top in error" style="display: none; top: -89px; left: -104.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><div class="tooltip-body-error"><p class="title">Alerta!</p><span>Debe aceptar haber leido los términos y condiciones para poder continuar</span></div><div class="tooltip-bubble-error"></div></div></div>
						</div>
						 
					
						<hr>

						<a href="?src=S18-productos-de-inversion.php"  class="btn btn-big2 btn-big-green "><i class="icono-btn icono-credito-verde"></i>Quiero este Crédito</a>
					</div>
				</div>
			</div>

		</div>

	</div>

	<!-- informacion -->
</div>

<!--Modal detalle -->
<div class="modal fade detalles-refinanciamiento-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<div class="modal-box">
			<div class="modal-header">
			    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Detalle del Refinanciamiento</h2>
				<div class="utility-icons">
					<span style="cursor: pointer;" type="button" onclick="javascript:descargarPDFConsumo();" class="icon-16 gray n01-imprimir"></span>
				</div>
			</div>
			<div class="modal-body no-bottom">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-no-border">
							<tbody><tr>
								<td>Monto Líquido del Avance</td>
								<td class="text-right">$ 3.500.000</td>
							</tr>
							<tr>
								<td>Monto cuota</td>
								<td class="text-right"> $ 120.000</td>
							</tr>
							<tr>
								<td>Impuestos</td>
								<td class="text-right"> $ 4.000</td>
							</tr>
							<tr>
								<td>Comisión</td>
								<td class="text-right"> $ 0</td>
							</tr>
							<tr>
								<td>Interés primer período</td>
								<td class="text-right">$ 20.000</td>
							</tr>
							<tr>
								<td>Fecha pago primera cuota</td>
								<td class="text-right"> 28-09-2016</td>
							</tr>
							
						</tbody></table>
					</div>

					<div class="col-md-6">
						<table class="table table-no-border">
							<tbody><tr>
								<td>Plazo (meses)</td>
								<td class="text-right">24</td>
							</tr>						
							<tr>
								<td>Tasa del interés</td>
								<td class="text-right">0,19%</td>
							</tr>
							<tr>
								<td>Costo total</td>
								<td class="text-right">$ 3.800.000</td>
							</tr>
							<tr>
								<td>Carga Anual Equivalente</td>
								<td class="text-right">15,76%</td>
							</tr>
							<tr>
								<td>Aumento de cupo temporal</td>
								<td class="text-right">$ 3.500.000</td>
							</tr> 
							<tr>
								<td>Nuevo cupo Total de tu Tarjeta</td>
								<td class="text-right">$ 4.500.000</td>
							</tr>
							
						</tbody></table>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>

<!--Fin modal detalle -->

<!--Modal terminos y condiciones-->

<div class="modal fade terminos-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<div class="modal-box">
			<div class="modal-header">
			    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Términos y Consideraciones</h2> 
			</div>
			<div class="modal-body no-bottom">
				<p>Si deseas otras condiciones, acude a la sucursal más cercana.</p>
				<p>Si has estado gestionando alguna solicitud de Crédito con tu Ejecutivo de cuentas el último tiempo, estos montos podrían no ser válidos en el momento de la confirmación.</p>
				<p>Otorgamiento sujeto a que se mantengan condiciones del cliente consideradas al momento de la evaluación.</p>
			</div>
		</div>
    </div>
  </div>
</div>

<div class="modal fade in" tabindex="-1" role="dialog" id="detalleSeguros" aria-labelledby="detalleSeguros" aria-hidden="false" >
	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
    		<a href="#" id="btnCloseModal" class="close-operation-prod" data-dismiss="modal">
    			<span class="close-icon"></span>
    		</a>
    		<div class="modal-box">
    			<div id="seccionSeguros" class="modal-body no-bottom infoSeguro"><h1 class="text-center">Seguro de Desgravamen</h1><p>Estimado cliente, su crédito de consumo debe ser contratado con un seguro de desgravamen, por políticas de riesgo del Banco BBVA. Usted podrá optar entre contratar el seguro intermediado por el Banco vía web junto con su crédito o a través del intermediario de su elección, en cuyo caso deberá realizar la contratación del crédito directamente en sucursal.</p><div class="text-center"><a href="https://www.bbva.cl/fbin/mult/resumen-desgravamen-consumo_tcm1106-549562.pdf?x=1465332546116" target="_blank" class="btn next"><span>Ver más información</span></a></div></div>
			</div>
    	</div>
    </div>
</div>

<div class="modal fade in" tabindex="-1" role="dialog" id="detalleSeguros2" aria-labelledby="detalleSeguros" aria-hidden="false" >
	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
    		<a href="#" id="btnCloseModal" class="close-operation-prod" data-dismiss="modal">
    			<span class="close-icon"></span>
    		</a>
    		<div class="modal-box">
    			<div id="seccionSeguros" class="modal-body no-bottom infoSeguro"><h1 class="text-center">Seguro de Cesantía</h1><p>Recuerde que el seguro de cesantía cubre hasta 4 cuotas de su crédito de consumo en caso de cesantía o incapacidad temporal. En momentos difíciles, Seguros BBVA le entrega tranquilidad.</p><div class="text-center"><a href="https://www.bbva.cl/fbin/mult/resumen-cesantia-consumo_tcm1106-547045.pdf?x=1465332801205" target="_blank" class="btn next"><span>Ver más información</span></a></div></div>
			</div>
    	</div>
    </div>
</div>

<div class="modal fade in" tabindex="-1" role="dialog" id="detalleSeguros3" aria-labelledby="detalleSeguros" aria-hidden="false" >
	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
    		<a href="#" id="btnCloseModal" class="close-operation-prod" data-dismiss="modal">
    			<span class="close-icon"></span>
    		</a>
    		<div class="modal-box">
    			<div id="seccionSeguros" class="modal-body no-bottom infoSeguro"><h1 class="text-center">Seguro de Vida</h1><p>Este seguro de Vida es un complemento al seguro de desgravamen. Indemniza a tus beneficiarios en caso de fallecimiento con un monto de libre disponibilidad de UF 500 por Muerte Natural y UF 1.000 en caso de Muerte accidental.</p><div class="text-center"><a href="https://www.bbva.cl/fbin/mult/resumen-vida-consumo_tcm1106-547046.pdf?x=1465332747013" target="_blank" class="btn next"><span>Vaer más información</span></a></div></div>
			</div>
    	</div>
    </div>
</div>
<!--Fin modal terminos y condiciones-->

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
<script type="text/javascript">
//seguro fraude
	$('.btn-big-green').click(function(e) {
			e.preventDefault();
			if($('#acepto').closest('label').hasClass('on')){
				window.location= '?src=S17-avance-libre-disp-comprobante.php';
			}
			else {
				$('#acepto').parent().next().show();
			}
		
		});
	

</script>