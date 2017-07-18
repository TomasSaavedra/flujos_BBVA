
<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
	$dir=dirname(__FILE__);
	$dir = substr($dir, 0,strrpos($dir,"/"));
	//echo $dir; 
?>
<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>

<div class="container"><!--container-->

	<div id="avance-campana" class="radius"><!--avance-campana-->
		<div class="operation-header hidden-xs"><!--operation-header-->
			<a class="close-operation-tab" href="javascript:history.back()"><span class="close-icon"></span></a>
			<h1 class="tab-title">
				Avance en Línea a 0% de interés</h1>
		</div><!--Fin operation-header-->

		<div class="operation-header visible-xs"><!--operation-header-->
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<h1 class="tab-title">Avance en Línea a 0% de interés</h1>
			<hr>
		</div><!--Fin operation-header-->


		<div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
			<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
				<article class="wizard">
					<div data-title="Introducir datos" id="firstStepWizard">
						<?php include $dir.'/includes/components/movements/tarjetas/operations/avance-para-campana/paso1.html'; ?>
						
					</div>
					<div data-title="Tarjeta origen">
	                	<div class="cont-wizard">
						<?php include $dir.'/includes/components/movements/tarjetas/operations/avance-para-campana/paso2.html'; ?>
	                    </div>
					</div>

					<div data-title="Cuenta abono">

	                	<div class="cont-wizard">
						<?php include $dir.'/includes/components/movements/tarjetas/operations/avance-para-campana/paso3.html'; ?>
	                    </div>
					</div>

					<div data-title="Confirmación">
	                	<div class="cont-wizard">
						<?php include $dir.'/includes/components/movements/tarjetas/operations/avance-para-campana/paso4.html'; ?>
	                    </div>
					</div>

					<div data-title="Comprobante">
	                	<div class="cont-wizard">
						<?php include $dir.'/includes/components/movements/tarjetas/operations/avance-para-campana/paso5.html'; ?>
	                    </div>
					</div>


				</article>
			</form>
		</div>

	</div><!--Fin avance-campana-->
</div><!--Fin container-->


<hr class="operation-bottom visible-xs"/>