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
		<span class="TituloPagar">Pagar servicios</span></h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar servicios</h3>
	<hr>
</div>

<!-- Nacional -->

 <div class="transferencia"> 
	<div class="main-transferencia <?php echo $step == '1' ? 'init-step1' : ''; ?>">
		<form novalidate id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Seleccionar nóminas">
					<?php include(dirname(__FILE__) . '/pagar-servicios/1-pagar-servicios.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/pagar-servicios/2-pagar-servicios.html'); ?>
				</div>
				<div data-title="Comprobante">
                    <?php include(dirname(__FILE__) . '/pagar-servicios/3-pagar-servicios.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>

<hr class="operation-bottom visible-xs"/>