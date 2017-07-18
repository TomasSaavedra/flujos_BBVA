			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="css/foundation2.css">
				<link rel="stylesheet" href="css/main.css" media="all" />
				<link rel="stylesheet" type="text/css" href="css/table.css">
				<link rel="stylesheet" href="css/jquery-ui.css">
				
				<meta charset="UTF-8">
				<title>Quiero simular</title>

			</head>			
			<body>
				<div class="formcontent container_fluid">



					<section id="facade" class="section_main stag_sans_ligth"><!-- section paso zero -->

				        <div class="row">
				            <div class="small-12 medium-12 large-4 columns"><!-- 4 columns -->
								<article class="side_left">
									<div class="offer">
										<div class="content_under">
											<div class="row">
												<div>
													<h3>Producto de Interes</h3>
													<p>Descubre los productos BBVA y disfruta de los beneficios que tenemos para ti</p>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div><!-- 4 columns -->
							<div class="small-12 medium-12 large-8 columns"><!-- 8 columns -->
								<article class="side_rigth">
									
									<div class="side_rigth_content">
										<article class="campos-inicio">
											<h3 class="font_lite" style="margin-top: 16%">
												Simula tu Depósito a Plazo
											</h3>
											<span>Recuerda, los campos marcados son asterisco(*) son obligatorios.</span></p>
											</p>
											<div class="row block_two_columns">
												<div class="row">
													<div class="small-12 medium-12 large-4 column margin_input_form">
														<label>Moneda*</label> 
														<select class="select_">
															<option value="">Peso</option>
															<option value="1">Peso</option>
															
														</select>
													</div>
													<div class="small-12 medium-12 large-4 column margin_input_form">
														<label>Tipo*</label> 
														<select class="select_">
															<option value="">Renovable</option>
															<option value="1">Renovable</option>
														
														</select>
													</div>

													<div class="small-12 medium-12 large-4 column margin_input_form">
														<label>Monto*</label>
														<input type="number"  maxlength="" id="ingresarMonto">
													</div>
													
												</div><!-- row -->
												
											</div>
											<div class="row"><!-- btn -->
												<div class="button_init">
													<button class="init_button button_disable" id="next_Szero" disabled="true">Simular Depósito</button>
												</div>
											</div><!-- btn -->

											<div class="small-12 medium-12 large-12 column margin_input_form termConditions">
													<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien tellus, sollicitudin in suscipit eget, tincidunt tincidunt lacus. Praesent et fringilla odio, a ultricies urna. Cras at tempus magna. Morbi et metus odio. Vestibulum at nunc eget lectus luctus hendrerit. <a class="link" href="#terminosCondiciones" rel="modal:open">más información</a></span>
												</div>
									
										</article>
									</div><!-- side right content -->
								</article>
							</div><!-- 8 columns -->
						</div><!-- row -->
					</section><!-- section paso zero -->



					<!--Paso 1-->
					<section id="step_one" class="section_main text_font_form height_step2">
						<div class="blocked_disabled"></div>
						<div class="row">
							<div class="small-12 medium-12 large-4 columns">
								<article id="p1" class="side_left height_step">
									<div class="offer">
										<div class="row">
											<div class="small-11 medium-11 large-11 columns">
												<div id="head_step_one" class="head_step">
													<p>Producto de Interes</p>
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
				            </div>
				            <div class="small-12 medium-12 large-8 columns">
                                    <article class="capgemini-tables holder">
                                        <div class="small-12 medium-12 large-9" style="margin:0 auto;">
                                            <div class="tables-body table-scroll">
                                                <div>
                                                    <h2 class="table-title">Seleccione el plazo de su preferencia para realizar el depósito:</h2>
                                                  
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
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td class="link">30 días</td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                                                <td class="hidden-xs">$ 1.220.006</td>
                                                                                <td>$ 4.300</td>
                                                                                <td class="hidden-xs">07/09/2014</td>
                                                                            </tr>
                                                                            <tr data-select-radio="true">
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td class="link">30 días</td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                                                <td class="hidden-xs">$ 1.220.006</td>
                                                                                <td>$ 4.300</td>
                                                                                <td class="hidden-xs">07/09/2014</td>
                                                                            </tr>
                                                                            <tr data-select-radio="true">
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td class="link">30 días</td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                                                <td class="hidden-xs">$ 1.220.006</td>
                                                                                <td>$ 4.300</td>
                                                                                <td class="hidden-xs">07/09/2014</td>
                                                                            </tr>
                                                                            <tr data-select-radio="true">
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td class="link">30 días</td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                                                <td class="hidden-xs">$ 1.220.006</td>
                                                                                <td>$ 4.300</td>
                                                                                <td class="hidden-xs">07/09/2014</td>
                                                                            </tr>
                                                                            <tr data-select-radio="true">
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td class="link">30 días</td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
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
                                                                                <td><label class="ui-marmots-label-radio marmots-label-left">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                                <td  class="link actualizar-monto" style="width: 26%;">
                                                                                <input type="text" class="form-control" maxlength="4" style="width: 52px !important;float: left;font-size: 12px;">
                                                                                    <a href="#;" class="btn-actualziar"></a></td>
                                                                                <td>5,1600 %</td>
                                                                                <td class="hidden-xs"><strong>0,4300 %</strong></td>
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

                                        <div  style="margin: 0 auto; text-align: center;">
											
											<label for="terminos" class="ui-marmots-label-check marmots-label-left">
										 	<input id="terminos" type="checkbox" name="terminos">Declaro haber leído los 
										 	</label><a href="#terminosCondiciones" rel="modal:open" class="linkBottom">Terminos y condiciones</a>
										</div>
										<div class="row"><!-- btn -->
												<div class="button_init">
													<button class="init_button button_disable" id="next_step1" disabled="true">Me interesa</button>
												</div>
											</div><!-- btn -->
                                </article>
							</div>
						</div> 
					</section>	





					<!--Paso dos-->
					<section id="step_two" class="section_main text_font_form height_step2" style="height: 550px">
						<div class="blocked_disabled"></div>
						<div class="row">
							<div class="small-12 medium-12 large-4 columns">
								<article id="p1" class="side_left height_step">
									<div class="offer">
										<div class="row">
											<div class="small-11 medium-11 large-11 columns">
												<div id="head_step_one" class="head_step">
													<p>Bienvenido, nos alegra tenerte por acá</p>
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
													Únete a BBVA y comienza a hacer tu vida más simple.
												</p>
											</div>
										</div>
									</div>
								</article>
				            </div>
				            <div class="small-12 medium-12 large-8 columns">
                                  	<div class="side_rigth_content">
										<article class="campos-inicio">
											<h3 class="font_lite">
												Queremos conocerte
											</h3>
											<p class="line_space_1">Para continuar compartenos la siguiente información</br>
											<span>Recuerda, los campos marcados son asterisco(*) son obligatorios.</span></p>
											</p>
											<div class="row block_two_columns">
												<div class="row">
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>¿Cómo te llamas?*</label> 
														<input type="text" id="lb_name1" maxlength="19" />
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>¿Cuál es tu rut?*</label> 
														<input type="number" id="lb_rut" maxlength="9" />
													</div>
													
												</div><!-- row -->
											</div>
											<div class="row"><!-- btn -->
												<div class="button_init">
													<button class="init_button button_disable" id="next_step2" disabled="true">Continuar</button>
												</div>
											</div><!-- btn -->									
										</article>
									</div><!-- side right content -->
							</div>
				        </div>
					</section>


				

					<!--Paso cuatro-->
					<section id="step_three" class="section_main text_font_form height_step2">
						<div class="blocked_disabled"></div>
						<div class="row">
							<div class="small-12 medium-12 large-4 columns">
								<article id="p1" class="side_left height_step height_step2">
									<div class="offer">
										<div class="row">
											<div class="small-11 medium-11 large-11 columns">
												<div id="head_step_one" class="head_step">
													
													<p>Datos Complementarios</p>
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
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum,
												</p>
											</div>
										</div>
									</div>
								</article>
				            </div>
				            <div class="small-12 medium-12 large-8 columns">

								<article class="side_rigth">
									<div class="side_rigth_content">
										<div class="row text_tittle ">
											<p>Jhon Doe, estás a un paso de enviar tu solicitud.</p>
										</div>
										<p class="text-center">
											Recuerda, los campos marcados con asterisco (*) son obligatorios.
										</p>
										<div class="row  block_two_columns" id="accordion">

											<div class="large-12 small-12 medium-12">
												
												<div class="subTitle accordion-toggle">Datos personales <div class="icon-check"></div></div>
												<div class="accordion-content default">
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<div class="tooltips bottom fLeft mTop5 tooltips-bottomLeft"> 
															<a href="javascript:void(0);" class="icon-tool"></a>
															<div class="arrtooltip"> 
																<div class="inner-mensaje">
																	<img src="img/cedula.png">
																</div>
																<span class="arrow"></span>
															</div>
														</div>
														<label>Número de serie de tu célular*</label>
														<input type="number"  maxlength="">
													</div>

													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Fecha de nacimiento*</label>
														<input type="date" maxlength="">
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Teléfono (fijo o móvil)*</label> 
														<input type="number" id="field-telefono" maxlength="">
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Email*</label> 
														<input type="email" id="field-email" maxlength="">
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Estado civil*</label> 
														<select class="select_">
															<option value="">Selecciona una Región</option>
															<option value="1">Metropolitana</option>
															<option value="2">...</option>
														</select>
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form" style="margin-bottom: 20px">
														<label>Sexo*</label> 
														<select class="select_">
															<option value="">Masculino</option>
															<option value="1">Femenino</option>
															
														</select>
													</div>


													<div class="small-12 medium-12 large-6 " style="margin-bottom: 15px;">
														<label for="acepto" class="ui-marmots-label-check marmots-label-left">
											 			<input id="acepto" type="checkbox" name="acepto1">Soy US Person o US Entity 
											 			</label><a href="#usPerson" rel="modal:open" class="linkBottom">Terminos y condiciones</a>
										 			</div>




												
													<button id="continuarDatosUbicacion" class="buttonAccordion">Continuar</button>
												</div>
											</div>

											<div class="large-12  small-12 medium-12">
												<div id="datosUbicacion" class="subTitle accordion-toggle">Datos Ubicación<div class="icon-check"></div></div>
												
												<div class="accordion-content">
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Región*</label> 
														<select class="select_">
															<option value="">Selecciona una Región</option>
															<option value="1">Metropolitana</option>
															<option value="2">...</option>
														</select>
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Ciudad*</label> 
														<select class="select_">
															<option value="">Selecciona una Comuna</option>
															<option value="1">Santiago</option>
															<option value="2">...</option>
														</select>
													</div>	
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<label>Comuna*</label> 
														<select class="select_">
															<option value="">Selecciona una Comuna</option>
															<option value="1">Santiago</option>
															<option value="2">...</option>
														</select>
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form">
														<div class="small-12 medium-12 large-8  column margin_input_form" style="float: left;">
															<label>Calle*</label>
															<input type="text" name="">
														</div>
														<div class="small-12 medium-12 large-4 column margin_input_form" style="float: left;">
															<label>Nº*</label>
															<input type="number" name="">
														</div>
													</div>
													<div class="small-12 medium-12 large-6 column margin_input_form table-item-acordion">
														<div class="small-12 medium-12 large-8  column margin_input_form" style="float: left;">
															<label>tipo</label> 
															<select class="select_">
																<option value="">Departamento</option>
																<option value="1">Casa</option>
															</select>
														</div>
														<div class="small-12 medium-12 large-4 column margin_input_form" style="float: left;">
															<label>Nº</label>
															<input type="number" name="">
														</div>
													</div>
													
													<div class="button_init">
														<button class="init_button" id="enviarSolicitud">Enviar Solicitud</button>
													</div>
												</div>
											</div>
										</div>	
									</div>
								</article>

							</div>
						</div> 
					</section>

				</div><!-- formcontent -->


				<div id="usPerson" class="modal" style="display:none">
					<div id="title_modal" class="row">
						<label>¿Qué significa US Person/US Entity?</label>
						<a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
					</div>
					<div class="row block_two_columns">
						<div class="inside-modal">
							<p style="font-size: 14px">
							<strong>US Person o Persona Norteamericana:</strong>
							<br>
							Se consideran los ciudadanos de los EEUU, incluyendo personas nacidas ahí, pero residentes en otro país y que no han renunciado a dicha ciudadanía o personas con residencia permanente en EEUU con tarjeta Green Card (Tarjeta de residencia permanente en Estados Unidos). Aparte de EE.UU, incluye los países del territorio Norteamericano, como Puerto Rico, Samoa Americana, Isla Mariana del Norte, Guam, Islas Vírgenes Americanas e Islas Menores EE.UU.
							</p>
						<p style="font-size: 14px">
							<strong>US Entity o Entidad Norteamericana: </strong>
							<br>
							Puede ser cualquier empresa que tenga como país de constitución o procedencia EE.UU o países del territorio Norteamericano, como Puerto Rico, Samoa Americana, Isla Mariana del Norte, Guam, Islas Vírgenes Americanas e Islas Menores EE.UU
							</p>
						</div>

					</div>
				</div>

				<div class="solicitudEnviada" id="enviada"><!-- mensaje de solicitud enviada -->
					<h2>
						<img src="img/check-solicitud.png"> Solicitud enviada exitosamente
					</h2>
					<p>
						¡Hemos recibido tu solicitud! Nos comunicaremos de Lunes a Viernes, entre 09:00 y  18:00 horas, a los datos de contacto ingresados en el formulario.
					</p>
					<p>
						Muchas gracias por contactarnos.
					</p>
				</div><!-- mensaje de solicitud enviada -->


				<div class="solicitudEnviada" id="noEnviada"><!-- mensaje de solicitud enviada -->
					<h2><span class="modalTitleLeft"></span> No podemos atender su solicitud</h2>
					<div class="row">
						<div class="avatar"></div>
						<div>
							<p>
								"Estimado cliente,"</p> <br>
								<p>En este momento, no podemos atender su solicitud por este canal debido a que la Ley de Cumplimiento Tributario de Cuentas Extranjeras de EEUU nos exige recaudar información adicional de los clientes que se declaran como US Person o US Entity <br>
							</p>
							<p>
								<strong>Por favor acuda a una sucrusal"  <a href="" class="linkBottom">Ver sucursales BBVA</a></strong>
							</p>
						</div>
					</div>
				</div><!-- mensaje de solicitud enviada -->



				<div class="solicitudEnviada" id="terminosCondiciones"><!-- mensaje de solicitud enviada -->
					<h2>
						 Términos y condiciones
					</h2>
					<p>
						Tasas vigentes sólo para personas naturales sin cuenta corriente ni cuenta vista en BBVA, que contraten vía internet Depósitos a Plazo nominativos en pesos y renovables con un mínimo de 30 y un máximo de 360 días de plazo. La simulación tiene vigencia solamente por el día y la toma del depósito a plazo está sujeta a transferencia del monto a invertir durante el plazo estipulado. Solicitudes y transferencias deben ser recibidas antes de las 13:30 horas. Si la solicitud se realiza posterior a las 13:30 horas, tendrá hasta las 13:30 horas del día siguiente, quedando el DAP tomado con fecha del día siguiente. Los depósitos quedarán en custodia electrónica de BBVA y se renovarán a su vencimiento por el mismo plazo inicial y a la tasa vigente de la web publicada el día del vencimiento.
					</p>
				</div><!-- mensaje de solicitud enviada -->




				<script src="js/jquery.js"></script>
				<script src="js/jquery-ui.js"></script>
				<script src="js/foundation2.js"></script>
				<script src="js/modernizr.js"></script>
				<script src="js/jquery.modal.js"></script>


				<script>

					$("#lb_name1, #lb_name1").change( function(){
					   $("#next_step2").removeClass("button_disable").removeAttr("disabled");
					});

					$(".checkProducto").click( function(){
					   $(this).parent().parent().toggleClass("itemActivo");
					   $("#next_step3").removeClass("button_disable").removeAttr("disabled");
					});

					$('#ingresarMonto').change(function(){
						$('#next_Szero').removeClass("button_disable").removeAttr("disabled");
					})


					$('#terminos').change(function(){
						$('#next_step1').removeClass("button_disable").removeAttr("disabled");
					})
					//Activa el siguiente paso
					$("#next_Szero").click(function() {
						$('html,body').animate({
							scrollTop : $("#step_one").offset().top
						}, 'slow');
						$("#step_one").find('.blocked_disabled').css("z-index", "-1");
						$(this).addClass("button_disable").attr("disabled", "true");
					});

					$("#next_step1").click(function() {
						$('html,body').animate({
							scrollTop : $("#step_two").offset().top
						}, 'slow');
						$("#step_two").find('.blocked_disabled').css("z-index", "-1");
						$(this).addClass("button_disable").attr("disabled", "true");
					});

					$("#next_step2").click(function() {
						$('html,body').animate({
							scrollTop : $("#step_three").offset().top
						}, 'slow');
						$("#step_three").find('.blocked_disabled').css("z-index", "-1");
						$(this).addClass("button_disable").attr("disabled", "true");
					});
				

					//mensaje de éxito al enviar solicitud
					$("#enviarSolicitud").click(function(){
						if($('#acepto').is(':checked')){
							$(".formcontent").hide();
							$("#noEnviada").fadeIn("fast");
							$('html,body').animate({
								scrollTop : $("#noEnviada").offset().top
							}, 'slow');
						}else{
							$(".formcontent").hide();
							$("#enviada").fadeIn("fast");
							$('html,body').animate({
								scrollTop : $("#noEnviada").offset().top
							}, 'slow');
						}
						
					});
					
					

				</script>

				<script>
					var com = {};
					com.bbva = com.bbva || {};
					com.bbva.main = com.bbva.main || {};
					com.bbva.main.Main = (function(wd, document) {
						return {
							init : function() {
							}
						}
					})(window, document);

					$(function() {
						$(document).foundation();
						com.bbva.main.Main.init();
						$(".select_").selectmenu();

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
									$('#next_step1').addClass("button_disable").prop("disabled", true);
							}else {
								labelSeleccionado.addClass("on");
								labelSeleccionado.find("input").prop("checked", true);	
								$('#next_step1').removeClass("button_disable").prop("disabled", false);
							}
							
						});

					});

				</script>
				<script type="text/javascript">
	  				$(document).ready(function($) {
	  					$('#continuarDatosUbicacion').on('click',function(){
	  						$('#datosUbicacion').click()
	  					});
	    				$('#accordion').find('.accordion-toggle').click(function(){
							$(".icon-check").show();
						    //Expand or collapse this panel
						    $(this).next().slideToggle('fast');
						    //Hide the other panels
						    $(".accordion-content").not($(this).next()).slideUp('fast');
	    				});
	  				});
				</script>



			</body>

			</html>
