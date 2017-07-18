<div class="content" id="contenedorEECC">
	<div class="container">
		<!-- breadcrumbs -->
		<!--@{breadcrumbs} -->
		<!-- Fin breadcrumbs -->
		<div class="section-tabs">
			<!-- Utility icons -->
			<div class="utility-icons">
				<!-- <a href="#" id="btnVerDetallePdf" class=""><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a> -->
				<!-- <a href="javascript:void(0);" class="hidden-para-pruebas"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a> -->
			</div>

			<!-- title -->
			<h2 class="title-sh">Tarjetas</h2>

			<!-- Section tabs  -->
			<ul class="nav nav-tabs align-center">
				<li class="active" id="tab-mis-productos"><a href="#mis-productos" onclick="onClickMisProductos();">Mis productos</a></li>
				<li id="tab-catalogo-productos"><a href="#catalogo-productos" onclick="menuMigaSpan2('Cat&aacute;logo de productos','N');">Cat&aacute;logo de productos</a></li>
			</ul>

			<hr class="separador">
			<div class="tab-content">
				<div class="row tab-pane active" id="mis-productos">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12 text-center">
								<select id="cmbTarjetaEECC" class="selectpicker" data-container="body" data-width="220px">
									<option value="volvo">VISA DORADA TITULAR</option>
								</select>
								<select id="cmbPeriodoEECC" class="selectpicker" data-container="body" data-width="180px">
									<option value="volvo">Noviembre 2015</option>
								</select>
							</div>
						</div>
						<div style="text-align: center;">
							<h1 style="font-weight: bold;color: #009EE5">Conoce tu Estado de Cuenta simplificado</h1>
						</div>
						<div style="text-align: center;margin-bottom:20px;">
							<img id="opPagar" src="img/icon-pagar.PNG" class="enlace-eecc" objetivo="CUANTO"/>
							<img id="opComo" src="img/icon-como.PNG" class="enlace-eecc" objetivo="COMO"></span>
							<img id="opProximo" src="img/icon-proximo.PNG" class="enlace-eecc" objetivo="PROXIMO"></span>
							<img id="opPuntos" src="img/icon-puntos.PNG" class="enlace-eecc" objetivo="PUNTOS"></span>
						</div>
					</div>
					<div id="contenido-eecc" class="container">
						<div id="inicio">
							<center><br><img src="img/loader.gif"><br><br></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	// $(document).ready(function () {
		// $(".enlace-eecc:first").click();
	// });

	// $(".enlace-eecc").on('click, vclick', function(event){

		// event.preventDefault();
		// var objetivo = $(this).attr('objetivo');

		// $.ajax({
			// url: '?AID=TARJETAS_EECC_' + objetivo,
			// type: 'post',
			// dataType: 'html',
			// beforeSend	: function(){
				// capaCargaEECC();
			// },
			// success: function(html){
				// $("#contenido-eecc").html(html);
			// },
			// error: function(xhr,request,status){
				// log('fail');
			// }
		// });
	// });
	// function capaCargaEECC(){
		// $("#contenido-eecc").html('<center><br><img src="img/loader.gif"><br><br></center>');
	// }
</script>