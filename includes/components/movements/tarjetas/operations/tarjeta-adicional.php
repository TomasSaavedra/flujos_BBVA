<style type="text/css">

	.btnBig {
		padding: 8px;
    	padding-left: 30px;
   		padding-right: 30px;
	}

	.textbbva {
		font-size: 15px;
		color:#434a58;
	}

	.tab-pane .popover {
        background-color: #FEFAEE !important;
        border: 1px solid #BDBDBD !important;
        border-radius: 0px !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        max-width: 250px !important;
    }

    .tab-pane .popover-content {
    	padding: 4px 6px;
	}
    .tab-pane .popover p {
        font-size: 12px !important;
        text-align: left;
    }
    .tab-pane .popover .imgHelp {
        background:url('img/bbvapass.svg');
        width: 64px;
        height:107px;
        float: right;
    }
    .tab-pane .popover.right .arrow:after {
        border-right-color: #fefaee !important;
    }
</style>

<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Generar clave para adicional</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Generar clave para adicional</h3>
	<hr>
</div>

<div class="tarjeta-adicional">
	<div class="main-transferencia">
		<div class="step-content-container margin-bottom">
			<div class="box" id="trans-step-1">
				<div class="step-content-container margin-bottom">
					<h3>Esta clave le permitirá al adiconal realizar pagos vía Webpay</h3>
					<p class="textbbva">Enviaremos un <strong>SMS con la clave</strong> al número de teléfono que ingreses para tu adicional:</p>

					<hr style="clear: both;">
					
					<div class="mgTop20px">
						<div class="col-lg-12 col-md-12 -col-sx-12 mg0px pd0px">
							
							<div class="col-lg-6 col-md-6 col-sx-6 pdLeft0px mgTop5px mgTop5px"> 
								<label class="text-lighter">Teléfono móvil del Adicional</label>
							</div>
							<div class="col-lg-6 col-md-6 col-sx-6 mgTop5px mgBottom5px">
								<input type="text" name="" placeholder="Ej: 912345678" class="form-control">
							</div>

							<div class="col-lg-6 col-md-6 col-sx-6 pdLeft0px mgTop5px mgBottom5px"> 
								<label class="text-lighter">Repetir el número</label>
							</div>
							<div class="col-lg-6 col-md-6 col-sx-6 mgTop5px mgBottom5px">
								<input type="text" name="" placeholder="Repite el número del teléfono" class="form-control">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sx-6 pdLeft0px mgTop5px mgBottom5px"> 
								<label class="text-lighter">Fecha de nacimiento del adicional</label>
							</div>
							<div class="col-lg-6 col-md-6 col-sx-6 mgTop5px mgBottom5px">
								<input type="text" name="" placeholder="dd/mm/aaaaa" class="form-control">
							</div>

						</div>
						<div>
							<label for="terminos" class="ui-marmots-label-check marmots-label-left">
						 	<input  id="terminos" type="checkbox" name="terminos">
						 	Declaro conocer y aceptar los </label>
						 	<a class="linkBottom modal-trigger" href="includes/components/movements/tarjetas/dialogs/tarjeta-adicional-terminos.html" >&nbsp;términos y condiciones</a>&nbsp;de esta solicitud
						</div>

						<p class="block-warning iconed-24">
                            <span class="icon-24  m03-aviso"></span>
                            La clave estará vinculada al RUT del adicional que selecciones, por lo tanto quedará operativa para todas sus Tarjetas adicionales.
                        </p>


						<hr style="clear:both;">
					</div>
				</div>
				<div class="text-right">
					<button class="btn arrow-right" id="nextStep">Continuar</button>
				</div>
			</div>
			<div id="trans-step-2">
				<div class="autoriza-bbva-pass">
                    <section id="modelToken">
                        <div class="box">
                            <div class="header">
                                <p>Autoriza con <i class="ico-pass"></i> </p></div>
                            <div class="body">
                                <h1>Abre tu APP BBVA e ingresa a BBVA PASS</h1>
                                <div class="desk-mobile">
		                            <div class="help-softToken" data-trigger="hover">
		                            	<p style="width: 61%; float: left; font-size: 14px; padding-top: 16px;">
		                            	Autoriza tu transacción ingresando a BBVA PASS</p> 
		                            	<div class="imgHelp"></div>
		                            </div>
		                        </div>
                                <p>Ingresa acá el código de autorización generado: </p>
                                <div class="pin-sms-input">
                                    <section style="display: flex; height: auto; padding: 15px;">
                                        <div class="form-group" style="width:100%;">
                                            <div class="col-lg-5 col-md-5 col-sx-12">
                                                <label  for="clave-segura">Código de Autorización:</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sx-12" style="margin-top: 8px;">
                                                <div style="float: left; width: 100%;">
                                                    <input type="password" tabindex=1 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                    <input type="password" tabindex=2 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                    <input type="password" tabindex=3 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                    <input type="password" tabindex=4 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                    <input type="password" tabindex=5 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                    <input type="password" tabindex=6 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
                                                     <button class="btn next" id="autorizar">
                                                        <span>Autorizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="verId">Ver ID de operación
                                    <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Si tu móvil no tiene internet, BBVA PASS te solicitará ingresar este código." style="float: none"></span>
                                </div>
                                <div class="idNumero" style="display: none;">239857</div>
                            </div>
                        </div>
                    </section>
                </div>
                <hr style="clear:both;">
                <div class="text-left">
					<button class="btn arrow-left" id="backStep">Anterior</button>
				</div>
			</div>

			<div class="box" id="trans-step-3">
				<div class="step-content-container comprobante mgBottom0px pd0px" style="border:none !important">
					<div class="ok-layer" style="width: 80% !important;">
						<div class="image">
							<img alt="Ok" title="Ok" src="img/tick.png">
						</div>
						<div class="ok-content">
							<div class="title">Clave enviada correctamente </div>
							<div class="description">Tu adicional Anuel Ortega <strong>ya cuenta con su clave adicional.<br>
							Luego de actualizarla podrá realizar pagos vía Webpay.
							</strong></div>
						</div>
					</div>
					<hr style="clear: both;">
				</div>
				<div class="text-center">
					<button class="btn large" id="nextStep">Aceptar</button>
				</div>
			</div>

		</div>
	</div>
</div>

<hr class="operation-bottom visible-xs"/>

<script type="text/javascript">
	$('#trans-step-2').hide();
	$('#trans-step-3').hide();
	$(function(){
		$('#nextStep').on('click', function(){
			$('#trans-step-1').hide();
			$('#trans-step-2').fadeIn();
		});
		$('#backStep').on('click', function(){
			$('#trans-step-2').hide();
			$('#trans-step-1').fadeIn();
		});
		$('#autorizar').on('click', function(){
			$('#trans-step-2').hide();
			$('#trans-step-3').fadeIn();
		});
		$( "#verId" ).click(function() {
			$( ".idNumero" ).fadeToggle( "slow", "linear" );
		});
		$('.desk-mobile').each(function(){
	        var $this = $(this);
	        $this.popover({
	            trigger: 'hover',
	            placement:'right',
	            html: true,
	            container: '#modelToken',
	            content: $this.find('.help-softToken').html()
	        });
	    });
	});
</script>