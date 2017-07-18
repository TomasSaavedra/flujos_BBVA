<div class="formcontent container_fluid">

		<section id="facade" class="section_main stag_sans_ligth">
			<div class="blocked_disabled" style="z-index: -1;"></div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><!-- 4 columns -->
					<article class="side_left">
						<div class="offer">
							<div class="content_under">
								<div class="row">
									<div>
										<h3>¡Bienvenido, nos alegra tenerte por acá!</h3>
										<p>Queremos ser tu banco, estar donde tú estés.</p>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div><!-- 4 columns -->
				<div class="small-12 medium-8 large-8 columns"><!-- 8 columns -->
					<article class="side_rigth">
						<div id="side_rigth_banner">
							<p>
								<img id="img1" src="https://www.bbva.cl/fbin/mult/banner-grande_tcm1106-623015.jpg" class="responsive image1">
								<img id="img2" src="https://www.bbva.cl/fbin/mult/banner-pequeno_tcm1106-623016.jpg" class="responsive image2">
							</p>
						</div>
						<article class="content-pasos contentSteps1 paso1">
							<h4 class="font_lite" id="tituloPrimeraPantalla"><h3 class="text-center">Hazte Cliente en dos simples pasos:</h3></h4>

							<div class="row boxIcons" style="margin:0px !important;">
								<div class="small-12 medium-2 large-2 columns hiddenMedium">&nbsp;</div>
								<div class="large-4 medium-6 small-12 columns">
									<img src="fu/img/icon-producto.png">									
									<p>1- Selecciona tus productos de interés</p>
								</div>
								<div class="large-4 medium-6 small-12 columns">
									<img src="fu/img/icon-persona.png">									
									<p>2- Déjanos tus datos de contacto</p>
								</div>
								<div class="small-12 medium-2 large-2 columns hiddenMedium">&nbsp;</div>
							</div>
						</article>
						<div class="side_rigth_content">
							<article class="campos-inicio">
								<div class="small-12 medium-12 large-12 block_two_columns">
									<h4 class="font_lite">Antes de comenzar, compártenos la siguiente información</h4>
									<p class="line_space_1">
										Recuerda, los campos marcados con asterisco (*) son obligatorios.
									</p>
									<div class="row block_two_columns">
											<div class="small-12 medium-6 large-6 column margin_input_form">
												<label>¿Cómo te llamas?*</label> 
												<input type="text" id="lb_name1" name="lb_name1" maxlength="100" onchange="enableNextZero()" onkeyup="enableNextZero()" oninput="enableNextZero()">
											</div>
											<div class="small-12 medium-6 large-6 column margin_input_form">
												<label>¿Cuál es tu RUT?*</label> 
												<input type="text" id="lb_rut" name="lb_rut" maxlength="12" onchange="enableNextZero()" onkeyup="enableNextZero()" oninput="enableNextZero()">
											</div>

									


									</div>
									<div class="button_init">
										<button class="init_button" id="next_zero">Comenzar</button>
									</div>
								</div>
							</article>
						</div><!-- side right content -->
					</article>
				</div><!-- 8 columns -->
			</div><!-- row -->
		</section><!-- section paso zero -->

		<section id="step_one" class="section_main text_font_form height_step2" style="display:none">
			<div class="blocked_disabled"></div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><!-- 4 columns -->
					<article id="p1" class="side_left height_step height_step2">
						<div class="offer">
							<div class="row">
								<div class="small-11 medium-11 large-11 columns">
									<div id="head_step_one" class="head_step">
										<label>PASO 1 de 2</label>
										<p>Productos de interés</p>
									</div>
								</div>
								<div class="small-1 medium-1 large-1 columns">
									<div class="circle_check type1 ">
										<label id="check_step_one" class="circle_unsuccess" for=""></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="content_text">
									<p>
										Descubre los productos BBVA y disfruta de los beneficios que tenemos para ti.
									</p>
								</div>
							</div>
						</div>
					</article>
				</div><!-- 4 columns -->
				<div class="small-12 medium-8 large-8 columns"><!-- 8 columns -->
					<article class="side_rigth"><!-- side right -->

						<article class="ofertas" id="lista-ofertas" style="display: none"><!-- ofertas -->
							<div class="small-1 medium-1 large-1 columns">&nbsp;</div>
							<div class="small-10 medium-10 large-10 columns contentOfertas">
								<div class="headOfertas">
									<h6 id="tituloOfertas">
										¡Felicidades, tenemos <strong>productos con ofertas</strong> pre aprobadas para ti!
									</h6>
								</div>
								<div id="divOfertaPlanCuenta" style="display:none" class="divOferta column item-oferta">
									<h6>
										<img src="fu/img/check.png"> Plan de Cuenta Corriente
									</h6>
									<p>Todos los productos que necesitas para hacer tu vida más simple.</p>
								</div>
								<div id="divOfertaConsumo" style="display:none" class="divOferta column item-oferta">
									<h6>
										<img src="fu/img/check.png"> Crédito de Consumo
									</h6>
									<p>Haz lo que quieras con tu crédito pre aprobado de: <span id="montoPreaprobadoConsumo">$1.000.000</span></p>
								</div>
								<div id="divOfertaHipotecario" style="display:none" class="divOferta column item-oferta">
									<h6>
										<img src="fu/img/check.png"> Crédito Hipotecario
									</h6>
									<p>Tienes <span id="montoPreaprobadoHipotecario">$1.000.000</span>para comprar esa propiedad que tienes en mente.</p>
								</div>
								<div id="divOfertaTarjetaCredito" style="display:none" class="divOferta column item-oferta">
									<h6>
										<img src="fu/img/check.png"> Tarjeta de Crédito
									</h6>
									<p>Con cupo de <span id="montoPreaprobadoTC">$1.000.000</span>y grandes beneficios.</p>
								</div>
							</div>
							<div class="medium-1 large-1 columns">&nbsp;</div>
						</article>
						<!-- ofertas -->
					
						<div class="side_rigth_content">
							<div class="small-12 medium-12 large-12 block_two_columns">
								<div class="row text_tittle ">
									<p>
										<span class="nombre-solicitante">Jhon Doe</span>, 
										¿Qué productos te gustaría solicitar?
									</p>
								</div>
								<div class="row block_two_columns lista-productos" id="lista-productos" style="display: none;">
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="cta-cte" id="cta-cte" value="">
											</div>

											<img src="fu/img/cuentacorriente.png">
											<p>Plan de Cuenta Corriente</p>
										</div>
									</div>
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="consumo" id="consumo" value="">
											</div>
											<img src="fu/img/creditoconsumo.png">
											<p>Crédito de Consumo</p>
										</div>
									</div>
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="hipotecario" id="hipotecario" value="">
											</div>
											<img src="fu/img/creditohipotecario.png">
											<p>Crédito Hipotecario</p>
										</div>
									</div>
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="tarjetacredito" id="tarjetacredito" value="">
											</div>
											<img src="fu/img/tarjetadecredito.png">
											<p>Tarjeta de Crédito</p>
										</div>
									</div>
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="wallet" id="wallet" value="">
											</div>
											<img src="fu/img/bbvawallet.png">
											<p>BBVA Wallet</p>
										</div>
									</div>
									<div class="small-12 medium-4 large-4 column">
										<div class="producto-solicitar">
											<div class="checkbox input-checkbox">
												<input class="checkProducto" type="checkbox" name="visaenjoy" id="visaenjoy" value="">
											</div>
											<img src="fu/img/visaenjoy.png">
											<p>Visa Enjoy</p>
										</div>
									</div>
								</div>
								<div class="row"><!-- btn -->
									<div class="button_init">
										<button class="init_button button_disable" id="next_one" disabled="true">Continuar</button>
									</div>
								</div><!-- btn -->
							</div>
							<div class="small-8 large-8 medium-8 textLegal">
								<p>
									*La oferta pre aprobada no es vinculante. La contratación del producto está sujeta a la aprobación de riesgo comercial del cliente y el cumplimiento de las políticas crediticias del Banco, disponibles en www.bbva.cl.
								</p>
							</div>
						</div>

					</article><!-- side right -->
				</div><!-- 8 columns -->
			</div><!-- row -->
		</section><!-- section paso 1 -->

		<section id="step_two" class="section_main text_font_form" style="display:none">
			<div class="blocked_disabled">
			</div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><!-- 4 columns -->
					<article class="side_left height_step">
						<div class="offer">
							<div class="row">
								<div class="small-11 medium-11 large-11 columns">
									<div id="head_step_two" class="head_step">
										<label>PASO 1 de 2</label>
										<p id="tituloMenuSimuladores">Productos de interés</p>
									</div>
								</div>
								<div class="small-1 medium-1 large-1 columns">
									<div class="circle_check type1 ">
										<label id="check_step_two" class="circle_unsuccess" for=""></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="content_text">
									<p id="textoMenuSimuladores">
										Descubre los productos BBVA y disfruta de los beneficios que tenemos para ti.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="footer_step">
									<ul>
										<li id="lstBeneficios" style="display:none;">Simulador de Beneficios</li>
										<li id="lstConsumo" style="display:none;">Simulador Crédito de Consumo</li>
										<li id="lstHipotecario" style="display:none;">Simulador Crédito Hipotecario</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
				</div><!-- 4 columns -->
				<div class="small-12 medium-8 large-8 columns "><!-- 8 columns -->
					<article class="side_rigth">
						<div id="simConsumoIframe">
						</div>
						<div class="home-simuladores" id="home-simuladores"><!-- home simuladores -->
							<div class="row text_tittle">
								<p><span class="nombre-solicitante">Jhon Doe</span>, <span class="titulo-simuladores">¿Te gustaría simular tu Crédito?</span></p>
							</div>
							<p class="text-center">
								<!--Tu simulaci&oacute;n se enviar&aacute; junto con tu solicitud al finalizar el proceso.-->
							</p>
							<div class="side_rigth_content">
								<div class="row block_two_columns">
									<div class="small-12 medium-12 large-12 columns">
									
										<div class="row">
											<div class="small-12 medium-2 large-2 columns hiddenMedium">&nbsp;</div>
											
											<div id="btnSimuladorBeneficios" class=" columns text-center simulaBeneficios small-12 medium-6 large-4" style="display:none"><!-- beneficios -->
												<a href="#">
													<div class="beneficios"></div>
													<p style="font-size: 13px;">Simula tus Beneficios</p>
												</a>
											</div><!-- beneficios -->
											
											<div id="btnSimuladorBeneficiosDisabled" class="columns text-center small-12 medium-6 large-4" style="display:none"><!-- beneficios-finished -->
												<div>
													<div class="beneficios-ok"></div>
													<p style="font-size: 13px;">Simula tus Beneficios</p>
												</div>
											</div><!-- beneficios-finished -->
											
											<div id="btnSimuladorConsumo" class="columns text-center simulaConsumo small-12 medium-6 large-4" style="display:none"><!-- consumo -->
											
												<a href="#">
													<div class="consumo"></div>
													<p style="font-size: 13px;">Simula tu Crédito de Consumo</p>
												</a>
											</div><!-- consumo -->
											
											<div id="btnSimuladorConsumoDisabled" class="columns text-center small-12 medium-6 large-4" style="display:none"><!-- consumo-finished -->
												<div>
													<div class="consumo-ok"></div>
													<p style="font-size: 13px;">Simula tu Crédito de Consumo</p>
												</div>

											</div><!-- consumo-finished -->
											
											<div id="btnSimuladorHipotecario" class="columns text-center simulaHipotecario small-12 medium-6 large-4" style="display:none"><!-- Hipotecario -->
												<a href="#">
													<div class="hipotecario"></div>
													<p style="font-size: 13px;">Simula tu Crédito Hipotecario</p>
												</a>
											</div><!-- Hipotecario -->
											
											<div id="btnSimuladorHipotecarioDisabled" class=" columns text-center small-12 medium-6 large-4" style="display:none"><!-- hipotecario-finished -->
												<div>
													<div class="hipotecario-ok"></div>
													<p style="font-size: 13px;">Simula tu Crédito de Hipotecario</p>
												</div>
											</div><!-- hipotecario-finished -->
											
											<div class="small-12 medium-3 large-2 columns hiddenMedium">&nbsp;</div>
										</div>

										<div class="lineaProductos" id="lineaEntremedia"></div>
									</div>
									<div class="row">
										<div class="button_init">
											<button class="btn-secondary" id="next_two">Saltar simulación</button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- home simuladores -->

						<div class="simuladorConsumo contentSimuladores"><!-- consumo -->
							<div class="row text_tittle">
								<p><span class="nombre-solicitante">Jhon Doe</span>, estás viendo el detalle de tu simulación</p>
							</div>
							<!-- ac&aacute; deber&iacute;a integrarse el simulador -->
						</div><!-- consumo -->

						<div class="simuladorHipotecario contentSimuladores"><!-- hipotecario -->
							<div class="row text_tittle">
								<p><span class="nombre-solicitante">Jhon Doe</span>, estás viendo el detalle de tu simulación</p>
							</div>
							<!-- ac&aacute; deber&iacute;a integrarse el simulador -->
						</div><!-- hipotecario -->

					</article><!-- side right -->
				</div><!-- 8 columns -->
			</div><!-- row -->
		</section><!-- section paso 2-->
		
		<section id="step_three" class="section_main text_font_form" style="display:none">
			<div class="blocked_disabled">
			</div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><!-- 4 columns -->
					<article id="p3" class="side_left height_step">
						<div class="offer">
							<div class="row">
								<div class="small-11 medium-11 large-11 columns">
									<div id="head_step_tree" class="head_step">
										<label>PASO 2 de 2</label>
										<p>Datos de contacto</p>
									</div>
								</div>
								<div class="small-1 medium-1 large-1 columns">
									<div class="circle_check type1">
										<label id="check_step_tree" class="circle_unsuccess" for=""></label>
									</div>
								</div>
							</div>
							<div class="row ">
								<div class="content_text">
									<p>Procesaremos tu solicitud y te contactaremos.</p>
								</div>
							</div>
						</div>
					</article>
				</div><!-- 4 columns -->
				<div class="small-12 medium-8 large-8 columns "><!-- 8 columns -->
					<article class="side_rigth">
						<div class="side_rigth_content">
							<div class="row text_tittle ">
								<p style="margin-bottom:0px"><span class="nombre-solicitante">Jhon Doe</span>, estás a un paso de enviar tu solicitud.</p>
							</div><!-- title -->
							<p class="line_space_1">
								Recuerda, los campos marcados con asterisco (*) son obligatorios.
							</p>

							<div class="row block_two_columns large-10">
								<div class="row">
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Teléfono (fijo o móvil)*</label> 
										<input type="text" id="lb_phone" name="lb_phone" maxlength="9" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" placeholder="Ej: Fijo: 221234567 o Móvil: 912345678">
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Email*</label> 
										<input type="email" id="field-email" name="field-email" maxlength="100" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()">
										<input type="email" id="emailRobot" name="emailRobot" value="noTocado" maxlength="100" style="display: none;">
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Región*</label> 
										<select class="select_" id="region" name="region" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" style="display: none;">
											<option value="">Selecciona una Región</option>
											<option value="1">Metropolitana</option>
											<option value="2">...</option>
										</select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="region-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="region-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Selecciona una Región</span></span>
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Comuna*</label> 
										<select class="select_" id="comuna" name="comuna" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" style="display: none;">
											<option value="">Selecciona una Comuna</option>
											<option value="1">Santiago</option>
											<option value="2">...</option>
										</select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="comuna-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="comuna-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Selecciona una Comuna</span></span>
									</div>
								</div>
							</div>

							<div class="row block_two_columns large-10" id="divUniversidad" style="display:none">
								<div class="row">
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Universidad*</label> 
										<select id="universidad" name="universidad" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" style="display: none;">
											<option value="">Selecciona una Universidad</option>
											<option value="1">...</option>
										</select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="universidad-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="universidad-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Selecciona una Universidad</span></span>
									</div>		
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Carrera*</label> 
										<select id="carrera" name="carrera" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" style="display: none;">
											<option value="">Selecciona una Carrera</option>
											<option value="1">...</option>
										</select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="carrera-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="carrera-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Selecciona una Carrera</span></span>
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Año en Curso*</label> 
										<select id="añoCarrera" name="añoCarrera" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" style="display: none;">
											<option value="">Selecciona una opción</option>
											<option value="4to">4° año</option>
											<option value="5to">5° año</option>
											<option value="6to">6° año</option>
											<option value="7mo">7° año</option>
											<option value="egr">Egresado</option>
										</select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="añoCarrera-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="añoCarrera-menu" aria-haspopup="true" style="width: 100px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Selecciona una opción</span></span>
										<span class="side_span_right" style="text-align: right !important;">1°, 2°, 3° año no aplica</span>
									</div>									
									<div class="small-12 medium-6 large-6 column margin_input_form">
										
									</div>
								</div>
							</div>

							<div class="row block_two_columns large-10" id="divConvenio" style="display:none">
								<div class="row">
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Fecha de ingreso a la empresa*</label> 
										<input type="text" id="fechaIngresoEmpresa" name="fechaIngresoEmpresa" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()" placeholder="dd/mm/aaaa">
										
									</div>		
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Tipo de Contrato*</label> 
										<select id="tipoContrato" name="tipoContrato" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()">
											<option value="">Selecciona tipo de Contrato</option>
											<option value="1">Indefinido</option>
											<option value="2">...</option>
										</select>
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label>Código de Convenio*</label> 
										<input type="text" id="codConvenio" name="codConvenio" onkeyup="enableSendRequest()" onchange="enableSendRequest()" oninput="enableSendRequest()">
										
									</div>									
									<div class="small-12 medium-6 large-6 column margin_input_form">
										
									</div>
								</div>
							</div>

							<div class="row">
									<div class="button_init">
										<button class="init_button" id="enviarSolicitud">
										Enviar solicitud
										</button>
									</div>
							</div>

						</div>
					</article>
				</div><!-- 8 columns -->
			</div><!-- row -->
		</section><!-- section paso 3 -->

	</div>