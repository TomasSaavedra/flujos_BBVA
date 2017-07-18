<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Avance en Línea</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Avance en Línea</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia">
		<form novalidate id="form-aporte" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard no-overflow">
				<div data-title="Introducir datos">
					<?php include(dirname(__FILE__) . '/avance-en-linea/introducir-datos-paso-1.html'); ?>
				</div>
				<div data-title="Cuenta abono">
					<?php include(dirname(__FILE__) . '/avance-en-linea/cuenta-abono-paso-2.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/avance-en-linea/confirmar-paso-3.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/avance-en-linea/comprobante-paso-4.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>