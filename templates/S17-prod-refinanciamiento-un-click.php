<link rel="stylesheet" href="css/one-click.css" />

<div class="container one-click refinanciamiento ">

<div class="container-bck ">
	<header class="m-ofertas m-ofertas__encabezada">
		<h1 class="encabezada__titulo"><strong>Tu Crédito de Consumo</strong> a un Click</h1>  
	</header>  

	<div class="row">
		<div class="col-sm-6 col-informacion">
			<div class="cont">
				<div class="cont-body"> 
					<div class="top">

						<label>Monto a Refinanciar:</label> <span><strong>$ 3.893.446</strong></span>

						<div class="clearfix"></div>

						<div class="monto clearfix">
							<label>Monto adicional:</label>
							<input id="input-credito" type="text" maxlength="15" value="5000000" class="form-control form-light amount formato required campoOneclick no-dollar " name="credito" data-msg-greater="El valor debe ser mayor o igual a $100.000" data-msg-smaller="El valor debe ser menor o igual a $5.000.000" greater="99.999" smaller="5.000.001"> 
							<div class="tooltip top in" style="display: none; top: -10px; left: 173.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><div class="tooltip-body-error"><p class="title">Alerta!</p><span>El valor debe ser menor o igual a $5.000.000</span></div><div class="tooltip-bubble-error"></div></div></div>
						</div> 
						<label>Monto solicitado:</label> <span>$ 10.893.446</span>

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
					<h3>¿Quieres mejorar tu protección? Selecciona los mejores seguros para ti</h3>

					<div class="fila">
						<small>Nivel de protección</small>
					</div>
					<div class="progressbar-container">
						<div class="row">
					  		<div class="col-md-1 col-sm-1 col-xs-1 text-left min">Min</div>
					  		<div class="col-md-10 col-sm-10 col-xs-10">
					  			<div aria-valuenow="50" aria-valuemax="50" aria-valuemin="50" role="progressbar" class="progressbar-bar ui-progressbar ui-widget ui-widget-content ui-corner-all">
					  				<div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 20%"></div> 
					  			</div>
					  		</div>
					  		<div class="col-md-1 col-sm-1 col-xs-1 max-bar text-right">Máx</div>
					  	</div> 
					</div>

					<label for="seguro1" class="ui-marmots-label-check marmots-label-left ">
						<input id="seguro1" type="checkbox" name="seguro"  disabled="disabled" checked> Seguro de Desgravamen
						<i data-toggle="modal" data-target="#detalleSeguros"  class="icon-16 gray d06-masinformacion tooltip-help zindex" title="" ></i>

					</label>
					<label for="seguro2" class="ui-marmots-label-check marmots-label-left">
						<input id="seguro2" type="checkbox" name="seguro"> Seguro de Cesantía
						<i data-toggle="modal" data-target="#detalleSeguros2"  class="icon-16 gray d06-masinformacion tooltip-help zindex" title=""  ></i>
					</label>
					<label for="seguro3" class="ui-marmots-label-check marmots-label-left">
						<input id="seguro3" type="checkbox" name="seguro"> Seguro de Vida
						<i data-toggle="modal" data-target="#detalleSeguros3" class="icon-16 gray d06-masinformacion tooltip-help zindex" title="" ></i>
					</label>

					


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
			 
			<div class="cont">
				<div class="cont-resultado">
					<div class="cont-header row">   
						<div class="col-sm-12"><p>Tu cuota mensual será: <strong>$ 217.878</strong> <small>(Cuota actual $225.000)</small></p> </div> 
					</div>
					<div class="cont-body">  
						<table class="table-res">
							<tr>
								<th class="text-right">Tasa Mensual:</th>
								<td class="text-left">1,13 %</td>
							</tr>
							<tr>
								<th class="text-right">Plazo:</th>
								<td class="text-left">60 meses</td>
							</tr>
							<tr>
								<th class="text-right">Monto Solicitado:</th>
								<td class="text-left">$ 9.000.000</td>
							</tr>
							<tr>
								<th class="text-right"><i class="icon-16 gray d06-masinformacion tooltip-help zindex" title="" data-original-title="Indicador, expresado en forma de porcentaje, que revela el costo de un crédito en un periodo anual, cualquiera sea el plazo pactado para el pago."></i> Cae:</th>
								<td class="text-left">15,76 %</td>
							</tr>
							<tr>
								<th class="text-right">Costo Total del Crédito:</th>
								<td class="text-left">$ 13.064.820</td>
							</tr>
							<tr>
								<th class="text-right">Seguro Desgravamen:</th>
								<td class="text-left">Si</td>
							</tr> 
							<tr>
								<th class="text-right">Seguro Cesantía:</th>
								<td class="text-left">No</td>
							</tr> 
							<tr>
								<th class="text-right">Seguro de Vida:</th>
								<td class="text-left">No</td>
							</tr> 
						</table>

						<a href="#" class="btn btn-link" data-toggle="modal" data-target=".detalles-refinanciamiento-modal-lg">Detalles de este Crédito</a>

						<div class="item">
							<label for="acepto" class="ui-marmots-label-check marmots-label-left">
								<input class="tooltip-validation-invalid" id="acepto" type="checkbox" name="acepto1"> He leído y acepto los <a href="#" data-toggle="modal" data-target=".terminos-modal-lg">términos y condiciones</a> de este producto 
							</label> 
							<div class="tooltip top in error" style="display: none; top: -89px; left: -104.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><div class="tooltip-body-error"><p class="title">Alerta!</p><span>Debe aceptar haber leido los términos y condiciones para poder continuar</span></div><div class="tooltip-bubble-error"></div></div></div>
						</div>
						 
						<div class="item">
							<label for="acepto2" class="ui-marmots-label-check marmots-label-left">
								<input id="acepto2" type="checkbox" name="acepto2"> Declaro haber leído y acepto estar de acuerdo con las coberturas de los seguros a contratar.
							</label> 
							<div class="tooltip top in error" style="display: none; top: -89px; left: -104.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><div class="tooltip-body-error"><p class="title">Alerta!</p><span>Debe aceptar estar de acuerdo con las coberturas para poder continuar</span></div><div class="tooltip-bubble-error"></div></div></div>
						</div>
						<hr>

						<a href="#" class="btn btn-big2 btn-big-green"><i class="icono-btn icono-credito-verde"></i>Quiero este Crédito</a>
						
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12 claveSegura">
			<section class="pin-content"  >
				<div class="pin-sms-input large pin-sms-input-inline">
					<section style="padding: 10px 0 0 0;">
						<div class="form-group" style="margin: 0 0 0 25%;padding: 10px 0;">
							<label style="background: none;" class="sms control-label" for="clave-segura">Ingresa Clave <strong>SMS</strong> <span data-original-title="Clave de seguridad que se enviará, en un SMS, a tu celular XXXX66666 registrado en el banco" title="" class="icon-16 blue d06-masinformacion tooltip-help zindex" id="masInfoSMS"></span></label>
							<div class="formline">
								<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
								<button style="margin:0px" class="btn next BotonConfirmarClaveSegura"><span>Confirmar</span></button>
								<img class="ConfirmadoCheck chek-left" src="img/tick-active-small.png" style="display:none">
							</div>
						</div>
					</section>
				</div>
			</section>
		</div>
	</div>

	<!-- informacion -->

	<div class="row row-inf">
		<h4>Con nuestros créditos podrás(*): </h4>
		<div class="col-xs-4">Postergar el pago <br> hasta 3 cuotas al año.            </div>
		<div class="col-xs-4">Elegir tu cuota mensual <br>entre 3 alternativas.       </div>
		<div class="col-xs-4">Elegir tu cuota mensual <br>entre 3 alternativas.       </div>
	</div>
