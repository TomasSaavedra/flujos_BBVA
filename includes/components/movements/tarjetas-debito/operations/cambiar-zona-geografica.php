<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>


<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Cambiar zona geográfica</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Cambiar zona geográfica</h3>
	<hr>
</div>

<div class="transferencia anular-ingreso">
	<div class="main-transferencia">
		<form novalidate id="form-aporte" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard wizard-hiden wizard-no-btn-cerrar no-overflow">

				<div  data-title="" class="zona-geografica1">
					<?php include(dirname(__FILE__) . '/cambiar-zona-geografica/paso1.html'); ?>
				</div>

				<div data-title="" class="zona-geografica2">
					<?php include(dirname(__FILE__) . '/cambiar-zona-geografica/paso2.html'); ?>
				</div>

			</article>
		</form>
	</div>
</div>

<hr class="operation-bottom visible-xs"/>