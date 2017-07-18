<div class="container" id="con-seguros">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Seguros</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		
		<!-- title -->
		<h2 class="title-sh">Seguros </h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="btn-tab-productos active"><a href="#mis-productos">Mis productos</a></li>
			<li class="btn-tab-catalogo"><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		<hr class="separador">	
		 
		<div class="tab-content" id="seguros"> 
			<div class="tab-pane active" id="mis-productos">
				<div class="content-column">
					<?php include 'includes/components/tables/seguros.html'; ?>
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/seguros.html'; ?>
				</div>
			</div>
			
			<div class="tab-pane" id="catalogo-productos">
				<div id="filtro-seguros" class="container">
					<div id="catalogo-seguros">

						<div class="header-catalogo-seguros">
							<hgroup>
								<h2>En BBVA te cuidamos</h2>
								<h3>Conoce los seguros que tenemos para ti</h3>
							</hgroup>
							<img class="hidden-xs" src="img/ejecutivo.jpg">
							<!--aside class="links hidden-xs">
								<header>
									<h1>Licitación seguros</h1>
								</header>
								<div class="tab-pane active" style="padding:6%;">
									<div>
										<p>Queremos entregarte toda la información de las Pólizas de Seguro</p>
										<a href="#" class="btn small btn-seguros-siguiente">Más información</a>
									</div>					
								</div>
							</aside-->
						</div>
			
						<div class="body-cataglo-seguros row">
				  			<div class="col-md-5">
								<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros en Línea</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="https://www.segurosbbvacts.cl/Main.aspx?p=1&t=Principal" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				  				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-fraude"></span>Seguros de Fraude</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguros-fraude/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				  				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-cesantia"></span>Seguros en Cesantía</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguro-automotriz/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				  				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-auto"></span>Seguro Automotriz</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguro-automotriz/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>
				  			</div>


				 			<div class="col-md-5">
								<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-fraude"></span>Gestión de Siniestros</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/gestion-siniestros/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				 				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-hogar"></span>Seguros de Hogar</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguros-hogar/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				  				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-accidentes"></span>Seguros de Accidentes Personales</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguros-accidentes-personales/" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>

				  				<div class="caja-catalogo-seguros">
				  					<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros de Protección Total</h3>
				  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
				  					<a href="http://www.bbva.cl/personas/seguros/seguro-proteccion-total/index_Seguro_de_Proteccion_Total.jsp" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
				  				</div>
				 			</div>
						</div>

					</div>
					<!-- tab content -->

					<div id="catalogo-content" class="tab-content" style="display:none;">

						<div class="tab-pane" id="mis-productos">
							<div class="content-column">
								<article class="capgemini-tables creditCards">
									<header class="tables-header">
										<h4>Seguros<span class="btn-group"><button type="button" class="btn sprite-arrow"></button></span></h4>
									</header>

									<div class="tables-body table-quiero">
										<table>
											<tbody>
												<tr>
													<th></th>
													<th class="hidden-xs">INICIO VIGENCIA</th>
													<th>PRIMA ASOCIADA</th>
												</tr>
												<tr data-url="?src=S12-seguro-hogar.php">
													<td>
														<div class="quiero-info">
															0182-2379-450201520255
															<small>Hogar</small>
														</div>
														<div class="tables-button">
															<button type="button" class="btn button">
																Quiero <span class="icon-16 blue f07-desplegar"></span>
															</button>
															<ul class="list">
																<li><a href="#">Consultar detalle</a></li>
																<li class="separator"></li>
																<li><a href="#">Ver más opciones »</a></li>
															</ul>
														</div>
													</td>
													<td class="hidden-xs"><strong>04/03/2008</strong></td>
													<td><strong>$ 100.000</strong></td>
												</tr>
												<tr data-url="?src=S12-seguro-hogar.php">
													<td>
														<div class="quiero-info">Seguro contra incendios<small>0182-2379-450201520255<br>Incencio y Sismo</small>
														</div>
														<div class="tables-button">
															<button type="button" class="btn button">
																Quiero <span class="icon-16 blue f07-desplegar"></span>
															</button>
															<ul class="list">
																<li><a href="#">Consultar detalle</a></li>
																<li class="separator"></li>
																<li><a href="#">Ver más opciones »</a></li>
															</ul>
														</div>					
													</td>
													<td class="hidden-xs"><strong>01/01/2010</strong></td>
													<td><strong>UF 0,48</strong></td>
												</tr>
											</tbody>
										</table>
									</div>
								</article>
							</div>
							<div class="banner-column">
								<aside class="links editable analista-fondos menu-btn-lateral">
									<header> 
										<h1>Seguros</h1>
									</header>

									<section>
										<ul>
											<li><a href="#;" class="btn-analista"><strong>Catálogo de Seguros</strong></a></li>
										</ul>
									</section>		

								</aside>
							</div>
						</div>


