<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Pagar línea de crédito</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar línea de crédito</h3>
	<hr>
</div>
<div class="lineacredito">
	<div class="main-lineacredito">
		<form novalidate="novalidate" id="form-linea" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Introducir datos">
					<?php include(dirname(__FILE__) . '/lineacredito/remote-step-1-datos.html'); ?>
				</div>
				<div data-title="Confirmar">
					<?php include(dirname(__FILE__) . '/lineacredito/remote-step-2-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/lineacredito/remote-step-3-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>