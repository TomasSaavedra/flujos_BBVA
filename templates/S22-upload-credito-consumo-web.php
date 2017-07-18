<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-cuentas.js"></script>

<div class="container">

	<div class="coronita mgBottom10px">
		<div class="tab-pos-global-1 hide-mobile" id="oneclick">
			<div class="oneclick-left">
				<i class="icon-ico-pencil"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam necessitatibus, corrupti quaerat, nihil mollitia et ratione porro amet magnam unde voluptas totam, incidunt sequi asperiores explicabo a eos vero sit.
			</div>
			<div class="arrow-right-1"></div>
			<div class="oneclick-right">
				<div class="creditoConsumo">
					<div class="row pd0px"> 
						<div class="col-md-12 col-lg-12 col-xs-12 pdRight0px">
							<div class="col-md-8 col-lg-8 col-xs-12 pdLeft0px pdRight0px">
								<div id="dTextoOferta">
									<p class="oneClickParrafo">	
										<span class="oneClickSpan-1" >Finaliza la contratación de tu Crédito de Consumo por $ 7.000.000</span><br>
										<small>Oferta válida por: 7 Días</small>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4 col-xs-12 pdLeft0px pdRight0px">
								<div class="close-banner" id="closeBannerPromo">X</div>
								<a href="?src=S22-upload-credito-consumo-web-resumen.php" class="btn success btn-big btn-big-green" id="btnIrOferta" >Ir a la Oferta</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bannerMobileOneClickCoronita">
			<i class="icon-ico-pencil" ></i>
			<div class="content">
				<div class="text">
					<div>Finaliza ahora la contratación de tu Crédito de Consumo por: $ 7.000.000 | Oferta válida por: 7 Días</div>
					<div style="background-image: url(../img/ico-one-click-mobile-arrow.svg);width: 23px;background-position: center;background-repeat: no-repeat;"></div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- /tab A un click -->

	<div class="section-tabs">
		<!-- title -->
		<h2 class="title-sh">Mis Productos</h2>
		<hr class="separador">
	</div>

</div>

<div class="container">
	<div class="content-column" id="content-posicion-global">
		<?php include 'includes/components/tables/cuentas-personales.html'; ?>
		<?php include 'includes/components/tables/tarjetas.html'; ?>
		<?php include 'includes/components/tables/creditos-horario.html'; ?>
		<?php include 'includes/components/tables/depositos.html'; ?>
		<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
		<?php include 'includes/components/tables/acciones.html'; ?>
		<?php include 'includes/components/tables/seguros.html'; ?>
	</div>
	<div class="banner-column">
		<?php include 'includes/components/banners/utility-links-opciones-2.html'; ?>
		<?php include 'includes/components/carousel/carousel.html'; ?>
		<?php include 'includes/components/banners/sabias-que-enviar.html'; ?>	
	</div>
</div>


<?php include 'includes/components/banners/calugas-footer-posicion-global.html'; ?>




<script>
	$(document).ready(function() {
		$("#close-tab-pos-global").click(function() {
			$(".tab-pos-global").fadeOut("slow");
		});
		$("#close-notification").click(function() {
			$("#ocultar").fadeOut("slow");
		});
	});

</script>



