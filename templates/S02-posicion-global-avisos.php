<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-cuentas.js"></script>

<div class="container">

	
	
	
	<!-- /tab A un click -->

	<div class="section-tabs">
		<!-- title -->
		<h2 class="title-sh">Mis Productos</h2>
		<hr class="separador">
	</div>
	<div class="notification-bar" id="ocultar">
		<div class="notification-left">
			<i class="ico-notification"></i>
			<a href="#" class="close-icon hide-desktop"
				style="float: right; margin-top: -3px;"></a>
		</div>
	
		<div class="notification-content">
			<div>Aviso cambio de ejecutivo</div>
			<div>Jhon Doe, te informamos que con fecha 25/01/2017 tu nuevo ejeutivo es:
				<strong style="text-decoration: underline;">Petronio de las Mercedes Fuenzalida</strong>
			</div>
		</div>

		<div class="notification-support-btn">
			<a href="?src=S12-seguro-automotriz.php" class="btn notification-btn">contactar</a>
			<a href="#" class="close-icon hide-mobile" id="close-notification" 
				style="margin-top: 20px !important; margin-left: 8px;"></a>
		</div>
	</div>
</div>

<div class="container">
	<div class="content-column" id="content-posicion-global">
		<?php include 'includes/components/tables/cuentas-personales.html'; ?>
		<?php include 'includes/components/tables/tarjetas.html'; ?>
		<?php include 'includes/components/tables/creditos-horario.html'; ?>
		<?php include 'includes/components/tables/depositos.html'; ?>
		<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
		<?php include 'includes/components/tables/acciones.html'; ?>
		<?php include 'includes/components/tables/seguros.html'; ?>
	</div>
	<div class="banner-column">
		<?php include 'includes/components/banners/utility-links-opciones-2.html'; ?>
		<?php include 'includes/components/carousel/carousel.html'; ?>
		<?php include 'includes/components/banners/sabias-que-enviar.html'; ?>	
	</div>
</div>


<?php include 'includes/components/banners/calugas-footer-posicion-global.html'; ?>




<script>
	$(document).ready(function() {
    	$("#close-tab-pos-global").click(function() {
  			$(".tab-pos-global").fadeOut("slow");
		});
		$("#close-notification").click(function() {
  			$("#ocultar").fadeOut("slow");
		});
	});

</script>



