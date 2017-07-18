<link rel="stylesheet" href="css/desarrollo-soho.css" />
<div class="content">
	<div class="container page-mi-perfil">
		<div class="section-tabs">
			<div class="utility-icons">
				<a href="NeoGetReport?action=GetPDF" target="_blank"><span class="icon-16 gray descargar-carp" title="Descargar pdf">&nbsp;</span></a>
				<a href="NeoGetReport?action=GetPDF&disp=1" target="_blank"><span class="icon-16 gray n01-imprimir" title="Imprimir">&nbsp;</span></a>
			</div>
			<h2 class="title-sh">Mi perfil </h2>
			<hr class="separador"/>

			<div class="container-perfil" id="perfil-datos">

				<div class="nav-perfil">
					<button id="nav-perfil-toggle" type="button" class="show-mobile">Solicitudes y reclamos<span class="ico">&nbsp;</span></button>
					<nav class="inner-nav">
						<ul class="nav nav-list">
							<li><span class="bg"></span><a href="?MID=40010&AID=ACTUALIZACION_DATOS" title="Actualización de datos">Actualización de datos</a> </li>
							<li><span class="bg"></span><a href="?MID=50010&AID=CLAVE_DE_ACCESO" title="Clave de acceso"> Clave de acceso</a></li>
							<li><span class="bg"></span><a href="?MID=90010&AID=AVISOSBBVA-000" title="Notificaciones y alertas"> Notificaciones y alertas</a></li>
							<li><span class="bg"></span><a href="?MID=80010&AID=CONTACTOS" title="Agenda de contactos"> Agenda de contactos</a></li>
							<li><span class="bg"></span><a href="?MID=60010&AID=PERFIL_INVERSOR-1000" title="Perfil inversor"> Perfil inversor</a></li>
							<li class="active"><span class="bg"></span><a href="?src=S13-mi-perfil-ingreso-requerimientos.php" title=" Consultas y reclamos"> Solicitudes y reclamos</a></li>
						</ul>
					</nav>
				</div>
				<div class="perfil consultas-reclamos" id="consultas-reclamos">

					<div class="perfil-datos">
						<h2>Consultas</h2>
						<hr class="separador">

						<!-- CONTENEDOR COMUN OPCIONES: BBVA CHAT | LINEA BBVA | DESDE CELULAR -->
						<div class="bloque">
							<p class="separar-bottom2">Para resolver cualquier duda o problema que tenga puede utilizar los siguientes medios de contacto:</p>
							<div class="row boxes-contactO">

								<!--Click to chat-->
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 caja-consultas Chat">
									<div class="box-consultas">
										<h3>BBVA Chat</h3>
										<div class="inner-box">
											<h2>Resuelve tus dudas en línea con nuestros</h2>
											<h1>Ejecutivos 24/7</h1>
											<a class="btn btn-click" name="sendbtn" onclick="lanzaChickToChat();">
												<img src="img/icon-click.png" alt="icon">Click aquí
											</a>
										</div>
									</div>
								</div>

								<!-- Linea BBVA -->
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 caja-consultas">
									<div class="box-consultas">
										<h3>Línea BBVA</h3>
										<div class="inner-box">
											<span class="icono-linea">&nbsp;</span>
										</div>
										<p style="margin-bottom: 0;line-height: 30px;font-size: 16px;font-weight: bold;color: #006ec1;">600 600 11 00</p>
									</div>
								</div>

								<!-- Desde el celular o el extranjero -->
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 caja-consultas">
									<div class="box-consultas">
										<h3>Desde celular o extranjero</h3>
										<div class="inner-box">
											<span class="icono-celular">&nbsp;</span>
										</div>
										<p style="margin-bottom: 0;line-height: 30px;font-size: 16px;font-weight: bold;color: #006ec1;">2 23460710</p>
									</div>
								</div>

							</div>

						</div>

						<!-- CONTENEDOR SOLICITUDES Y RECLAMOS -->
						<h2>Solicitudes y reclamos</h2>
						<hr class="separador"/>
						<p class="separar-bottom2" style="margin-top:20px;">En BBVA buscamos entregarte la mejor resolución, por favor ingresa tu solicitud aquí.</p>

						<div id="contenedorTabRequerimientosReclamos" class="switch" style="margin-top:25px;">
							<ul>
								<li id="liRequerimientos"><a href="#switch-1" id="clickRequerimientos">Solicitudes</a></li>
								<li id="liReclamos"><a href="#switch-2" id="clickReclamos">Reclamos</a></li>
							</ul>
							<div id="switch-1" style="display:none;">

								<aside id="contenedorSabiasQueSolicitud" class="hidden" style="margin-top:25px;">	<!-- Sabias que -->
									<aside class="sabias-que">
										<header>
											<i class="icono-new icono-ampolleta"></i>
											<h5>Sabías que?</h5>
											<span class="detail-header"></span>
										</header>
										<div class="body">
											<article>
												<p class="solicitud-msg-sabias-que">Puedes resolver tu mismo esta solicitud. Ingresa en el siguiente enlace.</p>
												<br/>
												<p><a href="?src=S02-posicion-global.php" class="btn btn-primary solicitud-url-sabias-que"><span class="solicitud-btn-sabias-que">Acceder a la funcionalidad</span></a></p>
											</article>
										</div>
									</aside>
								</aside>

								<div class="row" style="margin-top:35px;">
									<div class="col-lg-4">Solicitud referente a:</div>
									<div class="col-lg-8">
										<select id="productoServicio" class="selectpicker form-control required" data-width="100%" data-container="body" onchange="if(this.value !=''){ $('#tipoSolicitud').removeAttr('disabled').removeClass('disabled').selectpicker('refresh'); }else{ $('#tipoSolicitud').selectpicker('val','').attr('disabled',true).selectpicker('refresh'); }" data-msg-required="Debe ingresar el producto asociado a la solicitud para continuar.">
											<option value="" label="">Seleccionar</option>
											<option value="001">Cuenta Corriente</option>
											<option value="002">Línea de Crédito</option>
											<option value="003">Tarjeta de Crédito</option>
											<option value="004">Tarjeta de Débito</option>
											<option value="005">PAC</option>
											<option value="006">PAT</option>
											<option value="007">Crédito Consumo</option>
											<option value="008">Crédito Hipotecario</option>
											<option value="009">Seguros</option>
											<option value="010">Servicios de Sucursal</option>
										</select>
									</div>
								</div>
								<div class="row" style="margin-top:10px;">
									<div class="col-lg-4">Tipo de solicitud:</div>
									<div class="col-lg-8">
										<select id="tipoSolicitud" class="selectpicker form-control required disabled" disabled data-width="100%" data-container="body" data-msg-required="Debe ingresar el tipo del solicitud para continuar.">
											<option value="">Seleccionar</option>
											<option value="001">Consulta de cobro/comisión en Cuenta Corriente</option>
											<option value="002">Consulta de cobro/comisión en Línea de Crédito</option>
											<option value="003">Consulta de cobro/comisión en Tarjeta de Crédito</option>
											<option value="004">Bloqueo y reposición de Tarjeta de Crédito</option>
											<option value="005">Consulta de cobro/comisión en Tarjeta de Débito</option>
											<option value="006">Bloqueo y reposición de Tarjeta de Débito</option>
											<option value="007">Ingreso de PAC</option>
											<option value="008">Ingreso de PAT</option>
											<option value="009">Prepago de Crédito de Consumo</option>
											<option value="010">Prepago de Crédito Hipotecario</option>
											<option value="011">Ingreso de Siniestro</option>
											<option value="012">Cambio de Sucursal</option>
											<option value="013">Cambio de Ejecutivo</option>
										</select>
									</div>
								</div>
								<div class="row" style="margin-top:10px;">
									<div class="col-lg-4">Detalle de solicitud:</div>
									<div class="col-lg-8">
										<textarea id="mensajeSolicitud" class="form-control" style="height:130px;!important" onkeypress="return validaAlfanumerico(event);validaEnvioNuevaSolicitud();" data-msg-minlength="La descripción de la Solicitud debe contener al menos {0} caracteres." data-msg-required="Debe ingresar la descripción de la solicitud para continuar." minlength="25" onchange="testLength(this)" onkeyup="testLength(this)" onpaste="testLength(this)" maxlength="500" placeholder="Ayúdanos a entender tu solicitud entregándonos más detalle...(mínimo 25 carcateres)"></textarea>
									</div>
								</div>
								<div class="row pull-right" style="margin-top:10px;margin-right:10px;">
									<div><button id="btnEnviarNuevaSolicitud" class="btn btn-primary" onclick="">Enviar solicitud</button></div>
								</div>

								<div class="separar-top2" style="margin-top:50px!important;">
									<h3>Consultas de solicitudes</h3>
									<hr class="separador"/>
								</div>
								<div id="contenedor-mov-table-solicitudes">
									<article class="capgemini-tables mov-table resultado-busqueda">
										<div id="resultado-requerimientos" class="tables-body table-resultados">
											<table class="sortable">
												<thead>
													<tr>
														<th class="fecha" data-sort="string"><a>FECHA</a></th>
														<th class="solicitud" data-sort="int" style="width: 111px;"><a>Nº DE SOLICITUD</a></th>
														<th class="producto" data-sort="string"><a>PRODUCTO / SERVICIO</a></th>
														<th class="estado" data-sort="string"><a>ESTADO</a></th>
													</tr>
												</thead>
												<tbody id="tbodyRequerimientos">
													<tr>
														<td colspan="4" style="text-align:justify;">
															<p>Aqui podr&aacute;s revisar y hacer seguimiento a todas tus solicitudes hist&oacute;ricas que hayas ingresado en esta secci&oacute;n.</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</article>
								</div>
							</div>

							<div id="switch-2" style="display:none;">
								<div class="separar-top2">
									<h2>Reclamos</h2>
									<hr class="separador">
								</div>
								<div class="bloque">
									<p>Si su consulta no ha podido ser resuelta a través de los anteriores medios de contacto, rellene el siguiente formulario. </p>
								</div>
								<!--
								<div class="bloque bloque-gris ingreso-reclamo">
									<div class="det">
										<h2>Ingreso nuevo reclamo </h2>
										<div class="row">
											<div class="col-md-6 lista-perfil">
												<ul>
													<li><label style="width: 60px; height: 40px;">Nombre:</label><span style="width: 223px; height: 40px;" class="dato-perfil">YESSICA ARREVILLAGA POZADAS</span></li>
													<li><label style="width: 60px; height: 40px;">Email:</label><span style="width: 223px; height: 40px;" class="dato-perfil">USUARIOCANALES@GMAIL.COM</span></li>
												</ul>
											</div>
											<div class="col-md-6 lista-perfil">
												<ul>
													<li><label style="width: 70px; height: 40px;">Teléfono:</label><span style="width: 210px; height: 40px;" class="dato-perfil">009 - 1111111</span></li>
													<li><label style="width: 70px; height: 40px;">Tel. Celular:</label><span style="width: 210px; height: 40px;" class="dato-perfil">009 - 1111111</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								-->
								<form id="form1" name="form1" action="" method="post" class="form-horizontal tooltip-validation transfer-filter">
									<div id="errorReclamo" name="errorReclamo">&nbsp;</div>
									<div class="enviar-reclamo">
										<div class="row">
											<div class="col-md-5">
												<label class="height-form">Reclamo referente a:</label>
											</div>
											<div class="col-md-6">
												<div class="select select-block">
													<select class="selectpicker" name="CodigoTipologia" id="CodigoTipologia" data-container="body" onchange="if(this.value !=''){ $('#CodigoMateria').removeAttr('disabled').removeClass('disabled').selectpicker('refresh'); }else{ $('#CodigoMateria').selectpicker('val','').attr('disabled',true).selectpicker('refresh'); }" data-msg-required="Debe ingresar el tipo del reclamo para continuar.">
														<option value="" label="">Seleccionar</option>
														<option value="00100" label="">Producto</option>
														<option value="00200" label="">Servicio</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<label class="height-form">Producto / Servicio asociado:</label>
											</div>
											<div class="col-md-6">
												<div class="select select-block">
													<select class="selectpicker disabled" name="CodigoMateria" id="CodigoMateria"  onchange="" disabled="true" data-msg-required="Debe ingresar  el producto / servicio asociado al reclamo para continuar.">
														<option value="" label="">Selecciona una opcion</option>
														<option value="00100" label="">Opcion asociada 1</option>
														<option value="00200" label="">Opcion asociada 2</option>
														<option value="00300" label="">Opcion asociada 3</option>
														<option value="00400" label="">Opcion asociada 4</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<label class="height-form">Detalle:</label>
											</div>
											<div class="col-md-7">
												<div class="mensaje">
													<textarea onkeypress="return validaAlfanumerico(event);" class="form-control" id="Descripcion1" name="Descripcion1" class="form-control required minlength" data-msg-minlength="La descripción del Reclamo debe contener al menos {0} caracteres." data-msg-required="Debe ingresar la descripción del reclamo para continuar." minlength="25" maxlength="500"></textarea>
												</div>
											</div>
										</div>
										<a class="btn pull-right btn-enviar" id="enviarNuevoReclamo" name="enviarNuevoReclamo">Enviar</a>
									</div>
								</form>
								<div class="modal fade" id="mod-all" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-modificar-fono" id="">
										<div class="modal-content">
											<div class="modal-box" id="content-modal"></div>
										</div>
									</div>
								</div>
								<div class="separar-top2">
									<h2>Consultas de reclamos</h2>
									<hr class="separador"/>
								</div>
								<div class="separar-inner1">
									<p>En la siguiente tabla, se muestra el estado de los reclamos enviados.</p>
								</div>
								<div id="contenedor-mov-table-reclamos">
									<article class="capgemini-tables mov-table resultado-busqueda">
										<div id="resultado-reclamos" class="tables-body table-resultados">
											<table class="sortable">
												<thead>
													<tr>
														<th class="fecha" data-sort="string"><a>fecha</a></th>
														<th class="reclamo " data-sort="int" style="width: 111px;"><a>Nº DE RECLAMO</a></th>
														<th class="producto " data-sort="string"><a>PRODUCTO / SERVICIO</a></th>
														<th class="estado " data-sort="string"><a>ESTADO</a></th>
													</tr>
												</thead>
												<tbody id="tbodyReclamos"></tbody>
											</table>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	$(document).ready(function(){

		setTimeout(function(){
			$("#clickRequerimientos").click();							// Activa pestaña solicitudes

			// Comentada por peticion de D&D que no se mostrara de forma automatica
			//$("#contenedorSabiasQueSolicitud").removeClass('hidden');
			$('.lista-perfil li').css('width','100%!important;');		// Redimensionado tabla reclamos

			generaBloqueHtmlListaDeSolicitudes(tbodyRequerimientos);	// Agrega bloque solicitudes
			generaBloqueHtmlListaDeReclamos(tbodyReclamos);				// Agrega bloque reclamos

		},150);

		$("#tipoSolicitud").on('change',function(event){
			if($("#tipoSolicitud").val() !=''){
				$('#contenedorSabiasQueSolicitud').removeClass('hidden');

				//Scroll
				$('html, body').animate({
					scrollTop : $("#contenedorTabRequerimientosReclamos").offset().top
				}, 1000);

			}else{
				$('#contenedorSabiasQueSolicitud').addClass('hidden');
			}
		});

	});


	var comprobanteEnvioSolicitud = {						// Datos comprobante nueva Solicitud
		'nrorequerimiento'	: '1234',
		'detalle'			: 'detalle envio solicitud',
		'modalidad'			: 'Modalidad envio solicitud'
	}

	var comprobanteEnvioReclamo = {							// Datos comprobante nuevo Reclamo
		'nrorequerimiento'	: '1234',
		'detalle'			: 'detalle envio reclamo',
		'modalidad'			: 'Modalidad envio reclamo'
	}

	function mostrarModalNuevaSolicitud(promocion){			// Modal comprobante nueva Solicitud
		levantaModalGenerica(
			getBloqueHtmlModalComprobante(
				'Env&iacute;o nueva solicitud',
				{
					extra: [
						{'label' : 'N&ordm; requerimiento:','value'	: promocion.nrorequerimiento},
						{'label' : 'Detalle requerimiento:','value'	: promocion.detalle},
						{'label' : 'Modalidad de respuesta:','value': promocion.modalidad}
					]
				}
			)
		);
	}

	$("#btnEnviarNuevaSolicitud").click(function(){			// Lanzador Modal comprobante nueva Solicitud
		mostrarModalNuevaSolicitud(comprobanteEnvioSolicitud);		//Envio nuevo reclamo
	});

	function mostrarModalNuevoReclamo(promocion){			// Modal comprobante nuevo Reclamo
		levantaModalGenerica(
			getBloqueHtmlModalComprobante(
				'Env&iacute;o nuevo reclamo',
				{
					extra: [
						{'label' : 'N&ordm; reclamo:','value'	: promocion.nrorequerimiento},
						{'label' : 'Detalle reclamo:','value'	: promocion.detalle},
						{'label' : 'Modalidad de respuesta:','value': promocion.modalidad}
					]
				}
			)
		);
	}

	$("#enviarNuevoReclamo").click(function(){				// Lanzador Modal comprobante nueva Solicitud
		mostrarModalNuevoReclamo(comprobanteEnvioReclamo);		//Envio nuevo reclamo
	});

	/*
	 @brief		Genera el bloque Html que representa la lista de reclamos disponibles
	 @example	generaBloqueHtmlListaDeReclamos(tbodyReclamos);
	*/
	function generaBloqueHtmlListaDeReclamos(contenedor){

		var bloqueReclamos = '';

		/* 1er registro */
		bloqueReclamos += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		/* 2er registro */
		bloqueReclamos += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		/* 3er registro */
		bloqueReclamos += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		$(contenedor).html(bloqueReclamos);
		setTimeout(function(){ $(document).trigger('capgemini.ajax.load', $("#contenedor-mov-table-reclamos")); },150);
	}

	/*
	 @brief		Genera el bloque Html que representa la lista de solicitudes disponibles
	 @example	generaBloqueHtmlListaDeSolicitudes(tbodyRequerimientos);
	*/
	function generaBloqueHtmlListaDeSolicitudes(contenedor){

		var bloqueSolicitudes = '';

		/* 1er registro */
		bloqueSolicitudes += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		/* 2er registro */
		bloqueSolicitudes += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		/* 3er registro */
		bloqueSolicitudes += '<tr data-detail="includes/components/movements/perfil/include/ver-detalle-requerimiento.html"><td><p><span class="pull-left link">Ingreso</span><span class="pull-right">07-06-2015</span></p><p><span class="pull-left link">Estimada resolución</span><span class="pull-right">09-06-2015</span></p></td><td>304441</td><td class="hidden-xs"><strong>RETRASO RCPCION</strong></td><td class="hidden-xs">EN GESTION</td></tr>';

		$(contenedor).html(bloqueSolicitudes);
		setTimeout(function(){ $(document).trigger('capgemini.ajax.load', $("#contenedor-mov-table-solicitudes")); },150);
	}

	// Funciones incorporadas para no perder funcionalidad sitio
	function getBloqueHtmlModalContendor(titulo, cuerpo) {
		var html = '<div class="modal-dialog modal-comprobante">';
		html += '<div class="modal-content">';
		html += '<div class="modal-box">';
		html += '<div class="modal-header">';
		html += '<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>';
		html += '<h2 class="modal-title">' + titulo + '</h2>';
		html += '</div>';
		html += '<div class="modal-body no-bottom">';
		html += cuerpo;
		html += '<hr />';
		html += '<div class="buttons">';
		html += '<button class="btn cancel-delete-op" type="button" data-dismiss="modal" aria-hidden="true">Cerrar</button>   ';
		html += '</div>';
		html += '</div>';
		html += '</div>';
		html += '</div>';
		html += '</div>';
		return html;
	}

	function levantaModalGenerica(data) {
		/* Inicio Modificacion por esteban ellicker para cargar solo el cuerpo de las ventanas de error */
		data = fixHtmlModal(data);

		/* Fin    Modificacion por esteban ellicker para cargar solo el cuerpo de las ventanas de error */
		// Create modal layer and append received content
		var $modal = $('<div class="modal" tabindex="-1" role="dialog" aria-hidden="true"></div>');
		$modal.append(data);

		// Append to body
		$(document.body).append($modal);

		if (Modernizr.touch) {
			$modal.on('show.bs.modal', function () {
				// Position modal absolute and bump it down to the scrollPosition
				$(this).css({
					position : 'absolute',
					marginTop : $(window).scrollTop() + 'px',
					bottom : 'auto'
				});
				// Position backdrop absolute and make it span the entire page
				//
				// Also dirty, but we need to tap into the backdrop after Boostrap
				// positions it but before transitions finish.
				//
				setTimeout(function () {
					$('.modal-backdrop').css({
						position : 'absolute',
						top : 0,
						left : 0,
						width : '100%',
						height : Math.max(
							document.body.scrollHeight, document.documentElement.scrollHeight,
							document.body.offsetHeight, document.documentElement.offsetHeight,
							document.body.clientHeight, document.documentElement.clientHeight) + 'px'
					});
				}, 0);
			});
		}

		$modal.on('shown.bs.modal', function (event) {
			// trigger ajax load (on shown)
			$(document).trigger('capgemini.ajax.load', $modal);

			/* Codigo comentado para corregir incidencia con datepicker luego de levantar modal
			// Prevent focus outside modal
			$('*').on('focus', function(event){
			if($(event.target).closest('.modal') == 0){
			event.preventDefault();
			return false;
			}
			});
			 */
		}).on('hidden.bs.modal', function (event) {
			// Remove it on close (on hidden)
			$modal.remove();

			/* Codigo comentado para corregir incidencia con datepicker luego de levantar modal
			// Remove focus fix handler
			$('*').off('focus');
			 */
		});

		// Open modal
		$modal.modal({
			backdrop : 'static'
		});

		return $modal;
	}

	function getBloqueHtmlModalComprobante(titulo, data) {
		var cuerpo = '<div class="comprobante no-border">';
		cuerpo += '<div class="ok-layer">';
		cuerpo += '<div class="image">';
		cuerpo += '<img alt="Ok" title="Ok" src="img/tick.png">';
		cuerpo += '</div>';
		cuerpo += '<div class="ok-content">';
		cuerpo += '<div class="title">La Operaci&oacute;n se ha realizado correctamente</div>';
		if (data.nroTRX) {
			cuerpo += '<div class="description">N&ordm; de transacci&oacute;n ' + data.nroTRX + '</div>';
		}
		cuerpo += '</div>';
		cuerpo += '</div>';
		cuerpo += '<div class="extra-data">';
		for (var i = 0; i < data.extra.length; i++) {
			cuerpo += '<div class="left">' + data.extra[i].label + ':</div>';
			cuerpo += '<div class="right">' + data.extra[i].value + '</div>';
		}
		cuerpo += '</div>';
		cuerpo += '</div>';
		return getBloqueHtmlModalContendor(titulo, cuerpo);
	}

	function fixHtmlModal(html) {
		var lt = '<', gt = '>';
		var pos1 = html.indexOf('/*JSON*');
		var pos2 = html.indexOf('*JSON*/');
		var pos3 = html.indexOf(lt+'bloque'+gt);
		var pos4 = html.indexOf(lt+'/bloque'+gt);
		var pos5 = html.indexOf(lt+'modal'+gt);
		var pos6 = html.indexOf(lt+'/modal'+gt);
		if (pos1 != -1 && pos2 != -1 && pos3 != -1 && pos4 != -1 && pos5 != -1 && pos6 != -1) {
			return html.substring(pos5 + 8, pos6);
		}
		return html;
	}

	function validaAlfanumerico(e){
		var key				= e.keyCode || e.which;
		var tecla			= String.fromCharCode(key).toLowerCase();
		var alfa			= " \u00e1\u00e9\u00ed\u00f3\u00fa\u00fcabcdefghijklmn\u00f1opqrstuvwxyz0123456789.,;:\u00bf?\u00a1!$%#-+*\r\n";
		var especiales		= [8,13,37,39,46];
		var tecla_especial	= false;

		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial	= true;
				break;
			}
		}

		if(alfa.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}

	}

</script>