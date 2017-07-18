<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-ahorro-detalle.js"></script>
<div class="container">
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Ahorro</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="?src=S21-portal-inversiones.php" >Metas de Ahorro</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		
		<hr class="separador">
		
		<div class="tab-content">
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column" id="Ahorro-movimientos">
					<?php include 'includes/components/movements/ahorro-movimientos/header.html'; ?>
					<?php include 'includes/components/movements/ahorro-movimientos/tabs.html'; ?>
					<?php include 'includes/components/movements/ahorro-movimientos/table.html'; ?>
				</div> 
				<div class="banner-column" id="ahorro-lateral">
					<?php include 'includes/components/banners/perfil-inversor.html'; ?>
					<?php include 'includes/components/banners/analista-fondos.html'; ?>
					<?php include 'includes/components/banners/operaciones-programadas-ahorro.html'; ?>
					<?php include 'includes/components/banners/compra-venta-divisas.html'; ?>
					<?php include 'includes/components/banners/indicadores-economicos.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<p>Content 2</p>
			</div>
		</div>
	</div>
</div>