<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<style type="text/css">
	.wizard {
    	overflow: inherit !important;
	}
</style>
<div class="transferencia mgTop40px">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate="novalidate" id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Seleciona un banco"  id="importar-contactos1">
					<?php include(dirname(__FILE__) . '/importar-contactos/importar-contactos-1.html'); ?>
				</div>
				<div data-title="Importa tus contactos">
					<?php include(dirname(__FILE__) . '/importar-contactos/importar-contactos-2.html'); ?>
				</div>
				<div data-title="Comprobante" id="comprobante-contactos">
					<?php include(dirname(__FILE__) . '/importar-contactos/importar-contactos-3.html');  ?>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>




<script type="text/javascript">
	$(document).ready(function(){
		$('#importar-contactos1').ready(function(){
			$('.button-bar').hide();
			$('.step-container').css({'border-bottom':"1px solid #dde3ea"})
		});						
	})
</script>
