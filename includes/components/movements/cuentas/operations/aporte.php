<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Realizar aporte solidario</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Realizar aporte solidario</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia">
		<form novalidate="novalidate" id="form-aporte" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Cuenta destino">
					<?php include(dirname(__FILE__) . '/aporte/remote-step-1-cuenta-destino.html'); ?>
				</div>
				<div data-title="Introducir datos">
					<?php include(dirname(__FILE__) . '/aporte/remote-step-2-introducir-datos.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true" >
					<?php include(dirname(__FILE__) . '/aporte/remote-step-3-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/aporte/remote-step-4-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>