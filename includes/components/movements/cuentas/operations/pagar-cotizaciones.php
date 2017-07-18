<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		<span class="TituloPagar">Pagar cotizaciones</span></h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar cotizaciones</h3>
	<hr>
</div>

<!-- Nacional -->

 <div class="transferencia"> 
	<div class="main-transferencia <?php echo $step == '1' ? 'init-step1' : ''; ?>">
		<form novalidate id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Seleccionar nóminas">
					<?php include(dirname(__FILE__) . '/pagar-cotizaciones/1-pagar-cotizaciones.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/pagar-cotizaciones/2-pagar-cotizaciones.html'); ?>
				</div>
				<div data-title="Comprobante">
                    <?php include(dirname(__FILE__) . '/pagar-cotizaciones/3-pagar-cotizaciones.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>

<hr class="operation-bottom visible-xs"/>