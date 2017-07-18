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
			<div class="tab-content">
				<div class="row tab-pane active" id="mis-productos">
					<div class="col-md-12">
						<div class="container" style="width:100%; padding-left: 0px; padding-right: 0px;">
							<form id="formulario" method="post" action="/BBVAform/doForm?001">
								<div id="divPersonas">
									<div id="bloqueFormulario" class="col-xs-12 col-sm-6">
										<div class="row">
											<div class="col-sm-12 hidden-xs">
												<h1 style="text-align:left;font-size:2.8em;line-height:1.333em;margin:0em 0em 0.333em 0em;color:#0078d2;font-family:BBVA Web Light,sans-serif">Formulario Solicitud <span>Hazte Cliente</span></h1>
											</div>
											<div class="col-xs-12 visible-xs">
												<h1 style="text-align:center;font-size:3em;line-height:1.333em;margin:0em 0em 0.333em 0em;color:#0078d2;font-family:BBVA Web Light,sans-serif">Formulario Solicitud <br><span>Hazte Cliente</span></h1>
											</div>
										</div>
										<div style="border-bottom: 1px solid #A1CCEE;width: 100%;margin-bottom:20px;"></div>
										<div class="row">
											<!-- columna 1-->
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="rut"><span class="bloque">RUT*</span></label>
													<input value="" type="text" class="form-control text menor  omega required_text " name="rut" id="rut" placeholder="" maxlength="12" onkeypress="return charRutValido(event.charCode || event.keyCode);" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="nombre"><span class="bloque">Nombre*</span></label>
													<input value="" type="text" class="form-control text menor  omega required_text alfaNumerico" name="nombre" id="nombre" placeholder="" onkeypress="return alfaNumericos(event.charCode || event.keyCode);" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="" style="width:100%;">
														<span class="bloque">Teléfono (fijo o móvil)*</span>
														<div class="styled-select ui-selectmenu ui-widget ui-state-default ui-corner-all" style="width:25%;">
															<select name="prefijoTelefono" id="prefijoTelefono">
																<option value="-1" selected="selected">---</option>
																<!-- celulares -->
																<option value="04">04</option>
																<option value="05">05</option>
																<option value="06">06</option>
																<option value="07">07</option>
																<option value="08">08</option>
																<option value="09">09</option>
																<!-- fijos -->
																<option value="02">02</option>
																<option value="32">32</option>
																<option value="33">33</option>
																<option value="34">34</option>
																<option value="35">35</option>
																<option value="41">41</option>
																<option value="42">42</option>
																<option value="43">43</option>
																<option value="45">45</option>
																<option value="51">51</option>
																<option value="52">52</option>
																<option value="53">53</option>
																<option value="55">55</option>
																<option value="57">57</option>
																<option value="58">58</option>
																<option value="61">61</option>
																<option value="63">63</option>
																<option value="64">64</option>
																<option value="65">65</option>
																<option value="67">67</option>
																<option value="71">71</option>
																<option value="72">72</option>
																<option value="73">73</option>
																<option value="75">75</option>
															</select>
															<span class="styled-arrow"></span>
														</div>
														
														<input value="" name="telefono" id="telefono" type="email" class=" text menor  omega  " style="width:72%;" placeholder="" onkeypress="return soloNumeros(event.charCode || event.keyCode);" maxlength="8" autocomplete="off">
													</label>
												</div>
												<div class="form-group">
													<label for="correo"><span class="bloque">E-mail*</span></label>
													<input value="" name="correo" id="correo" type="mail" class="form-control text menor  omega required_text " placeholder="" onkeypress="return email(event.charCode || event.keyCode);" autocomplete="off">
												</div>
											</div>
											<!-- columna 2-->
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="region" style="width:97.5%;">
														<span class="bloque">Región*</span>
														<div class="styled-select ui-selectmenu ui-widget ui-state-default ui-corner-all">
															<select name="region" id="region">
																<option value="-1" selected="selected">- Seleccione una Región -</option>
																
																	
																		
																		
																			<option value="0">I Región de Tarapacá</option>
																		

																	

																
																	
																		
																		
																			<option value="1">II Región de Antofagasta</option>
																		

																	

																
																	
																		
																		
																			<option value="2">III Región de Atacama</option>
																		

																	

																
																	
																		
																		
																			<option value="3">IV Región de Coquimbo</option>
																		

																	

																
																	
																		
																		
																			<option value="4">V Región de Valparaíso</option>
																		

																	

																
																	
																		
																		
																			<option value="5">VI Región del Libertador Gral. Bernardo OHiggins</option>
																		

																	

																
																	
																		
																		
																			<option value="6">VII Región del Maule</option>
																		

																	

																
																	
																		
																		
																			<option value="7">VIII Región del Biobío</option>
																		

																	

																
																	
																		
																		
																			<option value="8">IX Región de la Araucanía</option>
																		

																	

																
																	
																		
																		
																			<option value="9">X Región de Los Lagos</option>
																		

																	

																
																	
																		
																		
																			<option value="10">XI Región de Aisén del Gral. Carlos Ibáñez del Campo</option>
																		

																	

																
																	
																		
																		
																			<option value="11">XII Región de Magallanes y de la Antártica Chilena</option>
																		

																	

																
																	
																		
																		
																			<option value="12">Región Metropolitana de Santiago</option>
																		

																	

																
																	
																		
																		
																			<option value="13">XIV Región de Los Ríos</option>
																		

																	

																
																	
																		
																		
																			<option value="14">XV Región de Arica y Parinacota</option>
																		

																	

																
															</select>
															<span class="styled-arrow"></span>
														</div>
													</label>
												</div>
												<div class="form-group">
													<label for="comuna" style="width:97.5%;">
														<span class="bloque">Comuna*</span>
														<div class="styled-select ui-selectmenu ui-widget ui-state-default ui-corner-all">
															<select name="comuna" id="comuna" disabled="">
																<option value="-1" selected="selected">- Selecciona una Comuna -</option>
																
															</select>
															<span class="styled-arrow"></span>
														</div>
													</label>
												</div>
												<div class="form-group">
													<label for="renta" style="width:97.5%;">
														<span class="bloque">Tramo de renta liquida mensual*</span>
														<div class="styled-select ui-selectmenu ui-widget ui-state-default ui-corner-all">
															<select name="renta" id="renta">
																<option value="-1" selected="selected">- Selecciona tramo de renta -</option>
																
																	
																		
																		
																			<option value="0">$399.000 - o Menor</option>
																		
																	
																
																	
																		
																		
																			<option value="1">$400.000 - $799.000</option>
																		
																	
																
																	
																		
																		
																			<option value="2">$800.000 - $1.399.000</option>
																		
																	
																
																	
																		
																		
																			<option value="3">$1.400.000 - $2.999.000</option>
																		
																	
																
																	
																		
																		
																			<option value="4">$3.000.000 - o Superior</option>
																		
																	
																
															</select>
															<span class="styled-arrow"></span>
														</div>
													</label>
												</div>
												<div class="form-group">
													<input type="text" name="emailRobot" value="noTocado" class="none" sytle="display:none" autocomplete="off">
													<label for="codigoProducto" style="width:97.5%;">
														<span class="bloque">Producto de interés*</span>
														<div class="styled-select ui-selectmenu ui-widget ui-state-default ui-corner-all">
															<select name="codigoProducto" id="codigoProducto">
																<option value="-1" selected="selected">- Selecciona tu producto -</option>
																
																	
																
																	
																
																	
																
																	
																
																	
																
																	
																		
																			
																			
																			
																				<option value="006">Plan de Cuenta Corriente</option>
																			
																		
																	
																
																	
																		
																			
																			
																			
																				<option value="007">BBVA Wallet</option>
																			
																		
																	
																
																	
																		
																			
																			
																			
																				<option value="008">Tarjeta de Crédito</option>
																			
																		
																	
																
																	
																		
																			
																			
																			
																				<option value="009">Crédito de Consumo</option>
																			
																		
																	
																
																	
																		
																			
																			
																			
																				<option value="010">Crédito Hipotecario</option>
																			
																		
																	
																
															</select>
															<span class="styled-arrow"></span>
														</div>
													</label>
												</div>
											</div>
										</div>
										<footer class="row" style="padding-right:15px;">
											<ul class="c-botones-paginadorInferior mayor">
												<li class="siguiente inactivoValidacion" id="enviar"><span role="link" tabindex="0">Enviar tu Solicitud</span></li>
											</ul>
										</footer>
										<div class="row" style="margin-top:8px;">
											<div class="col-xs-12" style="text-align:right; display:none !important;">
												<div class="c-mensajes-notaPie obligatorio">
													<p style="margin-right: 10px; position: relative; top: -10x;"><b class="textoDestacado ">*</b>Todos los campos son obligatorios, excepto los señalados como opcionales</p>
												</div>
											</div>
										</div>
										<div class="row" id="cajaError">
											<div class="col-xs-12" style="text-align:right;">
												
											</div>
										</div>
									</div>
									<div id="bloqueCampana" class="col-xs-12 col-sm-6">
										
											<img class="banner-xm" src="https://www.bbva.cl/fbin/mult/3_tcm1106-530328.jpg?v=20160517AM">
											<img class="banner-xs" src="https://www.bbva.cl/fbin/mult/hazte-cliente-responsive_tcm1106-534186.jpg?v=20160517AM">
										
									</div>
									<div class="row" style="margin-top:8px;">
										<div class="col-xs-12" style="margin-left:4px; margin-right:4px; text-align:justify;">
											<hr>
											<div class="c-mensajes-notaPie">
												<p>1. Beneficio para personas naturales, vigente durante el mes de apertura del Plan y el inmediatamente siguiente. El abono de puntos se realizará el mes siguiente al de la compra.</p>
												<p>2. Beneficio válido para clientes que contraten "Pago Automático de Remuneración" en Cuenta Corriente.</p>
												<p>3. Beneficio válido para personas naturales que efectúen su primera compra durante el mes actual y el inmediatamente siguiente. El descuento se abonará en el estado de cuenta siguiente o subsiguiente al mes de la compra.</p>
											</div>
										</div>
									</div>
								</div>
							</form>
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