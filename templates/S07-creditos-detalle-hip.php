<script type="text/javascript" src="js/soho.js"></script>
<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <a href="?src=S07-creditos.php">Crédito</a> <span>Crédito Hipotecario</span></p>
	</div>

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
					<?php include 'includes/components/movements/creditos/table-hipotecario.html'; ?>
						
				</div> 
				<div class="banner-column" id="creditos-lateral">
					<?php include 'includes/components/banners/sabias-que-creditos.html'; ?>
					<?php include 'includes/components/banners/caja-base-simulador-credito-hipotecario.html'; ?>
					<?php include 'includes/components/banners/certificados-tributarios-y-ofertas2.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<iframe name="menuBAR" src="https://www.bbva.cl/premium/creditos/?mb=si" width="100%" height="550" align="center" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>