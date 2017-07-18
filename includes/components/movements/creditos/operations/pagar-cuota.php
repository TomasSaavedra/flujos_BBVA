<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<script type="text/javascript" src="js/soho-creditos.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Pagar cuota</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar cuota</h3>
	<hr>
</div>

<!-- Nacional -->

 <div class="creditos-pago-cuentas"> 
	<div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
		<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Cuenta origen">
					<?php include(dirname(__FILE__) . '/pagar-cuota/remote-step-1-seleccion-cuenta.html'); ?>
				</div>
				<div data-title="Seleccionar cuota">
                	<div class="cont-wizard">
					<?php include(dirname(__FILE__) . '/pagar-cuota/remote-step-2-introducir-datos.html'); ?>
                    </div>
				</div>

				<div data-title="Confirmar" class="ConfirmaPagoContenedor" data-multistep="false">

                	<div class="cont-wizard">
					<?php include(dirname(__FILE__) . '/pagar-cuota/remote-step-3-confirmar.html'); ?>
                    </div>
				</div>
				<div data-title="Comprobante">
                	<div class="cont-wizard">
					<?php include(dirname(__FILE__) . '/pagar-cuota/remote-step-4-comprobante.html'); ?>
                    </div>

				</div>


			</article>
		</form>
	</div>
</div>



<hr class="operation-bottom visible-xs"/>