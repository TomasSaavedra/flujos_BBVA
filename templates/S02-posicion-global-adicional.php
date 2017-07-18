<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-cuentas.js"></script>

<div class="container">
<div class="menu-miga">
		<p><a href="" style="color: #fff;"></a> <span></span></p>
	</div>
	<div class="section-tabs">
		<!-- title -->
		<h2 class="title-sh">Mis Productos</h2>
		<hr class="separador">
	</div>
</div>

<div class="container">
	<div class="content-column" id="content-posicion-global">
		<?php include 'includes/components/tables/tarjeta-adicional.html'; ?>
	</div>

	<div class="banner-column">
		<?php include 'includes/components/banners/tambien-puede-interesar.html'; ?>	
	</div>

</div>

<?php include 'includes/components/banners/calugas-footer-posicion-global.html'; ?>

<script type="text/javascript">
	$(document).ready(function() {
    	$("#close-tab-pos-global").click(function() {
  			$(".tab-pos-global").fadeOut("slow");
		});
		$("#close-notification").click(function() {
  			$("#ocultar").fadeOut("slow");
		});
	});
</script>



