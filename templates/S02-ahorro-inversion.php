<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<!--a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a-->
			<!--a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a-->
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Ahorro e inversión</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active tab1"><a href="#mis-productos">Mis productos</a></li>
			<li class="tab2"><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		<hr class="separador">
		
		<div class="tab-content">
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column" id="ahorro-inversion">
					<?php include 'includes/components/tables/depositos.html'; ?>
					<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
					<?php include 'includes/components/tables/acciones.html'; ?>
				</div>
				<div class="banner-column" id="ahorro-lateral">
					<?php include 'includes/components/banners/corredor-bolsa.html'; ?>
					<?php include 'includes/components/banners/perfil-inversor.html'; ?>
					<?php include 'includes/components/banners/consolidado.html'; ?>
					<?php include 'includes/components/banners/certificados-tributarios-y-ofertas2.html'; ?>
					<?php include 'includes/components/banners/fondos-mutuos.html'; ?>
					<?php include 'includes/components/banners/deposito-a-plazo.html'; ?>
					<?php include 'includes/components/banners/acciones.html'; ?>
					<?php include 'includes/components/banners/indicadores-economicos.html'; ?>
				</div>
			</div>
			<div class="tab-pane" id="catalogo-productos">

	<!-- Informacion general -->
	<div id="informacion-catalogo" style="display: block;">
		<div class="gray-background">
			<div class="container">
				<div id="bloqueCargaAsesor" class="aumento-cupo padding15 mHeight superior opcion1 masterWidth" style="z-index: 9999; display: block;">
					<img src="img/asesor.png" alt="">
					<h3><strong>¿No sabes en que ahorrar o invertir?</strong></h3>
					<p><strong>Con 3 simples preguntas, compara los Fondos Mutuos y Despósitos a Plazos que recomendamos para ti.</strong></p>
					<a href="?src=S08-rentabilizar.php" class="toRight btn abrirDos" >Ingresa Aquí<span class="icon-24 white f07-desplegar"></span></a>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row destacado">
							<div class="col-lg-5 col-sm-5">
								<div class="bbva-page-header">
									<h2 class="titlesubhome">Alcanzar tus objetivos es así de simple</h2>
									<p class="subhome">Conozca las herramientas de Ahorro e Inversión que BBVA tiene para ti.</p>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="bbva-page-header">
									<img src="img/catalogo-ahorro-inversion.png" alt="Ahorro e Inversión" title="Ahorro e Inversión">
								</div>
							</div>
						</div>
						
						&nbsp;
						
						<div class="row">
							<div class="col-lg-4 col-sm-4">
								<div class="bbva-producto">
									<div class="contenedor-enlace">
										<h3><span class="icon-24" style="background-position: 0px -1480px;">&nbsp;</span>&nbsp;&nbsp;Despósitos a Plazo</h3>
										<p>Ahorra en nuestros depósitos a plazos desde 7 días en adelante. Aprovecha nuestras Tasas Preferenciales al tomar tus depósitos por internet.</p>
										<a href="#" onclick="javascript: simulacionDap('simulacion-dap');">Simula Aquí</a>				
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4">
								<div class="bbva-producto">
									<div class="contenedor-enlace">
										<h3><span class="icon-24" style="background-position: 0px -1409px;">&nbsp;</span>&nbsp;&nbsp;Fondos Mutuos</h3>
										<p>Ahorra  e invierte en  nuestros más de 20 Fondos Mutuos que tenemos para tí. Elige el fondo que más se acomode a tus necesidades para rentabilizar tu dinero.</p>
										<a href="#" onclick="javascript: cargaCatalogoDeInversiones();">Ver Catálogo Fondos Mutuos</a>				
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4">
								<div class="bbva-producto">
									<div class="contenedor-enlace">
										<h3><span class="icon-24" style="background-position: -75px -0px;">&nbsp;</span>&nbsp;&nbsp;Corredores de Bolsa</h3>
										<p>Invierte en acciones chilenas. Compra y vende acciones en-linea a través de nuestro Portal de BBVA Corredores de Bolsa.</p>
										<!-- <a onclick="javascript:window.open('Process?AID=ACCIONES_IR_A_CORREDORA','_blank');">Ingresa al Portal Aqu&iacute;</a><br/> -->
										<a data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-fatca.html" class=" modal-trigger cursor">Ingresa al Portal Aquí</a><br>
										<a data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-fatca.html" class=" modal-trigger cursor">Abonar a Cuenta Inversiones</a>				
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Asesor de inversiones -->
	<div class="page-rentabilizar hide">
		<div id="asesor-de-inversiones" style="" class="creditos-pago-cuentas">
			<div id="dAsesorDeInversiones">
	<h3>Quiero rentabilizar mis ahorros</h3>
	<a class="close-icon" onclick="reinicializaContenidoTabCatalogoDeProductos();"></a>
	<div class="main-wizard">
		<form novalidate="novalidate" id="form-asesor" class="form-horizontal tooltip-validation transfer-filter" onsubmit="return false;">
			<article class="wizard" id="wizardAsesorDeInversiones" style="width:900px;"><div class="wizard-progress-bar"><div class="progress-line" style="width:810px"><div class="progress-display" style="width: 0px;"></div><div class="point-background active" style="left:-1px;"><div class="text" style="left: 0px;">1. Importe</div><div class="point"></div></div><div class="point-background" style="left:403px;"><div class="text" style="left: 9px;">2. Horizonte de inversion</div><div class="point"></div></div><div class="point-background" style="left:807px;"><div class="text" style="left: 18px;">3. Riesgo</div><div class="point"></div></div></div></div><p class="block-error iconed-24 hide" id="checkAlert"><span class="icon-24 m01-alerta red"></span>Debes aceptar los términos y condiciones para continuar el proceso<br></p>

				<!-- STEP: IMPORTE DE INVERSION -->
				

				<!-- STEP: HORIZONTE DE INVERSION -->
				

				<!-- STEP: PERFIL DE RIESGO -->
				
			<div class="step-container" style="height: 183px; overflow: visible; width: 900px;"><div id="wizard-slide-viewer" class="slide-viewer" style="left: 0px;"><div class="step active" style="height: 0px; width: 900px;"><div data-title="Importe" id="divIngresoImporte" style="display: block;">
					<div class="step-content-container">
						<div class="block-error iconed-24 hidden">
							<i class="icon-24 red m01-alerta"></i> <span id="descripcionError">Su solicitud no ha podido ser efectuada. Por favor intente más tarde.</span>
						</div>
						<div class="paso1">
							<div class="monto">
								<h3>¿Cuánto dinero quieres invertir?</h3>
								<input type="text" id="monto" class="amount form-control required monto dollar miles icon-monto icon-monto-left" placeholder="Monto" greater="0" data-msg-greater="El valor debe ser mayor o igual que $ 1" autocomplete="off">
							</div>
							<div class="doble-linea"><hr></div>
						</div>
					</div>
				</div></div><div class="step" style="height: 0px; width: 900px;"><div data-title="Horizonte de inversion" id="divIngresoPlazo" style="display: none;">
					<div class="step-content-container">
						<div class="block-error iconed-24 hidden">
							<i class="icon-24 red m01-alerta"></i> <span id="descripcionError">Su solicitud no ha podido ser efectuada. Por favor intente más tarde.</span>
						</div>
						<div class="paso2">
							<div class="cont-botones">
								<h3>¿Por cuánto tiempo deseas mantener tu inversión?</h3>
								<div class="botones">
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPlazo('006');"><span>Menos de 6 meses</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPlazo('012');"><span>6 meses a 1 año</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPlazo('024');"><span>1 año y más</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
								</div>
								<div class="doble-linea"><hr></div>
							</div>
						</div>
					</div>
				</div></div><div class="step" style="height: 0px; width: 900px;"><div data-title="Riesgo" id="divIngresoRiesgo" style="display: none;">
					<div class="step-content-container">
						<div class="block-error iconed-24 hidden">
							<i class="icon-24 red m01-alerta"></i> <span id="descripcionError">Su solicitud no ha podido ser efectuada. Por favor intente más tarde.</span>
						</div>
						<div class="paso2">
							<div class="cont-botones">
								<h3>¿Qué nivel de riesgo deseas asumir en tu inversión?</h3>
								<div class="botones">
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPerfil('001');"><span>Bajo</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPerfil('002');"><span>Medio</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
									<div class="botones-inner js-btns" style="cursor:pointer;">
										<a onclick="actualizaPerfil('003');"><span>Alto</span></a>
										<div class="tooltips-action hide-mobile">
											<div class="inner-tooltips">
												<p>En esta aplicación podrá escoger el monto que desee ahorrar, el horizonte de inversión y su tolerancia al riesgo, obteniendo una sugerencia de inversión de acuerdo a sus necesidades.</p>
											</div>
											<div class="arrow-tooltips"></div>
										</div>
									</div>
								</div>
								<div class="iconed-32 block-info">
									<i class="icon-32 blue m03-aviso"></i>
									<p class="pull-left text-left">
									<strong>Bajo</strong>, tengo como objetivo la preservación del capital.<br>
									<strong>Medio</strong>, estoy dispuesto a asumir determinados niveles de pérdidas, a cambio de la posibilidad de obtener cierta rentabilidad.<br>
									<strong>Alto</strong>, estoy dispuesto a asumir un mayor nivel de pérdidas a cambio de la posiblidad para obtener una mayor rentabilidad.
									</p>
								</div>
								<div class="doble-linea"><hr></div>
							</div>
						</div>
					</div>
				</div></div></div></div><div class="button-bar clearfix"><button type="button" class="btn arrow-left prev pull-left hidden" id="wizardBack">Anterior</button><button class="btn arrow-right next pull-right wizardNext" name="wizardNext" id="wizardNext">Siguiente</button></div></article>
		</form>
	</div>
