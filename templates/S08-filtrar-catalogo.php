<div class="container">
	<div class="section-tabs">
		
		<!-- title -->
		<h2 class="title-sh">
			Ahorro e inversión 
		</h2>

		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li><a href="#mis-productos">Mis productos</a></li>
			<li><a href="?src=S21-portal-inversiones.php" >Metas de Ahorro</a></li>
			<li class="active"><a href="#catalogo-productos">Catálogo de productos</a></li>

		</ul>
		<hr class="separador">

		
		
		<div class="tab-content">

			<div class="tab-pane" id="mis-productos">
				<div class="content-column" id="ahorro-inversion">
					<?php include 'includes/components/tables/ahorro.html'; ?>
					<?php include 'includes/components/tables/depositos.html'; ?>
					<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
					<?php include 'includes/components/tables/acciones.html'; ?>
				</div>
				<div class="banner-column" id="ahorro-lateral">
					<?php include 'includes/components/banners/perfil-inversor.html'; ?>
					<?php include 'includes/components/banners/consolidado.html'; ?>
					<?php include 'includes/components/banners/analista-fondos.html'; ?>
					<?php include 'includes/components/banners/compra-venta-divisas.html'; ?>
					<?php include 'includes/components/banners/indicadores-economicos.html'; ?>
				</div>
			</div>
			<div class="tab-pane active filtro2" id="catalogo-productos">

				<div class="btn-recomendacion"><!--btn-recomendacion-->
					<a class="btn" type="button"><span class="icon-16 white d01-asesor"></span> Ver tu recomendación</a>
				</div><!--Fin btn-recomendacion-->

				<!-- Nav tabs -->
			<ul class="nav nav-tabs personalizada tabs-filtro-catalogo">
			  <li>
			  	<a href="#buscar" data-toggle="tab">
			  		<h3>Buscar Fondos <div class="lupa"></div></h3>
			  		<p>Introducir el nombre o término<br> que se desea buscar</p>
			  	</a>
			  </li>
			  <li class="active">
			  	<a href="#filtrar" data-toggle="tab">
			  		<h3>Filtrar Fondos <div class="manejador"></div></h3>			  		
			  		<p>Aplicar filtros al listado<br> de resultados</p>
			  	</a>
			  </li>
			 <li id="catalogoCartolasHistoricas">	<!-- TAB Filtrar cartolas histï¿½ricas-->
				<a  href="#cartolaHistorica" data-toggle="tab">
					<h3>Cartolas Históricas<div></div></h3>
					<p>listado de cartolas históricas<br></p>
				</a>
	  		</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content" style="padding: 5% 0 3% 0">
			  <div class="tab-pane active" id="filtrar">
			  	<div class="col-md-4">
			  		<div class="row filteroptions bkgWhite">									
						<p class="mobileWidth80">Tipo de fondo</p>
							<select class="selectpicker" data-container="body" data-width="160px">
								<option selected>Fondo de inversión</option>
								<option>Fondo 01</option>
								<option>Fondo 02</option>
								<option>Fondo 03</option>
								<option>Fondo 04</option>									
							</select>																	
					</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div class="row filteroptions bkgWhite">									
						<p class="mobileWidth80">Nombre</p>
							<select class="selectpicker" data-container="body" data-width="160px" style="display: none;">
								<option selected>Seleccione</option>
								<option>Selección 01</option>
								<option>Selección 02</option>
								<option>Selección 03</option>
								<option>Selección 04</option>									
							</select>																	
					</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div class="row filteroptions bkgWhiteNob">									
						<p class="mobileWidth80">Serie</p>
							<select class="selectpicker" data-container="body" data-width="160px" style="display: none;">
								<option selected>Seleccione</option>
								<option>Selección 01</option>
								<option>Selección 02</option>
								<option>Selección 03</option>
								<option>Selección 04</option>									
							</select>																	
					</div>
			  	</div>
			  	
			  	<div class="resultados-content">
						<div class="itemBlock">
							<a class="float-right btn boton-limpiar" type="button" style="margin: 30px 10px; 0 0;">Limpiar</a>
							<a class="float-right btn boton-filtrar" id="filtrar-tabla" type="button" style="margin: 30px 0 0 0;">Filtrar</a>
						</div>
					</div>				
			  </div>
			  <div class="tab-pane" id="buscar">
			  	
			  	<div class="col-md-12 height50">
			  		<div class="row filteroptions bkgWhiteNob">
			  		<input type="text" class="form-control search autocomplete ui-autocomplete-input" placeholder="Buscar fondos..." id="movimiento" name="movimiento" data-json="includes/components/autocomplete/movements.php" autocomplete="off">
			  		</div>
			  	</div>
				<div class="linea"></div>
			  	<div class="itemBlock">
					<a class="toRight btn mRight boton-limpiar" type="button">Limpiar</a>
					<a class="toRight btn mRight boton-filtrar" id="filtrar-tabla" type="button">Filtrar</a>
				</div>
			  </div>
			</div>

			<article class="capgemini-tables tabla-resultados-filtro" id="tabla-res" style="display:none;">
					<div class="tables-body no-hover">
						<table>
							<tbody>
								<tr style="border-top:1px solid #dcdcdc!important;">
									<th width="40" class="hide-mobile"><img src="img/tickete.png" /></th>
									<th width="207" class="hide-mobile">FONDO MUTUO</th>
									<th width="233" class="hide-mobile">REMUNERACIÓN ANUAL</th>
									<th width="229" class="hide-mobile">COMISION DE SALIDA</th>
									<th width="493" class="hide-mobile">CARACTERÍSTICAS BÁSICAS DEL FONDO MUTUO</th>
									<th width="103" class="hide-mobile">CONTRATAR</th>
								</tr>
								<tr>
									<td class="hide-mobile vAlign"><label for="producto-check" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check" name="producto-check" type="checkbox"></label></td>
									<td class="tLeft"><b>MONEY MARKET</b>
										<small>SERIE A</small>
									</td>
									<td class="tLeft">
										<strong>Hasta 1,1%</strong>
									</td>
									<td class="tCenter hide-mobile"> 
										<p>Sin comisión de salida</p>          
									<td class="tLeft hide-mobile">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</td>	
									<td class="mobileWidth">
										<a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
									</td>								
								</tr> 
								<tr>            
									<td class="hide-mobile vAlign"><label for="producto-check02" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check02" name="producto-check02" type="checkbox"></label></td>
									<td class="tLeft"><b>MONEY MARKET</b>
										<small>SERIE B</small>
									</td>
									<td class="tLeft">
										<strong>Hasta 1,1%</strong>
									</td>
									<td class="tCenter hide-mobile"> 
										<p>Sin comisión de salida</p>          
									<td class="tLeft hide-mobile">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</td>	
									<td class="mobileWidth">
										<a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
									</td>									
								</tr>
								<tr>            
									<td class="hide-mobile vAlign"><label for="producto-check03" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check03" name="producto-check03" type="checkbox"></label></td>
									<td class="tLeft"><b>MONEY MARKET</b>
										<small>SERIE C</small>
									</td>
									<td class="tLeft">
										<strong>Hasta 1,1%</strong>
									</td>
									<td class="tCenter hide-mobile"> 
										<p>Sin comisión de salida</p>          
									<td class="tLeft hide-mobile">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</td>	
									<td class="mobileWidth">
										<a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
									</td>									
								</tr>
								<tr>            
									<td class="hide-mobile vAlign"><label for="producto-check04" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check04" name="producto-check04" type="checkbox"></label></td>
									<td class="tLeft"><b>MONEY MARKET</b>
										<small>SERIE GLOBAL</small>
									</td>
									<td class="tLeft">
										<strong>Hasta 1,1%</strong>
									</td>
									<td class="tCenter hide-mobile"> 
										<p>Sin comisión de salida</p>          
									<td class="tLeft hide-mobile">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</td>	
									<td class="tLeft mobileWidth">
										<p>Sólo es contratable desde una oficina BBVA</p>
									</td>									
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
						        				<div class="td"><a class="btn" href="?src=S08-solicitud-inversion.php" type="button">Contratar</a></div>
						        				<div class="td"><a class="btn" href="?src=S08-solicitud-inversion.php" type="button">Contratar</a></div>
						        			</div>
						        		</div>
						        	</div>
						        </div><!--Fin cont-table-->

							    
						      </div><!--Fin Tabs 02--> 

						    </div>

				</div><!--Fin tabs-->

				<div class="col-md-12 height50 tabla-resultados-filtro">
					<button id="btn-comp" href="?src=S08-rentabilizar.php" class="btn hide accion hide-mobile" type="button" disabled>Comparar seleccionados</button>
				</div>


			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	
	
	
	$("#slider3").slider({
		range: "min",
		animate: true,
		value:2,
		min: 1,
		max: 3,
		step: 1,
			slide: function(event, ui) {
				$(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
			},
			create: function(event, ui) {
				$(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
			}
	});

	$('.colorWhite').click(function(){
		if($("#producto-check02").is(':checked') && $("#producto-check03").is(':checked')){
			//alert('se cumple');
			$('.accion').prop('disabled', false);
		}else{
			//alert('no se cumple');
			$('.accion').prop('disabled', true);
		}
	});
	

	
	$('.accion').click(function(){
		$(this).hide();
		$('.tabla-resultados-filtro').hide();
		$('.tabs-color').show();
	});

	$('#filtrar-tabla').click(function(){

		$('#tabla-res').show();
		$('#btn-comp').removeClass("hide");
	});
	
});

$(document).on('click', '.boton-limpiar', function(event) {
	event.stopPropagation();
	
	$( "#slider3" ).slider( "value", 1 );
	$('.tabla-resultados-filtro').hide();
	$('.tabs-color').hide();
});

$(document).on('click', '.boton-filtrar', function(event) {
	event.stopPropagation();
	$('.tabla-resultados-filtro').show();
});

</script>

