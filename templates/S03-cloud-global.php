<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-cuentas.js"></script>

<!-- <div class="container">

	tab A un click

	<div class="tab-pos-global hide-mobile">
		<div class="text-left">
			<p><i class="ico-un-click"></i>A un click</p>
		</div>
		<div class="cont-right">
			<span class="arrow"></span>
			<div class="carrousel">
				<a href="#;" class="prev"></a>
				<div>
					<p>Refinancia <span>tu actual</span> crédito de consumo <span>y llévate hasta</span> $ 10.000.000 para lo que quieras</p>
				</div>
				<a href="content.php?src=S17-ofertas-un-click.php" class="btn btn-big btn-big-green">Me interesa</a>
				<a href="#;" class="close-icon" id="close-tab-pos-global"></a>
			</div>
		</div>
	</div>

	 /tab A un click

	<div class="section-tabs">
		title
		<h2 class="title-sh">Mis Productos</h2>
		<hr class="separador">
	</div>
</div> -->

<div class="container-cloud">
	<div class="content" id="content-posicion-global">
		<?php include 'includes/components/movements/cloud/DSVE_cloud_global.html'; ?>
	</div>
</div>


<?php include 'includes/components/banners/calugas-footer-posicion-global.html'; ?>




<script>
	$(document).ready(function() {
    	$("#close-tab-pos-global").click(function() {
  			$(".tab-pos-global").fadeOut("slow");
		});
	});
</script>