<!-- /**************************/  -->

						<div class="tab-pane active filtro2" id="catalogo-productos">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs personalizada tabs-filtro-catalogo tabs-filtro-simple">
							  <li><a href="#buscar" data-toggle="tab"><h3>Buscar Seguro <div class="lupa"></div></h3></a></li>
							  <li class="active"><a href="#filtrar" data-toggle="tab"><h3>Filtrar Seguros <div class="manejador"></div></h3></a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
							  <div class="tab-pane active" id="filtrar"><!--TABS FILTAR-->

							  	<div class="cont-tabs-seguro"><!--cont-tabs-seguro-->
							  		<div class="row"><!--row-->
							  			<div class="col-md-2">
							  				<label>Tipo de seguro</label>
							  			</div>
							  			<div class="col-md-6">
											<div class="select select-block">
												<select id="select-seguros" class="selectpicker" style="display: none;">
													<option value="Todos">Todos</option>
													<option value="Seguros de Auto">Seguros de Auto</option>
													<option value="Salud">Seguros de Salud</option>
													<option value="Vida">Seguros de Vida</option>
													<option value="Fraude">Seguros contra Fraude</option>
													<option value="Viajes">Seguros de Viajes</option>
													<option value="Hogar">Seguros Hogar</option>
													<option value="Cesantía">Seguro de Cesantía</option>
												</select>

											</div>			  				
							  			</div>
							  		</div><!--Fin row-->
							  		

									<div class="itemBlock border-top">
										<a class="toRight btn toCenterB boton-limpiar" type="button">Limpiar</a>
										<a class="toRight btn mRight toCenterC boton-filtrar" type="button">Filtrar</a>
									</div>
								</div><!--Fin cont-tabs-seguro-->	
							  </div><!--FIN TABS FILTAR-->

							  <div class="tab-pane" id="buscar"><!--TABS BUSCAR-->
							  	<div class="cont-tabs-seguro">
							  		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" class="form-control search autocomplete ui-autocomplete-input" placeholder="Buscar fondos..." id="movimiento" name="movimiento" data-json="includes/components/autocomplete/movements.php" autocomplete="off">
							  		<div class="itemBlock border-top">
										<a class="toRight btn mRight boton-limpiar" type="button">Limpiar</a>
										<a class="toRight btn mRight boton-filtrar" type="button">Filtrar</a>
									</div>
							  	</div>
							  </div><!--FIN TABS BUSCAR-->
							</div>



			<article class="capgemini-tables tabla-resultados-filtro" style="display:none;">
				<h3 class="tit-seguros"><span class="carga-seguro"></span></h3>
				<div class="tables-body no-hover">
					<table>
						<thead>
							<tr>
								<th class="hide-mobile">TIPO DE SEGURO</th>
								<th class="hide-mobile">SEGURO</th>
								<th class="hide-mobile">CARACTERISTICAS BASICAS</th>
								<th class="hide-mobile">PRIMA DESDE</th>
								<th class="hide-mobile">CONTRATAR</th>
							</tr>
						</thead>
						<tbody id="catalogofbody">
							<tr class="Auto">
								<td class="text-left color-base hide-mobile">Seguro Auto</td>
								<td class="text-left tLeft"><b>SEGURO AUTOMOTRIZ</b><small>Plan Light, Plan Standard, Plan Plus</small></td>
								<td class="text-left hide-mobile">Daños al vehículo, Pérdida Total, Daños materiales y a terceros por la misma carga, Responsabilidad Civil, Robo de Accesorios, Defensa penal y constitución de fianza.<br><br>
									<a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>
							<tr class="Fraude">
								<td class="text-left color-base hide-mobile">Seguro Fraude</td>
								<td class="text-left tLeft"><b>FRAUDE CLASICO</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Mal uso de tarjeta como consecuencia de Robo, hurto, pérdida y/o extravío de la tarjeta bancaria, Falsificación y/o adulteración física de la tarjeta bancaria, Impresión múltiple de vales, Robo, asalto, hurto o extravío de talonarios de cheques y/o cheques individuales, Utilización forzada por terceros de tarjetas bancarias, Transferencias no reversables a través de los sitios de Internet de institución bancaria o financiera, Compras  Fraudulentas por Internet.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,15</b><small>Mensual</small></td>
								<td class="text-left"></td>
							</tr>

							<tr class="Fraude">
								<td class="text-left color-base hide-mobile">Seguro Fraude</td>
								<td class="text-left tLeft"><b>FRAUDE BANCA PERSONAL</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Mal uso de tarjeta como consecuencia de Robo, hurto, pérdida y/o extravío de la tarjeta bancaria, Falsificación y/o adulteración física de la tarjeta bancaria, Impresión múltiple de vales, Robo, asalto, hurto o extravío de talonarios de cheques y/o cheques individuales, Utilización forzada por terceros de tarjetas bancarias, Transferencias no reversables a través de los sitios de Internet de institución bancaria o financiera, Compras  Fraudulentas por Internet.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,18</b><small>Mensual</small></td>
								<td class="text-left"></td>
							</tr>

							<tr class="Fraude"><td class="text-left color-base hide-mobile">Seguro Fraude</td>
								<td class="text-left tLeft"><b>FRAUDE PREMIUM</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Mal uso de tarjeta como consecuencia de Robo, hurto, pérdida y/o extravío de la tarjeta bancaria, Falsificación y/o adulteración física de la tarjeta bancaria, Impresión múltiple de vales, Robo, asalto, hurto o extravío de talonarios de cheques y/o cheques individuales, Utilización forzada por terceros de tarjetas bancarias, Transferencias no reversables a través de los sitios de Internet de institución bancaria o financiera.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,2</b><small>Mensual</small></td>
								<td class="text-left"><a href="	" class="toRight btn success mRight btn-contratar-seguro">Contratar <img src="img/bullet-contratar.png"></a></td>
							</tr>

							<tr class="Vida"><td class="text-left color-base hide-mobile">Seguro Vida</td>
								<td class="text-left tLeft"><b>PROTECCION TOTAL</b><small>Plan A, Plan B</small></td>
								<td class="text-left hide-mobile">Muerte natural,  muerte accidental, Invalidez total y Permanente 80% y muerte por accidente de tránsito.<br><br><aclass="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Vida"><td class="text-left color-base hide-mobile">Seguro Vida</td>
								<td class="text-left tLeft"><b>VIDA CON DEVOLUCION</b><small>Plan A, Plan B</small></td>
								<td class="text-left hide-mobile">Indemnización por fallecimiento y asistencia asl deceso, según plan contratado.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Viajes"><td class="text-left color-base hide-mobile">Seguro Viaje</td>
								<td class="text-left tLeft"><b>ASISTENCIA EN VIAJES</b><small>Varios planes</small></td>
								<td class="text-left hide-mobile">Seguro de viajes en caso de Muerte accidental Invalidez Accidental.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Viajes">
								<td class="text-left color-base hide-mobile">Seguro Viaje</td>
								<td class="text-left tLeft"><b>RESPONSABILIDAD CIVIL INTERNACIONAL</b><small>Varios planes</small></td>
								<td class="text-left hide-mobile">Responsabilidad Civil Internacional . Seguro en caso de daño a un tercero.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td><td class="text-left"><b>UF 6,80</b><small>Mensual</small></td><td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Hogar">
								<td class="text-left color-base hide-mobile">Seguro Hogar</td>
								<td class="text-left tLeft"><b>SEGURO HOGAR</b><small>Plan A, Plan B, Plan C</small></td>
								<td class="text-left hide-mobile">Cobertura del contenido de la propiedad ante Robo, Incendio y Sismo.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,25</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Cesantia">
								<td class="text-left color-base hide-mobile">Seguro Cesantía</td>
								<td class="text-left tLeft"><b>CESANTIA CONSUMO</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Hasta 4 cuotas del crédito, con tope de UF50.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td><td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Cesantia"><td class="text-left color-base hide-mobile">Seguro Cesantía</td>
								<td class="text-left tLeft"><b>CESANTIA HIPOTECARIO</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Hasta 4 dividendos del crédito.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 6,80</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Salud"><td class="text-left color-base hide-mobile">Seguro Salud</td>
								<td class="text-left tLeft"><b>PROTECCION VITAL</b><small>Plan A y Plan B</small></td>
								<td class="text-left hide-mobile">Accidentes Personales, y de dependiendo del plan también tiene Ivalidez Total y Permanente.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,27</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>
							<tr class="Salud">
								<td class="text-left color-base hide-mobile">Seguro Salud</td><td class="text-left tLeft"><b>ONCOLOGICO</b><small>Plan A y Plan B</small></td>
								<td class="text-left hide-mobile">Reembolsa los gastos médicos que correspondan al tratamiento terapéutico del cáncer.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,24</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>

							<tr class="Salud"><td class="text-left color-base hide-mobile">Seguro Salud</td>
								<td class="text-left tLeft"><b>RENTAS DIARIAS POR ACCIDENTE Y CONVALECENCIA</b><small>Plan Unico</small></td>
								<td class="text-left hide-mobile">Entrega un monto diario a los Asegurados, en caso de ser hospitalizado a causa de un Accidente y también entrega un monto diario por concepto de convalecencia.<br><br><a class="modal-trigger color-blue" href="includes/components/movements/seguros/dialogs/seguros-detalle.html">Detalle coberturas y exclusiones del seguro</a></td>
								<td class="text-left"><b>UF 0,25</b><small>Mensual</small></td>
								<td class="text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>
							</tr>
						</tbody>
					</table>

				</div>	
			</article>

				<div class="tabs-color " style="margin:60px 0 0 0; display:none;"><!--tabs-->

						<ul id="myTab" class="nav nav-tabs absolute z1000">
					      <li class="active"><a href="#tabs2" data-toggle="tab" style="width:100px!important;">Fondos</a></li>
					    </ul>

						<div id="myTabContent" class="tab-content" style="top:0!important;">

							<div class="tab-pane fade active in" id="tabs2"><!--Tabs 02-->
						     	
						        <div class="cont-table dr"><!--cont-table-->
						        	<div class="table">
						        		<div class="thead"><!--thead-->
						        			<div class="tr">
						        				<div class="th hide-mobile"></div>
						        				<div class="th" style="border-left:1px solid #ddd!important;">
						        					<span>MONEY MARKET<br>SERIE B</span>
						        					<a class="btn-ficha cursor modal-trigger" data-href="includes/components/movements/ahorro-inversiones/dialogs/fondo-ficha.html">Ver ficha</a>
						        				</div>
						        				<div class="th" style="border-right:1px solid #ddd!important;">
						        					<span>MONEY MARKET<br>SERIE C</span>
						        					<a class="btn-ficha cursor modal-trigger" data-href="includes/components/movements/ahorro-inversiones/dialogs/fondo-ficha.html">Ver ficha</a>
						        				</div>
						        			</div>
						        		</div><!--Fin thead-->
						        		<div class="tbody">
						        			<div class="tr">
						        				<div class="th hide-mobile">Tipo de fondo</div>
						        				<div class="td">Garantizados Protección</div>
						        				<div class="td">Garantizados Protección</div>
						        			</div>
						        			<div class="tr hide-mobile">
						        				<div class="th">Rentabilidad Año en Curso</div>
						        				<div class="td"></div>
						        				<div class="td"></div>
						        			</div>
						        			<div class="tr">
						        				<div class="th hide-mobile">Rentabilidad 1 año</div>
						        				<div class="td">rentabilidad Año</div>
						        				<div class="td">rentabilidad Año</div>
						        			</div>
						        			<div class="tr">
						        				<div class="th hide-mobile">Rentabilidad 180 días</div>
						        				<div class="td">Hasta $ 5.000</div>
						        				<div class="td">Hasta $ 5.000</div>
						        			</div>
						        			<div class="tr">
						        				<div class="td hide-mobile"></div>
						        				<div class="td"><a class="btn modal-trigger" data-href="includes/components/movements/ahorro-inversiones/catalogo-productos/dialogs/firma-contrato.html" type="button">Contratar</a></div>
						        				<div class="td"><a class="btn modal-trigger" data-href="includes/components/movements/ahorro-inversiones/catalogo-productos/dialogs/firma-contrato.html" type="button">Contratar</a></div>
						        			</div>
						        		</div>
						        	</div>
						        </div><!--Fin cont-table-->

							    
						      </div><!--Fin Tabs 02--> 

						    </div>

				</div><!--Fin tabs-->

			</div>
	</div>
