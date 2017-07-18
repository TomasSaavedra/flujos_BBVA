<link rel="stylesheet" href="css/one-click.css"/>
<style type="text/css">

	.btn-cotizaciones {
		position: absolute; top:20px; right:20px;
	}
	 .form-horizontal .radio {
	    padding-top: 0px !important;
	}
	@media (max-width: 720px){
		.responsive .text-center {
			text-align: right !important;
		} 
	}
	@media only screen and (max-width: 768px){
		.tables-body table tr.avanceEncontrado td, .responsive tr td {
		    padding: 10px 3px !important;
		    text-align: right !important;
		}
		.btn-cotizaciones {
			position: static;
	    	text-align: center;
	    	width: 100%;
		}
		.btn-edit {
			margin-right: 0px;
		}
	}

	.sop-success {
		height: 29px;
	}

	.btn-success {
	    color: #fff;
	    background-color: #76C123;
	    width: 112px;
	    border-color: #86C82D;
	    padding: 8px 12px;
	    border-radius: 4px;
	    margin: 5px auto;
	}
	h1 {
		font-family: 'BBVA Web Book' !important
	}

	.tableCoronita .items .bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]) {
    	width: 100%;
	}
</style>

<div class="container" id="con-seguros">
	<div class="menu-miga">
		<p>
			<a href="?src=S02-cuentas.php">Inicio</a> <span>Seguros</span>
		</p>
	</div>
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		<!-- title -->
		<h2 class="title-sh">Seguros</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="btn-tab-productos active"><a href="#mis-productos">Mis productos</a></li>
			<li class="btn-tab-catalogo"><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>

		<hr class="separador">	

		<div class="tab-content" id="seguros"> 
			<div class="tab-pane active" id="mis-productos">
			<h2>Descubre el mejor Seguro Automotriz para tí</h2>
				<div class="content-column" style="width: 100% !important">
					<article class="capgemini-tables cuentas-personales" >
			            <div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">

		                    <form id="seguroAutoForm" novalidate  class="form-horizontal tooltip-validation transfer-filter">
		                        <article class="wizard">
		                            <!-- paso 1-->
		                            <div data-title="Datos personales" style="position: relative"> 
		                                <div class="step-content-container contratar-deposito-pasos">
		                                    <div class="contratar-deposito-paso1 simular-deposito-datos">
		                                        <article class="capgemini-tables holder">
		                                            <div class="form-group ">
		                                            	<div class="btn-cotizaciones">
			                                            	<div class="btn cursor btn-edit " id="cotizaciones-cliente">
							                                	<i class="icon icon-16 blue n02-guardar mgRight4px"></i> Mis cotizaciones
							                                </div>
						                                </div>
						                                <div class="text-center">
			                                                <h1>¡Hola <strong>Rolando Bailey</strong>!</h1>
			                                                <p>¿Eres el dueño del vehículo que quieres asegurar?</p>
			                                                <div class="row">
																<label class="label-small radio ui-marmots-label-radio marmots-label-left on"  for="duenoSi">Si
																	<input type="radio" data-name="duenoSi" class="filter"  value="001" id="duenoSi">
																</label>
	                                                            <label class="label-small radio ui-marmots-label-radio marmots-label-left"  for="duenoNo">No
																	<input type="radio" data-name="duenoNo" class="filter" value="002"  id="duenoNo">
																</label>
			                                                </div>
		                                                </div>
		                                               
		                                                <div id="formularioDuseno" class="mgTop20px" style="display: none;">
                                                			<div class="form-group">
					                                        	<div class="col-md-6">
			                                                        <label class="label-form" for="rutAsegurado">Rut del asegurado</label>
			                                                        <input type="text" class="form-control" autocomplete="off" style="width: 100%">
			                                                    </div>
																<div class="col-md-6">
																	<label class="label-form" for="fechaNacimiento">Fecha de nacimiento</label>                        
																	<input type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" autocomplete="off" style="width: 100%">
																</div>
                                                			</div>
                                                			<div class="form-group">
					                                        	<div class="col-md-6">
			                                                        <label class="label-form" for="sexo" style="width: 100%;">Sexo</label>
		                                                       		<label class="label-small radio ui-marmots-label-radio marmots-label-left on" for="masculino">Masculino
																		<input type="radio" data-name="masculino" id="masculino" value="003">
																	</label>
	                                                            <label class="label-small radio ui-marmots-label-radio marmots-label-left" for="femenino">Femenino
																	<input type="radio" data-name="femenino"  id="femenino" value="004" >
																</label>
			                                                    </div>
																<div class="col-md-6">
																	<label class="label-form" for="comuna">Comuna</label>                        
																	<select class="selectpicker" data-container="body"> 
																		<option>Seleccione</option>
																		<option >1</option>
																	</select>
																</div>
                                                			</div>
	                                                	</div>
		                                            </div>   
		                                        </article> 
		                                        <div class="row text-center">
				                        			<small>Si tienes dudas contáctanos al 600 600 1100</small>
				                        		</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- paso 2-->
		                            <div data-title="Datos de vehículo" >
			                            <div class="step-content-container contratar-deposito-pasos">
			                            	<div class="contratar-deposito-paso1 simular-deposito-datos">
			                                    <article class="capgemini-tables holder">
			                                        <div class="form-group">
			                                        	<div class="col-md-6">
	                                                        <label class="label-form" for="patente">Patente</label>
	                                                        <input type="text"  name="" id="" class="form-control" autocomplete="off" style="width: 100%">
	                                                    </div>
														<div class="col-md-6">
															<label class="label-form" for="monto"> Marca*</label>                        
															<div class="select" data-container="body" data-toggle="popover"
				                                                data-placement="top"
				                                                autocomplete="off" title="Alerta!"
				                                                data-content="Seleccione el dia de cargo">
				                                               <select class="selectpicker" data-name="marca">
				                                                   <option value="0" data-name="default">Seleccione</option>
				                                                   <option value="1" selected>Suzuki</option>
				                                               </select>
				                                           </div>
														</div>
			                                        </div>
			                                        <div class="form-group">
			                                        	<div class="col-md-6">
															<label class="label-form" for="monto"> Modelo* </label>                        
															<select class="selectpicker required" data-msg-required="" required data-container="body"> 
																<option>Seleccione</option>
																<option selected>Swift</option>
															</select>
														</div>
														<div class="col-md-6">
															<label class="label-form" for="monto"> Año* </label>                        
															<select class="selectpicker required" data-msg-required="" data-container="body"> 
																<option>Seleccione</option>
																<option selected>2011</option>
															</select>
														</div>
			                                        </div>
			                                    </article>
			                                    <p>* Campos obligatorios</p>
			                                    <p class="iconed-24 block-warning mgBottom10px">
			                                    	<i class="icon-24 m03-aviso"></i>
			                                    	Solo se pueden simular y cotizar seguros para vehículos de uso particular.
                                                </p>
                                                <div class="row text-center">
				                        			<small>Si tienes dudas contáctanos al 600 600 1100</small>
				                        		</div>
			                            	</div>
		                            	</div>
		                            </div>
		                            <!-- paso 3-->
		                            <div data-title="Planes" class="tableCoronita">
			                            <div class="row">
			                        		<div class="items col-lg-3 col-md-3 col-xs-12 text-center pdRight0px pdLeft0px">
			                        			<div class="disabled-1" id="inactivo-1"></div>
			                        			<div class="head">
			                        				Auto Seguro
			                        			</div>
			                        			<div class="pd8px border">
			                        				<div class="texto">Valor Prima</div>
			                        				<div class="precio">$8.995</div>
			                        				<div class="deducible">Deducible <strong>UF 0</strong>
			                        					<span class="icon-16 blue d04-ayuda tooltip-help zindex" title="" data-original-title="Este Plan no tiene deducible porque sólo cubre daños causados a terceros"></span> 
			                        				</div>
			                        				<hr>
			                        				<div class="terminos">
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños causados a terceros</div>
			                        					</div>
			                        				</div>
			                        				<hr>
			                        				<div class="sop-success">
			                        					<a href="includes/components/movements/seguros/dialogs/seguro-automotriz-1.html" class="btn-success  modal-trigger">Me interesa</a>
			                        				</div>
			                        			</div>
			                        		</div>

			                        		<div class="items col-lg-3 col-md-3 col-xs-12 text-center pdRight0px pdLeft0px">
			                        			<div class="disabled-2" id="inactivo-2"></div>
			                        			<div class="head">
			                        				Auto Protegido
			                        			</div>
			                        			<div class="pd8px border">
			                        				<div class="texto">Valor Prima</div>
			                        				<div class="precio">$29.423</div>
			                        				<div class="deducible">Deducible <strong>UF 0</strong>
			                        					<span class="icon-16 blue d04-ayuda tooltip-help zindex" title="" data-original-title="Este Plan no tiene deducible porque sólo cubre daños causados a terceros"></span> 
			                        				</div>
			                        				<hr>
			                        				<div class="terminos">
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños causados a terceros</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Pérdida total del vehículo asegurado</div>
			                        					</div>
			                        					
			                        				</div>
			                        				<hr>
			                        				<div class="sop-success">
			                        					<a href="includes/components/movements/seguros/dialogs/seguro-automotriz-2.html" class="btn-success modal-trigger">Me interesa</a>
			                        				</div>
			                        			</div>
			                        		</div>
			                        		
			                        		<div class="items col-lg-3 col-md-3 col-xs-12 text-center pdRight0px pdLeft0px">
			                        			<div class="disabled-3" id="inactivo-3"></div>
			                        			<div class="head">
			                        				Auto Full
			                        			</div>
			                        			<div class="pd8px active">
			                        				<div class="texto">Valor Prima</div>
			                        				<div class="precio">$63.706</div>
			                        				<div class="select col-lg-12">
														<select class="selectpicker">
															<option value="" selected>Deducible UF 0</option>
															<option value="">Deducible UF 3</option>
															<option value="">Deducible UF 5</option>
															<option value="">Deducible UF 10</option>
														</select>
													</div>
			                        				<hr style="clear: both;">
			                        				<div class="terminos">
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños causados a terceros</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Pérdida total del vehículo asegurado</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños materiales del vehículo asegurado</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Responsabilidad civil</div>
			                        					</div>
			                        				
			                        				</div>
			                        				<hr>
			                        				<div class="sop-success">
			                        					<a href="includes/components/movements/seguros/dialogs/seguro-automotriz-3.html" class="btn-success modal-trigger">Me interesa</a>
			                        				</div>
			                        			</div>
			                        		</div>

			                        		<div class="items col-lg-3 col-md-3 col-xs-12 text-center pdRight0px pdLeft0px">
			                        			<div class="disabled-4" id="inactivo-4"></div>
			                        			<div class="head">
			                        				Auto Full Plus
			                        			</div>
			                        			<div class="pd8px border">
			                        				<div class="texto">Valor Prima</div>
			                        				<div class="precio">$63.706</div>
			                        				<div class="select col-lg-12">
														<select class="selectpicker">
															<option value="" selected>Deducible UF 0</option>
															<option value="">Deducible UF 3</option>
															<option value="">Deducible UF 5</option>
															<option value="">Deducible UF 10</option>
														</select>
													</div>
			                        				<hr style="clear:both;">
			                        				<div class="terminos">
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños causados a terceros</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Pérdida total del vehículo asegurado</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Daños materiales del vehículo asegurado</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Responsabilidad civil</div>
			                        					</div>
			                        					<div>
			                        						<span class="check-verde-16"></span> 
			                        						<div style="display: inline; font-size: 12px;">Más y mejores servicios adicionales</div>
			                        					</div>
			                        				
			                        				</div>
			                        				<hr>
			                        				<div class="sop-success">
			                        					<a href="includes/components/movements/seguros/dialogs/seguro-automotriz-4.html" class="btn-success modal-trigger">Me interesa</a>
			                        				</div>
			                        			</div>
			                        		</div>
			                        	</div>
			                        	<div class="text-center mgTop20px mgBottom10px">
		                        			<div class="btn" id="vercoberturas">Ver coberturas</div>
		                        		</div>
		                        		<div class="row text-center">
		                        			<small>Si tienes dudas contáctanos al 600 600 1100</small>
		                        		</div>
		                        		
		                            </div>
		                       
		                        </article>
		                    
		                    </form>

			            </div>
			        </article>     
				</div>
			</div>
		</div>
	
		<!--Modal cotizaciones vigentes-->
		<div class="modal" id="cotizaciones-vigentes">
			<div class="modal-dialog">
				<div class="modal-content" id="cotizaciones-1">
					<div class="modal-box">
						<div class="modal-header no-border">
					    	<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
							<h2 class="modal-title-h2">Cotizaciones vigentes</h2>
						</div>
						<div class="modal-body no-bottom">
							<div class="container">
								<div class="pago-de-cuentas row">
								<p>Tus cotizaciones guardadas vigentes a la fecha:</p>
									<article class="capgemini-tables holder">
				                        <div class="tables-body table-scroll">
				                            <table class="responsive">
				                                <thead>
				                                    <tr>    
				                                    	<th>&nbsp</th>
				                                        <th>Plan cotizado</th>
				                                        <th>Deducible</th>
				                                        <th>Prima</th>
				                                        <th>Marco</th>
				                                        <th>Rut</th>
				                                        <th>Fecha cotización</th>
				                                        <th>Vigencia</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                    	<td>
				                                    		<label class="ui-marmots-label-radio marmots-label-left on">&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label>
				                                    	</td>
				                                        <td data-content="Plan cotizado" class="text-center">Plan cotizado</td>
				                                        <td data-content="Deducible" class="text-center">Deducible</td>
				                                        <td data-content="Prima" class="text-center">Prima</td>
				                                       	<td data-content="Marco" class="text-center">Marco</td>
				                                       	<td data-content="Rut" class="text-center">Rut</td>
				                                       	<td data-content="Fecha cotización" class="text-center">Fecha cotización</td>
				                                       	<td data-content="Vigencia" class="text-center">Vigencia</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				                    </article>  
								</div>
								<div class="row">
									<div class="col-md-12" align="center">
										<button class="btn big cursor modal-trigger" id="btn-cotizaciones">Solicitar seguro</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-content" id="cotizaciones-2" style="display: none">
					<div class="modal-box">
						<div class="modal-header">
							<h2 class="modal-title">Seguro Automotriz</h2>
						</div>
						<div class="modal-body">
						<div class="comprobante no-border">
							<div class="ok-layer">
								<div class="image">
									<img alt="Ok" title="Ok" src="img/tick.png">
								</div>
								<div class="ok-content">
									<div class="title">Solicitud creada exitosamente</div>
									<div class="description"><strong>Un ejecutivo te contactará dentro de las próximas 48 horas </strong>para gestionar tu Seguro.</div>
								</div>
							</div>
							<div class="extra-data">
								<div class="left">Plan cotizado:</div>
								<div class="right">Auto Full</div>
								<div class="left">Deducible:</div>
								<div class="right">UF 3</div>
								<div class="left"><strong>Valor prima:</strong></div>
								<div class="right"><strong>$ 42.727</strong></div>
								<div class="left">Vehículo a asegurar:</div>
								<div class="right">Subaru Wrx 2016</div>
							</div>
							<hr>
							<div class="text-center">
								<button class="btn big cursor" id="cerrar-cotizaciones" aria-hidden="true">Aceptar</button>
							</div>
						</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- fin cotizaciones vigentes-->

		<!--Modal coberturas-->
		<div class="modal fade cobertura-seguro-modal-lg" id="ver-coberturas">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-box">
						<div class="modal-header no-border">
					    	<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
							<h2 class="modal-title-h2">Cotizaciones vigentes</h2>
						</div>
						<div class="modal-body">
							<table class="responsive">
								<thead>
									<tr>
										<td class="nombre" style="width:30%;">Coberturas</td>
										<td class="montos" style="width:17%;">Auto Seguro</td>
										<td class="montos" style="width:18%;">Auto Protegido</td>
										<td class="montos" style="width:17%;">Auto Full</td>
										<td class="montos" style="width:18%;">Auto Full Plus</td>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-content="Coberturas" >Daños materiales</td>
										<td data-content="Auto Seguro" class="text-center">-</td>
										<td data-content="Auto Protegido" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full"   class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full Plus" class="text-center"><span>Valor comercial</span></td>
									</tr>
									<tr>
										<td data-content="Coberturas">Responsabilidad Civil</td>
										<td data-content="Auto Seguro" class="text-center"><strong>UF 1000</strong></td>
										<td data-content="Auto Protegido" class="text-center"><strong>UF 1000</strong></td>
										<td data-content="Auto Full" class="text-center"><strong>UF 1000</strong></td>
										<td data-content="Auto Full Plus" class="text-center"><strong>UF 1000</strong></td>
									</tr>
									<tr>
										<td data-content="Coberturas">Pérdida total por daños</td>
										<td data-content="Auto Seguro" class="text-center">-</td>
										<td data-content="Auto Protegido" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full Plus" class="text-center"><span>Valor comercial</span></td>
									</tr>
									<tr>
										<td data-content="Coberturas">Pérdida total por robo</td>
										<td data-content="Auto Seguro" class="text-center">-</td>
										<td data-content="Auto Protegido" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full Plus" class="text-center"><span>Valor comercial</span></td>
									</tr>
									<tr>
										<td data-content="Coberturas" >Defensa Penal</td>
										<td data-content="Auto Seguro" class="text-center"><strong>UF 150</strong></td>
										<td data-content="Auto Protegido" class="text-center"><strong>UF 150</strong></td>
										<td data-content="Auto Full" class="text-center"><strong>UF 150</strong></td>
										<td  data-content="Auto Full Plus"class="text-center"><strong>UF 150</strong></td>
									<tr>
										<td data-content="Plan cotizado" >Robo, Hurto y/o uso no autorizado</td>
										<td data-content="Auto Seguro" class="text-center">-</td>
										<td data-content="Auto Protegido" class="text-center">-</td>
										<td data-content="Auto Full" class="text-center"><span>Valor comercial</span></td>
										<td data-content="Auto Full Plus" class="text-center"><span>Valor comercial</span></td>
									</tr>
									<tr>
										<td class="text-center"></td>
										<td class="text-center"><a href=""><i class="icon-16 blue l01-pdf"></i>Descargar Ficha</button></a>
										<td class="text-center"><a href=""><i class="icon-16 blue l01-pdf"></i>Descargar Ficha</button></a>
										<td class="text-center"><a href=""><i class="icon-16 blue l01-pdf"></i>Descargar Ficha</button></a>
										<td class="text-center"><a href=""><i class="icon-16 blue l01-pdf"></i>Descargar Ficha</button></a>
									</tr> 
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin coberturas-->
	</div>
