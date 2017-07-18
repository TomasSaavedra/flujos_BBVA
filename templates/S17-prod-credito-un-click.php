<link rel="stylesheet" href="css/one-click.css" />

<div class="container prod-credito-click">

<div class="container-bck container-bck-sinmenu">
	<div class="container-bck-step1">

		<div class="header-container-bck">
			<h1>Tu Crédito de Consumo a un Click</h1>
			<a class="close-operation-prod" href="?src=S17-ofertas-un-click.php"><span class="close-icon"></span></a>
			<hr>
			<h2>Confirma las condiciones de tu crédito, <strong>y ¡será abonado al instante!</strong></h2>
			<?php include 'includes/components/movements/credito-un-click/necesitas-ayuda.php'; ?>
		</div>
	
		<div class="body-container-bck">
		    <div class="bck-inner-row">
				<div class="bck-inner left-cont bg-gray">
					<div class="body-bck-inner">
						<div class="form-bck">
							<div>
								<label for="">Monto</label>
								<input id="monto" type="text" class="form-control number formato text-right icono-monto icono-monto-pesos">
							</div>
							<div>
								<label for="">Plazo</label>
								<select class="selectpicker formato">
									<option>60 Meses</option>
									<option>60 Meses</option>
									<option>60 Meses</option>
									<option>60 Meses</option>
								</select>
							</div>
						</div>

						<div class="check-list">
							<h4><strong>Protégete</strong> con nuestros seguros<br> y <strong>reduce el valor</strong> de la tasa </h4>
							<ul>
								<li>
									<div class="tool-seguro top" style="display:none;"><!--tool-seguro-->
										<div class="inner">
											<p>No estarás protegido y la tasa de tu Crédito de Consumo será mayor.</p>
										</div>
										<div class="arrow-tool"></div>
									</div><!--Fin tool-seguro-->

									<label for="check1" class="ui-marmots-label-check marmots-label-left formato">Seguro de cesantía<input id="check1" name="acepto-condiciones-check" type="checkbox" checked></label><span> - (245kb)</span><i class="icon-blue-16 ico-pdf"></i>
								</li>
							    <li>
							    	<div class="tool-seguro" style="display:none;"></div>
							    	<label for="check2" class="ui-marmots-label-check marmots-label-left formato">Seguro de vida <input id="check2" name="acepto-condiciones-check" type="checkbox" checked></label><span> - (245kb)</span><i class="icon-blue-16 ico-pdf"></i>
							    	
							    	<div class="tool-seguro bottom" style="display:none;"><!--tool-seguro-->
							    		<div class="arrow-tool"></div>
										<div class="inner">
											<p>No estarás protegido y la tasa de tu Crédito de Consumo será mayor.</p>
										</div>
									</div><!--Fin tool-seguro-->
							    </li>
						    </ul>
					    </div>
					    <div class="form-bck form-bck-large">
							<div>
								<label for="" class="line-normal">Cuenta Abono</label>
								<select class="selectpicker selectpicker-numeral formato">
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
								</select>
								<small class="dato-saldo">Tu nuevo saldo será: <strong>$ 345.344</strong></small>
							</div>
						</div>
					</div>
				</div>

				<span class="arrow arrow-right"></span>

				<div class="bck-inner right-cont bg-blue">

					<div class="loader" style="display:none"><!--loader-->
						<div class="inner-loader">
							<img src="img/loader-un-click.gif" alt="">
							<p>Calculando tu cuota</p>
						</div>

					</div><!--Fin loader-->

					<div class="datos-cargados" style="opacity:0;"><!--datos-cargados-->
						
						<div class="header-bck-inner">
							<h4>Tu cuota será:</h4>
							<h3>$ 45.000 <span>mensuales</span></h3>
						</div>

						<div class="body-bck-inner">
							<table class="table-detail-inter">
								<tr>
									<td class="text-right">Monto del Crédito: </td>
									<td class="text-left"><strong>$ 3.000.000</strong></td>
								</tr>
								<tr>
									<td class="text-right">Plazo: </td>
									<td class="text-left"><strong>60 meses</strong></td>
								</tr>
								<tr>
									<td class="text-right">Tasa Mensual: </td>
									<td class="text-left">$10.200.000</td>
								</tr>
								<tr>
									<td class="text-right"><span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Lorem"></span> CAE: </td>
									<td class="text-left">15,02%</td>
								</tr>
								<tr>
									<td class="text-right">Costo Total:</td>
									<td class="text-left">$ 3.690.020</td>
								</tr>
							</table>
						</div>

						<div class="footer-bck-inner">
							<a class="link-footer modal-trigger" data-href="includes/components/movements/credito-un-click/dialogs/consumo-detalle.html">Detalles de este Crédito</a>
						</div>
					</div><!--Fin datos-cargados-->
				</div>
			</div>
	    </div>

	    <div class="footer-container-bck">

		    <div class="footer-cont-btn">
			    <a href="#;" class="btn btn-big2 btn-big-green btn-big-center disabled btn-responsivo"><i class="icono-btn icono-credito-verde"></i>Quiero este Crédito Ahora</a>
			</div>
		
			<div class="container-bck-control" style="display:none;">
				<div class="pin-sms-input large pin-sms-input-inline">
					<section>
						<div class="bck-control-left">
							<label for="legales" class="ui-marmots-label-check marmots-label-left"> He leído y acepto las <a href="">condiciones</a> precontractuales y de contratación de este producto
							<input id="legales" name="legales" type="checkbox"></label>
						</div>
						<div class="form-group bck-control-right">
							<label class="pin control-label" for="clave-segura">Clave Segura A4 <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Lorem"></span></label>
							<div class="formline">
								<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
								<button class="btn btn-big2"><span>Confirmar</span></button>
		                        <img class="ConfirmadoCheck chek-left" src="img/tick-active-small.png" style="display:none">
							</div>
						</div>
					</section>
				</div>
			</div>
	    </div>

	</div>

	<div class="container-bck-step2" style="display:none;">
		<div class="header-container-bck">
			<h1>Tu Crédito de Consumo a un Click</h1>
			<a class="close-operation-prod
