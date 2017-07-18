<div class="container page-rentabilizar">
	<div class="section-tabs">
		
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a> 
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a> 
		</div>

		<!-- title -->
		<h2 class="title-sh">
			Ahorro e inversión 
		</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li><a href="?src=S08-ffmm.php">Mis productos</a></li>
			<li><a href="?src=S21-portal-inversiones.php" >Metas de Ahorro</a></li>
			<li class="active"><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>

		
		<hr class="separador">
		
		<div class="tab-content">
			<div class="tab-pane" id="mis-productos">
			</div>
			
			<div class="tab-pane active" id="catalogo-productos">

			
				 <div class="creditos-pago-cuentas"> 
				 	<h3>Quiero rentabilizar mis ahorros</h3>
				 	<a class="close-icon" href="?src=S02-ahorro-inversion.php"></a>
					<div class="main-wizard">
						<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
							<article class="wizard">
								<div data-title="Importe">
									<?php include 'includes/components/movements/ahorro-inversiones/catalogo-productos/rentabilizar/paso1.html'; ?>
								</div>
								<div data-title="Horizonte de la inversión" data-multistep="true">
				                	<div class="cont-wizard">
									<?php include 'includes/components/movements/ahorro-inversiones/catalogo-productos/rentabilizar/paso2.html'; ?>
				                    </div>
								</div>
								<div data-title="Riesgo" data-multistep="true">
									<?php include 'includes/components/movements/ahorro-inversiones/catalogo-productos/rentabilizar/paso3.html'; ?>
								</div>
							</article>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/soho-rentabilizar.js"></script>