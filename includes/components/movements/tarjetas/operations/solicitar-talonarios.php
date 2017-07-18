<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Solicitar talonarios de cheques</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Solicitar talonarios de cheques</h3>
	<hr>
</div>
<div class="talonarios">
	<div class="main-talonarios">
		<form novalidate="novalidate" id="form-talonarios" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Lugar de entrega">
					<?php include(dirname(__FILE__) . '/talonarios/remote-step-1-entrega.html'); ?>
				</div>
				<div data-title="Número de talonarios">
					<?php include(dirname(__FILE__) . '/talonarios/remote-step-2-numero.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true" >
					<?php include(dirname(__FILE__) . '/talonarios/remote-step-3-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/talonarios/remote-step-4-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>