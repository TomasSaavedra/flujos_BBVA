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
							<div class="separadorEECC"></div>
							<div style="display: inline-block;" class="eecc-menu">
								<div class="eecc-layout contenedorNavEECCOff" objetivo="PROXIMO">
									<img src="img/img-cuenta-simplificada/periodo.png" style="padding-top: 25px;" class="eecc-content">
								</div>
								<div class="eecc-description" style="padding-top:0;display: inline-block;color: #358CCD;font-weight: bold;margin-left: -55.9px;position: absolute;">Proximo estado</div>
							</div>
							<div class="separadorEECC"></div>
							<div style="display: inline-block;" class="eecc-menu">
								<div class="eecc-layout contenedorNavEECCOff" objetivo="PUNTOS">
									<img src="img/img-cuenta-simplificada/puntos.png" style="padding-top: 25px;" class="eecc-content" />
								</div>
								<div class="eecc-description" style="padding-top:3px;display: inline-block;color: #358CCD;font-weight: bold;margin-left: -49px;padding-left: 10px;position: absolute;">Mis puntos</div>
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
										<div class="col-md-4 col-xs-12">
											<div class="col-md-12 col-xs-6 mobTotal title-text"><span>Monto total del periodo</span></div>
											<div class="col-md-12 col-xs-6 mobTotalBlue number-text-blue"><span>$678.992</span></div>
										</div>
										<div class="col-md-4 col-xs-12">
											<div class="col-md-12 col-xs-6 mob-title-textLeft title-text"><span>Pagar hasta</span></div>
											<div class="col-md-12 col-xs-6 mob-title-textRight number-text"><span>05-11-2015</span></div>
											<div class="col-md-12 hidden-xs title-text-spanMin"><span>Quedan 5 dias</span></div>
										</div>
										<div class="col-md-4 col-xs-12">
											<div class="col-md-12 col-xs-6 mob-title-textLeft title-text"><span>Pago minimo</span></div>
											<div class="col-md-12 col-xs-6 mob-title-textRight number-text number-text"><span>$230.141</span></div>
										</div>
									</div>
									<div class="row EECC-body-FacturacionPac">
										<div class="col-md-6 col-xs-12">
											<span class="mobBoldActive">Periodo de facturacion:</span>
											<strong class="mobBoldNone"><span>22-09-2015</span>
											<span>a</span>
											<span>22-10-2015</span></strong>
										</div>
										<div class="col-md-6 col-xs-12">
											<span class="icon-16 blue d06-masinformacion tooltip-help"></span>
											<span class="mobBoldActive">Cargo automatico(PAC):</span>
											<strong class="mobBoldNone"><span>$100.000</span></strong>
										</div>
									</div>
									<div class="row EECC-body-OpCupos">
										<div class="col-md-12 col-xs-12">
											<div class="row EECC-body-OpCupos OpBanner1">
												<div class="col-md-12 col-xs-12">
													<span>Informacion al dia de facturacion:</span>
													<span>20-10-2015</span>
												</div>
											</div>
											<div class="row EECC-body-OpCupos OpBanner2">
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo total:</span>
													<strong class="mobRight"><span>$6.000.000</span></strong>
												</div>
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo utilizado:</span>
													<strong class="mobRight"><span>$3.066.313</span></strong>
												</div>
												<div class="col-md-4 col-xs-12">
													<span class="mobLeft">Cupo disponible:</span>
													<strong class="mobRight"><span>$2.933.687</span></strong>
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
											<div class="col-md-11"><span>Recuerda que el Cargo Automatico (PAC) por el Pago minimo, aplicara en la fecha de vencimiento. Si quieres tener el Cargo Automatico lo puedes solicitar a tu Ejecutivo de Cuentas.</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="hidden-xs col-md-1 cursor eecc-nextAction">
							</div>
						</div>
					</div>
					<div id="COMO" class="eecc-info container col-md-12 ">
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
									<div class="row">
										<div class="col-md-12 col-xs-12 flujoOP2">
											<div class="title">
												<span>Mi resumen del periodo actual:</span>
											</div>
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-md-12 col-xs-12 content">
													<div div class="col-md-8 col-xs-8">
														<span>Total de compras y avances sin cuotas (Mi Tarjeta):</span>
													</div>
													<div div class="col-md-4 col-xs-4 text-right" style="padding-right:0;">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-8 col-xs-8">
														<span>Total de compras y avances sin cuotas (Mis adicionales)</span>
													</div>
													<div div class="col-md-4 col-xs-4 text-right" style="padding-right:0;">
														<strong><span>$10.265</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-9 col-xs-9">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Total de pagos automatico asociados a mi Tarjeta (PAT)</span>
													</div>
													<div div class="col-md-3 col-xs-3 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 total">
													<div div class="col-md-7 col-xs-7 des">
														<strong><span>Total compras y avances sin coutas del periodo</span></strong>
													</div>
													<div div class="col-md-5 col-xs-5 des text-right">
														<strong><span>$700.726</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row EECC-espacioBloques">
										<div class="col-md-12 flujoOP2">
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-md-12 col-xs-12 content">
													<div div class="col-md-8 col-xs-8">
														<span>Total cuotas de compra y avances (Mi Tarjeta)</span>
													</div>
													<div div class="col-md-4 col-xs-4 text-right" style="padding-right:0;">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-9 col-xs-9">
														<span>Total cuotas de compra y avances (Mis Adicionales)</span>
													</div>
													<div div class="col-md-3 col-xs-3 text-right" style="padding-right:0;">
														<strong><span>$10.265</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 total">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span>Total cuotas de compra y avances del periodo</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span>$700.726</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row EECC-espacioBloques">
										<div class="col-md-12 flujoOP2">
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Comision mensual</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$1.752</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Otras comisiones</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Interes:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Interes por mora:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Seguros asociados a mi Tarjeta:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Impuesto:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 total">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span>Total costos del periodo:</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span>$1.752</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row EECC-espacioBloques">
										<div class="col-md-12 flujoOP2">
											<div class="col-xs-12 mobBoxContenido">
												<div class="col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Abonos por beneficios:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$21.356</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 content">
													<div div class="col-md-6 col-xs-6">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<span>Devoluciones:</span>
													</div>
													<div div class="col-md-6 col-xs-6 text-right" style="padding-right:0;">
														<strong><span>$0</span></strong>
													</div>
												</div>
												<div class=" col-md-12 col-xs-12 total" style="background:#DFF5C8">
													<div div class="col-md-6 col-xs-6 des">
														<strong><span class="mobBlueText" style="color:#676A64">Total abonos y devoluciones del periodo:</span></strong>
													</div>
													<div div class="col-md-6 col-xs-6 des text-right">
														<strong><span class="mobBlueText" style="color:#676A64">$89.658</span></strong>
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
							<div class="hidden-xs col-md-1 cursor eecc-nextAction">
							</div>
						</div>
						<div class="row">
							<div class="hidden-xs col-md-10 col-md-offset-1 EECC-body" style="margin-top:20px;padding: 0;border:0;">
								<img class="col-md-12" src="img/banner_eecc_simple.jpg"/>
							</div>
						</div>
					</div>
					<div id="PROXIMO" class="eecc-info container col-md-12">
						<div class="row">
							<div class="hidden-xs col-md-1 cursor eecc-prevAction">
							</div>
							<div class="col-md-10 EECC-body">
								<div class="row">
									<div class="col-xs-12 col-md-12 EECC-header">
										<span class="hidden-lg hidden-md col-xs-2 imagenMovTituloProximo"></span>
										<h3 class="hidden-xs col-md-12 text-center col-xs-10 encabezadoMov">
											&#191;Que debo saber del proximo periodo?
										</h3>
										<h3 class="hidden-lg hidden-md col-md-12 text-center col-xs-10 menu-mobile encabezadoMov">
											&#191;Proximo periodo?
										</h3>
									</div>
								</div>
								<div class="eecc-container-block">
									<div class="row">
										<div class="col-md-6 col-xs-12 flujoOP3">
											<div class="col-md-12 col-xs-12 title" style="padding: 0;font-size: 15px;">
												<strong><span>Desde:&nbsp;</span><span>22-09-2015&nbsp;</span><span>Hasta:&nbsp;</span><span>20-10-2015</span></strong>
											</div>
										</div>
										<div class="col-md-6 col-xs-12 flujoOP3" style="padding: 10px 40px 10px 0;font-size: 15px;">
											<div id="pagarHasta" class="col-md-12 col-xs-12 titleMob title text-right">
												<strong><span>Pagar hasta:&nbsp;</span><span>05-11-2015</span></strong>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-xs-12 flujoOP3">
											<div class="row">
												<div class="col-md-12 col-xs-12 total">
													<div class="des">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<strong><span>Tasas de interes:</span></strong>
													</div>
												</div>
											</div>
											<div class="row text-center" style="border: 1px solid #F0F0F0;">
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Rotativo:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>1,19%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Compras en cuotas:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>1,0%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Avances en coutas:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>2,0%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Mora:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>2,1%</span></strong>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-md-12 flujoOP3">
											<div class="row">
												<div class="col-md-12 col-xs-12 total">
													<div class="des">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<strong><span>CAE:</span></strong>
													</div>
												</div>
											</div>
											<div class="row text-center" style="border: 1px solid #F0F0F0;">
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Rotativo:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>25,5%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Compras en cuotas:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>11,8%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Avances en coutas:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>24,7%</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Mora:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>24,7%</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="hidden-xs col-md-12 flujoOP3">
											<div class="row">
												<div div class="col-md-12 title" style="padding: 0;font-size: 15px;margin: 0;">
													<strong><span>Mis proximas cuotas:</span></strong>
												</div>
											</div>
											<div class="row text-center">
												<div class="col-md-1 flagInicio">
												</div>
												<div class="col-md-2 content contentFlag">
													<div class="col-md-12">
														<span>Noviembre:</span>
													</div>
													<div class="col-md-12">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class="col-md-1 flagIntermedio">
												</div>
												<div class="col-md-2 content contentFlag">
													<div class="col-md-12">
														<span>Noviembre:</span>
													</div>
													<div class="col-md-12">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class="col-md-1 flagIntermedio">
												</div>
												<div class="col-md-2 content contentFlag">
													<div class="col-md-12">
														<span>Noviembre:</span>
													</div>
													<div class="col-md-12">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class="col-md-1 flagIntermedio">
												</div>
												<div class="col-md-2 content contentFlag">
													<div class="col-md-12">
														<span>Noviembre:</span>
													</div>
													<div class="col-md-12">
														<strong><span>$690.265</span></strong>
													</div>
												</div>
												<div class="col-md-1 flagFin">
												</div>
											</div>
										</div>
										<div class="hidden-lg hidden-md col-md-12 flujoOP3">
											<div class="row">
												<div class="col-md-12 col-xs-12 total">
													<div class="des">
														<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
														<strong><span>Mis proximas cuotas:</span></strong>
													</div>
												</div>
											</div>
											<div class="row text-center" style="border: 1px solid #F0F0F0;">
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Noviembre:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>$537.128</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Diciembre:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>$537.128</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Enero:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>$529.283</span></strong>
													</div>
												</div>
												<div class="col-md-3 col-xs-12 content">
													<div class="mobLeft col-md-12 col-xs-6">
														<span>Febrero:</span>
													</div>
													<div class="mobRight col-md-12 col-xs-6">
														<strong><span>$129.249</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hidden-xs col-md-1 cursor eecc-nextAction">
							</div>
						</div>
					</div>
					<div id="PUNTOS" class="eecc-info container col-md-12">
						<div class="row">
							<div class="hidden-xs col-md-1 cursor eecc-prevAction">
							</div>
							<div class="col-md-10 col-xs-12 EECC-body">
								<div class="row">
									<div class="col-xs-12 col-md-12 EECC-header">
										<span class="hidden-lg hidden-md col-xs-2 imagenMovTituloPuntos"></span>
										<h3 class="hidden-xs col-md-12 text-center col-xs-10 encabezadoMov">
											&#191;Puntos Club adelante del periodo?
										</h3>
										<h3 class="hidden-lg hidden-md col-md-12 text-center col-xs-10 menu-mobile encabezadoMov">
											&#191;Mis Puntos?
										</h3>
									</div>
								</div>
								<div class="eecc-container-block">
									<div class="row">
										<div class="col-md-12 col-xs-12 flujoOP4">
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="hidden-lg hidden-md mob-puntos col-md-12 col-xs-12 flujoOP3 mob-flujo4">
														<div class="row">
															<div class="col-md-12 col-xs-12 total">
																<div class="des">
																	<span class="hidden-xs icon-16 blue d06-masinformacion tooltip-help"></span>
																	<strong><span>Como se calcularon mis puntos del periodo:</span></strong>
																</div>
															</div>
														</div>
														<div class="row text-center" style="border: 1px solid #F0F0F0;">
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Saldo puntos del periodo anterior:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>40.163</span></strong>
																</div>
															</div>
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Puntos acumulados:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>3.981</span></strong>
																</div>
															</div>
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Puntos canjeados:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>-7500</span></strong>
																</div>
															</div>
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Puntos vencidos:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>-500</span></strong>
																</div>
															</div>
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Ajustes:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>0</span></strong>
																</div>
															</div>
															<div class="col-md-3 col-xs-12 content">
																<div class="mobLeft col-md-12 col-xs-6">
																	<span>Saldo de puntos del periodo:</span>
																</div>
																<div class="mobRight col-md-12 col-xs-6">
																	<strong><span>36.145</span></strong>
																</div>
															</div>
														</div>
													</div>
													<div class="hidden-xs col-md-12">
														<div class="col-md-12 content">
															<div div class="col-md-9">
																<span>Saldo puntos del periodo anterior:</span>
															</div>
															<div div class="col-md-3 text-right" style="padding-right:0;">
																<span>40.163</span>
															</div>
														</div>
														<div class="col-md-12 content">
															<div div class="col-md-9">
																<span>Puntos acumulados:</span>
															</div>
															<div div class="col-md-3 text-right" style="padding-right:0;">
																<strong><span>3.981</span></strong>
															</div>
														</div>
														<div class="col-md-12 content">
															<div div class="col-md-9">
																<span>Puntos canjeados:</span>
															</div>
															<div div class="col-md-3 text-right" style="padding-right:0;">
																<span>-7500</span>
															</div>
														</div>
														<div class="col-md-12 content">
															<div div class="col-md-9">
																<span>Puntos vencidos:</span>
															</div>
															<div div class="col-md-3 text-right" style="padding-right:0;">
																<span>-500</span>
															</div>
														</div>
														<div class="col-md-12 content">
															<div div class="col-md-9">
																<span>Ajustes:</span>
															</div>
															<div div class="col-md-3 text-right" style="padding-right:0;">
																<span>0</span>
															</div>
														</div>
														<div class="col-md-12 content totalPuntos">
															<div div class="col-md-8">
																<span>Saldo de puntos del periodo:</span>
															</div>
															<div div class="col-md-4 text-right totalSaldoPuntos" style="padding-right:0;">
																<span>36.145</span>
															</div>
														</div>
													</div>
												</div>
												<div class="hidden-xs col-md-6">
													<img class="col-md-12" src="img/EECC_puntos.jpg"/>
												</div>
												<div class="col-md-12 col-xs-12 bannerAvisoPuntos">
													<div class="col-md-1 col-xs-1 alert-eecc"></div>
													<div class="col-md-11 col-xs-11 ">
														<strong><span></span><span>Puntos por vender el proximo periodo:</span><span>300</span></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-xs-12 mob-footer EECC-footer">
											<div class="hidden-xs col-md-1 col-xs-1 icono-24-eecc"><span></span></div>
											<div class="col-md-11 col-xs-11"><span>Informacion al dia de facturacion:<span>20-10-2015</span></span></div>
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
	
	$('.imgCuentas').on('click, vclick', function(){ 
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).attr('src','img/radio-sin-tick-cloud.png');
		}else{
			$('.imgCuentas').removeClass('active');
			$('.imgCuentas').attr('src','img/radio-sin-tick-cloud.png');
			$(this).addClass('active');
			$(this).attr('src','img/radio-tick-cloud.png');
		}
	});

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

	//if(!$('.eecc-menu.active').is('.eecc-menu:first')) $('<div class="hidden-xs col-md-1 cursor eecc-prevAction"></div>').insertBefore($('#'+$('.eecc-menu.active .eecc-layout').attr('objetivo') + ' .EECC-body'));
	//if(!$('.eecc-menu.active').is('.eecc-menu:last')) $('<div class="hidden-xs col-md-1 cursor eecc-nextAction"></div>').insertAfter($('#'+$('.eecc-menu.active .eecc-layout').attr('objetivo') + ' .EECC-body'));

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
			$('.eecc-info').show().find('.eecc-container-block').hide();
			//$('.eecc-container-block').hide();
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

	function validarMovil(){
		return navigator.userAgent.toLowerCase().search(/iphone|ipod|ipad|android/) > -1;
	}

</script>