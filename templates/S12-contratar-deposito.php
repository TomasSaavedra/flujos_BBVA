<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="container">
	<div class="section-tabs">
		
		<!-- title -->
		<h2 class="title-sh">Ahorro e inversión </h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li><a href="#mis-productos">Mis productos</a></li>
			<li class="active"><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		<hr class="separador">
		
		<div class="tab-content" id="contratar-deposito">
			<div class="tab-pane" id="mis-productos">
				<div class="content-column" id="ahorro-inversion">
					<?php include 'includes/components/tables/depositos.html'; ?>
					<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
					<?php include 'includes/components/tables/acciones.html'; ?>
				</div>
				<div class="banner-column" id="ahorro-lateral">
					<?php include 'includes/components/banners/perfil-inversor.html'; ?>
					<?php include 'includes/components/banners/consolidado.html'; ?>
					<?php include 'includes/components/banners/certificados-tributarios-y-ofertas2.html'; ?>
					<?php include 'includes/components/banners/fondos-mutuos.html'; ?>
					<?php include 'includes/components/banners/deposito-a-plazo.html'; ?>
					<?php include 'includes/components/banners/acciones.html'; ?>
					<?php include 'includes/components/banners/indicadores-economicos.html'; ?>
				</div>
			</div>

			<div class="tab-pane active" id="catalogo-productos">
				 <div class="contratar-deposito-content"><!--Contratar deposito --> 
				 	<div class="head-inversion"><!--head-inversion-->
				 		<h2>Contratar Depósito</h2>
				 		<h3>Depósito a Plazo</h3>
				 		<a href="content.php?src=S12-deposito-a-plazo.php" class="close-icon" data-dismiss="modal" aria-hidden="true"></a>
				 	</div><!--Fin head-inversion-->
					<div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
						<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
							<article class="wizard">
								<div data-title="Detalle depósito">
									<?php include('includes/components/movements/deposito-a-plazo/contratar-deposito/remote-step-1.html'); ?>
								</div>
								<div data-title="Selección de cuentas">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/deposito-a-plazo/contratar-deposito/remote-step-2.html'); ?>
				                    </div>
								</div>
								<div data-title="Confirmación" data-multistep="true">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/deposito-a-plazo/contratar-deposito/remote-step-3.html'); ?>
				                    </div>
								</div>
								<div data-title="Comprobante">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/deposito-a-plazo/contratar-deposito/remote-step-4.html'); ?>
				                    </div>
								</div>
							</article>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		 $(document).trigger('capgemini.ajax.load',$(".container"));
		$('#contratar-deposito .simularDeposito').click(function() {
			$('#contratar-deposito .simular-deposito-tabla').show();
			$('#contratar-deposito .contratar-deposito-content .main-wizard .step-container').addClass("height-contratar-dep");
			$(".wizardNext").removeClass("disabled")
		});

		$(document).on("click",'#contratar-deposito .btn.arrow-right', function() {
			var result =String($("#monto").val());	
			if(result.length>0 && parseFloat(result)>0){
				$('#contratar-deposito .contratar-deposito-content .main-wizard .step-container').removeClass("height-contratar-dep");
			}
			
			
		});	

		setTimeout(function(){ $(".wizardNext").addClass("disabled");},1);
	});
</script>