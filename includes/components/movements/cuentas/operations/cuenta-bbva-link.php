<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>

<div class="transferencia">
	<article class="wizard">
		<div data-title="Datos titular">
			<?php include(dirname(__FILE__) . '/bbva-link/step-1.html'); ?>
		</div>
		<div data-title="Asociar con facebook" >
			<?php include(dirname(__FILE__) . '/bbva-link/step-2.html'); ?>
		</div>
		<div data-title="Comprobante">
			<?php include(dirname(__FILE__) . '/bbva-link/step-3.html'); ?>
		</div>
	</article>	
</div>
			

