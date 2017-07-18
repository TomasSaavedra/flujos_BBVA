<div class="container">

	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Tarjetas</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons
		<div class="utility-icons">
		<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
		<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
		<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		-->
		<!-- title -->
		<h2 class="title-sh">Tarjetas</h2>

		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>

		<hr class="separador">

		<div class="tab-content">
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column content-tarjetas">
					<?php include 'includes/components/tables/tarjetas.html'; ?>
					<!--?php include 'includes/components/banners/popup/popup-tarjetas.html'; ?-->
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/cartola-puntos-avisos-1.html';?>
					<!--?php include 'includes/components/banners/caja-base-club-adelante.html'; ?>-->
					<!--?php include 'includes/components/banners/caja-base-inscripcion-promociones.html'; ?>-->
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<iframe name="menuBAR" src="https://www.bbva.cl/personas/tarjetas-credito/?mb=si" width="100%" height="720" align="center" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>