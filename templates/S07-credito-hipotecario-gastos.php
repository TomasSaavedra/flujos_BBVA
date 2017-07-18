<script type="text/javascript" src="js/soho.js"></script>
<div class="container">
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Créditos</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		
		<hr class="separador">
		
		<div class="tab-content"> 
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column" id="creditos">
					<?php include 'includes/components/movements/creditos/header-hipotecario.html'; ?>
					<?php include 'includes/components/movements/creditos/tabs-hipotecario.html'; ?>
					<?php include 'includes/components/movements/creditos/table-gastos-operacionales.html'; ?>
						
				</div> 
				<div class="banner-column" id="creditos-lateral">
					<?php include 'includes/components/banners/simulador-credito-hipotecario.html'; ?>
					<?php include 'includes/components/carousel/carousel-lateral.html'; ?>
					<?php include 'includes/components/banners/certificados-tributarios.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<p>Content 2</p>
			</div>
		</div>
	</div>
</div>