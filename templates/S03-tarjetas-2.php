<div class="container">
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
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
				<div class="content-column">
					<?php include 'includes/components/movements/tarjetas/header.html'; ?>
					<?php include 'includes/components/movements/tarjetas/tabs.html'; ?>
					<?php include 'includes/components/movements/tarjetas/table.html'; ?>
						
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/club-adelante.html'; ?>
					<?php include 'includes/components/banners/inscripcion-promociones.html'; ?>
					<?php include 'includes/components/carousel/carousel-lateral.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<p>Content 2</p>
			</div>
		</div>
	</div>
</div>