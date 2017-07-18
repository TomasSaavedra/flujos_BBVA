<link rel="stylesheet" href="css/global-soho.css" /> 

 

<div class="container tarjeta-credito-un-click ">
	<form novalidate="novalidate" id="form-AumentoCupoTarjeta" class="form-horizontal tooltip-validation transfer-filter" onsubmit="return false;">
		<div class="container-bck">
			<div class="container-bck-step1">
				<div class="header-container-bck">
					<h1 align="center">
						<strong>Aumenta el cupo </strong>de tu tarjeta de Crédito a <strong>un
							Click</strong>
					</h1>
					<a class="close-operation-prod" href="?AID=OFERTAS_ONE_CLICK" onclick="registrarGA('noMeInteresa');validarSalidaVentana();"><span onclick="iconClose();" class="close-icon"></span></a>
					<hr>  
				</div>
				<div class="body-container-bck"> 

					<div class="bck-inner-row-aumentoTC row row-aumento" id="divIngresoDatos">

						<!-- Columna izquierda-->
						<div class="col-sm-6 col-informacion">

							<!-- Cupo Nacional -->
							<div class="bck-inner left-cont bg-gray-aumento" style="" id="aumentoCupoNacional">
								<div class="body-bck-inner">
									<h2 id="label1" class="text-center">
										<strong>Cupo Nacional</strong>
									</h2>
									<div class="form-bck form-bck-max-min" id="cupoNacionalDiv">
										<div>
											<span>Tu Cupo Actual es : <span>$<strong style="padding-right: 12px;" id="ingresoCupoMinimo">1.000.000</strong></span></span>
											<h4>Tu Nuevo Cupo:</h4>
											<div class="cont-max-min" id="divMonto">
												<input id="monto" name="monto" type="text" greater="1" smaller="15.001" data-msg-greater="El monto ingresado debe ser mayor a tu cupo actual" data-msg-smaller="El monto ingresado no puede ser mayor a la oferta" class="form-control amount formato text-right icon-monto-clp" value=""  onclick="registrarGA('interaccion');" autocomplete="off">

											</div>
											<br>
											<p align="center">
												El monto mínimo<strong> debe ser mayor a tu
													monto actual</strong> <br>monto máximo: $<strong id="ingresoCupoMaximo">15.000</strong>
											</p>

										</div>
										<label for="noMeInteresaNac" id="labelnoMeInteresaNac" class="ui-marmots-label-check marmots-label-left"> No
											me interesa esta oferta
										<input type="checkbox" id="noMeInteresaNac" onclick="validarNoQuieroLaOfertaNacional();"></label>

									</div>
									<!--
									<h4>Tarjeta: <strong><span id="confirmarDescripcionTajeta"></span> ï¿½ Nï¿½ <span id="confirmarNumeroTajeta"></span></strong></h4>
									-->
								</div>
							</div>

							<!-- Cupo Internacional -->
							<div class="bck-inner-row-aumento" id="divIngresoDatosUS">
								<div class="bck-inner left-cont bg-gray-aumento" id="aumentoCupoInternacional" style="">
									<div class="body-bck-inner">
										<h2 class="text-center">
											<strong>Cupo Internacional</strong>
										</h2>
										<div class="form-bck form-bck-max-min">
											<div>

												<span>Tu Cupo Actual es :  <span>$<strong style="padding-right: 12px;" id="ingresoCupoMinimoUS">1</strong></span></span>
												<h4>Tu Nuevo Cupo:</h4>

												<div class="cont-max-min" id="divMontoUS">
													<input id="montoUS" name="montoUS" type="text" greater="1" smaller="1001" data-msg-greater="El monto ingresado debe ser mayor a tu cupo actual" data-msg-smaller="El monto ingresado no puede ser mayor al permitido en esta oferta" class="form-control amount formato text-right icon-monto-clp" value="" style="width: 350px;" onclick="registrarGA('interaccion');" autocomplete="off">

												</div>

												<p align="center">
													El monto mínimo<strong> debe ser mayor a tu
														monto actual</strong> <br>monto máximo: $<strong id="ingresoCupoMaximoUS">1.000</strong>
												</p>




											</div>
											<label for="noMeInteresaInter" class="ui-marmots-label-check marmots-label-left"> No
												me interesa esta oferta
											<input type="checkbox" id="noMeInteresaInter" onclick="validarNoQuieroLaOfertaInternacional();"></label>

										</div>
									</div>
								</div> 
							</div>
						</div>

						<span class="arrow arrow-right"></span>

						<!-- Columna derecha -->
						<div class="col-sm-6 col-resultado">
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
											<span id="confirmarDescripcionTajeta">Visa Enjoy</span>&nbsp; N° <span id="confirmarNumeroTajeta">XXXX-1</span>
										</h4>

									</div>

									<div class="body-bck-inner-aumentoTC" id="nuevoCupoNacional"> 
										<h5 align="center">Nuevo Cupo Nacional:</h5>
										<h6 align="center" id="nuevoCupo">$15000</h6>
									</div>
									<hr>
									<div class="body-bck-inner-aumentoTC" id="nuevoCupoInternacional" style="display: block;">
										<h5 align="center">Nuevo Cupo Internacional:</h5>
										<h6 align="center" id="nuevoCupoUS">$1000</h6>
									</div> 
									 
									<div class="body-bck-inner-aumentoTC-contrato">

										<input type="hidden" name="nacionalDiv" id="nacionalDiv" value="false"> <input type="hidden" name="internacionalDiv" id="internacionalDiv" value="false">
										<input type="hidden" name="errorCLP" id="errorCLP" value="false"> <input type="hidden" name="errorUS" id="errorUS" value="false"> 
											
											<label for="legales1" id="labelLegales" class="ui-marmots-label-check marmots-label-left"> He
											leído y acepto los <a class="link modal-trigger" href="html/oneClick/dialogs/condiciones_aumento_cupo_tarjeta.html">términos
												y condiciones</a> de este producto 
												
										<input id="legales1" name="legalesName" type="checkbox" ></label>
										
									

										<div class="footer-cont-btn">
											<a href="#" id="btnQuieroCredito"  class="btn btn-big2 btn-big-green btn-big-center disabled">
												<i class="icono-credito-verde"></i>Quiero Aumentar mi Cupo
											</a>
										</div>



									</div>



								</div>
								<!--datos cargados -->
							</div>
						</div> 

						<div class="col-md-12 claveSegura" style="display:none;">
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
		 window.location.href = "content.php?src=S17-prod-aumento-cupo-tarjeta-credito-un-click-comprobante.php";
	});	

</script>