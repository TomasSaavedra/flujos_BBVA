<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<script type="text/javascript" src="js/soho-ahorro.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Traspaso entre fondo</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Traspaso entre fondo</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Cantidad">
					<?php include(dirname(__FILE__) . '/traspaso/traspaso-paso1.html'); ?>
				</div>
				<div data-title="Fondo de destino">
					<?php include(dirname(__FILE__) . '/traspaso/traspaso-paso2.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/traspaso/traspaso-paso3.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/traspaso/traspaso-paso4.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>