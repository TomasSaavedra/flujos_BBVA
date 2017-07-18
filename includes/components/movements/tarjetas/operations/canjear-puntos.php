<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Canjear Puntos</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Canjear puntos</h3>
	<hr>
</div>


<div class="transferencia"> 
	<div class="main-transferencia">
		<form novalidate id="form-canje-puntos" class="form-horizontal tooltip-validation">
			<article class="wizard">
				<div id="firstStepWizard" data-title="Canje">
					<?php include(dirname(__FILE__) . '/canje-puntos/1-tipo-regalo.html'); ?>
				</div>
				<div data-title="Beneficiario" >
					<?php include(dirname(__FILE__) . '/canje-puntos/2-beneficiario.html'); ?>
				</div>
				<div data-title="Confirmar">
					<?php include(dirname(__FILE__) . '/canje-puntos/3-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/canje-puntos/4-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>

