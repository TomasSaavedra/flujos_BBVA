<script type="text/javascript" src="js/soho-grafico-cuentas-evolucion-mis-gastos.js"></script>
<div class="container section-cuentas">
	<div class="section-tabs">
		
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a> 
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a> 
		</div>

		<!-- title -->
		<h2 class="title-sh">
			Cuentas
		</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>

		
		<hr class="separador">
		
		<div class="tab-content">


				


				<div class="tab-pane active" id="mis-productos">

					<div class="cont-cuentas"><!--cont-cuentas-->
						<h1>Análisis y evolución de mis cuentas <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" 
						data-original-title="Detalle de los abonos y cargos de sus cuentas en un rango determinado y la evolución de sus cuentas. "></span>
						<a href="javascript:history.back()" class="close-icon cerrar-cuentas"></a>
					</h1>

					<div class="tabs-white">

						<ul class="nav nav-tabs " role="tablist">
						  <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Evolución Ingresos/Gastos</a></li>
						  <li><a href="#tab2" role="tab" data-toggle="tab">Distribución</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content"><!--tab-content-->

						  <div class="tab-pane active js-tab1" id="tab1"><!--Evolución de mis gastos-->
						  	
						  	<div class="head-cuentas row">
						  		<div class="col-md-6">
						  			<h3 class="no-margen">Evolución de mis gastos</h3>
						  		</div>
						  		<div class="col-md-3">
						  			<p class="color-blue">01/06/2014 - 01/09/2014</p>
						  		</div>	
						  		<div class="col-md-3">
						  			<p class="color-blue">Monto total gastos: <strong>$ 68.980</strong></p>
						  		</div>	
						  	</div>
 							
						  	<div class="grafico-evolucion grafico-torta">
						  		<div id="grafico-evolucion-gastos" style="display:block; min-width: 310px; height: 400px; max-width: 600px;">
						  		</div>
						  		<div class="datos-grafico"><!--datos-grafico-->
						  			<h4 class="color-base">Lortem</h4>
						  			<ul>
						  				<li>
						  					<span class="ico-grafico verde"></span> 
						  					Luz $2.300 (12%)
						  				</li>
						  				<li>
						  					<span class="ico-grafico naranjo"></span> 
						  					Gas $2.400 (13%)
						  				</li>
						  				<li>
						  					<span class="ico-grafico cafe"></span> 
						  					Sin categorizar $1.300 (12%)
						  				</li>
						  				<li>
						  					<span class="ico-grafico azul"></span> 
						  					Seguros $56.000 (49%)
						  				</li>
						  				<li>
						  					<span class="ico-grafico amarillo"></span> 
						  					Telefonía celular $42.000 (36%)
						  				</li>
						  			</ul>
						  		</div><!--datos-grafico-->
						  	</div>

                           
                            <!--grafico-torta-->

						  	<div class="grafico-evolucion grafico-barra" style="display:none;"><!--grafico-barra-->

						  		<div class="info-colores info-evolucion-gastos"><!--info-evolucion-->
						  			<ul>
						  				<li><span class="ico-verde"></span>Telefonía celular</li>
						  				<li><span class="ico-amarillo"></span>Seguros</li>
						  				<li><span class="ico-azul"></span>Luz</li>
						  				<li><span class="ico-naranjo"></span>Gas</li>
						  				<li class="last"><span class="ico-celeste "></span>Sin categorizar</li>
						  			</ul>
						  		</div><!--Fin info-evolucion-->

						  		<div id="grafico-evolucion-barra"  style="width: 810px; height: 400px; margin: 0 auto">
						  		</div>
								
								<div class="pag-evolucion">
									<a href="javascript:;" class="btn-ant"></a>
									<ul>
										<li>Ene.</li>
										<li>Mar.</li>
										<li class="last">Abr.</li>
									</ul>
									<a href="javascript:;" class="btn-fin"></a>
								</div>

						  	</div><!--grafico-barra-->
						  		
						  	<section class="filtro-cuentas"><!--filtro-cuentas-->
						  		<div class="row">
						  			<div class="col-md-5"><!--col-md-5-->
							  			<div class="option"><!--option-->
								  			<label for="">Viendo</label>
									  		<div class="select">
												<select class="selectpicker">
													<option value="01" selected>Gastos</option>
												</select>
											</div>
								  		</div><!--Fin option-->
						  			</div><!--Fin col-md-5-->

						  			<div class="col-md-5"><!--col-md-5-->
								  		<div class="option"><!--option-->
											<label for="">En periodo</label>
									  		<div class="select">
												<select class="selectpicker">
													<option value="01" selected>Últimos 3 meses</option>
													<option value="02">Últimos 6 meses</option>
												</select>
											</div>
										</div><!--Fin option-->					  				
						  			</div><!--Fin col-md-5-->

						  			<div class="col-md-2"><!--col-md-2-->
						  				<div class="btnChart">
						  					<a class="chart chart-torta active" href="" title=""></a>
						  					<a class="chart chart-bars" href="" title=""></a>
						  				</div>
						  			</div><!--Fin col-md-2-->
						  		</div>
							  		
						  	</section><!--Fin filtro-cuentas-->
							  
							 <div class="detalle-gastos"  style="right: -35%; display:block"><!--detalle-gastos-->
							 	<a class="activar abrir-detalle-gastos" href="javascript:;" title=""></a>
							 	<div class="inner-gastos"><!--inner-gastos-->

							 		<div class="head-gastos">
							 			<p>01/06/2014 - 01/09/2014</p>
							 			<button type="button" class="close-icon cerrar-detalles-gastos"></button>
							 		</div>

							 		<div class="body-gastos"><!--body-gastos-->
							 			<table class="table-capgemini table-pointer">
								 			<thead>
								 				<tr>
								 					<th>FECHA</th>
								 					<th>CONCEPTO</th>
								 					<th>MONTO</th>
								 				</tr>
								 			</thead>
								 			<tbody>
								 				<tr class="modal-trigger" data-href="includes/components/movements/seguros/dialogs/detalle-gastos.html">
								 					<td>28/05/2014</td>
								 					<td class="color-blue"><strong>Agua</strong></td>
								 					<td class="text15">$ 1.000</td>
								 				</tr>
								 				<tr class="modal-trigger" data-href="includes/components/movements/seguros/dialogs/detalle-gastos.html">
								 					<td>28/05/2014</td>
								 					<td class="color-blue"><strong>Agua</strong></td>
								 					<td class="text15">$ 1.000</td>
								 				</tr>
								 				<tr class="modal-trigger" data-href="includes/components/movements/seguros/dialogs/detalle-gastos.html">
								 					<td>28/05/2014</td>
								 					<td class="color-blue"><strong>Agua</strong></td>
								 					<td class="text15">$ 1.000</td>
								 				</tr>
								 				<tr class="modal-trigger" data-href="includes/components/movements/seguros/dialogs/detalle-gastos.html">
								 					<td>28/05/2014</td>
								 					<td class="color-blue"><strong>Agua</strong></td>
								 					<td class="text15">$ 1.000</td>
								 				</tr>
								 			</tbody>
								 		</table>
							 		</div><!--Fin body-gastos-->
								 	
							 		<ul class="pagination pagination-default">
								      <li class="disabled prev"><a href="#"></a></li>
								      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								      <li><a href="#">2</a></li>
								      <li><a href="#">3</a></li>
								      <li><a href="#">4</a></li>
								      <li><a href="#">5</a></li>
								      <li class="next"><a href="#"></a></li>
								   </ul>

							 	</div><!--inner-gastos-->
							 </div><!--Fin detalle-gastos-->

						  </div><!--Fin Evolución de mis gastos-->

						  <div class="tab-pane js-tab2" id="tab2"><!--tabs2-->

						  	<div class="head-cuentas row">
						  		<div class="col-md-6">
						  			<h3 class="no-margen">Distribución</h3>
						  		</div>
						  		<div class="col-md-3">
						  			<p class="color-blue">01/06/2014 - 01/09/2014</p>
						  		</div>	
						  	</div>

						  	<div class="info-colores info-colores-distribucion"><!--info-evolucion-->
						  			<ul>
						  				<li><span class="ico-azul"></span>Ingresos</li>
						  				<li class="last"><span class="ico-celeste"></span>Gastos</li>
						  			</ul>
						  		</div><!--Fin info-evolucion-->

						  	<div class="grafico-evolucion grafico1" id="grafico-distribucion-barra" style="width: 880px; height: 350px; margin: 0 auto; display:block"><!--grafico-torta-->
						  	</div><!--grafico-torta-->

						  	<div class="grafico-evolucion grafico2" style="display:none"><!--grafico-barra-->

						  		<div id="grafico-distribucion-barra2">
						  		</div>

						  		<p class="ingreso">Ingresos<br> <strong>$65.000</strong></p>
						  		<p class="gastos">Gastos <br><strong>$65.000</strong></p>
						  		<p class="deficit">Deficit <br><strong>$56.000</strong></p>

						  	</div><!--grafico-barra-->
						  		
						  	<section class="filtro-cuentas"><!--filtro-cuentas-->
						  		<div class="row">

						  			<div class="col-md-12"><!--col-md-12-->
						  				<div class="btnChart">
						  					<a class="chart chart-bars active js-chart1" href="" title=""></a>
						  					<a class="chart chart-distribucion js-chart2" href="" title=""></a>
						  				</div>
						  			</div><!--Fin col-md-12-->
						  		</div>
							  		
						  	</section><!--Fin filtro-cuentas-->

						  </div><!--tabs2-->

						  	<div class="row">
						  		<div class="col-md-8 col-md-offset-2">
						  			<div class="block-warning iconed-24"><!--block-warning-->
								  		<span class="icon-24  m03-aviso"></span>
								  		<p>Se consideran gastos fijos los pagos que un cliente ha realizado a través de:</p>
										<ul>
											<li>Servipag. Más información</li>
											<li>Pago Automático con tarjeta de crédito (PAT).  <a href="" title="">Contratar nuevo PAT</a></li>
											<li>Pago automático con cuenta corriente (PAC). <a href="" title=""> Contratar nuevo PAC</a></li>
										</ul>
							  		</div><!--Fin block-warning-->
						  		</div>
						  	</div>					  
						</div><!--Fin tab-content-->


					</div>
					</div><!--Fin cont-cuentas-->
				</div>
				<div class="tab-pane" id="catalogo-productos">
					<?php include 'S12-buscar-seguro.php'; ?>
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="js/soho-seguros.js"></script>