</div>

		</div>
	</div>
	
	<!-- Catalogo general de inversiones -->
	<div id="catalogo-de-inversiones" style="display: none;">
		<div class="col-md-12" style="height:20px!important;">
	<a class="toRight btn marginTop marginBottom toCenter existeRecomendacionDisponible" style="display:none;cursor:pointer;z-index:999;" type="button" onclick="cargaInversionesDestacadas();"><span class="icon-16 white d01-asesor"></span> Ver tu recomendación</a>
</div>

<div class="tab-pane active filtro2" id="catalogo-productos" style="margin:30px 0 0 0;">

	<ul class="nav nav-tabs personalizada">
	  <li>					<!-- TAB Buscar Fondos-->
		<a href="#buscar" data-toggle="tab">
			<h3 style="margin-top:15px;">Buscar Fondos <div class="lupa"></div></h3>
			<p>Introducir el nombre o término<br> que se desea buscar</p>
		</a>
	  </li>
	  <li class="active">	<!-- TAB Filtrar Fondos-->
		<a href="#filtrar" data-toggle="tab">
			<h3 style="margin-top:15px;">Filtrar Fondos <div class="manejador"></div></h3>
			<p>Aplicar filtros al listado<br> de resultados</p>
		</a>
	  </li>
	</ul>


	<!-- Tab panes -->
	<div class="tab-content">
		<div id="filtrar" class="tab-pane active">				<!-- FILTRAR CATALOGO -->
			<div class="col-md-6">	<!-- Filtro Catalogo Tipo -->
				<div class="row filteroptions bkgWhite">
					<p class="mobileWidth80">Tipo de fondo</p>
						<select id="filtroCatalogoTipo" onchange="activaFiltroCatalogo();" class="selectpicker" data-container="body" data-width="600px" data-size="8" data-live-search="true" style="display: none;">
							<option selected="">Seleccione</option>
						</select><div class="btn-group bootstrap-select" style="width: 600px;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="filtroCatalogoTipo" title="Seleccione"><span class="filter-option pull-left">Seleccione</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Seleccione</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
				</div>
			</div>
			<div class="col-md-3">	<!-- Filtro Catalogo Nombre -->
				<div class="row filteroptions bkgWhite">
					<p class="mobileWidth80">Nombre</p>
						<select id="filtroCatalogoNombre" onchange="activaFiltroCatalogo();" class="selectpicker" data-container="body" data-width="180px" data-size="8" data-live-search="true" style="display: none;">
							<option selected="">Seleccione</option>
						</select><div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="filtroCatalogoNombre" title="Seleccione"><span class="filter-option pull-left">Seleccione</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Seleccione</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
				</div>
			</div>
			<div class="col-md-3">	<!-- Filtro Catalogo Serie -->
				<div class="row filteroptions bkgWhiteNob">
					<p class="mobileWidth80">Serie</p>
						<select id="filtroCatalogoSerie" onchange="activaFiltroCatalogo();" class="selectpicker" data-container="body" data-width="180px" data-size="8" data-live-search="true" style="display: none;">
							<option selected="">Seleccione</option>
						</select><div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="filtroCatalogoSerie" title="Seleccione"><span class="filter-option pull-left">Seleccione</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><div class="bootstrap-select-searchbox"><input type="text" class="input-block-level form-control"></div><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Seleccione</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
				</div>
			</div>

			<div class="resultados-content">
				<!-- <div style="margin-top:25px;"></div> -->
				<!-- <div class="linea"></div> -->
				<div class="itemBlock">
					<a class="toRight btn mRight toCenterB boton-limpiar disabled" type="button" onclick="limpiaFiltrosCatalogoFFMM();">Limpiar</a>
					<a class="toRight btn mRight toCenterC boton-filtrar disabled" type="button" onclick="filtraCatalogoFFMM();">Filtrar</a>
					<div class="col-md-12" style="display:block" id="loaderTablaResultados">
						<center><br><img src="img/loader.gif"><br><br></center>
					</div>
				</div>				
			</div>

		</div>
		<div id="buscar" class="tab-pane">						<!-- BUSCAR EN CATALOGO -->
			<div class="col-md-12 height50">
				<div class="row filteroptions bkgWhiteNob">
				<input type="text" class="form-control search" id="movimiento" name="movimiento" tabindex="0" onkeypress="busquedaValida();" autocomplete="off">
				</div>
			</div>
			<div class="linea"></div>
			<div class="itemBlock">
				<a class="toRight btn mRight boton-limpiar" type="button" onclick="limpiaFiltrosCatalogoFFMM();">Limpiar</a>
				<a class="toRight btn mRight boton-filtrar disabled" type="button" onclick="filtraCatalogoFFMM();">Filtrar</a>
			</div>

		</div>
	</div>

	<div id="condicionFiltroTenencia" class="itemBlock" style="display:inline-block;">
		<div class="col-md-12 hidden" id="condicionTenenciaRequerida">
			<p class="mBottom iconed-32 block-info marginTop">
				<i class="icon-32 blue m03-aviso"></i>
				<span id="descripcionMensaje">No dispone actualmente de las condiciones necesarias para contratar este producto.</span>
			</p>
		</div>
	</div>
	
	<article class="capgemini-tables tabla-resultados-filtro">	<!-- Resultado filtro catalogo -->
		<div class="tables-body no-hover">
			<table id="tablaResultadosFiltroCatalogoFFMM">
				<tbody></tbody>
			</table>
		</div>
	</article>

	<div class="tabs-color hidden" style="margin:60px 0 0 0;">	<!-- Comparacion de productos -->

		<ul id="myTab" class="nav nav-tabs absolute z1000">
		  <li class="active"><a href="#tabs2" data-toggle="tab" style="width:100px!important;">Fondos</a></li>
		</ul>

		<div id="myTabContent" class="tab-content" style="top:0!important;">

			<div class="tab-pane fade active in" id="tabs2">
				<div class="cont-table dr">		<!-- Definicion de tabla -->
					<div class="table">
						<div class="thead">		<!-- Cabecera tabla -->
							<div class="tr">
								<div class="th hide-mobile"></div>
								<div class="th" style="border-right:1px solid #ddd!important;">
									<span id="nombreFondo0"></span><br><span id="serieFondo0"></span>
								</div>
								<div class="th" style="border-right:1px solid #ddd!important;">
									<span id="nombreFondo1"></span><br><span id="serieFondo1"></span>
								</div>
								<div class="th" style="border-right:1px solid #ddd!important;">
									<span id="nombreFondo2"></span><br><span id="serieFondo2"></span>
								</div>
							</div>
						</div>
						<div class="tbody">

							<!-- Clasificacion -->
							<div class="tr">
								<div class="th hide-mobile">CLASIFICACIÓN</div>
								<div class="td tipoFondo0"></div>
								<div class="td tipoFondo1"></div>
								<div class="td tipoFondo2 hide-mobile"></div>
							</div>

							<!-- Remuneracion -->
							<div class="tr hide-mobile">
								<div class="th">REMUNERACIÓN</div>
								<div class="td remuneracionFondo0"></div>
								<div class="td remuneracionFondo1"></div>
								<div class="td remuneracionFondo2"></div>
							</div>

							<!-- Comision -->
							<div class="tr hide-mobile">
								<div class="th">COMISIÓN</div>
								<div class="td comisionFondo0"></div>
								<div class="td comisionFondo1"></div>
								<div class="td comisionFondo2"></div>
							</div>

							<!-- Caracteristicas -->
							<div class="tr hide-mobile">
								<div class="th">CARACTERÍSTICAS</div>
								<div class="td carcteristicasFondo0"></div>
								<div class="td carcteristicasFondo1"></div>
								<div class="td carcteristicasFondo2"></div>
							</div>

							<!-- Enlaces para Solicitar inversion -->
							<div class="tr">
								<div class="td hide-mobile"></div>
								<div class="td"><a class="btn solicitarInversion0" href="javascript:void();" type="button">Contratar</a></div>
								<div class="td"><a class="btn solicitarInversion1" href="javascript:void();" type="button">Contratar</a></div>
								<div class="td"><a class="btn solicitarInversion2" href="javascript:void();" type="button">Contratar</a></div>
							</div>
						</div>
					</div>
				</div><!--Fin cont-table-->

			  </div><!--Fin Tabs 02-->

		</div>

	</div><!--Fin tabs-->

	<div class="col-md-12 height50 tabla-resultados-filtro">	<!-- Btn realizar comparacion de productos -->
		<button id="comprarProductosSeleccionados" onclick="compararProductosSeleccionados();" class="btn accion hide-mobile disabled" type="button">Comparar seleccionados</button>
	</div>

