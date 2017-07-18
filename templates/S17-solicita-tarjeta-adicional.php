<link rel="stylesheet" type="text/css" href="http://93.16.237.242/maqueta-nueva-web/css/one-click.css">

<style type="text/css">
	.one-click .col-informacion .cont .cont-footer {
      padding: 48px 45px !important;
      }
</style>

<div class="container tarjeta-credito-un-click one-click refinanciamiento">
	<form novalidate="novalidate" id="form-AumentoCupoTarjeta" class="form-horizontal tooltip-validation transfer-filter" onsubmit="return false;">
		<div class="container-bck">
			<div class="container-bck-step1">
				<div class="header-container-bck">
					<h1 align="center">
						Solicita tu <strong>Tarjeta Adicional a un Click!</strong>
					</h1>
					<a class="close-operation-prod" href="?AID=OFERTAS_ONE_CLICK" onclick="registrarGA('noMeInteresa');validarSalidaVentana();">
						<span onclick="iconClose();" class="close-icon"></span>
					</a>
					<hr>  
				</div>
				<div class="body-container-bck"> 

					<div class="bck-inner-row-aumentoTC row row-aumento" id="divIngresoDatos">
						<!-- Columna izquierda-->
						
						<div class="row">
							<div class="col-sm-6 col-informacion tarjeta-adicional">
								<div class="cont">
									<div class="cont-body">
										
											<label>Tarjeta Titular:</label>
											<select class="selectpicker ">
												<option>Mastercard Gold XXXX-4301</option>
												<option>Visa XXXX-3452</option>
											</select>
											<div class="clearfix"></div>
											<hr>
										
											<h3>Cupos de la Tarjeta Adicional:</h3>
											<div class="top1"> 
												<label>Cupo nacional:</label>
												<input id="nacional" name="nacional" type="text" greater="1" smaller=""  data-msg-greater="" data-msg-smaller=""  class="form-control amount formato text-right icon-monto-clp">
												<p class="pull-right">Máximo: $ X.XXX.XXX</p>
								
												<div class="clearfix"></div>
									
												<label>Cupo internacional:</label>
												<input id="internacional" name="internacional" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
												<p class="pull-right">Máximo: $ X.XXX.XXX</p>
											
												<hr>
												<div class="clearfix"></div>
											</div>
										
											<h3>Datos del Adicional (Mayor de 14 años)</h3> 
											<div class="top"> 
												<label>RUT:</label>
												<input id="rut" name="rut" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
												<div class="clearfix"></div>
									
												<label>Nombre:</label>
												<input id="nombre" name="nombre" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
										
												<div class="clearfix"></div>

												<label>Apellido paterno:</label>
												<input id="paterno" name="paterno" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
											
												<div class="clearfix"></div>

												<label>Apellido materno:</label>
												<input id="materno" name="materno" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
											
												<div class="clearfix"></div>

												<label>Fecha nacimiento:</label>
												<input style="width:161px" type="text" maxlength="10" class="textbox form-control datepicker datefuture required" id="dateField" name="dateField" placeholder="dd/mm/yy" data-format="dd/mm/yy"/>
												<div class="clearfix"></div>

												<label>Celular:</label>
												<input id="celular" name="celular" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
											
												<div class="clearfix"></div>

												<label>Email:</label>
												<input id="email" name="email" type="text" greater="1" smaller="" data-msg-greater="" data-msg-smaller="" class="form-control amount formato text-right icon-monto-clp">
												
												<div class="clearfix"></div>


											</div>
									</div>

									<div class="cont-footer">
										<h3>Sucursal de retiro</h3>
										<p>Ricardo Lyon 77 Providencia, Región Metropolitana</p>
										<a class="modal-trigger links-modal cursor" data-href="includes/components/movements/credito-un-click/dialogs/cambiar-direccion-tarjeta-credito.html">
										Cambiar sucursal
										</a>
										
									</div>
								</div>
							</div>
											
							<span class="arrow arrow-right hidden-sx"></span>
							<!-- Columna derecha -->
							<div class="col-sm-6 col-resultado tarjeta-adicional">
	 							<div class="bck-inner-aumento right-cont bg-aumento">

									<div class="loaderCLP" style="display: none">
										<div class="inner-loader">
											<img src="img/loader-un-click.gif" alt="">
											<p>Procesando</p>
										</div>
									</div>

									<div class="datos-cargados" style="opacity: 1;">

										<div class="header-bck-aumento">
											<h4 align="center">
												<span id="confirmarDescripcionTajeta">Tarjeta Adicional
											</h4>
										</div>

										<div class="body-bck-inner-aumentoTC" id="nuevoCupoNacional"> 
											<h5 align="center">¡Te regalamos 20% de descuento en tu primera compra!</h5>
											<p align="center">(Tope de devolución $20.000)</p>
										</div>
										 
										<div class="body-bck-inner-aumentoTC-contrato">
											<div class="tarjeta">
												<div class="visa" >
													<div class="name">Marco Antonio Ruiz Hernandez</div>
												</div>
												<div class="visaGold" style="display: none">
													<div class="name">Marco Antonio Ruiz Hernandez</div>
												</div>
												<div class="mastercard" style="display: none">
													<div class="name">Marco Antonio Ruiz Hernandez</div>
												</div>
											</div>
											<div class="cont-body">  
												<table class="table-res">
													<tr>
														<th class="text-right">Tarjeta Adicional:</th>
														<td class="text-left">&nbsp Mastercard Gold</td>
													</tr>
													<tr>
														<th class="text-right">Adicional:</th>
														<td class="text-left">&nbsp Juan Doe Pérez</td>
													</tr>
													<tr>
														<th class="text-right">Cupo nacional:</th>
														<td class="text-left">&nbsp $ 1.000.000</td>
													</tr>
												
													<tr>
														<th class="text-right">Cupo internacional:</th>
														<td class="text-left">&nbsp US$ 2.000</td>
													</tr>
												</table> 
											</div>

											<input type="hidden" name="nacionalDiv" id="nacionalDiv" value="false"> <input type="hidden" name="internacionalDiv" id="internacionalDiv" value="false">
											<input type="hidden" name="errorCLP" id="errorCLP" value="false"> <input type="hidden" name="errorUS" id="errorUS" value="false"> 
											<label for="legales1" id="labelLegales" class="ui-marmots-label-check marmots-label-left"> 
											He leído y acepto los <a class="link modal-trigger" href="html/oneClick/dialogs/condiciones_aumento_cupo_tarjeta.html">
											término y condiciones</a> de este producto 		
											<input id="legales1" name="legalesName" type="checkbox" ></label>
											
											<div class="footer-cont-btn">
												<a href="#" id="btnQuieroCredito"  class="btn btn-big2 btn-big-green btn-big-center disabled">
													<i class="icono-credito-verde"></i>Solicitar Adicional
												</a>
											</div>
										</div>

									</div>
									<!--datos cargados -->
								</div>
							</div> 
						</div>

						<div class="col-md-12 claveSegura" style="display:none;">
							<section class="pin-content">
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
				</div>

				<p class="block-error iconed-24 hidden" id="errorOneClick">
					<i class="icon-24 red m01-alerta"></i> <span id="descripcionErrorOneClick"></span>
				</p>
				
			</div>


			 
		</div>


	</form>
</div>

<script type="text/javascript">

$('#legales1').change(function() {
	
	if ($('#legales1').is(':checked')) {  
		 console.log('1111'); 
		 $('.btn-big-green').removeClass('disabled');
		 //$(' .claveSegura').show();
	}else{ 
		$('.btn-big-green').addClass('disabled');
		console.log('222'); 
	 	//$('.seguro-fraude-click .btn-big-green').removeClass('disabled');
		$(' .claveSegura').hide();
	}
})

$('.btn-big-green').click(function(e) {
		 $(' .claveSegura').show();
		 return false; 
});	

$('.claveSegura .BotonConfirmarClaveSegura ').click(function(e) {
		e.preventDefault();
		 window.location.href = "content.php?src=S17-tarjeta-adicional-un-click-comprobante.php";
	});	

</script>