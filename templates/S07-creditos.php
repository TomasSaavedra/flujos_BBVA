<div class="container">

	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Créditos</span></p>
	</div>
	
	<!--tab-pos-global-->
	<!--div class="franja-pos-global hide-mobile">
		<div class="f-left">
	 		<p>Mis Ofertas A un Click</p>
	 	</div>
	 	<div class="f-right">
	 		<p>Tienes un Crédito <srtong>Consumo aprobado</srtong> por hasta <srtong>$ 10.000.000</srtong>, válido hasta el <srtong>29 septiembre</srtong></p>
	 		<a href="#;" class="btn">Me interesa</a>
	 	</div>
	</div-->
	<!--Fin tab-pos-global-->

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
					<?php include 'includes/components/tables/creditos.html'; ?>
					
				</div>
				<div class="banner-column" id="creditos-lateral">
					<?php include 'includes/components/banners/caja-base-simulador-credito-hipotecario.html'; ?>
					<?php include 'includes/components/banners/caja-base-simulador-credito-consumo.html' ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<iframe name="menuBAR" src="https://www.bbva.cl/premium/creditos/?mb=si" width="100%" height="550" align="center" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>