</div>


	</div>

	<!-- Firmar contrato -->
	<div id="div-firmar-contrato-ffmm" style="display: none;">
	</div>
	
	<!-- Inversiones destacadas -->
	<div id="inversiones-destacadas" style="display: none;">
		<div id="contenedorInversionesDestacadas" class="page-inversion">
	<!-- Modificar criterios de filtro -->
	<h2>Te proponemos estas alternativas:</h2>
	<div class="seleccion-inversion radius">
		<div class="datos-inversion">
			<div class="campos">
				<label>Monto</label>
				<input id="monto-inversion" type="text" onkeyup="activaBtnActualizar();" class="activa-actualizar amount form-control required icon-monto icon-monto-left text-right pull-left" value="" autocomplete="off">
			</div>
			<div class="campos dos">
				<label>Horizonte de inversión</label>
				<div class="select">
					<select id="filtroActualizaPlazo" class="selectpicker pull-left" style="display: none;" onchange="activaBtnActualizar();">
						<option value="" class="selected">Seleccione</option>
						<option value="006">Corto plazo</option>
						<option value="012">Mediano plazo</option>
						<option value="024">Largo plazo</option>
					</select><div class="btn-group bootstrap-select pull-left"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="filtroActualizaPlazo" title="Seleccione"><span class="filter-option pull-left">Seleccione</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="selected" style=""><span class="text">Seleccione</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">Corto plazo</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">Mediano plazo</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="3"><a tabindex="0" class="" style=""><span class="text">Largo plazo</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
				</div>
			</div>
			<div class="campos">
				<label>Riesgo</label>
				<div class="select">
					<select id="filtroActualizaPerfil" class="selectpicker pull-left" style="display: none;" onchange="activaBtnActualizar();">
						<option value="" class="selected">Seleccione</option>
						<option value="001">Bajo</option>
						<option value="002">Medio</option>
						<option value="003">Alto</option>
					</select><div class="btn-group bootstrap-select pull-left"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="filtroActualizaPerfil" title="Seleccione"><span class="filter-option pull-left">Seleccione</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li rel="0" class="selected"><a tabindex="0" class="selected" style=""><span class="text">Seleccione</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="1"><a tabindex="0" class="" style=""><span class="text">Bajo</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="2"><a tabindex="0" class="" style=""><span class="text">Medio</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li><li rel="3"><a tabindex="0" class="" style=""><span class="text">Alto</span><i class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li></ul></div></div>
				</div>
			</div>
		</div>
		<button type="button" class="btn btn-center btn-large boton-actualizar" onclick="actualizaListadoAsesorDeInversiones();">Actualizar</button>
	</div>

	<!-- Inversiones destacadas -->
	<h2 class="margen2-bottom">Inversiones destacadas</h2>
	<div class="col-md-12 hidden" id="condicionTenenciaRequerida">
		<p class="mBottom iconed-32 block-info marginTop">
			<i class="icon-32 blue m03-aviso"></i>
			<span id="descripcionMensaje">No dispone actualmente de las condiciones necesarias para contratar este producto.</span>
		</p>
	</div>
	<div class="tabs-color" id="inversionesDestacadas">

		<!-- Tabs Depositos y Fondos Mutuos -->
		<ul id="myTab" class="nav nav-tabs">
		  <li><a href="#tabDepositos" data-toggle="tab">Depósitos</a></li>					<!-- Simulacion depositos a plazo -->
		  <li class="active"><a href="#tabFondosMutuos" data-toggle="tab">Fondos</a></li>		<!-- Fondos mutuos -->
		</ul>

		<div id="myTabContent" class="tab-content">

			<div class="tab-pane fade" id="tabDepositos">				<!-- TAB Depositos 		-->
			
				<div id="bloqueRecomendacionDepositos" class="cont-table margen2-top">
						
					<div id="bloqueDepositosSinRecomendaciones" class="table">
						<div class="tbody">
							<!-- Error sin recomendaciones  -->
							<div class="tr">
								<div class="descripcion"><div class="block-error iconed-24" style="margin-left:25px;margin-right:25px;margin-bottom:25px;"><i class="icon-24 red m01-alerta"></i> <span>Sin recomendaciones.</span></div></div>
							</div>
						</div>
					</div>
						
					<!-- Bloque tabla recomendaciones asesor de inversiones -->
					<div id="tblDepositosDestacados" class="table">
					
						<div class="thead">
							<div class="tr">
								<div class="th hide-mobile"></div>
								<div class="th">
									<span>DEPOSITO</span>
									<a class="enlaceDeposito0 btn-ficha"></a>
								</div>
								<div class="th">
									<span>DEPOSITO</span>
									<a class="enlaceDeposito1 btn-ficha"></a>
								</div>
								<div class="th hide-mobile tituloDeposito2">
									<span>DEPOSITO</span>
									<a class="enlaceDeposito2 btn-ficha"></a>
								</div>
							</div>
						</div>
						
						<div class="tbody" id="tblDatosDepositos">
							<!-- Tasa anual -->
							<div class="tr">
								<div class="th hide-mobile">TASA ANUAL</div>
								<div class="td tasaAnualDeposito0"></div>
								<div class="td tasaAnualDeposito1"></div>
								<div class="td tasaAnualDeposito2 hide-mobile"></div>
							</div>

							<!-- Tasa Periodo -->
							<div class="tr hide-mobile">
								<div class="th">TASA PERIODO</div>
								<div class="td tasaPeriodoDeposito0"></div>
								<div class="td tasaPeriodoDeposito1"></div>
								<div class="td tasaPeriodoDeposito2"></div>
							</div>

							<!-- Ganancia (Intereses a recibir) -->
							<div class="tr hide-mobile">
								<div class="th">GANANCIA</div>
								<div class="td gananciaDeposito0"></div>
								<div class="td gananciaDeposito1"></div>
								<div class="td gananciaDeposito2"></div>
							</div>

							<!-- Saldo al Vencimiento -->
							<div class="tr hide-mobile">
								<div class="th">SALDO AL VENCIMIENTO</div>
								<div class="td saldoFinalDeposito0"></div>
								<div class="td saldoFinalDeposito1"></div>
								<div class="td saldoFinalDeposito2"></div>
							</div>

							<!-- Contratar -->
							<div class="tr">
								<div class="th"></div>
								<div class="td"><a class="btn solicitarDepositos0">Solicitar</a></div>
								<div class="td"><a class="btn solicitarDepositos1">Solicitar</a></div>
								<div class="td"><a class="btn solicitarDepositos2">Solicitar</a></div>
							</div>
							
						</div>
						
					</div>

				</div>

			</div>

			<div class="tab-pane fade active in" id="tabFondosMutuos">	<!-- TAB Fondos Mutuos	-->

				<a href="#" class="btn pull-right btn-catalogo" onclick="verCatalogo()"><span class="icon-24 white b05-fondodeinversion"></span> Ver catálogo completo</a>

				<div class="cont-table margen2-top">

					<!-- Bloque error sin recomendaciones -->
					<div id="bloqueErrorSinRecomendaciones" class="table" style="display:none;">
						<div class="tbody">
							<!-- Error sin recomendaciones  -->
							<div class="tr">
								<div class="descripcion"></div>
							</div>
						</div>
					</div>

					<!-- Loader -->
					<div id="tblInversionesLoader" style="display:none;">
						<div class="cover">&nbsp;</div>
						<div class="spinner">
							<img src="./img/loader.gif" alt="loader">
						</div>
					</div>

					<!-- Bloque tabla recomendaciones asesor de inversiones -->
					<div id="tblInversionesDestacadas" class="table">
						<div class="thead">
							<div class="tr">
								<div class="th hide-mobile"></div>
								<div class="th">
									<span>UN FONDO</span>
									<a class="enlaceFondo0 btn-ficha" target="_blank">Ver folleto</a>
								</div>
								<div class="th">
									<span>UN FONDO</span>
									<a class="enlaceFondo1 btn-ficha" target="_blank">Ver folleto</a>
								</div>
								<div class="th hide-mobile">
									<span>UN FONDO</span>
									<a class="enlaceFondo2 btn-ficha" target="_blank">Ver folleto</a>
								</div>
							</div>
						</div>
						<div class="tbody" id="tblDatos">
							<!-- Clasificacion -->
							<div class="tr">
								<div class="th hide-mobile">CLASIFICACIÓN</div>
								<div class="td tipoFondo0"></div>
								<div class="td tipoFondo1"></div>
								<div class="td tipoFondo2 hide-mobile"></div>
							</div>

							<!-- Remuneracion -->
							<div class="tr hide-mobile">
								<div class="th">REMUNERACIÓN</div>
								<div class="td remuneracionFondo0"></div>
								<div class="td remuneracionFondo1"></div>
								<div class="td remuneracionFondo2"></div>
							</div>

							<!-- Comision -->
							<div class="tr hide-mobile">
								<div class="th">COMISIÓN</div>
								<div class="td comisionFondo0"></div>
								<div class="td comisionFondo1"></div>
								<div class="td comisionFondo2"></div>
							</div>

							<!-- Caracteristicas -->
							<div class="tr hide-mobile">
								<div class="th">CARACTERÍSTICAS</div>
								<div class="td carcteristicasFondo0"></div>
								<div class="td carcteristicasFondo1"></div>
								<div class="td carcteristicasFondo2"></div>
							</div>

							<!-- Contratar -->
							<div class="tr">
								<div class="th"></div>
								<div class="td"><a class="btn solicitarInversion0">Contratar</a></div>
								<div class="td"><a class="btn solicitarInversion1">Contratar</a></div>
								<div class="td"><a class="btn solicitarInversion2">Contratar</a></div>
							</div>
						</div>
					</div>

				</div>

				<p id="informacionAsesorDisponible" class="block-warning iconed-24">
					<span class="icon-24  m03-aviso"></span>
					El perfil de inversión como le tenemos registrado es de <strong><span id="asesorInfoPerfil">Conservador</span></strong> y en esta búsqueda ha elegido un riesgo <strong><span id="asesorBusquedaPerfil">Moderado</span></strong><br>
					<span id="asesorBloqueInformacion" class="hidden">La lista de productos recomendados tienen un <span id="comparaRiesgo"><strong>Mayor riesgo</strong> del que según su perfil debería asumir. <br></span>
					Si desea cambiar su perfil de inversionista, puede hacerlo desde el <strong>área personal.</strong>
				</span></p>

			</div>

		</div>
		
	</div>
	
