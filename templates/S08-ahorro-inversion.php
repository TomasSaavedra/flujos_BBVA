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

			<!-- Nav tabs -->
			<ul class="nav nav-tabs personalizada tabs-filtro-catalogo">
			  <li>
			  	<a href="#buscar" data-toggle="tab">
			  		<h3>Buscar Fondos <div class="lupa"></div></h3>
			  		<p>Introducir el nombre o término<br> que se desea buscar</p>
			  	</a>
			  </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="buscar" class="tab-pane active">
					<div class="col-md-9 height50">
						<div class="row filteroptions bkgWhiteNob">
							<input type="text" class="form-control search" id="terminosBusquedaValorCuota" name="terminosBusquedaValorCuota" tabindex="1" onkeypress="actualizaOpcionesDeFiltrado();" autocomplete="off">
						</div>
					</div>
					<div class="col-md-3 height50" style="margin-top:4px;">
						<div class="row filteroptions bkgWhiteNob">
							<input type="text" class="datepicker form-control required date dateField hasDatepicker" onchange="activaBtnConsultar();" id="fechaConsultaValorCuota" name="fechaConsultaValorCuota" data-format="dd/mm/yy" placeholder="dd/mm/aaaa" data-mask="99/99/9999" autocomplete="off">
						</div>
					</div>
					<div class="linea"></div>
					<div class="itemBlock">
						<a id="btn-consultar-ai" class="toRight btn mRight boton-consulta" type="button" onclick="actualizarConsultaValorCuotaFFMM();">Consultar</a>
						<a class="toRight btn mRight boton-filtro" type="button" onclick="limpiarFiltrosConsultaValorCuotaFFMM();" disabled="disabled">Limpiar</a>
						<a class="toRight btn mRight boton-filtro" type="button" onclick="filtrarConsultaValorCuotaFFMM();" disabled="disabled">Filtrar</a>
					</div>
				</div>
			</div>

			<article class="capgemini-tables tabla-resultados-filtro hide" id="table-resultado-ai">
				<div class="tables-body no-hover">
					<table id="tablaResultadosFiltroValoresCuotaFFMM">
						<tbody><tr style="border-top:1px solid #dcdcdc!important;"><th class="hide-mobile span-4">NOMBRE FONDO MUTUO</th><th class="tCenter hide-mobile span-4">VALOR CUOTA 11/02/2015</th><th class="tCenter hide-mobile span-4">VALOR CUOTA FECHA ACTUAL</th></tr><tr><td class="tLeft"><b>DISPONIBLE - SERIE A</b></td><td class="tCenter"><strong>$ 1.925,4102</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>DISPONIBLE - SERIE E</b></td><td class="tCenter"><strong>$ 1.144,8176</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>DISPONIBLE - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.133,1822</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>DISPONIBLE - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.086,6493</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>DISPONIBLE - SERIE GLOBAL</b></td><td class="tCenter"><strong>$ 1.055,1864</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE A</b></td><td class="tCenter"><strong>$ 2.689,9713</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE APV</b></td><td class="tCenter"><strong>$ 2.931,3763</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE E</b></td><td class="tCenter"><strong>$ 1.301,3725</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.261,4397</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.217,9453</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 1.318,5725</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FUTURO - SERIE V</b></td><td class="tCenter"><strong>$ 1.830,7796</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE V</b></td><td class="tCenter"><strong>$ 2.174,0429</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE E</b></td><td class="tCenter"><strong>$ 1.246,8441</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE APV</b></td><td class="tCenter"><strong>$ 1.247,7203</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.221,3000</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.186,8748</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>FAMILIA - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 1.124,6929</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE PERSONA</b></td><td class="tCenter"><strong>$ 802,4603</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE APV</b></td><td class="tCenter"><strong>$ 903,8011</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE A</b></td><td class="tCenter"><strong>$ 1.102,0318</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE E</b></td><td class="tCenter"><strong>$ 1.023,3866</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.079,9533</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.118,4041</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA A - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 1.116,9998</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>MONEY MARKET - SERIE A</b></td><td class="tCenter"><strong>$ 1.822,6300</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>MONEY MARKET - SERIE B</b></td><td class="tCenter"><strong>$ 1.527,7414</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>MONEY MARKET - SERIE E</b></td><td class="tCenter"><strong>$ 1.316,3811</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>MONEY MARKET - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 1.286,3722</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>MONEY MARKET - SERIE V</b></td><td class="tCenter"><strong>$ 0,0000</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE PERSONA</b></td><td class="tCenter"><strong>$ 1.494,2537</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE APV</b></td><td class="tCenter"><strong>$ 2.050,7983</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE E</b></td><td class="tCenter"><strong>$ 1.040,5242</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.009,9011</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.064,3309</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 913,2215</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA C - SERIE A</b></td><td class="tCenter"><strong>$ 990,4762</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>CORPORATIVO - SERIE A</b></td><td class="tCenter"><strong>$ 2.175,1387</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>CORPORATIVO - SERIE B</b></td><td class="tCenter"><strong>$ 1.527,0414</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>CORPORATIVO - SERIE E</b></td><td class="tCenter"><strong>$ 1.483,0527</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>CORPORATIVO - SERIE V</b></td><td class="tCenter"><strong>$ 1.313,6923</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE V</b></td><td class="tCenter"><strong>$ 1.645,6641</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE A</b></td><td class="tCenter"><strong>$ 1.020,9851</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE E</b></td><td class="tCenter"><strong>$ 1.035,8592</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE INVER</b></td><td class="tCenter"><strong>$ 1.027,3048</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE PATRI</b></td><td class="tCenter"><strong>$ 1.063,8203</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE GLOBA</b></td><td class="tCenter"><strong>$ 1.041,1187</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>ACTIVA D - SERIE APV</b></td><td class="tCenter"><strong>$ 1.022,0527</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>BONOS LATAM - SERIE A</b></td><td class="tCenter"><strong>$ 1.543,3433</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>BONOS LATAM - SERIE E</b></td><td class="tCenter"><strong>$ 1.145,8054</strong></td><td class="tCenter"><strong>-</strong></td></tr><tr><td class="tLeft"><b>SIN DATOS</b></td><td class="tCenter"><strong>$ </strong></td><td class="tCenter"><strong>$ </strong></td></tr></tbody>
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

			<!--div class="col-md-12 height50 tabla-resultados-filtro">
				<button href="?src=S08-rentabilizar.php" class="btn accion hide-mobile" type="button" disabled>Comparar seleccionados</button>
			</div-->


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

	$('#btn-consultar-ai').click(function(){
		$('#table-resultado-ai').removeClass("hide");
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


