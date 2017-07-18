<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
	$pagoFlexible = '';
	if(isset($_REQUEST['pagoFlexible'])){
		$pagoFlexible = $_REQUEST['pagoFlexible'];
	}
?>
<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>

<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		<span class="TituloPagar">Pagar deuda nacional <?php echo $pagoFlexible; ?></span>
	</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar deuda</h3>
	<hr/>
</div>
<!-- Nacional -->

<div class="pagardeuda">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article id="wizardPagarDeuda" class="wizard">
				<div data-title="Monto a pagar" class="PagoTarjetaNacional">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-nacional/remote-step-1-seleccion-cuenta.html'); ?>
				</div>
				<div data-title="Confirmar" class="ConfirmaPagoContenedor" data-multistep="false">
					<div class="PagoTarjetaInterNacional" >
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-3-confirmar.html'); ?>
					</div>
					<div class="PagoTarjetaNacional">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-nacional/remote-step-3-confirmar.html'); ?>
					</div>
				</div>
				<div data-title="Comprobante">
					<div class="PagoTarjetaNacional">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-nacional/remote-step-4-comprobante.html'); ?>
					</div>
					<div class="PagoTarjetaInterNacional" >
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-4-comprobante.html'); ?>
					</div>
				</div>
			</article>
		</form>
	</div>
</div>


<!-- Internacional -->
<!--
<div class="transferencia">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Cuenta destino">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-1-cuenta-origen.html'); ?>
				</div>
				<div data-title="Introducir datos" >
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-2-cantidad.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-3-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/pagar-cuenta-internacional/remote-step-4-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
-->

<hr class="operation-bottom visible-xs"/>


<script>
	var tipoPagoTarjeta='';
	
	if($('#tabnac').hasClass('ui-tabs-active ui-state-active') && $("#contenedorAcordeones1").is(':visible')){
		$('#tabnac').removeClass('ui-tabs-active ui-state-active');
		$('#tabnac').attr('aria-selected','false');
	}

	
	$(document).ready(function(){
		
		setTimeout(function(){
		//remueve las clases

			$('.pagardeuda [role=tab]').removeClass('ui-tabs-active ui-state-active');
			$('.pagardeuda [role=tab]').attr('aria-selected','false');

			$('#wizardPagarDeuda #wizardBack').on('click, vclick', function(event){
				console.log('hola');
				$('#tabint').removeClass('ui-tabs-active ui-state-active');
				$('#tabnac').removeClass('ui-tabs-active ui-state-active');
				$('#contenedorAcordeones1').slideUp();
				$('#contenedorAcordeones2').slideUp();
				$('#wizardNext').css('style','none');
				$('#wizardPagarDeuda .button-bar.clearfix').css('box-shadow','0px');
				$('#wizardPagarDeuda .button-bar.clearfix').css('padding','0px');
			});
			$('#wizardPagarDeuda #wizardNext').click( function(){
				$('.confirmar-main').addClass('hidden'); 
				$('.confirmar-coordenadas').removeClass('hidden')
			}); 
			$('.formline #confirmo').click( function(){
				$('.confirmar-coordenadas').addClass('hidden');
				$('.confirmar-sms').removeClass('hidden');	
			}); 
		},150);
	});

</script>