</div>


	<!--INCLUDE PARA CONTRATAR SEGURO-->
	
<div id="container-seg" class="container js-contratar-seguro" style="display:none;">

	<section class="contratacion-seguro">
		<header>
			<h1>Contratación de seguro de Fraude BBVA</h1>
			<a class="close-operation-tab" id="closecontrata" href="javascript:;"><span class="close-icon"></span></a>
		</header>

		<div class="paso1-contratacion"><!--paso1-contratacion-->

			<article class="datos-seguro"><!--datos-seguro-->
				<div class="datos-personales">
					<label>Nombre:</label> 
					<p>Leon Calvillo Banuelo</p>
				</div>

				<div class="datos-personales">
					<label>RUT:</label> 
					<p>10.345.345-2</p>
				</div>

				<div class="datos-personales">
					<label>Email de aviso:</label> 
					<p>lorem@ipsum.cl</p>
				</div>

				<div class="select-cuenta">
					<h3>Cuenta de cargo PAC</h3>
					<div id="select-dos">
						 <select id="banco" name="banco" class="selectpicker form-control required banco_selector" style="display: none;">
						    <option value="" selected="selected" disabled="disabled">Seleccionar</option>
						    <option value="02" data-subtext="10.000.001">0540-4567-3432675541 </option>
						    <option value="03" data-subtext="10.000.002">0540-4567-3432675542</option>
	                        <option value="03" data-subtext="10.000.003">0540-4567-3432675543</option>
						 </select>

					</div>

					<button class="btn btn-center btn-contratar">Contratar</button>

				</div>
			</article><!--Fin datos-seguro-->

			<div class="arrow-destination"></div> 

			<article class="costo-seguro text-center"><!--costo-seguro-->
				<h2>Tu prima mensual será:</h2>
				<p class="valor">UF 0,18</p>
				<h3>Coberturas:</h3>
				<ul class="unstyle color-blue">
					<li>Lorem ipsum dolor sit ame <span class="ckeck-azul"></span></li>
					<li>Lorem ipsum dolor sit ame <span class="ckeck-azul"></span></li>
				</ul>

				<hr>
				<div class="block-info2">
					<i class="icon-32 blue m03-aviso"></i>
					<p><strong> En el caso de dudas o consultas</strong> <br> Llama a línea BBVA 600 600 1100</p>
				</div>
			</article><!--Fin costo-seguro-->


			<div class="caja-aceptar"><!--caja-aceptar-->
				<label for="acepto-condiciones-check" class="ui-marmots-label-check marmots-label-left">
					He leido y acepto las condiciones precontractuales y de contratación de este producto
					
				<input id="acepto-condiciones-check" name="acepto-condiciones-check" type="checkbox" value="01"></label>

				<ul class="descarga-pdf">
					<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link">Términos y condiciones PAC</a></li>
					<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link"> Detalle Coberturas y exclusiones del seguro</a></li>
				</ul>
			</div><!--caja-aceptar-->

			<div class="pin-sms-input large pin-sms-input-inline inline-large DivClaveSegura" style="display:none;"><!--CLAVE SEGURA-->
				<section>
					<div class="form-group">
						<label class="sms control-label" for="clave-segura">Introduzca la clave recibida por SMS</label>
						<div class="formline formline-right">
							<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
							<button class="btn btn-confirmar" type="button"><span>Confirmar</span></button>
						</div>
					</div>
				</section>
			</div><!--FIN CLAVE SEGURA-->

		</div><!--Fin paso1-contratacion-->

		<div class="paso2-contratacion" style="display:none;"><!--paso2-contratacion-->

			<div class="comprobante-contratacion"><!--comprobante-contratacion-->
				<img alt="Ok" title="Ok" src="img/tick.png">
				<div class="textos">
					<h3>Has completado la contratación de tu seguro</h3>
					<p>Puedes enviarte o descargarte el contrato en las opciones que se muestran a continuación.</p>
				</div>
			</div><!--Fin comprobante-contratacion-->

			<div class="datos"><!--datos-->

				<a class="btnGrisInner js-btn-enviar" href="" title="">
					<span class="icon-32 blue m07-correspondenciavirtual" title="Enviar"></span>
					Enviar a: Lorem@ipsum.cl
					<span class="check-verde-16" style="display:none;"></span>
				</a>

				<a class="modificar-mail modal-trigger icon-flecha" href="includes/components/movements/seguros/catalogo-productos/dialogs/modificar-email.html" title="">
					Modificar Email 
					<span class="flecha-link"></span>
				</a>

				<a class="btnGris" href="" title="#;">
					<span class="icon-32 blue l01-pdf" title="Descargar pdf"></span>
					Descargar en PDF
				</a>


			</div><!--Fin datos-->

			<section class="contratar"><!--contratar-->
				<div class="textos">
					<h4>Lorem ipsum dolor sit amet, consectetur adpiscing elit</h4>
					<p>Lorem ipsum dolor sit amet</p>
				</div>

				<a href="#" class="btn">Contratar</a>
			</section><!--contratar-->				

		</div><!--Fin paso2-contratacion-->


		<div class="btn-cerrar" style="display:none;">
			<div class="doble-linea"> <hr> </div>
			<button class="btn large btn-center btn-contratar-seguro">Cerrar</button>
		</div>			


	</section>