<div" href="javascript.history:back();"><span class="close-icon"></span></a>
			<hr>
		</div><!-- /.header-container-bck -->

		<div class="exito-container-bck">
			<h2>Felicitaciones Juan Manuel</h2>
			<h3>ya tienes abonado tu Crédito de Consumo BBVA</h3>
			<span class="check-exito"></span>
			<span class="n-transaccion">Nº de transacción <strong>568944658971265</strong></span>
			<ul class="detalle-list">
				<li><span class="s-left">Fecha y hora:</span><span>20/08/2014 18:32</span></li>
				<li><span class="s-left">Monto del Crédito:</span><span>$ 3.000.000</span></li>
				<li><span class="s-left">Plazo:</span><span>60 meses</span></li>
				<li><span class="s-left">Valor cuota mensual:</span><span>$ 160.000</span></li>
				<li><span class="s-left">Tasa mensual: </span><span>1,47%</span></li>
				<li><span class="s-left">Fecha pago primera cuota: </span><span>01/09/2014</span></li>
			</ul>
			<div class="exito-container-bck-footer">
				<h3>El comprobante y detalle de tu Crédito de Consumo contratado fue enviado a tu e-mail <span class="color-blue">juanmanuel@gmail.com</span></h3>
			</div>
		</div><!-- /.exito-container-bck -->

		<hr>
		
		<div class="exito-container-bck-footer">
			<div class="footer-cont-btn">
				<a href="#;" class="btn btn-big2 btn-big-blue btn-responsivo">Ver crédito abonado en Mi Cuenta</a>
			</div>

			<div class="botonesComprobante">	
				<button class="btn primary left hidden-xs" type="button"><i class="icon-32 blue n01-imprimir"></i> Imprimir comprobante</button>
				<button class="btn primary right" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante en PDF</button>
				<button class="btn primary left" type="button"><i class="icon-32 blue m07-correspondenciavirtual"></i> Enviar comprobante por email</button>
			</div>
		</div><!-- /.exito-bck-footer -->
	</div><!-- /.container-bck-step2 -->

</div>

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
<script src="js/s17-credito-un-click.js"></script>