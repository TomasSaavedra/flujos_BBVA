<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Invertir en este fondo</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Invertir en este fondo</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate="novalidate" id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard invertir-pasos" >
				<div data-title="Cuenta origen">
					<?php include(dirname(__FILE__) . '/invertir/invertir-paso1.html'); ?>
				</div>
				<div data-title="Cantidad">
					<?php include(dirname(__FILE__) . '/invertir/invertir-paso2.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/invertir/invertir-paso3.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/invertir/invertir-paso4.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>