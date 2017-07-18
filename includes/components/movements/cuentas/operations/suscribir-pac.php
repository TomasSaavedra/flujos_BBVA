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
		Consultar o inscribir PAC</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Consultar o inscribir PAC</h3>
	<hr>
</div>
<div class="cont-suscribir-pac">
	<img src="img/pac-cuentas-img.jpg" alt="Suscribir PAC">
</div>
<hr class="operation-bottom visible-xs"/>