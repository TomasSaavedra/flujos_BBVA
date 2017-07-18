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
							<div class="hidden-xs col-md-12 text-center">
								<select id="cmbTarjetaEECC" class="selectpicker" data-container="body" data-width="220px">
									<option value="volvo">VISA DORADA TITULAR</option>
								</select>
								<select id="cmbPeriodoEECC" class="selectpicker" data-container="body" data-width="180px">
									<option value="volvo">Noviembre 2015</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<h1 style="font-weight: bold;color: #009EE5;margin-bottom:20px">Mi Estado de Cuenta Simple</h1>
							</div>
							<div class="hidden-lg hidden-md col-xs-12 col-md-12 text-center">
								<select id="cmbTarjetaEECC" class="selectpicker" data-container="body" data-width="100%">
									<option class="text-center" value="volvo">VISA DORADA TITULAR</option>
								</select>
							</div>
							<div class="hidden-lg hidden-md col-xs-12 col-md-12 text-center">
								<select id="cmbPeriodoEECC" class="selectpicker" data-container="body" data-width="100%">
									<option class="text-center" value="volvo">Noviembre 2015</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 hidden-xs text-center" style="margin-bottom: 35px;">
							<div style="display: inline-block;" class="eecc-menu">
								<div class="eecc-layout contenedorNavEECCOff" objetivo="CUANTO">
									<img src="img/img-cuenta-simplificada/pagar.png" style="padding-top: 25px;" class="eecc-content">
								</div>
								<div class="eecc-description" style="padding-top:0;display: inline-block;/* margin-right: 10px; */margin-left: -80px;color: #358CCD;font-weight: bold;position: absolute;/* font-size: 13px; */">¿Cuanto debo pagar?</div>
							</div>
							<div class="separadorEECC"></div>
							<div style="display: inline-block;" class="eecc-menu">
								<div class="eecc-layout contenedorNavEECCOff" objetivo="COMO">
									<img src="img/img-cuenta-simplificada/clculo.png" style="padding-top: 25px;" class="eecc-content">
								</div>
								<div class="eecc-description" style="padding-top:0;display: inline-block;color: #358CCD;font-weight: bold;margin-left: -70px;position: absolute;">¿Como se calculo?</div>
							</div>
						</div>
					</div>
					<div id="CUANTO" class="eecc-info container col-md-12">
						<div class="row">
							<div class="hidden-xs col-md-1">
							</div>
							<div class="col-xs-12 col-md-10 EECC-body">
								<div class="row">
									<div class="col-xs-12 col-md-12 EECC-header">
										<span class="hidden-lg hidden-md col-xs-2 imagenMovTituloCuanto"></span>
										<h3 class="hidden-xs col-md-12 text-center col-xs-10 encabezadoMov">
											&#191;Cuanto debo pagar por mi Tarjeta?
										</h3>
										<h3 class="hidden-lg hidden-md col-md-12 text-center col-xs-10 menu-mobile encabezadoMov">
											&#191;Cuanto debo pagar?
										</h3>
									</div>
								</div>
								<div class="eecc-container-block">
									<div class="row text-center">
										<div class="col-md-6 col-xs-12" style="text-align:right;">
											<div class="col-md-12 col-xs-6 mobTotal title-text"><span>Monto total del periodo</span></div>
											<div class="col-md-12 col-xs-6 mobTotalBlue number-text-blue"><span>US$678.992</span></div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="col-md-12 col-xs-6 mob-title-textLeft title-text"><span>Pagar hasta</span></div>
											<div class="col-md-12 col-xs-6 mob-title-textRight number-text"><span>05-11-2015</span></div>
											<div class="col-md-12 hidden-xs title-text-spanMin"><span>Quedan 5 dias</span></div>
										</div>
									</div>
									<div class="row EECC-body-FacturacionPac">
										<div class="col-md-12 col-xs-12">
											<span class="mobBoldActive">Periodo de facturacion:</span>
											<strong class="mobBoldNone"><span>22-09-2015</span>
											<span>a</span>
											<span>22-10-2015</span></strong>
										</div>
									</div>
									<div class="row EECC-body-OpCupos">
										<div class="col-md-12 col-xs-12">
											<div class="row EECC-body-OpCupos OpBanner1">
												<div class="col-md-12 col-xs-12">
													<span>Informacion al dia de facturacion</span>
													<span>20-10-2015</span>
												</div>
											</div>
											<div class="row EECC-body-OpCupos OpBanner2">
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo total:</span>
													<strong class="mobRight"><span>US$6.000.000</span></strong>
												</div>
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo utilizado:</span>
													<strong class="mobRight"><span>US$3.066.313</span></strong>
												</div>
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo disponible:</span>
													<strong class="mobRight"><span>US$2.933.687</span></strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 text-center">
										<button type="button" class="btn btn-primary" style="margin-bottom: 20px;" onclick="pagarTarjeta();">
											Pagar Ahora
										</button>
									</div>
									<div class="row">
										<div class="col-md-12 hidden-xs EECC-footer">
											<div class="col-md-1 icono-24-eecc"><span></span></div>
											<div class="col-md-11"><span>Si quieres pagar la deuda total de de tu tarjeta debes contactarte con tu ejecutivo de cuentas para solicitar la aceleracion de las compras y avances en cuotas.</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1 hidden-xs cursor eecc-nextAction">
							</div>
						</div>
					</div>
					<div id="COMO" class="eecc-info container col-md-12">
						<div class="row">
							<div class="hidden-xs col-md-1 cursor eecc-prevAction">
							</div>
							<div class="col-md-10 col-xs-12 EECC-body">
								<div class="row">
									<div class="col-xs-12 col-md-12 EECC-header">
										<span class="hidden-lg hidden-md col-xs-2 imagenMovTituloComo"></span>
										<h3 class="hidden-xs col-md-12 text-center col-xs-10 encabezadoMov">
											&#191;Como se calculo mi monto total facturado?
										</h3>
										<h3 class="hidden-lg hidden-md col-md-12 text-center col-xs-10 menu-mobile encabezadoMov">
											&#191;Como se calculo?
										</h3>
									</div>
								</div>
								<div class="eecc-container-block">
									<div class="row">
										<div class="col-md-12 col-xs-12 flujoOP2">
											<div class="title">
												<span>Mi resumen del periodo anterior:</span>
											</div>
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span>Monto total del periodo anterior</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$587.268</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span>Pagos realizados</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$-587.268</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 total">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span>Saldo del periodo anterior</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span>$89.658</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="opCalcular" class="row">
										<div class="col-md-12 col-xs-12 flujoOP2">
											<div class="title">
												<span>Mi resumen del periodo actual:</span>
											</div>
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-xs-12 col-md-12 total">
													<div div class="col-md-7 col-xs-7 des">
														<strong><span>Total cuotas de compras y avances del periodo:</span></strong>
													</div>
													<div div class="col-md-5 col-xs-5 des text-right">
														<strong><span>US$203,29</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row EECC-espacioBloquesInt">
										<div class="col-md-12 flujoOP2">
											<div class="col-xs-12 mobBoxContenido">
												<div class=" col-md-12 col-xs-12 total">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span>Total costos del periodo:</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span>US$0</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row EECC-espacioBloquesInt">
										<div class="col-md-12 flujoOP2">
											<div class="col-xs-12 mobBoxContenido">
												<div class=" col-md-12 col-xs-12 total" style="background:#DFF5C8">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span class="mobBlueText" style="color:#676A64">Total abonos y devoluciones del periodo:</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span class="mobBlueText" style="color:#676A64">-$21,0</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-xs-12 flujoOP2" style="margin: 30px 0 0;">
											<div div class="col-md-6 col-xs-6 totalOperacion">
												<span>Mi monto total del periodo:</span>
											</div>
											<div div class="col-md-6 col-xs-6 totalOperacion text-right">
												<strong><span>$678.992</span></strong>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 flujoOP2 text-center" style="font-size: 12px;margin-bottom: 10px;">
											<div class="title">
												<span><a href="javascript:void(0)">Ver detalle de mi Estado de Cuentas ></a></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="hidden-xs col-md-12 EECC-footer">
											<div class="col-md-1 icono-24-eecc"><span></span></div>
											<div class="col-md-11"><span>Si tienes dudas o consultas, contactanos en nuestra Linea BBVA (600-600-1100), BBVA Chat o con tu Ejecutivo de Cuentas.</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="hidden-xs col-md-1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

	var baseImageSource = 'img/img-cuenta-simplificada/';
	$('.eecc-menu').unbind( 'click, vclick');

	$('.eecc-menu').on('click, vclick',function(event){
		var mnu = this;
		event.preventDefault();
		setTimeout(function(){

			//Inicializacion
			$.each($('.eecc-menu'),function(i,menu){
				$(this).removeClass('active');
				$(this).find('.eecc-layout').removeClass('active');
				$(this).find('.eecc-content').attr('src',baseImageSource + $(this).find('.eecc-layout').attr('objetivo') + '.png');
				$(this).find('.eecc-description').removeClass('active');
			});

			if(!$(this).hasClass('active')){
				$(mnu).addClass('active');
				$(mnu).find('.eecc-layout').addClass('active');
				$(mnu).find('.eecc-content').attr('src',baseImageSource + $(mnu).find('.eecc-layout').attr('objetivo') + '-active.png');
				$(mnu).find('.eecc-description').addClass('active');

				$('.eecc-info').hide();
				$('#' + $(mnu).find('.eecc-layout').attr('objetivo')).show();
			}else{
			}
		},150);
	});

	$('.eecc-nextAction').on('click, vclick', function() { $('.eecc-menu.active').next().next().click() })
	$('.eecc-prevAction').on('click, vclick', function() { $('.eecc-menu.active').prev().prev().click() })

	$(document).ready(function(){
		$('[objetivo=CUANTO]').click();
	$(window).resize(function() {
			configuraViewport();
		});	
	if(window.innerWidth < 768){
			configuraViewport();
		}		
	});
	
	function configuraViewport(){

	
		var menuActivo = "";
	
		if(window.innerWidth > 768){
			menuActivo = $('.eecc-container-block:visible').parents('.eecc-info').attr('id');
			$('.eecc-layout[objetivo='+ menuActivo + ']').click();
			$('.eecc-container-block').show();
		}else{
			setTimeout(function(){
				$('.eecc-info').show().find('.eecc-container-block').hide();
				//$('.eecc-container-block').hide();
			},250);
			menuActivo = $('.eecc-menu.active .eecc-layout').attr('objetivo');
			if($('.eecc-container-block:visible').length == 0){
				$('#'+menuActivo + ' .eecc-container-block').slideDown();
			
			}
		}
	}

	$('.menu-mobile').off('click, vclick').on('click, vclick', function(event){ 
		
		var self = $(this);
		event.preventDefault();  
		if($(self).parents('.EECC-body').find('.eecc-container-block').is(':visible')){
			$(self).parents('.EECC-body').find('.eecc-container-block').slideUp();
		}else{
			$('.eecc-container-block:visible').slideUp();
			$(self).parents('.EECC-body').find('.eecc-container-block').slideDown();
		}
		
	});
	
	// if(!$('.eecc-menu.active').is('.eecc-menu:first')) $('<div class="col-md-1 cursor eecc-prevAction"></div>').insertBefore($('#'+$('.eecc-menu.active .eecc-layout').attr('objetivo') + ' .EECC-body'));
	// if(!$('.eecc-menu.active').is('.eecc-menu:last')) $('<div class="col-md-1 cursor eecc-nextAction"></div>').insertAfter($('#'+$('.eecc-menu.active .eecc-layout').attr('objetivo') + ' .EECC-body'));
</script>