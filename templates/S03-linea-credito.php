<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <a href="?src=S02-cuentas.php">Cuentas</a> <span>Línea de Crédito</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">
			Línea de crédito
		</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#section1">Mis productos</a></li>
			<li><a href="#section2">Catálogo de productos</a></li>
		</ul>
		<hr class="separador">
		<div class="tab-content">
			<div class="tab-pane active" id="section1">
				<div class="content-column">
					<?php include 'includes/components/movements/linea-credito/header.html'; ?>
					<?php include 'includes/components/movements/linea-credito/tabs.html'; ?>
					<!--?php include 'includes/components/movements/linea-credito/table.html'; ?-->
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/sabias-que-cuentas.html'; ?>
					<!--?php include 'includes/components/banners/avisos.html'; ?-->
					<!--?php include 'includes/components/banners/operaciones-favoritas.html'; ?-->
				</div>
			</div>
			<div class="tab-pane" id="section2"></div>
		</div>
	</div>
</div>

