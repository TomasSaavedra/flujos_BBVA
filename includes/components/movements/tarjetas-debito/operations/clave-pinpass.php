<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>

<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Clave Pinpass</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Clave Pinpass</h3>
	<hr>
</div>

<div class="transferencia anular-ingreso">
	<div class="main-transferencia">
		<form novalidate id="form-aporte" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard wizard-hiden wizard-no-btn-cerrar no-overflow">

				<div  data-title="">
					<?php include(dirname(__FILE__) . '/clave-pinpass/1-paso.html'); ?>
				</div>

				<div  id="medimumStepWizardEmpty" data-title="">
					<?php include(dirname(__FILE__) . '/clave-pinpass/2-paso.html'); ?>
				</div>

				<div id="lastStepWizardEmpty" class="btn-cerrar" data-title="">
					<?php include(dirname(__FILE__) . '/clave-pinpass/3-paso.html'); ?>
				</div>

			</article>
		</form>
	</div>
</div>

<hr class="operation-bottom visible-xs"/>