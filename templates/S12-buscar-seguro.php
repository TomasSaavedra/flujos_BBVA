<div id="filtro-seguros" class="container">

	<div id="catalogo-seguros">

		<div class="header-catalogo-seguros">
			<hgroup>
				<h2>En BBVA te cuidamos</h2>
				<h3>Conoce los seguros que tenemos para ti</h3>
			</hgroup>
			<img class="hidden-xs" src="img/ejecutivo.jpg">
			<aside class="links hidden-xs">
				<header>
					<h1>Licitación seguros</h1>
				</header>
				<div class="tab-pane active" style="padding:6%;">
					<div>
						<p>Queremos entregarte toda la información de las Pólizas de Seguro</p>
						<a href="#" class="btn small btn-seguros-siguiente">Más información</a>
					</div>					
				</div>
			</aside>
		</div>
			
		<div class="body-cataglo-seguros row">
  			<div class="col-md-5">
				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros en líena</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

  				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-fraude"></span>Seguros de Fraude</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

  				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-cesantia"></span>Seguros en Cesantía</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

  				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-auto"></span>Seguro Automotriz</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>
  			</div>


 			<div class="col-md-5">
				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-fraude"></span>Gestión de Siniestros</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

 				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-hogar"></span>Seguros de Hogar</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

  				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-accidentes"></span>Seguros de Accidentes Personales</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>

  				<div class="caja-catalogo-seguros">
  					<h3><span class="icon-32 blue ico-seguro-linea"></span>Seguros de Protección Total</h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin libero vel neque condimentum, sit amet eleifend massa condimentum. Praesent </p>
  					<a href="#;" class="btn-home-seguros btn-seguros-siguiente">Ver más</a>
  				</div>
 			</div>
		</div>
	</div>
<!-- tab content -->
	<div id="catalogo-content" class="tab-content" style="display:none;">

		<div class="tab-pane" id="mis-productos">
			<div class="content-column">
				<?php include 'includes/components/tables/seguros.html'; ?>
			</div>
			<div class="banner-column">
				<?php include 'includes/components/banners/seguros.html'; ?>
			</div>
		</div>

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
								<select id="select-seguros" class="selectpicker">
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
			  		<input type="text" class="form-control search autocomplete ui-autocomplete-input" placeholder="Buscar fondos..." id="movimiento" name="movimiento" data-json="includes/components/autocomplete/movements.php" autocomplete="off">
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
						<tbody>
							<tr style="border-top:1px solid #dcdcdc!important;">
								<th class="hide-mobile">TIPO DE SEGURO</th>
								<th class="hide-mobile">SEGURO</th>
								<th width="350" class="hide-mobile">CARACTERÍSTICAS BÁSICAS</th>
								<th class="hide-mobile">PRIMA DESDE</th>
								<th class="hide-mobile">CONTRATAR</th>
							</tr>
								<tr>
									<td class="text-left color-base hide-mobile">Incendio <br>Sismo <br>Robo</td>
									<td class="text-left tLeft"><b>SEGUROS DE HOGAR</b> <small>PLAN A</small></td>
									<td class="text-left hide-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> 
										<a href="includes/components/movements/seguros/dialogs/detalle-seguro.html" class="modal-trigger color-blue">Detalle coberturas y exclusiones del seguro</a>
									</td>
									<td class="text-left"><b>UF 6,80</b> <small>Mensual</small></td>		
									<td class="vertical-middle"><a class="toRight btn success mRight btn-contratar-seguro" href="">Contratar <img src="img/bullet-contratar.png"></a></td>					
								</tr> 
								<tr>
									<td class="text-left color-base hide-mobile">Incendio <br>Sismo </td>
									<td class="text-left tLeft"><b>SEGUROS DE HOGAR</b> <small>PLAN B</small></td>
									<td class="text-left hide-mobile">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>
										<a href="includes/components/movements/seguros/dialogs/detalle-seguro.html" class="modal-trigger color-blue">Detalle coberturas y exclusiones del seguro</a>
									</td>
									<td class="text-left"><b>UF 6,80</b> <small>Mensual</small></td>		
									<td class="vertical-middle">
										<a class="toRight btn success mRight btn-contratar-seguro" href="">
											Contratar <img src="img/bullet-contratar.png">
										</a>
									</td>						
								</tr> 

								<tr>
									<td class="text-left color-base hide-mobile">Incendio <br>Robo </td>
									<td class="text-left tLeft"><b>SEGUROS DE HOGAR</b> <small>PLAN C</small></td>
									<td class="text-left hide-mobile">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>
										<a href="includes/components/movements/seguros/dialogs/detalle-seguro.html" class="modal-trigger color-blue">Detalle coberturas y exclusiones del seguro</a>
									</td>
									<td class="text-left"><b>UF 6,80</b> <small>Anual</small></td>		
									<td class="vertical-middle">
										<a class="toRight btn success mRight btn-contratar-seguro" href="">
											Contratar <img src="img/bullet-contratar.png">
										</a>
									</td>						
								</tr> 

								<tr>
									<td class="text-left color-base hide-mobile">Incendio </td>
									<td class="text-left tLeft"><b>SEGUROS DE HOGAR</b> <small>PLAN D</small></td>
									<td class="text-left hide-mobile">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>
										<a href="includes/components/movements/seguros/dialogs/detalle-seguro.html" class="modal-trigger color-blue">Detalle coberturas y exclusiones del seguro</a>
									</td>
									<td class="text-left"><b>UF 6,80</b> <small>Anual</small></td>		
									<td class="vertical-middle text-left">Sólo es contratable <br> desde<br> una oficina BBVA</td>						
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
	<?php include 'S12-contratar-seguro.php'; ?>


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

	});
</script>