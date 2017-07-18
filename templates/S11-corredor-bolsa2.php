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
			<h2 class="title-sh">Ahorro e Inversion</h2>

			<hr class="separador">
			<div class="tab-content">
				<div class="row tab-pane active" id="mis-productos">
					<div class="container" id="enrolamiento-container">
						<div id="corredor-bolsa-container"  class="content" style="visibility: visible;">	<!-- Wizard Firma de cnotrato -->
							<div class="proceso-corredores-bolsa">
								<div class="row">
									<div class=" container-header-enrolamiento col-md-12 text-center">
										<button id="cierraModalGenerica" type="button" class="close-icon" style="float:right"></button>
										<h1>Proceso de enrolamiento</h1>
									</div>
								</div>
								<div>
									<div class="firma-contrato" id="container-body-enrolamiento" style="overflow:visible;">
										<form id="formContratoFilial" class="tooltip-validation">
											<div class="block-error iconed-24 hidden" id="errorClaveBloqueada">
												<i class="icon-24 red m01-alerta"></i> <span id="descripcionErrorClaveBloqueada">Su solicitud no ha podido ser efectuada. Por favor intente m&aacute;s tarde.</span>
											</div>
											<article id="wizzard-corredor-bolsa" class="wizard">
												<!-- Step 1: Encuesta -->
												<div id="encuesta-formulario-enrolamiento" data-title="Encuesta">
													<div class="row enrolamiento-menu">
														<div class="col-md-12 container-preguntas-enrolamiento">
															<div id="formulario-enrolamiento" class="container col-md-12">
																<div class="row">
																	<!--Pregunta 1 -->
																	<div class="col-md-12 container-preguntas-enrolamiento-bloque">
																		<div div class="col-md-12">
																			<h4>1&#191;Cu&aacute;l de las alternativas representa mejor su horizonte de inversi&oacute;n?</h4>
																		</div>
																		<div div class="col-md-12">
																			<ul>
																				<li>
																					<label for="radio1" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Podr&iacute;a necesitar el dinero en cualquier momento, por lo tanto la inversi&oacute;n deberia ser de corto plazo</span>
																						<input name="radio1" id="radio1" value="value1" type="radio">
																					</label>
																				</li>
																				<li>
																					<label for="radio2" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Deber&iacute;a rescatar el dinero dentro de este a&ntilde;o</span>
																						<input name="radio1" id="radio2" value="value1" type="radio">
																					</label>
																				</li>
																				<li>
																					<label for="radio3" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Quiz&aacute;s haga retiros espor&aacute;dicos, pero la mayor parte de la inversi&oacute;n ser&aacute; de largo plazo</span>
																						<input name="radio1" id="radio3" value="value1" type="radio">
																					</label>
																				</li>
																				<li>
																					<label for="radio4" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>No pretendo usar este dinero en al menos 3 a&ntilde;os</span>
																						<input name="radio1" id="radio4" value="value1" type="radio">
																					</label>
																				</li>
																			</ul>
																		</div>
																	</div>

																	<!--Pregunta 2 -->
																	<div class="col-md-12 container-preguntas-enrolamiento-bloque">
																		<div div class="col-md-12">
																			<h4>2&#191;Cu&aacute;les seri&aacute;n sus objetivos de Inversi&oacute;n?</h4>
																		</div>
																		<div div class="col-md-12">
																			<ul>
																				<li>
																					<label  for="radio5" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>jubilaci&oacute;n</span>
																						<input name="radio2" id="radio5" value="value2" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio6" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Educaci&oacute;n hijos</span>
																						<input name="radio2" id="radio6" value="value2" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio7" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Inmobiliaria</span>
																						<input name="radio2" id="radio7" value="value2" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio8" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>No pretendo usar este dinero en al menos 3 a&ntilde;os</span>
																						<input name="radio2" id="radio8" value="value2" type="radio">
																					</label>
																				</li>
																			</ul>
																		</div>
																	</div>

																	<!--Pregunta 3 -->
																	<div class="col-md-12 container-preguntas-enrolamiento-bloque" style="margin-bottom: 30px;">
																		<div div class="col-md-12">
																			<h4>3&#191;Tiene algunas experiencia como Inversionista?</span>
																		</div>
																		<div div class="col-md-12">
																			<ul>
																				<li>
																					<label  for="radio9" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>No, nunca eh invertido</span>
																						<input name="radio3" id="radio9" value="value3" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio10" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Poca, he invertido en contadas ocaciones</span>
																						<input name="radio3" id="radio10" value="value3" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio11" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Si, invierto frecuentemente en productos tradicionales (por ejemplo: fondos mutuos, acciones, renta fija, etc.)</span>
																						<input name="radio3" id="radio11" value="value3" type="radio">
																					</label>
																				</li>
																				<li>
																					<label  for="radio12" class="ui-marmots-label-radio marmots-label-left check-encuesta">
																						<span>Si, invierto frecuentemente en productos tradicionales (por ejemplo: fondos mutuos, acciones, renta fija, etc.)</span>
																						<input name="radio3" id="radio12" value="value3" type="radio">
																					</label>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Step 2: Datos personales -->
												<div id="datos-personales-enrolamiento" data-title="Datos personales" data-multistep="true">
													<div class="row enrolamiento-menu">
														<div class="col-md-12" id="Datos-enrolamiento">
															<div class="container col-md-12">
																<div class="row">
																	<!--Pregunta 1 -->
																	<div class="col-md-12">
																		<div div class="col-md-12">
																			<h4 class="encabezadotexto">Datos Personales</h4>
																			<hr style="margin-top: 0;">
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Nombre y Apellido*</span>
																				</div>
																				<div class="col-md-12" style="margin: 10px 0;">
																					<span>LORNA SALAZAR TREJO</span>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Sexo</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbSexoPer" id="cbSexoPer" title="SELECCIONE" class="selectpicker" data-container="body" data-width="180px">
																						<option value="M">MASCULINO</option>
																						<option value="F">FEMENINO</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Estado Civil*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbEstadoCivilPer" id="cbEstadoCivilPer" title="SELECCIONE" class="selectpicker required">
																						<option value="ECIVISOLTE">Soltero/a</option>
																						<option value="RCONYSEPBI">Casado/a</option>
																						<option value="RCONYSOCCO">Divorciado/a</option>
																						<option value="RCONYSOCCO">Separado/a</option>
																						<option value="RCONYSOCCO">Uni&oacute;n Civil</option>
																						<option value="ECIVIVIUDO">Viudo/a</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Pa&iacute;s*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbPaisPer" id="cbPaisPer" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="CHI">CHILE</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Fecha de nacimiento*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width: 180px;" type="text" maxlength="10" class="required datepicker  form-control dateFieldFrom" id="dateFieldFromPer" name="dateFieldFromPer" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" />
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>R&eacute;gimen Conyugal</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select data-width="180px" name="cbRegimenConyugal" name="cbRegimenConyugalPer" id="cbRegimenConyugalPer" title="SELECCIONE" class="selectpicker">
																						<option value="SREGCONYU">Sin R&eacute;gimen</option>
																						<option value="PARTGANAN">Part. Ganancias</option>
																						<option value="SEPBIENES">Sep. Bienes</option>
																						<option value="SOCCONYUG">Soc. Conyugal.</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div div class="col-md-12">
																			<h4 class="encabezadotexto">Direcci&oacute;n</h4>
																			<hr style="margin-top: 0;">
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Tipo</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select id="cbTipoDireccionPer" name="cbTipoDireccionPer" class="selectpicker" data-container="body" data-width="180px">
																						<option value="volvo">Particular</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Pa&iacute;s*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbPaisDirPer" id="cbPaisDirPer" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="CHI">CHILE</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Regi&oacute;n*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select id="cbRegionPer" name="cbRegionPer" class="selectpicker required" data-container="body" data-width="180px" style="display: none;">
																						<option value="volvo">RM</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Ciudad</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbCiudadPer" id="cbCiudadPer" class="selectpicker" data-container="body" data-width="180px" style="display: none;">
																						<option value="volvo">SANTIAGO</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Comuna*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbComunaPer" id="cbComunaPer" class="selectpicker required" data-container="body" data-width="180px" style="display: none;">
																						<option value="volvo">VITACURA</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Codigo Postal</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpCodigoPostalPer" id="inpCodigoPostalPer" class="form-control required" placeholder="" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Calle*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpCallePer" id="inpCallePer" class="form-control required" placeholder="MONS ESCRIVA DE BALAGUER" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Numero*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNumPer" id="inpNumPer" class="form-control required" placeholder="11299" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Complemento</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpComplementoPer" id="inpComplementoPer" class="form-control " placeholder="" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Telefono Movil*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select id="cbTelMovCodPer" name="cbTelMovCodPer" class="selectpicker required" data-container="body" data-width="80px"">
																						<option value="volvo">09</option>
																					</select>
																					<input style="display: inline-block;width: 97px;margin-bottom: 10px;" type="text" name="inpTelMov" id="inpTelMov" class="form-control required" placeholder="888888" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Telefono Fijo*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbTelFijoCodPer" id="cbTelFijoCodPer" class="selectpicker required" data-container="body" data-width="80px" style="display: none;">
																						<option value="volvo">022</option>
																					</select>
																					<input style="display: inline-block;width: 97px;margin-bottom: 10px;" type="text" name="inpTelFijo" id="inpTelFijo" class="form-control required" placeholder="888888" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>E-mail*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="email" name="inpMailPer" id="inpMailPer" class="form-control required" placeholder="USUARIOCANALES@GMAIL.COM" autocomplete="off">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div id="datosConyuge" class="col-md-12" style="display:none;">
																		<div div class="col-md-12">
																			<h4 class="encabezadotexto">Datos Personales C&oacute;nyuge</h4>
																			<hr style="margin-top: 0;">
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Nombres*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNamCony" id="inpNamCony" class="form-control required" placeholder="" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Apellido Paterno*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpApellPatCony" id="inpApellPatCony" class="form-control required" placeholder="" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Apellido Materno*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpApellMaternoCony" id="inpApellMaternoCony" class="form-control required" placeholder="" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Nacionalidad*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select title="SELECCIONE" name="cbConyNacionalidadCony" id="cbConyNacionalidadCony" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="CHI">CHILE</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Tipo Documento*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select title="SELECCIONE" name="cbTipDocCony" id="cbTipDocCony" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="volvo">Rol &Uacute;nico Tributario</option>
																						<option value="volvo">Pasaporte</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>N&uacute;mero de Documento*</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNumDocCony" id="inpNumDocCony" class="form-control required" placeholder="12345789-0" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Sexo</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbSexoCony" id="cbSexoCony" title="SELECCIONE" class="selectpicker" data-container="body" data-width="180px">
																						<option value="M">MASCULINO</option>
																						<option value="F">FEMENINO</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Region</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbRegCony" id="cbRegCony" class="selectpicker " data-container="body" data-width="180px">
																						<option value="RM">RM</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Comuna</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbComunaCony" id="cbComunaCony" class="selectpicker " data-container="body" data-width="180px">
																						<option value="VIT">VITACURA</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-9 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Direccion</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:465px;" type="text" name="inpDirecCony" id="inpDirecCony" class="form-control" placeholder="MONS ESCRIVA DE BALAGUER" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Numero</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNumAccountCony" id="inpNumAccountCony" class="form-control" placeholder="11299" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Telefono Fijo</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select id="cbCodTelFijoCony" name="cbCodTelFijoCony" class="selectpicker" data-container="body" data-width="80px">
																						<option value="volvo">022</option>
																					</select>
																					<input style="display: inline-block;width: 97px;margin-bottom: 10px;" type="text" name="cbTelFijoCony" id="cbTelFijoCony" class="form-control" placeholder="888888" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>E-mail</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="email" name="inpMailCony" id="inpMailCony" class="form-control" placeholder="USUARIOCANALES@GMAIL.COM" autocomplete="off">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12" style="margin: 15px 0 40px 0;">
																		<label class="ui-marmots-label-check marmots-label-left col-sm-8 control-label alias-label" for="checkbox-alias-bancos">Correspondencia electronica
																			<input id="checkbox-alias-bancos" class="toggle-alias" type="checkbox">
																		</label>
																	</div>
																	<div class="col-md-12">
																		<hr class="separador">
																	</div>
																	<div class="col-md-12">
																		<small>* Datos requeridos para continuar con el proceso de enrolamiento</small>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Step 3: Datos econ&#243;micos y contrato -->
												<div id="economicos-contrato-enrolamiento" data-title="Datos econ&#243;micos y contrato" data-multistep="true">
													<div class="row enrolamiento-menu">
														<div class="col-md-12" id="economicosContrato-enrolamiento">
															<div class="container col-md-12">
																<div class="row">
																	<!--Pregunta 1 -->
																	<div class="col-md-12">
																		<div div class="col-md-12">
																			<h4 class="encabezadotexto">Datos economicos</h4>
																			<hr style="margin-top: 0;">
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Situacion Laboral</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbSituacionLaboral" id="cbSituacionLaboral" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="volvo">DEPENDIENTE CONDE</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Profesion</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbProfesion" id="cbProfesion" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="volvo">Abogado</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Cargo</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpCargo" id="inpCargo" class="form-control" placeholder="" autocomplete="off">
																				</div>
																			</div>
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>Nombre Empleador</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNameEmpleador" id="inpNameEmpleador" class="form-control" placeholder="" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Nombre fantasia Empleador</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpNombreFantEmpleador" id="inpNombreFantEmpleador" class="form-control" placeholder="" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Rut Empresa</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpRutEmpresa" id="inpRutEmpresa" class="form-control" placeholder="" autocomplete="off">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div div class="col-md-12">
																			<h4 class="encabezadotexto">Ingresos</h4>
																			<hr style="margin-top: 0;">
																		</div>
																		<div div class="col-md-12 bloqueDatos">
																			<div class="col-md-4 bloqueDatos">
																				<div class="col-md-12 texto">
																					<span>A&ntilde;o</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbanio" id="cbanio" class="selectpicker required" data-container="body" data-width="180px" style="display: none;">
																						<option value="volvo">2015</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="col-md-12 texto">
																					<span>Monto</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<input style="width:180px;" type="text" name="inpMoneda" id="inpMoneda" class="form-control required" autocomplete="off">
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="col-md-12 texto">
																					<span>Moneda</span>
																				</div>
																				<div class="col-md-12 espBottom">
																					<select name="cbMoneda" id="cbMoneda" class="selectpicker required" data-container="body" data-width="180px">
																						<option value="volvo">Pesos</option>
																						<option value="volvo">Dolar</option>
																						<option value="volvo">Euro</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Step 4: Fin -->
												<div id="fin-incorporacion-enrolamiento" data-title="Fin">
													<div class="row enrolamiento-menu">
														<div class="col-md-12" id="incorporacion-enrolamiento">
															<div class="ok-layer" style="width: 70%;margin: 0 auto;padding: 30px 0 30px 0;">
																<div class="row">
																	<div class="col-md-12 text-center" style="padding-bottom: 15px;">
																		<img alt="Ok" title="Ok" src="img/tick.png" style="display: inline-block;width: 40px;position: relative;margin-top: -35px;">
																		<h2 style="display: inline-block;padding-left: 10px;">
																			Has finalizado el proceso de incorporacion</br>
																			<span style="margin-left: -45px;">como cliente BBVA corredora de Bolsa</span>
																		</h2>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12 text-center" style="font-size: 14px;color: #71777F;font-weight: initial;font-family: sans-serif;">
																		<span>a partir de este momento puedes comprar y vender acciones en la bolsa de Comercio</span>
																		<span>de Santiago y consultar el estado de tus transacciones.</span>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12 text-center" style="margin:25px 0;font-size: 14px;color: #71777F;font-weight: initial;font-family: sans-serif;">
																		<span>Para transferir dinero a tu cuenta de inversiones, presione transferir</span>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12 text-center">
																		<a type="button" class="btn btn-center btn-promo" data-dismiss="modal" style="width: 25%;padding: 4px 30px;background: linear-gradient(to bottom,#37A603 0,#2B8102 100%);border: 1px solid #71777F;" href="?src=S11-inversiones.php&amp;tab=operaciones&amp;operation=acciones-realizar-abono">Transferir</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</article>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-12 footer-bottom">
								<div class="button-bar clearfix">
									<button id="prevAction" type="button" class="btn arrow-left prev pull-left" style="display: none;">Anterior</button>
									<button id="nextAction" type="button" class="btn arrow-right next pull-right">Siguiente</button>
									<!--<button type="button" class="btn arrow-right next pull-right wizardNext modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-firma-carta-instruccion.html">Siguiente</button>
									<button type="button" class="btn arrow-right next pull-right wizardNext modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-PEP.html">Siguiente</button>
									<button type="button" class="btn arrow-right next pull-right wizardNext modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-cartaInstruccion.html">Siguiente</button> -->
								</div>
							</div>
						</div>
						<button id="modalFirst" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-alerta-salir-encuesta.html">Siguiente</button>
						<button id="modalSecond" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-aceptacion.html">Siguiente</button>
						<button id="modalThree" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-contrato-condiciones-generales.html">Siguiente</button>
						<button id="modalFour" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-firma-carta-instruccion.html">Siguiente</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.step-container').css('border','none');

		$('#wizzard-corredor-bolsa .button-bar.clearfix').hide();
		if($('#encuesta-formulario-enrolamiento').parent().hasClass('active')){
			$('#prevAction').hide();
		}
	});
	
	$('#cierraModalGenerica').on('click, vclick', function(e) {
		$('#modalFirst').click();
	});
	
	$('#nextAction').on('click, vclick', function(e) {
		e.preventDefault();
		if($('#encuesta-formulario-enrolamiento').parent().hasClass('active')){
			if($('.check-encuesta.on').length == 0){
				$('#modalFirst').click();
				console.log('1');
			}else{
				$('#modalSecond').click();
				console.log('1');
			}
		}else if($('#datos-personales-enrolamiento').parent().hasClass('active')){
			if($('#formContratoFilial').valid() != false){
				wizardSiguiente();
			}else{
				$('#formContratoFilial').valid();
			}
		}else{
			if($('#inpMoneda').val() === ''){
				$('#formContratoFilial').valid();
			}else{
				$('#modalThree').click();
			}
		}
	});
	
	$('#prevAction').on('click, vclick', function() {
		wizardAtras();
		if($('#encuesta-formulario-enrolamiento').parent().hasClass('active')){
			$('#prevAction').hide();
		}
	});

	$("#cbEstadoCivilPer").on("change", function(){
		if(($(this).val() == "RCONYSEPBI")){
			$("#datosConyuge").slideDown();
		}else{
			$("#datosConyuge").slideUp();
		}
		setTimeout(function(){
			resizeWizard('wizzard-corredor-bolsa');
		},300);
	});

	function wizardSiguiente() {
		$('#prevAction').show();
		$(".wizard").wizard('next');
	}
	function wizardAtras() {
		$(".wizard").wizard('prev');
	}

	function resizeWizard($wizard) {
		if ($wizard !== undefined) {
			$(document).trigger('capgemini.wizard.resize', $wizard);
		} else {
			// No fue pasado como parametro el id del wizard para realizar el redimensionado
			console.log('Es necesario el wizard para realizar el redimensionado (revisar el paso de parametros)');
		}
	}
</script>