
	<head>
		<link rel="stylesheet" href="css/foundation2.css">
		<link rel="stylesheet" href="css/main.css" media="all" />
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/jquery.modal.css">
		<link rel="stylesheet" href="css/stylebbva.css">
		<link rel="stylesheet" href="css/table.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DAP</title>
		<script>
	  		function resizeIframe(obj) {
	    	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';}
		</script>
	</head>

	<body>
		
		<main class="formcontent"><!-- is-disabled-->
	        <!-- is-disabled-->
	        <div id="sp_wait" class="wait_" style="display:none;">
	            <img id="img-spinner" src="img/ajax-loader.gif" alt="Loading" />
	        </div>
			<section id="step_zero" class="section_main heightSection0 text_font_form">
	            <div class="row">
	                <div class="small-12 medium-4 large-4 columns"><!--Se cambia medium-12 por medium-4-->
						<article class="side_left">
							<div class="offer">
								<div class="content_under">
									<div class="row">
										<div>
											<p>
											<h3>¡Bienvenido, nos alegra tenerte por acá!</h3>
											</p>
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
									<img id="img1" src="img/banner-grande_tcm.jpg" class="responsive image1">
									<img id="img2" src="img/banner-pequeno_tcm.jpg" class="responsive image2">
								</p>
							</div>
							<div id="side_rigth_content">
								<div class="contentSteps1 paso1">
									<h2 class="font_lite">
										<p class="line_space_5">Hazte Cliente en dos simples pasos:</p>
									</h2>
									<div class="row boxIcons">
										<div class="small-12 medium-2 large-2 columns hiddenMedium">&nbsp;</div>
										<div class="large-4 medium-6 small-12 columns">
											<img src="img/icon-producto.png">									
											<p >1. Simula tu Depósito a Plazo</p>
										</div>
										<div class="large-4 medium-6 small-12 columns">
											<img src="img/icon-persona.png">									
											<p>2. Déjanos tus Datos Complementarios</p>
										</div>
										<div class="small-12 medium-2 large-2 columns hiddenMedium">&nbsp;</div>
									</div>
								</div>
								<div class="row block_two_columns text-center" style="margin-top: 20px !important;">
									<h1>Antes de comenzar, compártenos la siguiente información</h1>
									<p class="warning_title">Recuerda, los campos marcados con asterisco (*) son obligatorios.</p>
								</div>
								<div class="row block_two_columns">
									<div class="small-12 medium-2 large-2 column hiddenMedium">&nbsp;</div><!-- se cambia la clase a hiddenMedium-->
									<div class="small-12 medium-6 large-4 column margin_input_form">
									<!--Se cambia medium-12 por medium-6-->
										<label>¿Cómo te llamas?*</label> 
										<input type="text" id="lb_name" title="" data-content=""/>
									</div>
									<div class="small-12 medium-6 large-4 column margin_input_form"><!--Se cambia medium-12 por medium-6-->
										<label>¿Cuál es tu RUT?*</label> 
										<input type="text" id="lb_rut" maxlength="10" title="" data-content=""/>
									</div>	
									<div class="small-12 medium-2 large-2 column hiddenMedium">&nbsp;</div><!-- se cambia la clase a hiddenMedium-->		

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

			<section id="step_one" class="section_main text_font_form">
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
						<article class="side_rigth"><!-- side right -->

							<div class="side_rigth_content">
								<div class="row text_tittle ">
									<p><span class="nombre-solicitante">Jhon Doe</span>, simula tu Depósito a Plazo</p>
								</div>
								<p>Toma tu Depósito a Plazo en línea: Simula, Solicita y Transfiere desde una cuenta corriente de cualquier Banco.</p>
								<p class="warning_title">Recuerda, los campos marcados con asterisco (*) son obligatorios.</p>
								<div class="row block_two_columns">
									<div class="small-1 medium-1 large-2 columns hiddenMedium">&nbsp;</div>
	                                <div class="small-12 medium-12 large-8 columns">
	                                <!--Se cambia la clase medium-10 a -12 -->
										<div class="small-12 medium-4 large-4 dap-items margin_input_form columns">
											<label>Moneda</label>
											<p>Peso</p>
										</div>

										<div class="small-12 medium-4 large-4 dap-items margin_input_form columns">
											<label>Tipo</label>
											<p>Renovable</p>
										</div>

										<div class=" small-12 medium-4 large-4 dap-items margin_input_form columns">
											<label>Monto*</label>
											<input type="text" id="lb_monto" title="" data-content=""/>
										</div>
									</div>
									<div class="small-1 medium-1 large-2 columns hiddenMedium">&nbsp;</div>
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

			<section id="step_two" class="section_main text_font_form ">
				<div class="blocked_disabled"></div>
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
	                        <article class="capgemini-tables holder" style="margin-top: 20px;">
	                        	<div class="row block_two_columns">
	                            	<div class="small-1 medium-1 large-1 columns hiddenMedium">&nbsp;</div>
	                                <div class="small-12 medium-12 large-10 columns">
	                                    <div class="tables-body table-scroll">
	                                        <div>
	                                            <h2 class="table-title">
	                                            	Selecciona el plazo de tu preferencia para realizar el depósito
	                                            </h2>
	                                        	<div class="body-tab tables-body">
	                                                <table>
	                                                    <tbody>
	                                                        <tr>
		                                                        <th width="5%">&nbsp;</th>
		                                                        <th class="plazo" width="12%">PLAZO</th>
		                                                        <th width="12%">TASA ANUAL</th>
		                                                        <th width="18%" class="hidden-xs">TASA PERÍODO</th>
		                                                        <th width="16%" class="hidden-xs">SALDO AL VENCIMIENTO</th>
		                                                        <th width="40%">INTERESES A RECIBIR</th>
		                                                        <th class="hidden-xs">VENCIMIENTO</th>
	                                                        </tr>
	                                                       
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
	                                                            </td>
	                                                            <td class="link">30 días</td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                        </tr>
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;
	                                                            		<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
	                                                            </td>
	                                                            <td class="link">30 días</td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                        </tr>
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
	                                                            </td>
	                                                            <td class="link">30 días</td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                        </tr>
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;
	                                                            		<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
	                                                            </td>
	                                                            <td class="link">30 días</td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                        </tr>
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked">
	                                                            	</label>
	                                                            </td>
	                                                            <td class="link">30 días</td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                        </tr>
	                                                        <tr class="no-hover-tr">
	                                                            <td  class="title-int-table" colspan="7">
	                                                            	<h2 class="table-title">Puede elegir el plazo que más te acomode en días</h2>
	                                                            </td>
	                                                            </tr>
	                                                        <tr data-select-radio="true">
	                                                            <td>
	                                                            	<label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
	                                                            </td>
	                                                            <td  class="link actualizar-monto" style="width: 23%;">
	                                                            <input type="text" class="form-control checkDays" maxlength="4">
	                                                                <a href="#;" class="btn-actualziar"></a></td>
	                                                            <td>5,1600 %</td>
	                                                            <td class="hidden-xs">
	                                                            	<strong>0,4300 %</strong>
	                                                            </td>
	                                                            <td class="hidden-xs">$ 1.220.006</td>
	                                                            <td>$ 4.300</td>
	                                                            <td class="hidden-xs">07/09/2014</td>
	                                                         </tr>
	                                                        </tbody>
	                                                    </table>
	                                                </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="small-1 medium-1 large-1 columns hiddenMedium">&nbsp;</div>
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

			<section id="step_three" class="section_main heightSection4 text_font_form">
				<div class="blocked_disabled"></div>
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
								<img src="img/Error.png">
								<p class="stag_sans_ligth error_msg"></p>
							</div>
							<div class="row text_tittle">
								<p class="title_font">John Doe, estás a un paso de enviar tu solicitud.</p>
								<p class="warning_title">Recuerda, los campos marcados con asterisco (*) son obligatorios.</p>
							</div>
							<div class="small-12 medium-1 large-1 column hide-for-small-only">&nbsp;</div>
							<div class="row block_two_columns small-12 large-10 medium-10">
								<div class="row">
									<div class="small-12 medium-6 large-6 column margin_input_form">
									<!-- Clase medium-12 a -6 -->
										<label>Teléfono móvil* </label> 
										  <input type="text"  maxlength="9" id="lg_phone">
									</div>
									<div class="small-12 medium-6 large-6 column margin_input_form">
									<!-- Clase medium-12 a -6 -->
										<label>Email* </label> 
										<input type="text" id="lg_mail" maxlength="" />
									</div>
								</div>
								<div class="row">
									<div class="small-12 medium-12 large-6 column margin_input_form">
										<label>Región* </label> 
										<select	id="lg_regiones" class="select_">
											<option value="1">Selecciona</option>
											<option value="2">opcion 1</option>
											<option value="3">opcion 2</option>
										</select>
									</div>
									<div class="small-12 medium-12 large-6 column margin_input_form">
										<label>Comuna*</label>
										<select id="lg_comunas" class="select_">
											<option value="1">Selecciona</option>
											<option value="2">opcion 1</option>
											<option value="3">opcion 2</option>
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
												<input type="text" id="lg_street" maxlength="" />
											</div>
											<div class="large-4 medium-4 small-12 column input_margin mtop8">
												<label class="showMedium">Nº*</label>
												<input type="text" maxlength="6" id="lg_snumber" />
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
													<option selected value="1">Departamento</option>
													<option value="0">Casa</option>
												</select>
											</div>
											<div class="large-4 medium-4 small-12 column input_margin mtop8">
												<label class="showMedium">Nº</label>
												<input id="lg_number" type="text" maxlength="6"/>
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
														<img src="img/cedula.png">
													</div>
													<span class="arrow"></span>
												</div>
											</div>
										</label> 
										<input type="text" id="lg_cedula" maxlength="19" />
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

									<div class="small-12 large-6 medium-12 column margin_input_form">
										<label>Fecha de nacimiento (dd/mm/aaaa)**</label>
										<div class="row">
											<div class="large-4 medium-4 small-12 column input_margin mtop8">
												<input type="text" maxlength="2" id="lg_day"/>
											</div>
											<div class="large-4 medium-4 small-12 column input_margin mtop8">
												<input type="text" maxlength="2" id="lg_month"/>
											</div>
											<div class="large-4 medium-4 small-12 column input_margin mtop8">
												<input type="text" maxlength="4" id="lg_year"/>
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
							</div>
							<div class="small-12 medium-1 large-1 column hide-for-small-only">&nbsp;</div>

							 <div  style="margin: 20px auto -10px auto; text-align: center;">
								<label for="acepto" class="ui-marmots-label-check marmots-label-left">
								<input id="acepto" type="checkbox" name="acepto">Normativa FATCA: I’m a US Person or US Entity.
								 </label>
								 <a href="#modal-formulario" rel="modal:open" class="linkBottom">Más información</a>
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
					Tasas vigentes sólo para personas naturales sin cuenta corriente ni cuenta vista en BBVA, que contraten vía internet Depósitos a Plazo nominativos en pesos y renovables con un mínimo de 30 y un máximo de 360 días de plazo. La simulación tiene vigencia solamente por el día y la toma del depósito a plazo está sujeta a transferencia del monto a invertir durante el plazo estipulado. Solicitudes y transferencias deben ser recibidas antes de las 13:30 horas. Si la solicitud se realiza posterior a las 13:30 horas, tendrá hasta las 13:30 horas del día siguiente, quedando el DAP tomado con fecha del día siguiente. Los depósitos quedarán en custodia electrónica de BBVA y se renovarán a su vencimiento por el mismo plazo inicial y a la tasa vigente de la web publicada el día del vencimiento.
					</p>
				
				</div>

			</div>
		</div><!-- Modal terminos y condiciones-->

		<div id="modal-login" style="display:none;" class="modal modalLogin">
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
		</div><!-- Modal terminos y condiciones-->

		<div class="solicitudEnviada" id="enviada" style="height: 630px"><!-- mensaje de solicitud enviada -->
			<h2>
				<img src="img/check-solicitud.png"> Solicitud enviada exitosamente
			</h2>

			<h3>Para contratar tu Depósito a Plazo:</h3>
			<div class="boxBlue">
				<p>Sólo falta que transfieras los  $ 600.000 antes de las 13:30 de hoy a la siguiente cuenta:</p>
				<div class="row">
					<div class="small-12 large-3 medium-12 columns">Banco: BBVA</div>
					<div class="small-12 large-3 medium-12 columns">Cuenta Corriente: XXXXXX</div>
					<div class="small-12 large-3 medium-12 columns">Rut: XXXXX</div>
					<div class="small-12 large-3 medium-12 columns">Mail: XXXXX@bbva.com</div>
				</div>
			</div>
			<ul>
				<li>
					Si tu solicitud y transferencia se realiza un día hábil entre las 9:00 y 13:30 horas, tu Depósito a Plazo estará vigente al día hábil siguiente.
				</li>
				<li>
					Si tu solicitud y transferencia se realiza después de las 13:30 horas o días festivos, tu Depósito a Plazo estará vigente al díahábil subsiguiente
				</li>
			</ul>
			<hr>
			<div class="footer">
				Te enviamos un SMS con tu clave de acceso a BBVA CL. Podrás ingresar a tu sitio después de recibir nuestro correo de confirmación de la transferencia.
			</div>
			
			<hr>
			<div class="small-12 large-12 medium-12 columns">
				<div class="contentbtblank">
					<button class="init_button button_blank"><a href="#"><img src="img/ico-pdf-documentacion.png" style="padding-right: 8px;">Imprimir</a></button>
				</div>
				
			</div>
		</div><!-- mensaje de solicitud enviada -->

		<div class="solicitudEnviada" id="noEnviada0"><!-- mensaje de solicitud enviada -->
			
			<h2><span style="padding-left: 176px;" class="hiddenMedium"></span> No podemos atender su solicitud</h2>
			<div class="row">
			<div class="avatar"></div>
			<div>
				<br>
				<p>Lamentablemente no podemos atender su solicitud en estos momentos. Para tomar tu DAP, acércate a cualquiera de nuestras oficinas y te atenderemos.
	 			<br>
				</p>
				<p>
					<a href="" class="linkBottom">Ver sucursales BBVA</a>
				</p>
			</div>
			</div>
		</div><!-- mensaje de solicitud enviada -->

		<div class="solicitudEnviada" id="noEnviada1"><!-- mensaje de solicitud enviada -->
			
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

		<footer> </footer>
			<script src="js/vendor/jquery.js"></script>
			<script src="js/vendor/jquery-ui.js"></script>
			<script src="js/jquery.modal.js"></script>
			<script src="js/vendor/jquery.price_format.2.0.min.js"></script>
			<script src="js/vendor/foundation2.js"></script>
			<script src="js/vendor/modernizr.js"></script>
			<script src="js/vendor/moment.min.js"></script>
			<script src="js/jquery.mask.min.js"></script>
			<script src="js/accounting.js"></script>
			<!--[if !IE 8]><!-->
			<script src="https://www.google.com/recaptcha/api.js"></script>
			<!--<![endif]-->
			<!--[if IE 8]><script src="https://www.google.com/recaptcha/api.js?fallback=true"></script><![endif]-->

		<script type="text/javascript">
			$(function() {
				$(document).foundation();
				$(".select_").selectmenu();
				$(document).tooltip({
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
					});
				});
		</script>

		<script type="text/javascript">
			_satellite.pageBottom();
		</script>

		<script type="text/javascript">
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
		</script>

		<script type="text/javascript">
			$(function(){
				
			$("#next_zero").click(function() {
				if($('#lb_name').val()===''){
					$('#lb_name').addClass('error-input ui-selectmenu-error');
					$('#lb_name').attr('title', 'Ingrese su Nombre');
				}else{
					$('#lb_name').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lb_rut').val()===''){
					$('#lb_rut').addClass('error-input ui-selectmenu-error');
					$('#lb_rut').attr('title', 'Ingrese su RUT');
				}else{
					$('#lb_rut').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lb_rut').val()==='' || $('#lb_rut').val()==='' ){
					return false;
				}
				$('html,body').animate({
					scrollTop : $("#step_one").offset().top
				}, 'slow');
				$("#step_one").find('.blocked_disabled').css("z-index", "-1");
			});

			$('#lb_name').on('focus', function() {
			     $(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lb_rut').on('focus', function() {
			     $(this).removeClass("error-input ui-selectmenu-error");
			});
			


			//Sección dos 
			$("#next_one").click(function() {
				if($('#lb_monto').val()===''){
					$('#lb_monto').addClass('error-input ui-selectmenu-error');
					$('#lb_monto').attr('title', 'Ingrese Monto');
				}else{
					$('#lb_monto').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lb_monto').val()===''){
					return false;
				}
				$('html,body').animate({
					scrollTop : $("#step_two").offset().top
				}, 'slow');
				$("#step_two").find('.blocked_disabled').css("z-index", "-1");
			});

			$('#lb_monto').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			
			$('#lb_monto').keyup(function(event) {
			  	$(this).val(accounting.formatMoney(accounting.unformat($(this).val(),','),'', 0,'.',','));
			});

			//Sección tres
			$("#next_two").click(function() {
				$('html,body').animate({
					scrollTop : $("#step_three").offset().top
				}, 'slow');
				$("#step_three").find('.blocked_disabled').css("z-index", "-1");
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
				 $("#next_one").removeClass("button_disable").removeAttr("disabled");
			});

			$("#enviarSolicitud").click(function(){
				if($('#lg_phone').val()===''){
					$('#lg_phone').addClass('error-input ui-selectmenu-error');
					$('#lg_phone').attr('title', 'Ingrese su Teléfono ');
				}else{
					$('#lg_phone').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_mail').val()===''){
					$('#lg_mail').addClass('error-input ui-selectmenu-error');
					$('#lg_mail').attr('title', 'Ingrese su Correo electrónico ');
				}else{
					$('#lg_mail').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_comunas-button').val()===''){
					$('#lg_comunas-button').addClass('error-input ui-selectmenu-error');
					$('#lg_comunas-button').attr('title', 'Seleccione su Comuna');
				}else{
					$('#lg_comunas-button').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_regiones-button').val()===''){
					$('#lg_regiones-button').addClass('error-input ui-selectmenu-error');
					$('#lg_regiones-button').attr('title', 'Seleccione su Región');
				}else{
					$('#lg_regiones-button').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_street').val()===''){
					$('#lg_street').addClass('error-input ui-selectmenu-error');
					$('#lg_street').attr('title', 'Ingrese el nombre de su Calle');
				}else{
					$('#lg_street').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_snumber').val()===''){
					$('#lg_snumber').addClass('error-input ui-selectmenu-error');
					$('#lg_snumber').attr('title', 'Ingrese el número de su dirección');
				}else{
					$('#lg_snumber').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_cedula').val()===''){
					$('#lg_cedula').addClass('error-input ui-selectmenu-error');
					$('#lg_cedula').attr('title', 'Ingrese correctamente su número de serie de su cédula');
				}else{
					$('#lg_cedula').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lb_civ_sta').val()===''){
					$('#lb_civ_sta').addClass('error-input ui-selectmenu-error');
					$('#lb_civ_sta').attr('title', 'Ingrese correctamente su número de serie de su cédula');
				}else{
					$('#lb_civ_sta').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_day').val()===''){
					$('#lg_day').addClass('error-input ui-selectmenu-error');
					$('#lg_day').attr('title', 'Ingrese su día de nacimiento');
				}else{
					$('#lg_day').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_month').val()===''){
					$('#lg_month').addClass('error-input ui-selectmenu-error');
					$('#lg_month').attr('title', 'Ingrese su mes de nacimiento');
				}else{
					$('#lg_month').removeClass('error-input ui-selectmenu-error');
				}
				if($('#lg_year').val()===''){
					$('#lg_year').addClass('error-input ui-selectmenu-error');
					$('#lg_year').attr('title', 'Ingrese su año de nacimiento');
				}else{
					$('#lg_year').removeClass('error-input ui-selectmenu-error');
				}

				if($('#lg_phone').val()===''			|| 
					$('#lg_mail').val()===''			|| 
					$('#lg_regiones').val()===''		||   
					$('#lg_street').val()==='' 			|| 
					$('#lg_snumber').val()===''			|| 
					$('#lg_cedula').val()==='' 			|| 
					$('#lb_civ_sta').val()==='' 		|| 
					$('#lg_day').val()==='' 			|| 
					$('#lg_month').val()==='' 			|| 
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
			$('#lg_phone').on('focus', function() {
					$(this).removeClass("error-input ui-selectmenu-error");
				});
			$('#lg_mail').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});

			$('#lg_comunas-button').on('click', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_regiones-button').on('click', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_street').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_snumber').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_cedula').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lb_civ_sta').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_day').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_month').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			$('#lg_year').on('focus', function() {
				$(this).removeClass("error-input ui-selectmenu-error");
			});
			});
		</script>
	</body>

