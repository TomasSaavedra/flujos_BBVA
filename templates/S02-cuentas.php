<div class="container">
	<div class="tab-pos-global hide-mobile" id="dBannerOneClick">
		<div class="text-left"></div>
		<div class="cont-right">
			<div class="carrousel">
				<div>
					<table>
						<tbody>
							<tr>
							<td style="width:95%">
								<div id="dTextoOferta">
								<p class="oneClickParrafo">	
									<span class="oneClickSpan">Tienes disponible una Tarjeta de Débito</span>
									para tu cuenta de pago. Solicitala y disfruta de los beneficios.
								</p>
								<div class="hidden">
									<iframe src="tag/posicion_global/MostrarOfertaConsumoOneClick.html"></iframe>
								</div>
								</div>
								</td>
								<td>
								<a href="?src=S17-solicitar-tarjeta-debito.php" class="btn success btn-big btn-big-green" id="btnIrOferta" style="padding-left: 0px; position: relative; right: 0px; top: -2px">Ver más</a> 
								<a href="#;" class="close-icon " id="close-tab-pos-global" 
								style="top: 8px"></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Cuentas</span></p>
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
		<h2 class="title-sh">Cuentas</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		<hr class="separador">
		
		<div class="tab-content">
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column">
					<?php include 'includes/components/tables/cuentas-personales.html'; ?>
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/utility-links-opciones-2.html'; ?>
					<?php include 'includes/components/banners/caja-base-bbva-link.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">
				<iframe name="menuBAR" src="https://www.bbva.cl/personas/cuentas/?mb=si" width="100%" height="790" align="center" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>

<!--iframe xmlns:fo="http://www.w3.org/1999/XSL/Format" onload="$(this).iFrameResize();" id="IframeresetId" src="https://www.bbva.cl/banca-personal/cuentas/?mb=si" style="width: 100%; height: 592px; min-height: 750px; overflow: hidden;" sandbox="allow-same-origin allow-scripts allow-popups allow-forms" scrolling="no"></iframe-->