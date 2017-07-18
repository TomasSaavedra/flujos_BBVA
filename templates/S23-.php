<style type="text/css">
	.contentSection p {
		text-align: center;
		padding: 20px;
		color: #000;
		font-weight: 700;
		line-height: normal;
	}

	.contentSection .items img {
		padding: 4px;
	}

	.contentSection .items p {
		font-size: 14px;
		line-height: normal;
		color: #000;
		font-weight: 500;
		text-align: center;
		padding: 5px !important;
	}

</style>

<div class="container">
	<div class="content">
		<head>
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/foundation2.css">
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/css/fix.css">
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/jquery-ui.css">
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/jquery.modal.css">
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/stylebbva.css">
			<link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/table.css">

			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>DAP</title>
		</head>

		<body>
			<main class="formcontent"><!-- is-disabled-->
				<!-- is-disabled-->
				<div id="sp_wait" class="wait_" style="display:none;">
					<img id="img-spinner" src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/ajax-loader.gif" alt="Loading" />
				</div>
				<section id="step_zero" class="formcontent section_main heightSection0 text_font_form">
				<!-- <div class="blocked_disabled"></div> -->
					<div class="row">
						<div class="small-12 medium-4 large-4 columns"><!--Se cambia medium-12 por medium-4-->
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
						</div>
						<div class="small-12 medium-8 large-8 columns"><!--Se cambia medium-12 por medium-8-->

							<article id="side_rigth_first">
								<div id="side_rigth_banner">
									<p>

									<img id="img1" src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/banner-grande_tcm.jpg" class="responsive image1">
									<img id="img2" src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/banner-pequeno_tcm.jpg" class="responsive image2">
								</p>
							</div>
							<div id="side_rigth_content">
								<div class="contentSteps1 paso1">
									<h1>Revisa si tienes un Crédito de Consumo pre aprobado:</h1>
								</div>

								<div class="row block_two_columns contentBlock">
									<h1>Antes de comenzar, compártenos la siguiente información</h1>
									
									<div class="small-12 medium-6 large-6 column margin_input_form">
										<!--Se cambia medium-12 por medium-6-->
										<label>¿Cómo te llamas?*</label> 
										<input type="text" id="lb_name" title="Ingresa tu nombre" data-toggle="tooltip" />
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form"><!--Se cambia medium-12 por medium-6-->
										<label>¿Cuál es tu RUT*</label> 
										<input type="text" id="lb_rut" maxlength="10" title="Ingresa tu RUT" data-toggle="tooltip" />
									</div>
									
									<div class="small-12 large-6 medium-6 column margin_input_form">
										<label>Fecha de nacimiento (dd/mm/aaaa)*</label>
										<div class="row">
											<div class="large-3 medium-4 small-12 column pr-no">
												<input id="bDay" name="bDay" title="Día de nacimiento no valido" placeholder="02" type="text" value="" maxlength="2" autocomplete="off" class="error-input ui-selectmenu-error">
											</div>
											<div class="large-3 medium-4 small-12 column pr-no">
												<input id="bMonth" name="bMonth" title="Ingresa tu mes de nacimiento" placeholder="09" type="text" value="" maxlength="2" autocomplete="off">
											</div>
											<div class="large-6 medium-4 small-12 column">
												<input id="bYear" name="bYear" title="Ingresa tu año de nacimiento" placeholder="1982" type="text" value="" maxlength="4" autocomplete="off">
											</div>
										</div>
									</div>

									<div class="small-12 medium-6 large-6 column margin_input_form">
										<label for="">¿Cuál es tu condición laboral?</label>
										<div class="row">
											<div class="large-6 medium-6 small-6 column pr-no">
												<label for="dependiente" class="ui-marmots-label-radio marmots-label-left">
													<input id="dependiente" type="radio" name="terminos">Dependiente</input>
												</label>
											</div>
											<div class="large-6 medium-6 small-6 column">
												<label for="independiente" class="ui-marmots-label-radio marmots-label-left">
													<input id="independiente" type="radio" name="terminos">Independiente</input>
												</label>
											</div>
										</div>
									</div>
									<!-- se cambia la clase a hiddenMedium-->	
								</div><!-- row -->

							</div>
							<div class="row">
								<div class="button_init">
									<button class="init_button" id="next_zero">Comenzar</button>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section><!-- section paso 0 -->

		<section id="step_one" class="formcontent section_main text_font_form" >
			<div class="blocked_disabled"></div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"> <!--Se cambia medium-12 por medium-4-->
					<article id="p1" class="side_left height_step height_step2">
						<div class="offer">
							<div class="row">
								<div class="small-11 medium-11 large-11 columns">
									<div id="head_step_one" class="head_step">
										<label>PASO 1 de 2</label>
										<p>Simula tu Depósito a Plazo</p>	
									</div>
								</div>
								<div class="small-1 medium-1 large-1 columns">
									<div class="circle_check type1">
										<label id="check_step_one" class="circle_unsuccess" for="">
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="content_text">
									<p>Contrata tu Depósito a Plazo 100% en línea.</p>
								</div>
							</div>
						</div>
					</article>
				</div><!-- 4 columns -->
				<div class="small-12 medium-8 large-8 columns"><!--Se cambia medium-12 por medium-8-->
					<article class="side_rigth "><!-- side right -->

						<div class="side_rigth_content">
							<div class="row text_tittle ">
								<p><span class="nombre-solicitante">Jhon Doe</span>, simula tu Depósito a Plazo</p>
							</div>
							<p>Toma tu Depósito a Plazo en línea: Simula, Solicita y Transfiere desde una cuenta corriente de cualquier Banco.</p>
							<p class="warning_title">Recuerda, los campos marcados con asterisco (*) son obligatorios.</p>
							<div class="row block_two_columns">

								<div class="small-12 medium-12 large-12 columns clean">
									<!--Se cambia la clase medium-10 a -12 -->
									<div class="small-6 medium-4 large-4 dap-items margin_input_form columns">
										<label>Moneda</label>
										<p>Peso</p>
									</div>

									<div class="small-6 medium-4 large-4 dap-items margin_input_form columns">
										<label>Tipo</label>
										<p>Renovable</p>
									</div>

									<div class="small-12 medium-4 large-4 dap-items margin_input_form columns montoSpan">
										<label>Monto*</label>
										<input type="text" id="lb_monto" title="Ingresa tu Monto" data-content=""/>
										<span>Min. $200.000 Max. $5.000.000</span>
									</div>
								</div>

							</div>
							<div class="row"><!-- btn -->
								<div class="button_init">
									<button class="init_button" id="next_one">
										Simular Depósito
									</button>
								</div>
							</div><!-- btn -->
						</div>
					</article><!-- side right -->
				</div><!-- 8 columns -->
			</div><!-- row -->
		</section><!-- section paso 1 -->

		<section id="step_two" class="formcontent section_main text_font_form" >
			<div class="blocked_disabled_1"></div>
			<div class="row">
				<div class="small-12 medium-4 large-4 columns">
					<article id="p1" class="side_left height_step">
						<div class="offer">
							<div class="row">
								<div class="small-11 medium-11 large-11 columns">
									<div id="head_step_one" class="head_step">
										<label>PASO 1 de 2</label>
										<p>Simula tu Depósito a Plazo</p>
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
										Contrata tu Depósito a Plazo 100% en línea.
									</p>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="small-12 medium-8 large-8 columns">
					<!--plazoDeposito-->
					<article class="capgemini-tables holder" style="margin-top: 20px;">

						<div class="row block_two_columns">
							<div class="small-12 medium-12 large-12 columns">
								<div class="tables-body table-scroll">
									<div>
										<h2 class="table-title">
											Selecciona el plazo de tu preferencia para realizar el depósito
										</h2>
										<div class="body-tab tables-body">
											<table id="simulaTab" class="responsive">
												<thead>
													<tr>
														<th>
														</th>
														<th class="plazo" style="width:23%">PLAZO</th>
														<th style="width:11%">TASA ANUAL</th>
														<th style="width:16%">TASA PERÍODO</th>
														<th style="width:14%">SALDO AL VENCIMIENTO</th>
														<th>INTERESES A RECIBIR</th>
														<th>VENCIMIENTO</th>
													</tr>
												</thead>
												<tbody>
													<tr data-select-radio="true" class="blockSmall">
														<td data-content="Seleccionar" style="line-height: 2em">
															<label class="ui-marmots-label-radio marmots-label-left fila-propuesta-simulacion">&nbsp;
																<input type="radio" onclick="validaSeleccionPlazoSim(this);" value="" plazo="" tasaperiodo="" interes="" valorfinal="" fechavencimiento="" class="" name="mis-cuentas-bbva-nacional"></label>
															</td>
															<td data-content="Plazo" class="link" style="line-height: 2em">30 días</td>
															<td data-content="Tasa anual" style="line-height: 2em">4,2000 %</td>
															<td data-content="Tasa período" style="line-height: 2em"><strong>0,3500 %</strong></td>
															<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 602.100</td>
															<td data-content="Intereses a recibir" style="line-height: 2em">$ 2.100</td>
															<td data-content="Vencimiento" style="line-height: 2em">01/12/2016</td>
														</tr>
														<tr data-select-radio="true" class="blockSmall">
															<td data-content="Seleccionar" style="line-height: 2em">
																<label class="ui-marmots-label-radio marmots-label-left fila-propuesta-simulacion">&nbsp;
																	<input type="radio" onclick="validaSeleccionPlazoSim(this);" value="" plazo="" tasaperiodo="" interes="" valorfinal="" fechavencimiento="" class="" name="mis-cuentas-bbva-nacional"></label>
																</td>
																<td data-content="Plazo" class="link" style="line-height: 2em">62 días</td>
																<td data-content="Tasa anual" style="line-height: 2em">4,3200 %</td>
																<td data-content="Tasa período" style="line-height: 2em"><strong>0,7440 %</strong></td>
																<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 604.464</td>
																<td data-content="Intereses a recibir" style="line-height: 2em">$ 4.464</td>
																<td data-content="Vencimiento" style="line-height: 2em">02/01/2017</td>
															</tr>

															<tr data-select-radio="true" class="blockSmall">
																<td data-content="Seleccionar" style="line-height: 2em">
																	<label class="ui-marmots-label-radio marmots-label-left fila-propuesta-simulacion">&nbsp;
																		<input type="radio" onclick="validaSeleccionPlazoSim(this);" value="" plazo="" tasaperiodo="" interes="" valorfinal="" fechavencimiento="" class="" name="mis-cuentas-bbva-nacional"></label>
																	</td>
																	<td data-content="Plazo" class="link" style="line-height: 2em">90 días</td>
																	<td data-content="Tasa anual" style="line-height: 2em">4,3200 %</td>
																	<td data-content="Tasa período" style="line-height: 2em"><strong>1,0800 %</strong></td>
																	<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 604.480</td>
																	<td data-content="Intereses a recibir" style="line-height: 2em">$ 6.480</td>
																	<td data-content="Vencimiento" style="line-height: 2em">30/01/2017</td>
																</tr>

																<tr data-select-radio="true" class="blockSmall">
																	<td data-content="Seleccionar" style="line-height: 2em">
																		<label class="ui-marmots-label-radio marmots-label-left fila-propuesta-simulacion">&nbsp;
																			<input type="radio" onclick="validaSeleccionPlazoSim(this);" value="" plazo="" tasaperiodo="" interes="" valorfinal="" fechavencimiento="" class="" name="mis-cuentas-bbva-nacional"></label>
																		</td>
																		<td data-content="Plazo" class="link" style="line-height: 2em">181 días</td>
																		<td data-content="Tasa anual" style="line-height: 2em">4,6800 %</td>
																		<td data-content="Tasa período" style="line-height: 2em"><strong>2,3530 %</strong></td>
																		<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 614.118</td>
																		<td data-content="Intereses a recibir" style="line-height: 2em">$ 14.118</td>
																		<td data-content="Vencimiento" style="line-height: 2em">01/05/2017</td>
																	</tr>

																	<tr data-select-radio="true" class="blockSmall">
																		<td data-content="Seleccionar" style="line-height: 2em">
																			<label class="ui-marmots-label-radio marmots-label-left fila-propuesta-simulacion">&nbsp;
																				<input type="radio" onclick="validaSeleccionPlazoSim(this);" value="" plazo="" tasaperiodo="" interes="" valorfinal="" fechavencimiento="" class="" name="mis-cuentas-bbva-nacional"></label>
																			</td>
																			<td data-content="Plazo" class="link" style="line-height: 2em">360 días</td>
																			<td data-content="Tasa anual" style="line-height: 2em">4,6800 %</td>
																			<td data-content="Tasa período" style="line-height: 2em"><strong>4,6800 %</strong></td>
																			<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 628.080</td>
																			<td data-content="Intereses a recibir" style="line-height: 2em">$ 28.080</td>
																			<td data-content="Vencimiento" style="line-height: 2em">27/10/2017</td>
																		</tr>



																		<tr class="no-hover-tr">
																			<td  class="title-int-table" colspan="7">
																				<h2 class="table-title">Puedes elegir el plazo que más te acomode en días</h2>
																			</td>
																		</tr>
																		<tr data-select-radio="true" class="lastTable" >

																			<td data-content="Seleccionar" style="line-height: 2em"> 
																				<label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
																			</td>
																			<td class="linkActualizar actualizar-monto" style="width: 23%;">
																				<input type="text" class="form-control checkDays" maxlength="4">
																				<a href="#;" class="btn-actualziar"></a>
																				<div class="min30">Mínimo 30 días</div>
																			</td>
																			<td data-content="Tasa anual" style="line-height: 2em">0,0000 %</td>
																			<td data-content="Tasa período" style="line-height: 2em"><strong>0,0000 %</strong></td>
																			<td data-content="Saldo al vencimiento" style="line-height: 2em">$ 0</td>
																			<td data-content="Intereses a recibir" style="line-height: 2em">$ 0</td>
																			<td data-content="Vencimiento" style="line-height: 2em">0</td>  
																		</tr>

																	</tbody>

																</table>
																<p class="minP30"><strong>Mínimo 30 días</strong></p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div  style="margin: 20px auto -10px auto; text-align: center;">
												<label for="terminos" class="ui-marmots-label-check marmots-label-left">
													<input id="terminos" type="checkbox" name="terminos">Declaro haber leído los 
												</label><a href="#modal-terms" rel="modal:open" class="linkBottom">Terminos y condiciones</a>
											</div>
											<div class="row"><!-- btn -->
												<div class="button_init">
													<button class="init_button button_disable" id="next_two" disabled="true">Me interesa</button>
												</div>
											</div><!-- btn -->

										</article>
									</div>
								</div> 
							</section><!-- section paso 2-->

							<section id="mail_registrado" class="formcontent section_main text_font_form" style="display: none">
								<div class="blocked_disabled_1"></div>
								<div class="row">
									<div class="small-12 medium-4 large-4 columns">
										<article id="p1" class="side_left height_step">
											<div class="offer">
												<div class="row">
													<div class="small-11 medium-11 large-11 columns">
														<div id="head_step_one" class="head_step">
															<label>PASO 1 de 2</label>
															<p>Simula tu Depósito a Plazo</p>
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
															Contrata tu Depósito a Plazo 100% en línea.
														</p>
													</div>
												</div>
											</div>
										</article>
									</div>
									<div class="small-12 medium-8 large-8 columns">
										<!--plazoDeposito-->
										<article class="capgemini-tables holder" style="margin-top: 20px;">
											<div class="row block_two_columns">
												<div class="small-12 medium-12 large-12 columns">
													<div class="text-center" style="margin-top: 20px !important;">
														<h1>John Doe, estás a un paso de enviar tu solicitud</h>
															<p class="warning_title">Necesitamos confirmar tu correo para enviar instrucciones y cursar tu Depósito a Plazo</p>
														</div>
														<div class="row block_two_columns">
															<div class="small-12 medium-12 large-12 column margin_input_form">
																<label style="text-align: center;">¿Tienes acceso al correo registrado en el Banco:<strong> jhondoe@gmail.com?</strong> </label>

																<div class="medium-4 large-4 column hiddenMedium">&nbsp;</div>
																<div class="large-2 small-12 medium-2 columns">
																	<!-- Cambio clase de medium-6 a -3 -->
																	<label class="radio_label"> 
																		<div class="options">Si&nbsp;</div>
																	</label> 
																	<input type="radio" class="css-checkbox" name="lb_registeredMail" value="S" id="siCorreo" > 
																	<label for="siCorreo" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
																</div>

																<div class="large-2 small-12 medium-2 columns" style="float:left;">
																	<!-- Cambio clase de medium-6 a -3 -->
																	<label class="radio_label ">
																		<div class="options">No&nbsp;</div>
																	</label> 
																	<input type="radio"  class="css-checkbox" name="lb_registeredMail" value="N" id="noCorreo" checked> 
																	<label for="noCorreo" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
																</div>
																<div class="medium-4 large-4 column hiddenMedium">&nbsp;</div>
															</div>
														</div><!-- row -->
														<div class="row"><!-- btn -->
															<div class="button_init">
																<button class="init_button" id="next_correoRegistrado">
																	Enviar Solicitud
																</button>
															</div>
														</div><!-- btn -->
													</div>
												</div>
											</article>
										</div>
									</div> 
								</section><!-- section mail registardo-->

								<section id="step_three" class="formcontent section_main heightSection4 text_font_form" >
									<div class="blocked_disabled_2"></div>
									<div class="row">
										<div class="small-12 medium-4 large-4 columns">
											<article id="p1" class="side_left height_step height_step2">
												<div class="offer">
													<div class="row">
														<div class="small-11 medium-11 large-11 columns">
															<div id="head_step_one" class="head_step">
																<label>PASO 2 de 2</label>
																<p>Datos de contacto</p>
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
															<p>Procesaremos tu solicitud y te contactaremos</p>
														</div>
													</div>
													<div class="footer_step">
														<div class="row">
														</div>
													</div>
												</div>
											</article>
										</div>
										<div class="small-12 medium-8 large-8 columns ">
											<article class="side_rigth">
												<div class="alert_pop2">
													<img src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/Error.png">
													<p class="stag_sans_ligth error_msg"></p>
												</div>
												<div class="row text_tittle">
													<p class="title_font">John Doe, estás a un paso de enviar tu solicitud.</p>
													<p class="warning_title">Recuerda, los campos marcados con asterisco (*) son obligatorios.</p>
												</div>

												<div class="row block_two_columns small-12 large-12 medium-10 clean">

													<div class="row">
														<div class="small-12 medium-6 large-6 column margin_input_form">
															<!-- Clase medium-12 a -6 -->
															<label>Nombre*</label> 
															<input type="text"  maxlength="9" id="lg_nameSp" title="Ingresa tu Nombre" placeholder="Ingresa tu nombre" />
														</div>
														<div class="small-12 medium-6 large-6 column margin_input_form">
															<!-- Clase medium-12 a -6 -->
															<label>Apellidos*</label> 
															<input type="text" id="lg_lastNameSp" maxlength="" title="Ingresa tu Apellido" placeholder="Ingresa tu apellido" />
														</div>
													</div>

													<div class="row">
														<div class="small-12 large-6 medium-12 column margin_input_form">
															<label>Fecha de nacimiento (dd/mm/aaaa)*</label>
															<div class="row">
																<div class="large-3 medium-3 small-12 column input_margin mtop8">
																	<input type="text" maxlength="2" id="lg_day" title="Ingresa tu día de nacimiento" placeholder="02" />
																</div>
																<div class="large-3 medium-3 small-12 column input_margin mtop8">
																	<input type="text" maxlength="2" id="lg_month" title="Ingresa tu mes de nacimiento" placeholder="09"/>
																</div>
																<div class="large-6 medium-6 small-12 column input_margin mtop8">
																	<input type="text" maxlength="4" id="lg_year" title="Ingresa tu año de nacimiento" placeholder="1982"/>
																</div>
															</div>
														</div>

														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>Sexo*</label>
															<div class="large-6 small-6 medium-3 columns">
																<!-- Cambio clase de medium-6 a -3 -->
																<label class="radio_label"> 
																	<div class="options">Masculino&nbsp;</div>
																</label> 
																<input
																type="radio" class="css-checkbox" name="lb_sex" value="M"
																id="Masculino" checked> 
																<label for="Masculino" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																</label>
															</div>
															<div class="large-6 small-6 medium-3 columns" style="float:left;">
																<!-- Cambio clase de medium-6 a -3 -->
																<label class="radio_label ">
																	<div class="options">Femenino&nbsp;</div>
																</label> 
																<input type="radio" name="lb_sex" value="F" id="Femenino" class="css-checkbox"> 
																<label for="Femenino" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																</label>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-6 large-6 column margin_input_form">
															<label>Nacionalidad*</label> 
															<select id="lb_national" class="select_">
																<option value="">Selecciona</option>
																<option value="1">Chileno</option>
																<option value="2">Argentino</option>
															</select>
														</div>
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>Estado civil*</label> 
															<select id="lb_civ_sta" class="select_">
																<option value="">Selecciona</option>
																<option value="1">Casado(a)</option>
																<option value="2">Divorciado(a)</option>
																<option value="3">Soltero(a)</option>
																<option value="4">Union libre</option>
																<option value="5">Viudo(a)</option>
															</select>
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-6 large-6 column margin_input_form">
															<!-- Clase medium-12 a -6 -->
															<label>Teléfono móvil*</label> 
															<input type="text"  maxlength="9" id="lg_phone" title="Ingresa tu teléfono" placeholder="912345678" />
														</div>
														<div class="small-12 medium-6 large-6 column margin_input_form">
															<!-- Clase medium-12 a -6 -->
															<label>Email*</label> 
															<input type="text" id="lg_mail" maxlength="" title="Ingresa tu correo electrónico" placeholder="miemail@bbva.cl" />
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>Región*</label> 
															<select	id="lg_regiones" class="select_" title="Selecciona te región">
																<option value="">Selecciona</option>
																<option value="1">opcion 1</option>
																<option value="2">opcion 2</option>
															</select>
														</div>
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>Comuna*</label>
															<select id="lg_comunas" class="select_">
																<option value="">Selecciona</option>
																<option value="1">opcion 1</option>
																<option value="2">opcion 2</option>
															</select>
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<div class="row">
																<div class="large-8 medium-10 hiddenMedium column input_margin mtop8">
																	<label>Calle*</label>
																</div>
																<div class="large-4 medium-4 hiddenMedium column input_margin mtop8">
																	<label>Nº*</label>
																</div>
															</div>
															<div class="row">
																<div class="large-8 medium-8 small-12 column input_margin mtop8">
																	<label class="showMedium">Calle*</label>
																	<input type="text" id="lg_street" maxlength="" title="Ingresa el nombre de tu calle" placeholder="Los Alerces" />
																</div>
																<div class="large-4 medium-4 small-12 column input_margin mtop8">
																	<label class="showMedium">Nº*</label>
																	<input type="text" maxlength="6" id="lg_snumber" title="Ingresa el número de tu dirección" placeholder="412" />
																</div>
															</div>
														</div>


														<div class="small-12 medium-12 large-6 column margin_input_form ">
															<div class="row">
																<div class="large-8 medium-10 hiddenMedium column input_margin mtop8">
																	<label>Tipo</label>
																</div>
																<div class="large-4 medium-4 hiddenMedium column input_margin mtop8">
																	<label>Nº</label>
																</div>
															</div>
															<div class="row">
																<div class="large-8 medium-8 small-12 column input_margin mtop8"> 
																	<label class="showMedium">Tipo</label>
																	<select id="lg_type" class="select_ " >
																		<option value="">Selecciona</option>
																		<option value="1">Departamento</option>
																		<option value="2">Casa</option>
																	</select>
																</div>
																<div class="large-4 medium-4 small-12 column input_margin mtop8">
																	<label class="showMedium">Nº</label>
																	<input id="lg_number" type="text" maxlength="6" placeholder="412"/>
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>Número de serie de tu cédula*
																<div class="tooltips bottom fLeft mTop5 tooltips-bottomLeft"> 
																	<a href="javascript:void(0);" class="icon-tool"></a>
																	<div class="arrtooltip"> 
																		<div class="inner-mensaje">
																			<img src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/cedula.png">
																		</div>
																		<span class="arrow"></span>
																	</div>
																</div>
															</label> 
															<input type="text" id="lg_cedula" maxlength="19" title="Ingresa correctamente su número de serie de tu cédula" placeholder="AO123456789 ó 123456789" />
														</div>
														<div class="small-12 medium-6 large-6 column margin_input_form" style="    margin-top: 35px !important;">
															<label for="acepto" class="ui-marmots-label-check marmots-label-left">
																<input id="acepto" type="checkbox" name="acepto">Normativa FATCA: I’m a US Person or US Entity.
															</label>
															<a href="#modal-formulario" rel="modal:open" class="linkBottom">Más información</a>
														</div>
													</div>

													<div class="row">
														<div class="small-12 medium-12 large-6 column margin_input_form">
															<label>¿Tienes una dirección fiscal distinta a Chile?*
																<div class="tooltips bottom fLeft mTop5 tooltips-bottomLeft" > 
																	<a href="javascript:void(0);" class="icon-tool"></a>
																	<div class="arrtooltip" style="top: -47px;"> 
																		<div class="inner-mensaje">
																			<p>contenido acá del tooltips</p>
																		</div>
																		<span class="arrow"></span>
																	</div>
																</div>
															</label>
															<div class="large-4 small-6 medium-4 columns">
																<!-- Cambio clase de medium-6 a -3 -->
																<label class="radio_label"> 
																	<div class="options">Si&nbsp;</div>
																</label> 
																<input type="radio" class="css-checkbox" data-name="sicountry" value="S" id="si"> 
																<label for="si" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																</label>
															</div>
															<div class="large-4 small-6 medium-4 columns" style="float:left;">
																<!-- Cambio clase de medium-6 a -3 -->
																<label class="radio_label ">
																	<div class="options">No&nbsp;</div>
																</label> 
																<input type="radio" class="css-checkbox"  data-name="nocountry" value="N" id="no" checked> 
																<label for="no" class="css-label radGroup1 radGroup2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																</label>
															</div>
														</div>
														<div class="small-12 medium-12 large-6 column margin_input_form"" id="country">
															<!-- Clase medium-12 a -6 -->
															<label>Indica el país*</label> 
															<input type="text"  maxlength="" id="lg_country" title="Ingresa el país" placeholder="Ingrese el país" />
														</div>
													</div>

												</div>
												<div class="row">
													<div class="button_init">
														<button class="init_button" id="enviarSolicitud" >Enviar Solicitud</button>
													</div>
												</div>
											</article>
										</div>	
									</div>
								</section><!-- section paso 4-->	
							</main>

							<div id="modal-formulario" style="display:none;" class="modal modalLogin">
								<div id="title_modal" class="row">
									<label>¿Qué significa US Person/US Entity?</label>
									<a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
								</div>
								<div class="row block_two_columns">
									<div class="inside-modal">
										<p style="font-size: 14px">
											¿Qué es FATCA?
											<br>
											Es la Ley de Cumplimiento Fiscal de Cuentas en el Extranjero (FATCA, por sus siglas en inglés), promulgada en los Estados Unidos de América en marzo del 2010. Esta Ley tiene como finalidad que los contribuyentes de Estados Unidos denominados Personas Norteamericanas (US Person) o Entidades Norteamericanas (US Entity), realicen el pago de impuestos por las ganancias obtenidas en otros países, derivadas de inversiones financieras de fuente Norteamericana.
										</p>
										<p style="font-size: 14px">
											US Person o Persona Norteamericana: 
											<br>
											Se consideran los ciudadanos de los EEUU, incluyendo personas nacidas ahí, pero residentes en otro país y que no han renunciado a dicha ciudadanía o personas con residencia permanente en EEUU con tarjeta Green Card (Tarjeta de residencia permanente en Estados Unidos). Aparte de EE.UU, incluye los países del territorio Norteamericano, como Puerto Rico, Samoa Americana, Isla Mariana del Norte, Guam, Islas Vírgenes Americanas e Islas Menores EE.UU.
										</p>
										<p style="font-size: 14px">
											US Entity o Entidad Norteamericana: 
											<br>
											Puede ser cualquier empresa que tenga como país de constitución o procedencia EE.UU o países del territorio Norteamericano, como Puerto Rico, Samoa Americana, Isla Mariana del Norte, Guam, Islas Vírgenes Americanas e Islas Menores EE.UU.
										</p>
									</div>
								</div>
							</div><!--Modal condiciones-->

							<div id="modal-terms" style="display:none;" class="modal modalLogin">
								<div id="title_modal" class="row">
									<label>Términos y condiciones</label>
									<a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
								</div>
								<div class="row block_two_columns">
									<div class="inside-modal">
										<p style="font-size: 13px">
											Tasas vigentes sólo para personas naturales sin cuenta corriente ni cuenta vista en BBVA, que contraten vía internet Depósitos a Plazo nominativos en pesos y renovables con un mínimo de 30 y un máximo de 1095 días de plazo. La simulación tiene vigencia solamente por el día y la toma del depósito a plazo está sujeta a transferencia del monto a invertir durante el plazo estipulado. Solicitudes y transferencias deben ser recibidas antes de las 13:30 horas. Si la solicitud se realiza posterior a las 13:30 horas, tendrá hasta las 13:30 horas del día siguiente, quedando el DAP tomado con fecha del día siguiente. Los depósitos quedarán en custodia electrónica de BBVA y se renovarán a su vencimiento por el mismo plazo inicial y a la tasa vigente de la web publicada el día del vencimiento.
										</p>

									</div>

								</div>
							</div><!-- Modal terminos y condiciones-->

							<div id="modal-login" style="display: none;"  class="modal modalLogin">
								<div id="title_modal" class="row">
									<label>Cliente BBVA</label>
									<a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
								</div>
								<div class="row block_two_columns">
									<div class="inside-modal">
										<div class="row">
											<div class="small-1 medium-1 large-2 columns hiddenMedium">&nbsp;</div>
											<div class="medium-12 large-8 columns">
												<form>
													<p class="text-center">John Doe, ¿sabías que ingresando al sitio privado podrías encontrar alguna oferta especial para ti?</p>
													<div class="row column log-in-form">
														<label>*RUT
															<input type="text" placeholder="21.997.968-1">
														</label>
														<label>*Clavo de acceso
															<input type="text" placeholder="Password">
														</label>
														<div class="row"><!-- btn -->
															<div class="button_init">
																<button class="init_button" id="login">Ingresar</button>
															</div>
														</div><!-- btn -->
														<p class="text-center"><a href="#">¿Olvidaste o se bloqueó tu clave?</a></p> 
														<hr>
														<div class="text-center link"><a href="#" >¿Deseas obtener tu clave?</a></div>
														<div class="text-center link"><a href="#" >Recomendaciones de seguridad</a></div>
													</div> 
												</form>
											</div>
											<div class="small-12 medium-1 large-2 columns hiddenMedium">&nbsp;</div>
										</div>

									</div>

								</div>
							</div><!-- Modal Login-->

							<div id="enviada" style="display:none; height: auto !important;" class="solicitudEnviada" ><!-- mensaje de solicitud enviada -->
								<h2>
									<img src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/check-solicitud.png"> Solicitud enviada exitosamente
								</h2>
								<h3>Para contratar tu Depósito a Plazo:</h3>
								<div class="boxBlue">
									<p>Sólo falta que transfieras los <strong> $ 600.000 antes de las 13:30 de hoy</strong> a la siguiente cuenta:</p>
									<div class="row">
										<div class="small-12 large-2 medium-12 columns">Banco: <strong>BBVA</strong> </div>
										<div class="small-12 large-4 medium-12 columns">Cuenta Corriente:<strong>XXXXXX</strong> </div>
										<div class="small-12 large-3 medium-12 columns">Rut: <strong>XXXXXX</strong></div>
										<div class="small-12 large-3 medium-12 columns">Mail: <strong>XXXXX@bbva.com</strong></div>
									</div>
								</div>
								<ul>
									<li>
										Si tu solicitud y transferencia se realiza un día hábil entre las 9:00 y 13:30 horas, tu Depósito a Plazo estará vigente al día hábil siguiente.
									</li>
									<li>
										Si tu solicitud y transferencia se realiza después de las 13:30 horas o días festivos, tu Depósito a Plazo estará vigente al día hábil subsiguiente
									</li>
								</ul>
								<hr>
								<div class="footer">
									Te enviamos un SMS con tu <strong>clave de acceso a BBVA CL</strong>. Podrás ingresar a tu sitio después de recibir nuestro correo de confirmación de la transferencia.
								</div>

								<hr>
								<div class="small-12 large-12 medium-12 columns">
									<div class="contentbtblank">
										<button class="init_button button_blank"><a href="#"><img src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/ico-pdf-documentacion.png" style="padding-right: 8px;">Imprimir</a></button>
									</div>

								</div>
							</div><!-- mensaje de solicitud enviada -->

							<div id="noEnviada0" style="display:none; height: auto !important" class="solicitudEnviada"><!-- mensaje de solicitud enviada -->
								<h2>
									<span class="hiddenMedium"></span> No podemos atender su solicitud</h2>
									<div class="row">
										<div class="avatar"></div>
										<div>
											<br>
											<p>Lamentablemente no podemos atender su solicitud en estos momentos. Para tomar tu DAP, acércate a cualquiera de nuestras oficinas y te atenderemos.
												<br>
											</p><p>
											<a href="" class="linkBottom">Ver sucursales BBVA</a>
										</p>
									</div>
								</div>
							</div><!-- mensaje de solicitud enviada -->

							<div id="noEnviada1" style="display:none; height: auto !important" class="solicitudEnviada"><!-- mensaje de solicitud enviada -->

								<h2><span style="padding-left: 176px;" class="hiddenMedium"></span> No podemos atender su solicitud</h2>
								<div class="row">
									<div class="avatar"></div>
									<div>
										<br>
										<p>Lamentablemente no podemos atender su solicitud.
											<br>
										</p>

									</div>
								</div>
							</div><!-- mensaje de solicitud enviada -->

							<div id="noEnviadaRegistrado" style="display:none; height: auto !important" class="solicitudEnviada"><!-- mensaje de solicitud enviada -->
								<h2>
									<span class="hiddenMedium"></span> No podemos atender su solicitud</h2>
									<div class="row">
										<div class="avatar"></div>
										<div>
											<br>
											<p>Lamentablemente no podemos atender su solicitud en estos momentos. Para tomar tu DAP, acércate a cualquiera de nuestras oficinas y te atenderemos.
												<br>
											</p><p>
											<a href="" class="linkBottom">Ver sucursales BBVA</a>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="button_init" style="margin-top: 0px !important">
										<a href="content.php?logout" class="init_button" style="margin-bottom: 0px !important">Aceptar</a>
									</div>
								</div>
							</div><!-- mensaje de solicitud enviada -->



							<footer></footer>
				<!--<script src="../includes/components/dap/js/vendor/jquery.js"></script>
				<script src="../includes/components/dap/js/vendor/jquery-ui.js"></script>
				<script src="../includes/components/dap/js/jquery.modal.js"></script>
				<script src="../includes/components/dap/js/vendor/jquery.price_format.2.0.min.js"></script>
				<script src="../includes/components/dap/js/vendor/foundation2.js"></script>
				<script src="../includes/components/dap/js/vendor/modernizr.js"></script>
				<script src="../includes/components/dap/js/vendor/moment.min.js"></script>
				<script src="../includes/components/dap/js/jquery.mask.min.js"></script>
				<script src="../includes/components/dap/js/accounting.js"></script>-->
				<!--[if !IE 8]><!-->
				<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
				<!--<![endif]-->
				<!--[if IE 8]><script src="https://www.google.com/recaptcha/api.js?fallback=true"></script><![endif]-->
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery-ui.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/jquery.modal.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery.price_format.2.0.min.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/foundation2.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/modernizr.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/moment.min.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/jquery.mask.min.js"></script>
				<script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/accounting.js"></script>
				<!--[if !IE 8]><!-->
				<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
				<!--<![endif]-->


			</body>
		</div>
	</div>
	<script type="text/javascript">
		_satellite.pageBottom();
	</script>
	<script type="text/javascript">		
		var tooltipClass = {
			position : {
				my : "center bottom-7",
				at : "center top",
				using : function(position, feedback) {
					$(this).css(position);
					$("<div>").addClass("arrow").addClass(
						feedback.vertical).addClass(
						feedback.horizontal).appendTo(this);
					}
				}
			}
			$(function() {
				$(document).foundation();
				$(".select_").selectmenu();
			})
			$(function() {
				$("label.ui-marmots-label-radio").on('click', function(){
					var labelSeleccionado = $(this);
					$("label.ui-marmots-label-radio").removeClass("on");
					labelSeleccionado.addClass("on");
				});

				$("label.ui-marmots-label-check").on('click', function(e){
					e.preventDefault();
					e.stopPropagation();
					var labelSeleccionado = $(this);
					if( labelSeleccionado.hasClass("on")){
						labelSeleccionado.removeClass("on");
						labelSeleccionado.find("input").prop("checked", false);
						$('#next_two').addClass("button_disable").prop("disabled", true);
					}else {
						labelSeleccionado.addClass("on");
						labelSeleccionado.find("input").prop("checked", true);	
						$('#next_two').removeClass("button_disable").prop("disabled", false);
					}
				});
			});
			$(function(){
				$('#lb_rut').on('keyup', function(){
					if($(this).focusout()){
						$('.blocked_disabled_1').css("z-index", "1");
						$('.blocked_disabled_2').css("z-index", "1");
						$('.clean input').val('');
						$('.block_two_columns input[type="checkbox"]').prop('checked', false);
					}
				});

				$('#lb_monto').on('keyup', function(){
					if($(this).val()== 0){
						$('.blocked_disabled_1').css("z-index", "1");
						$('.blocked_disabled_2').css("z-index", "1");
						$('.clean input').val('');
						$('.block_two_columns input[type="checkbox"]').prop('checked', false);
					}
				});

		// sección uno
		$('#lb_name').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			}
		});

		$('#lb_name').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");
		});

		$('#lb_name').on('blur', function (){
			if($(this).val()!=''){						
				$(this).tooltip('destroy')
			} 
		});

		$('#lb_lastName').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			}
		});

		$('#lb_lastName').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");
		});

		$('#lb_lastName').on('blur', function (){
			if($(this).val()!=''){						
				$(this).tooltip('destroy')
			} 
		});

		$('#lb_rut').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			}
		});

		$('#lb_rut').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");
		});

		$('#lb_rut').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			}
		});

		$("#next_zero").click(function() {
			if($('#lb_name').val()===''){
				$('#lb_name').addClass('error-input ui-selectmenu-error');
				$('#lb_name').tooltip(tooltipClass);
			}else{
				$('#lb_name').removeClass('error-input ui-selectmenu-error');
			};

			if($('#lb_rut').val()===''){
				$('#lb_rut').addClass('error-input ui-selectmenu-error');
				$('#lb_rut').tooltip(tooltipClass);
			}else{
				$('#lb_rut').removeClass('error-input ui-selectmenu-error');
			};

			if($('#lb_rut').val()==='' || $('#lb_rut').val()==='' ){
				return false;
			}

			if($('#bDay').val()===''){
				$('#bDay').addClass('error-input ui-selectmenu-error');
				$('#bDay').tooltip(tooltipClass);
			}else{
				$('#bDay').removeClass('error-input ui-selectmenu-error');
			};

			if($('#bMonth').val()===''){
				$('#bMonth').addClass('error-input ui-selectmenu-error');
				$('#bMonth').tooltip(tooltipClass);
			}else{
				$('#bMonth').removeClass('error-input ui-selectmenu-error');
			};

			if($('#bYear').val()===''){
				$('#bYear').addClass('error-input ui-selectmenu-error');
				$('#bYear').tooltip(tooltipClass);
			}else{
				$('#bYear').removeClass('error-input ui-selectmenu-error');
			};

			if($('#dependiente').val()===''){
				$('#dependiente').addClass('error-input ui-selectmenu-error');
				$('#dependiente').tooltip(tooltipClass);
			}else{
				$('#dependiente').removeClass('error-input ui-selectmenu-error');
			};

			if($('#independiente').val()===''){
				$('#independiente').addClass('error-input ui-selectmenu-error');
				$('#independiente').tooltip(tooltipClass);
			}else{
				$('#independiente').removeClass('error-input ui-selectmenu-error');
			};

			$('html,body').animate({
				scrollTop : $("#step_one").offset().top
			}, 'slow');
			$("#step_zero").find('.blocked_disabled').css("z-index", "1"); //AQUI
			$("#step_one").find('.blocked_disabled').css("z-index", "-1");
		});	
		//Fin sección uno

		//Sección dos 
		$("#next_one").click(function() {
			if($('#lb_monto').val()===''){
				$('#lb_monto').addClass('error-input ui-selectmenu-error');
				$('#lb_monto').tooltip(tooltipClass);
			}else{
				$('#lb_monto').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lb_monto').val()===''){
				return false;
			}
			$('html,body').animate({
				scrollTop : $("#step_two").offset().top
			}, 'slow');
			$("#step_two").find('.blocked_disabled_1').css("z-index", "-1");
		});

		$('#lb_monto').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lb_monto').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lb_monto').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lb_monto').keyup(function(event) {
			$(this).val(accounting.formatMoney(accounting.unformat($(this).val(),','),'$ ', 0,'.',','));
		});
		//Fin Sección dos 

		//Sección tres 
		$("#next_two").click(function() {
			$('html,body').animate({
				scrollTop : $("#step_three").offset().top
			}, 'slow');
			$("#step_three").find('.blocked_disabled_2').css("z-index", "-1");
		}); 

		$('#aceptar').on('click', function(){
			$('button[data-dismiss="modal"]').trigger('click');
		});	

		$('#myTable').on('click','.eliminarFila',function(){
			var filaAElim
		});

		$('#modalbutton').on('click', function(){
			$('#modal02').show();
			$('#modal01').hide();
		});

		$(".checkProducto").click( function(){
			$(this).parent().parent().toggleClass("itemActivo");
			$("#next_one").removeClass("button_disable_2").removeAttr("disabled");
		});
		//Fin Sección tres	

		//Seccion si tienes correos
		$('#next_correoRegistrado').on('click', function(){
			if( $('#noCorreo').is(':checked')){
				$("#noEnviadaRegistrado").modal();
			}else{
				$("#enviada").modal("fast");	
			}
		});


		//Fin Seccion si tienes correos






		//Sección cuatro
		$('#lg_nameSp').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_nameSp').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_nameSp').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_lastNameSp').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_lastNameSp').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_lastNameSp').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_day').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_day').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_day').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_month').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_month').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_month').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_year').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_year').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_year').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_phone').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_phone').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_phone').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_mail').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_mail').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_mail').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_street').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_street').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_street').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_snumber').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_snumber').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_snumber').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lg_cedula').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_cedula').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_cedula').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#lb_civ_sta-button').on('blur', function() {
			if($('#lb_civ_sta').val() ===''){
				$('#lb_civ_sta-button').addClass('error-input ui-selectmenu-error');
				$('#lb_civ_sta-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu estado civil"
				});
			};
		});

		$('#lb_civ_sta-button').on('focus', function() {
			$('#lb_civ_sta-button').removeClass("error-input ui-selectmenu-error");			
		});

		$('#lb_civ_sta-button').on('mousedown' ,function(){
			$('#lb_civ_sta-button').tooltip("destroy")
		});

		$('#lb_civ_sta-button').on('mousedown' ,function(){
			$('#lb_civ_sta-button').tooltip("destroy")
		});

		$('#lg_comunas-button').on('blur', function() {
			if($('#lg_comunas').val() ===''){
				$('#lg_comunas-button').addClass('error-input ui-selectmenu-error');
				$('#lg_comunas-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu estado civil"
				});
			};
		});

		$('#lg_comunas-button').on('focus', function() {
			$('#lg_comunas-button').removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_comunas-button').on('mousedown' ,function(){
			$('#lg_comunas-button').tooltip("destroy")
		});

		$('#lg_regiones-button').on('blur', function() {
			if($('#lg_regiones').val() ===''){
				$('#lg_regiones-button').addClass('error-input ui-selectmenu-error');
				$('#lg_regiones-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu estado civil"
				});
			};
		});

		$('#lg_regiones-button').on('focus', function() {
			$('#lg_regiones-button').removeClass("error-input ui-selectmenu-error");			
		});

		$('#lb_national-button').on('blur', function() {
			if($('#lb_national').val() ===''){
				$('#lb_national-button').addClass('error-input ui-selectmenu-error');
				$('#lb_national-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu Nacionalidad"
				});
			};
		});

		$('#lb_national-button').on('focus', function() {
			$('#lb_national-button').removeClass("error-input ui-selectmenu-error");			
		});

		$('#lb_national-button').on('mousedown' ,function(){
			$('#lb_national-button').tooltip("destroy")
		});


		$('#lg_country').on('blur', function() {
			if($(this).val() ===''){
				$(this).addClass('error-input ui-selectmenu-error');
				$(this).tooltip(tooltipClass);
			};
		});

		$('#lg_country').on('focus', function() {
			$(this).removeClass("error-input ui-selectmenu-error");			
		});

		$('#lg_country').on('blur', function(){					
			if($(this).val()!=''){
				$(this).tooltip('destroy');
			};
		});

		$('#country').hide();
		$('input[data-name="sicountry"]').change(function(){ 
			if(this.checked) {
				$('#country').fadeIn();
				$('input[data-name="nocountry"]').removeAttr('checked');
			} 
		})

		$('input[data-name="nocountry"]').change(function(){ 
			if(this.checked) {
				$('#country').hide();
				$('input[data-name="sicountry"]').removeAttr('checked');
			} 	
		})


		$("#enviarSolicitud").click(function(){

			if($('#lg_nameSp').val() ===''){
				$('#lg_nameSp').addClass('error-input ui-selectmenu-error');
				$('#lg_nameSp').tooltip(tooltipClass);
			}else{
				$('#lg_nameSp').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_lastNameSp').val() ===''){
				$('#lg_lastNameSp').addClass('error-input ui-selectmenu-error');
				$('#lg_lastNameSp').tooltip(tooltipClass);
			}else{
				$('#lg_lastNameSp').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_mail').val()===''){
				$('#lg_mail').addClass('error-input ui-selectmenu-error');
				$('#lg_mail').tooltip(tooltipClass);
			}else{
				$('#lg_mail').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_comunas').val()===''){
				$('#lg_comunas-button').addClass('error-input ui-selectmenu-error');
				$('#lg_comunas-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu comuna"
				});
			}else{
				$('#lg_comunas-button').removeClass('error-input ui-selectmenu-error');		
			}

			if($('#lg_regiones').val()===''){
				$('#lg_regiones-button').addClass('error-input ui-selectmenu-error');
				$('#lg_regiones-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu región"
				});
			}else{
				$('#lg_regiones').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_street').val()===''){
				$('#lg_street').addClass('error-input ui-selectmenu-error');
				$('#lg_street').tooltip(tooltipClass);
			}else{
				$('#lg_street').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_snumber').val()===''){
				$('#lg_snumber').addClass('error-input ui-selectmenu-error');
				$('#lg_snumber').tooltip(tooltipClass);
			}else{
				$('#lg_snumber').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_cedula').val()===''){
				$('#lg_cedula').addClass('error-input ui-selectmenu-error');
				$('#lg_cedula').tooltip(tooltipClass);
			}else{
				$('#lg_cedula').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lb_civ_sta').val()===''){
				$('#lb_civ_sta-button').addClass('error-input ui-selectmenu-error');
				$('#lb_civ_sta-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu estado civil"
				});
			}else{
				$('#lb_civ_sta-button').removeClass('error-input ui-selectmenu-error');

			}
			if($('#lb_national').val()===''){
				$('#lb_national-button').addClass('error-input ui-selectmenu-error');
				$('#lb_national-button').tooltip(tooltipClass, {
					items: 'span',
					content: "Selecciona tu Nacionalidad"
				});
			}else{
				$('#lb_national').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_day').val()===''){
				$('#lg_day').addClass('error-input ui-selectmenu-error');
				$('#lg_day').tooltip(tooltipClass);
			}else{
				$('#lg_day').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_month').val()===''){
				$('#lg_month').addClass('error-input ui-selectmenu-error');
				$('#lg_month').tooltip(tooltipClass);
			}else{
				$('#lg_month').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_year').val()===''){
				$('#lg_year').addClass('error-input ui-selectmenu-error');
				$('#lg_year').tooltip(tooltipClass);
			}else{
				$('#lg_year').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_country').val() ===''){
				$('#lg_country').addClass('error-input ui-selectmenu-error');
				$('#lg_country').tooltip(tooltipClass);
			}else{
				$('#lg_country').removeClass('error-input ui-selectmenu-error');
			}
			if($('#lg_phone').val()===''			||
				$('#lg_nameSp').val()===''			||
				$('#lg_lastNameSp').val()===''		|| 
				$('#lg_mail').val()===''			||
				$('#lg_comunas').val()===''			||    
				$('#lg_regiones').val()===''		||   
				$('#lg_street').val()==='' 			|| 
				$('#lg_snumber').val()===''			|| 
				$('#lg_cedula').val()==='' 			|| 
				$('#lb_civ_sta').val()===''	 		||
				$('#lb_national').val()===''	 	||
				$('#lg_day').val()==='' 			|| 
				$('#lg_month').val()==='' 			|| 
				$('#lg_country').val()==='' 		||
				$('#lg_year').val()===''){
				return false;
		}

		if($('#acepto').is(':checked')){
			$(".formcontent").hide();
			$("#noEnviada0").fadeIn("fast");
			$('html,body').animate({
				scrollTop : $("#noEnviada0").offset().top
			}, 'slow');
		}else{
			$(".formcontent").hide();
			$("#enviada").fadeIn("fast");
			$('html,body').animate({
				scrollTop : $("#enviada").offset().top
			}, 'slow');
		}



	});
		//Fin Sección cuatro
	});
</script>