</div>

<script type="text/javascript">
   $('#banco').selectpicker();
      setTimeout(function(){
       $('.banco_selector a').on('click',function(){
       var li =$(this).parent();
       var selector = $('select#banco');
       var options = $('select#banco option');
       var pos = li.attr('rel');
       var option = options.get(parseInt(pos));
       var appendData= option.attributes['data-subtext'];
       appendData= $(appendData).val();

       var boton = $('.banco_selector').find('button[data-id="banco"]');
       if ($('#banco_selector_smallAttach').length>0){
           $('#banco_selector_smallAttach').html(appendData);

       }else{
           var childrens = boton.children();
           boton.html("");
           boton.append(childrens.get(0));
           boton.append("<small id='banco_selector_smallAttach' class=\"muted text-muted\">"+appendData+"</small>");
           boton.append(childrens.get(1));
       }


       });

   }, 10);

</script>

<script>
	$(document).ready(function() {
		$('.btn-confirmar').click(function() {
			$('.paso1-contratacion').hide();
			$('.paso2-contratacion').show();
			$('.btn-cerrar').show();
		});

		$('.btn-contratar').click(function() {
			$('.DivClaveSegura').show();
		});

		$('.js-btn-enviar').click(function(e) {
			e.preventDefault();
			$('.check-verde-16').show();
		});

		$('#container-seg .contratar, #container-seg .btn-contratar-seguro').click(function() {
			$('#container-seg').hide();
			$('#filtro-seguros').show();
		});

	});
</script>


<script type="text/javascript" src="js/soho-seguros.js"></script>
<script>
	$(document).ready(function(){

		$('#catalogo-seguros .btn-seguros-siguiente').click(function() {
			$('#catalogo-seguros').hide();
			$('#catalogo-content').show();
		});

		$('.boton-filtrar').click(function() {
			$('.carga-seguro').html($("#select-seguros option:selected").html());
		});

		$('#closecontrata').click(function() {
			$('#container-seg').hide();
			$('#filtro-seguros').show();
		});

	});
</script>			</div>
		</div>

	</div>
</div>