</div>


	</div>
	
	<!-- Solicitar inversion -->
	<div id="solicitar-inversion" style="display: none;">
	</div>
	
	<!-- Valores cuota FFMM -->
	<div id="valores-cuota-ffmm" style="display: none;">
		<div class="tab-pane active filtro2" id="contenedor-valores-cuota-ffmm" style="margin:30px 0 0 0;">

	<ul class="nav nav-tabs personalizada">
	  <li>
		<a href="#buscar" data-toggle="tab">
			<h3 style="margin-top:15px;">Buscar Fondos <div class="lupa"></div></h3>
			<p>Introducir el nombre o término<br> que se desea buscar</p>
		</a>
	  </li>
	</ul>

	<div class="tab-content">
		<div id="buscar" class="tab-pane active">
			<div class="col-md-9 height50">
				<div class="row filteroptions bkgWhiteNob">
					<input type="text" class="form-control search disabled" id="terminosBusquedaValorCuota" name="terminosBusquedaValorCuota" tabindex="1" onkeypress="actualizaOpcionesDeFiltrado();" autocomplete="off" disabled="">
				</div>
			</div>
			<div class="col-md-3 height50" style="margin-top:4px;">
				<div class="row filteroptions bkgWhiteNob">
					<input type="text" class="datepicker form-control required date dateField hasDatepicker" onchange="activaBtnConsultar();" id="fechaConsultaValorCuota" name="fechaConsultaValorCuota" data-format="dd/mm/yy" placeholder="dd/mm/aaaa" data-mask="99/99/9999" autocomplete="off">
				</div>
			</div>
			<div class="linea"></div>
			<div class="itemBlock">
				<a class="toRight btn mRight boton-consulta disabled" type="button" onclick="actualizarConsultaValorCuotaFFMM();">Consultar</a>
				<a class="toRight btn mRight boton-filtro disabled" type="button" onclick="limpiarFiltrosConsultaValorCuotaFFMM();">Limpiar</a>
				<a class="toRight btn mRight boton-filtro disabled" type="button" onclick="filtrarConsultaValorCuotaFFMM();">Filtrar</a>
			</div>
		</div>
	</div>

	<article class="capgemini-tables tabla-resultados-filtro">
		<div class="tables-body no-hover">
			<table id="tablaResultadosFiltroValoresCuotaFFMM">
				<tbody></tbody>
			</table>
		</div>
	</article>

