<script type="text/javascript" src="js/soho.js"></script>
<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Depósitos a plazo</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		
		<hr class="separador" >
		
		<div class="tab-content" id="deposito-a-plazo"> 
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column">
					<?php include 'includes/components/movements/deposito-a-plazo/header.html'; ?>
					<?php include 'includes/components/movements/deposito-a-plazo/tabs.html'; ?>
					<!--?php include 'includes/components/movements/deposito-a-plazo/table.html'; ?-->
				</div> 
				<div class="banner-column">
					<?php include 'includes/components/banners/deposito-a-plazo.html'; ?> 
				</div>
			</div>
			
				<div class="tab-pane" id="catalogo-productos">
				<div id="filtro-seguros" class="container">

					<div id="catalogo-seguros">
						<div class="header-catalogo-seguros">
							<hgroup>
								<h2>En BBVA te cuidamos</h2>
								<h3>Conoce los seguros que tenemos para tí</h3>
							</hgroup>
							<img class="hidden-xs" src="img/ejecutivo.jpg">
							<aside class="links hidden-xs">
								<header>
									<h1>Licitación seguros</h1>
								</header>
								<div class="tab-pane active" style="padding:6%;">
									<div>
										<p>Queremos entregarte toda la información de las Pólizas de Seguro</p>
										<a href="#" class="btn small btn-seguros-siguiente">Más información</a>
									</div>
								</div>
							</aside>
						</div>
						<div class="body-cataglo-seguros row">
							<div class="col-md-5">
								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros en línea</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-fraude"></span>Seguros de Fraude</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-cesantia"></span>Seguros en Cesantía</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-auto"></span>Seguro Automotriz</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>
							</div>


							<div class="col-md-5">
								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-fraude"></span>Gestión de Siniestros</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-hogar"></span>Seguros de Hogar</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-accidentes"></span>Seguros de Accidentes Personales</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>

								<div class="caja-catalogo-seguros">
									<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros de Protección Total</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
									<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				
				<div id="simulacion-dap" class="tab-content" style="display:none;"></div>
				
			</div>
		</div>
	</div>
</div>