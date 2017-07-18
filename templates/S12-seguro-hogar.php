<script type="text/javascript" src="js/soho.js"></script>
<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a><a href="?src=S02-seguros.php">Seguros</a> <span>Seguro Hogar</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Seguros</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		
		<hr class="separador" >
		
		<div class="tab-content" id="seguros"> 
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column">
					<?php include 'includes/components/movements/seguros/header.html'; ?>
					<?php include 'includes/components/movements/seguros/tabs.html'; ?>
					<?php include 'includes/components/movements/seguros/table.html'; ?>
				</div> 
				<div class="banner-column">
					<?php include 'includes/components/banners/sabias-que-seguros.html'; ?>
					<?php include 'includes/components/banners/seguros.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<?php include 'S12-buscar-seguro.php'; ?>
			</div>
		</div>
	</div>
</div>