</div>
<script>
	$(document).ready(function(){
		
		// Deshabilita Campo de busqueda para texto, y botones de filtro (Filtrar/Limpiar)
		$("#terminosBusquedaValorCuota,.boton-filtro").addClass('disabled').prop('disabled',true);
		
		$("#terminosBusquedaValorCuota").on('keyup',function(ev) {
			if (ev.which === 13) {
				filtrarConsultaValorCuotaFFMM();
			}
		});
	});
</script>

	</div>

	<!-- Simulacion de Depositos a Plazo  -->
	<div id="simulacion-dap" style="display: none;">
	</div>
		
	<!-- Abono a cuenta de inversiones -->
	<div id="abonar-a-cuenta-de-inversion" style="display: none;">
		<div class="modal-dialog modal-dialog-big">
	Contenido modal
</div>

	</div>
	
</div>
					

<script>
	$(document).ready(function(){
		$('.abrirDos').click(function(){
			$('.opcion2').show();
			$('.opcion1').hide();
		});
		$('.cerrarDos').click(function(){
			$('.opcion2').hide();
			$('.opcion1').show();
		});

		/*$('.abre-catalogo').click(function(){
			$('.nav.nav-tabs li.tab1').removeClass("active");
			$('.nav.nav-tabs li.tab2').addClass("active");
			$('#mis-productos').hide();
			$('#catalogo-productos').show();
		});*/
	});
</script>

	</div>
			</div>
		</div>
	</div>
</div>