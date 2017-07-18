<script type="text/javascript" src="js/soho-ahorro.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<script type="text/javascript" src="js/jquery.price_format.1.8.min.js"></script>

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
				<div class="content-column">
					<?php include 'includes/components/tables/ahorro.html'; ?>
					<?php include 'includes/components/tables/depositos.html'; ?>
					<?php include 'includes/components/tables/fondos-mutuos.html'; ?>
					<?php include 'includes/components/tables/acciones.html'; ?>
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/avisos.html'; ?>
					<?php include 'includes/components/banners/operaciones-favoritas.html'; ?>
				</div>
			</div>
			<div class="tab-pane active" id="catalogo-productos">

				<div class="page-inversion"><!--page-inversion-->
					<h2>Te proponemos estas alternativas:</h2>

					<div class="seleccion-inversion radius"><!--seleccion-inversion-->

						<div class="datos-inversion"><!--datos-inversion-->

							<div class="campos"><!--campos-->
								<label>Monto</label>
								<input type="text" class="form-control required number miles icon-monto icon-monto-left text-right pull-left" value="" id="monto-inversion">
							</div><!--Fin campos-->

							<div class="campos dos"><!--campos-->
								<label>Horizonte de inversión</label>
								<div class="select">
									<select class="selectpicker pull-left">
										<option class="selected" value="">Seleccione...</option>
										<option value="CP">Corto plazo</option>
									</select>
								</div>
							</div><!--Fin campos-->

							<div class="campos"><!--campos-->
								<label>Riesgo</label>
								<div class="select">
									<select class="selectpicker pull-left">
										<option class="selected">Seleccione...</option>
										<option value="BJ">Bajo</option>
									</select>
								</div>
							</div><!--Fin campos-->

						</div><!--datos-inversion-->

						<button type="button" class="btn btn-center btn-large disabled boton-actualizar">Actualizar</button>

					</div><!--Fin seleccion-inversion-->


					<h2 class="margen2-bottom">Inversiones destacadas</h2>
					<div class="tabs-color"><!--tabs-->

						<ul id="myTab" class="nav nav-tabs">
					      <li><a href="#tabs1" data-toggle="tab">Depósitos</a></li>
					      <li class="active"><a href="#tabs2" data-toggle="tab">Fondos</a></li>
					    </ul>

						<div id="myTabContent" class="tab-content">

							<div class="tab-pane fade" id="tabs1"><!--Tabs 01-->
						        <p>Sin información</p>
						      </div><!--Fin Tabs 01-->

						     <div class="tab-pane fade active in" id="tabs2"><!--Tabs 02-->
						     	<a href="?src=S08-filtrar-catalogo.php" class="btn pull-right btn-catalogo"><span class="icon-24 white b05-fondodeinversion"></span> Ver catálogo completo</a>

						        <div class="cont-table margen2-top"><!--cont-table-->
						        	<div class="table">
						        		<div class="thead"><!--thead-->
						        			<div class="tr">
						        				<div class="th hide-mobile"></div>
						        				<div class="th">
						        					<span>UN FONDO</span>
						        					<a class="btn-ficha" href="javascript:void();">Ver ficha</a>
						        				</div>
						        				<div class="th">
						        					<span>UN FONDO</span>
						        					<a class="btn-ficha" href="javascript:void();">Ver ficha</a>
						        				</div>
						        				<div class="th hide-mobile">
						        					<span>UN FONDO</span>
						        					<a class="btn-ficha" href="javascript:void();">Ver ficha</a>
						        				</div>
						        			</div>
						        		</div><!--Fin thead-->
						        		<div class="tbody">
						        			<div class="tr">
						        				<div class="th hide-mobile">Clasificación</div>
						        				<div class="td">Garantizados Protección</div>
						        				<div class="td">Garantizados Protección</div>
						        				<div class="td hide-mobile">Garantizados Protección</div>
						        			</div>
						        			<div class="tr hide-mobile">
						        				<div class="th">Rentabilidad Año en Curso</div>
						        				<div class="td"></div>
						        				<div class="td"></div>
						        				<div class="td"></div>
						        			</div>
						        			<div class="tr">
						        				<div class="th hide-mobile">Rentabilidad 1 año</div>
						        				<div class="td">rentabilidad Año</div>
						        				<div class="td">rentabilidad Año</div>
						        				<div class="td hide-mobile">rentabilidad Año</div>
						        			</div>
						        			<div class="tr">
						        				<div class="th hide-mobile">Bonificación</div>
						        				<div class="td">Hasta $ 5.000</div>
						        				<div class="td">Hasta $ 5.000</div>
						        				<div class="td hide-mobile">Hasta $ 5.000</div>
						        			</div>
						        			<div class="tr">
						        				<div class="td hide-mobile"></div>
						        				<div class="td"><a class="modal-trigger btn" href="content.php?src=S08-solicitud-inversion.php">Contratar</a></div>
						        				<div class="td"><a class="modal-trigger btn" href="content.php?src=S08-solicitud-inversion.php">Contratar</a></div>
						        				<div class="td hide-mobile">Sólo es contratable desde una oficina BBVA</div>
						        			</div>
						        		</div>
						        	</div>
						        </div><!--Fin cont-table-->

							    <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>
									El perfil de inversión como le tenemos registrado es de <strong>Conservador</strong> y en estra busqueda ha elegido un riesgo <strong>Moderado</strong><br>
									La lista de productos recomendados tienen un <strong>Mayor riesgo</strong> del que según su perfil debería asumir. <br>
									Si desea cambiar su perfil de inversionista, puede hacerlo desde el <strong>Área personal.</strong>
								</p>
						      </div><!--Fin Tabs 02--> 

						    </div>

					</div><!--Fin tabs-->

					<br><br>
					<a href="includes/components/movements/ahorro-inversiones/catalogo-productos/dialogs/identificarse.html" class="modal-trigger">Identificarse</a><br>

				</div><!--Fin page-inversion-->


			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
$('.miles').priceFormat({
prefix: '',
centsSeparator: '',
thousandsSeparator: '.',
centsLimit: 0
});
});
</script>