</div>


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
								<td>Monto adicional</td>
								<td class="text-right">$ 5.000.000</td>
							</tr>
							<tr>
								<td>Seguro de Desgravamen</td>
								<td class="text-right"> $ 184.642</td>
							</tr>
							<tr>
								<td>Seguro de Cesantía</td>
								<td class="text-right"> $ 0</td>
							</tr>
							<tr>
								<td>Seguro de Vida</td>
								<td class="text-right"> $ 0</td>
							</tr>
							<tr>
								<td>Gastos Notariales</td>
								<td class="text-right">$ 1.236</td>
							</tr>
							<tr>
								<td>Impuestos</td>
								<td class="text-right">$ 41.822</td>
							</tr>
							<tr>
								<td colspan="2" style="border-bottom-style: solid; border-width: 1px; border-color: #e5e5e5">&nbsp;</td>
							</tr>
							<tr>
								<td><strong>Monto Bruto del Crédito</strong></td>
								<td class="text-right"><strong>$ 5.227.700</strong></td>
							</tr>
						</tbody></table>
					</div>

					<div class="col-md-6">
						<table class="table table-no-border">
							<tbody><tr>
								<td>Cuota mensual</td>
								<td class="text-right">$399.765</td>
							</tr>						
							<tr>
								<td>Tasa Mensual</td>
								<td class="text-right">0,71%</td>
							</tr>
							<tr>
								<td>Plazo</td>
								<td class="text-right">60 meses</td>
							</tr>
							<tr>
								<td>CAE (Carga Anual Equivalente)</td>
								<td class="text-right">10,55%</td>
							</tr>
							<tr>
								<td>Vemcimiento 1a cuota</td>
								<td class="text-right">13/07/2016</td>
							</tr> 
							<tr>
								<td>Forma Pago</td>
								<td class="text-right">PAC</td>
							</tr>
							<tr>
								<td colspan="2" style="border-bottom-style: solid; border-width: 1px; border-color: #e5e5e5">&nbsp;</td>
							</tr>
							<tr>
								<td><strong>Costo toal del Crédito</strong></td>
								<td class="text-right"><strong>$ 107.614</strong></td>
							</tr>
						</tbody></table>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>

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
    			<div id="seccionSeguros" class="modal-body no-bottom infoSeguro"><h1 class="text-center">Seguro de Vida</h1><p>Este seguro de Vida es un complemento al seguro de desgravamen. Indemniza a tus beneficiarios en caso de fallecimiento con un monto de libre disponibilidad de UF 500 por Muerte Natural y UF 1.000 en caso de Muerte accidental.</p><div class="text-center"><a href="https://www.bbva.cl/fbin/mult/resumen-vida-consumo_tcm1106-547046.pdf?x=1465332747013" target="_blank" class="btn next"><span>Ver más información</span></a></div></div>
			</div>
    	</div>
    </div>
</div>

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
<script src="js/s17-credito-un-click.js"></script>