</div>

<script type="text/javascript">
	$('#cotizaciones-cliente').on('click', function(){
		$('#cotizaciones-vigentes').modal('show');
	});

	$('#product-options').on('click', function(){
		$('#cotizaciones-vigentes').modal('hide');
	});

	$('#inactivo-1').hide();
	$('#inactivo-2').hide();
	$('#inactivo-3').hide();
	$('#inactivo-4').hide();

	$(document).on('click', '#wizardNext', function(){
		setTimeout(function(){
			$('#wizardBack').show();
			if($('#wizardNext').text() === 'Confirmar'){
            	$('#wizardNext').text('Simular');
            };

           	if($('#wizardNext').text() === 'Cerrar'){
            	$('#wizardNext').fadeOut();	
            };

		}, 50)
	});

	$(document).on('click', '#wizardBack', function(){
		setTimeout(function(){
			if($('#wizardNext').text() === 'Confirmar'){
	            $('#wizardNext').text('Simular');
	            $('#wizardNext').addClass('arrow-right');
	        };
        }, 50)
	});

	$("label.ui-marmots-label-radio").on('click', function(e){
		e.stopPropagation();
		e.preventDefault();
		var labelSeleccionado = $(this);
		$(document).trigger('capgemini.wizard.resize');

		if(labelSeleccionado.attr('for') === 'duenoNo' || labelSeleccionado.attr('for') === 'duenoSi'){
			$("label.ui-marmots-label-radio").removeClass("on");
			labelSeleccionado.addClass("on");
			if(labelSeleccionado.find('input').val() === '002'){
				$('#formularioDuseno').fadeIn();
			}else{
				$('#formularioDuseno').fadeOut(function(){
					$(document).trigger('capgemini.wizard.resize');
				});
			}
		};

		if(labelSeleccionado.attr('for') === 'masculino' || labelSeleccionado.attr('for') === 'femenino'){
			$("label.ui-marmots-label-radio").removeClass("on");
			labelSeleccionado.addClass("on");
		};

	});

	$('#vercoberturas').on('click', function(){
		$('#ver-coberturas').modal('show')
	});

	$('#btn-cotizaciones').on('click', function(){
		$('#cotizaciones-1').hide();
		$('#cotizaciones-2').fadeIn();
	});

	$('#cerrar-cotizaciones').on('click', function(){
		$('#cotizaciones-2').hide();
		$('#cotizaciones-1').show();
		$('#cotizaciones-vigentes').modal('hide');
	});

</script>