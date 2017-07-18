<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>


<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Transferir dinero</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Transferir dinero</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate="novalidate" id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard" id="wizardTransferencia">
				
				<div data-title="Detalles" >
					<?php include(dirname(__FILE__) . '/wizard/remote-step-1-transferencias.html'); ?>
				</div>
			
				<div data-title="Confirmar" data-multistep="true" data-name="aTerceros">
					<?php include(dirname(__FILE__) . '/wizard/remote-step-2-confirmar.html'); ?>
				</div>
				
				<div data-title="Comprobante" >
					<?php include(dirname(__FILE__) . '/wizard/remote-step-3-comprobante.html'); ?>
				</div>

			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>

