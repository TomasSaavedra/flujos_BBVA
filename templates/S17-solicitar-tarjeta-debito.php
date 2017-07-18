<link rel="stylesheet" href="css/one-click.css" />
<link rel="stylesheet" href="css/coronita/coronita.css" />
<style type="text/css">

	
	.checklist {
		width: 31px;
    	height: 22px;
    	float: left;
    	background-size: 16px 16px;
    	background: url(img/tick-active-small.png) no-repeat;
	}

	.textList {
		margin-top: -6px;
		display: inline;
	}

	.sol-tar-adicional {
	    text-align: center;
    	background: #f8f8f5;
    	margin: 0px;
    	border: 5px solid #F5F5F5;
	}

	.sol-tar-adicional .inner {
		background: #F8F8F5;
		padding-top: 10px
	}

	.sol-tar-adicional .inner h1{
	    font-size: 16px;
	}

	.sol-tar-adicional .tarjeta {
    	width: 65% !important;
    	margin: 0 auto;
	}

	.sol-tar-adicional .cont {
	    background: #F5F5F5;
	    padding: 0px 20px 20px 20px;
	}
	.ico-sucursal {
		background:url('../maqueta-nueva-web/css/img/ico-sucursal.png');
		background-repeat: no-repeat;
    	margin: -2px 8px 0px 0px;
    	display: inline-block;
	    width: 16px;
	    height: 16px;
	    vertical-align: middle;
	}

    .one-click .bootstrap-select.btn-group .btn .filter-option {
	    color: #0065b7 !important; 
	    font-size: 13px;
	    font-family: "BBVA Web Book";
	}

	.alignLeft {
	  float: left !important; }
	.alignRight {
	  float: right !important; }

	.sucursalItem {
		color:#71777f; text-align: left; font-size: 12px; line-height: 18px;
	}
	.sucursalDerecha {
		float: left; padding-right: 8px;
	}
	
	.sucursalLink {
		clear: both; float: left; font-size: 12px; text-decoration: underline; color: #0078d2;
	}
	.clear {
		clear: both;
	}
	@media(max-width: 768px){
		.modal-footer {
			padding: 0 0 20px 0 !important;
		}
		.modal-footer a {
			width: 130px;
		}
		
	}
	@media(max-width: 325px){
		.modal-footer .btn-2 {
			margin-top: 8px;
		}
	}

	.pin-sms-input input[type="text"].form-control, input[type="email"].form-control, input[type="password"].form-control, input[type="search"].textbox {
		width: 24px;
		float: left;
		margin-left:4px;
	}
	.coronita .pago-de-cuentas .box {
	    border: none !important;

	}
	.accordion {
    	box-shadow: none !important;
	}

</style>

<div class="container one-click refinanciamiento ">
	<div class="container-bck" id="tarjetaAdicional">
		<header class="m-ofertas m-ofertas__encabezada">
			<h1 class="encabezada__titulo"><strong>Solicita tu Tarjeta de Débito</strong> a un Click</h1>  
		</header>  

		<div class="row">
			<div class="col-sm-6 col-informacion">
				<div class="sol-tar-adicional">
					<div class="inner">
						<h1>
							<strong>Tarjeta de Débito</strong>
						</h1>
						<p>Cuenta de Pago (0504-0142-0100123110)</p>
						<hr>
						<div class="tarjeta">
							<div class="visa">
								<div class="name">Marco Antonio Ruiz Hernandez</div>
							</div>
							<div class="visaGold" style="display: none">
								<div class="name">Marco Antonio Ruiz Hernandez</div>
							</div>
							<div class="mastercard" style="display: none">
								<div class="name">Marco Antonio Ruiz Hernandez</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sol-tar-adicional">
					<div class="cont" id="seleccionSurcursal">
						<div class="mgBottom10px row">
							<div class="col-md-6 col-sx-12 text-left mgTop5px">
								<strong>Sucursal de retiro</strong>
							</div>
							<div class="col-md-6 col-sx-12 text-right pd0px">
								<a data-toggle="modal" data-target=".selecionar-sucursal-bbva-lg" href="#" class="btn pdTop5px pdBottom5px pdLeft10px pdRight10px">
									<i class="ico-sucursal"></i>
									Seleccionar Sucursal
								</a>
							</div>
						</div>
						<p class="block-warning" style="margin-top: 0px; clear: both">
							Selecciona la sucursal BBVA donde deseas retirar tu producto.
						</p>
					</div>
					<div class="cont mgTop2px" id="sucursalSeleccionada" style="display: none; height: 129px;">
						<div class="col-lg-5 col-md-5 col-sx-12">
							<strong>Sucursal de retiro:</strong>
						</div>
						<div class="col-lg-7 col-md-7 col-sx-12">
							<div class="sucursalItem"> 
							 	<div class="sucursalDerecha">Región:</div> 
							 	<div class="sucursalIzquierda"> Metropolitana</div>
							</div>
							<div class="clear"></div>
							<div class="sucursalItem"> 
							 	<div class="sucursalDerecha">Comuna:</div> 
							 	<div class="sucursalIzquierda"> Providencia</div>
							</div>
							<div class="clear"></div>
							<div class="sucursalItem"> 
							 	<div class="sucursalDerecha">Dirección:</div> 
							 	<div class="sucursalIzquierda" id="sucursalDireccion"></div>
							</div>
							<div class="sucursalItem">
								<div class="sucursalDerecha">Teléfono:</div>
								<div class="sucursalIzquierda" > 2 26638674</div>
							</div>
							<div class="clear"></div>
							 <a  data-toggle="modal" data-target=".selecionar-sucursal-bbva-lg" href="#" class="sucursalLink">Cambiar de Sucursal</a>
						</div>
					</div>
				</div>
			</div>
			<span class="arrow arrow-right"></span>
			<div class="col-sm-6 right-cont col-resultado">
				<div class="loader">
					<div class="inner-loader">
						<img src="img/loader-un-click.gif" alt="">
						<p>Calculando tu cuota</p>
					</div>
				</div>
				<div class="cont" style="height: 385px;">
					<div class="cont-resultado">
						<div class="cont-header row">   
							<div class="col-sm-12">
								<p>Costos de mantención</p> 
							</div> 
						</div>
						<div class="cont-body" style="height: 363px;">  
							<table class="table-res mgTop20px mgBottom20px">
								<tr>
									<th class="text-center">Mantención mensual: UF 0,28
									</th>
								</tr>						
							</table>
							<p>(Con posibilidad de rebajar <br> el costo de mantención a UF 0)</p>

							<a href="#" class="btn btn-link" data-toggle="modal" data-target=".detalles-refinanciamiento-modal-lg">Detalles de este Crédito</a>
							<hr style="clear: both;  margin: 0px 0px 15px 0px;">
							<div class="item">
								<label for="acepto" class="ui-marmots-label-check marmots-label-left">
									<input class="tooltip-validation-invalid" id="acepto" type="checkbox" name="acepto1"> He leído y acepto los <a href="#" data-toggle="modal" data-target=".terminos-modal-lg">Términos y Condiciones</a> de este producto 
								</label> 
								<div class="tooltip top in error" style="display: none; top: -89px; left: -104.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><div class="tooltip-body-error"><p class="title">Alerta!</p><span>Debe aceptar haber leido los términos y condiciones para poder continuar</span></div><div class="tooltip-bubble-error"></div></div></div>
							</div>
							
							<hr>
							<a href="#" data-toggle="modal"  id="solicitudApro" class="btn btn-big2 btn-big-green ">
								<i class="icono-btn icono-credito-verde"></i>Quiero este Crédito
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--Modal detalle -->
<div class="modal fade detalles-refinanciamiento-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  	<div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<div class="modal-box">
			<div class="modal-header">
			    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Detalle de la Tarjeta de Débito</h2>
				<div class="utility-icons">
					<span style="cursor: pointer;" type="button" onclick="javascript:descargarPDFConsumo();" class="icon-16 gray n01-imprimir"></span>
				</div>
			</div>
			<div class="modal-body no-bottom">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-no-border">
							<tbody>
								<tr>
									<p><strong class="mgLeft10px">Comisión mensual de mantención</strong></p>
									<hr class="mgTop5px mgBottom5px">
								</tr>
								<tr>
									<td><strong>Saldo promedia mensual</strong></td>
									<td class="text-right"><strong>Monto comisión</strong></td>
								</tr>
								<tr>
									<td>UF0 a UF14,99</td>
									<td class="text-right">UF 0,28 IVA incluido</td>
								</tr>
								<tr class="mgBottom20px">
									<td>UF 15 y más</td>
									<td class="text-right"> Sin cobro</td>
								</tr>
								
								
								
							</tbody>
						</table>
						<table class="table table-no-border">
							<tbody>
								<tr>
									<p><strong class="mgLeft10px">Comisión mensual por uso de cajeros automáticos de otros Bancos (Giros o Consultas)</strong></p>
									<hr class="mgTop5px mgBottom5px">
								</tr>
								<tr>
									<td><strong>Nº de transacciones</strong></td>
									<td class="text-right"><strong>Monto</strong></td>
								</tr>
								<tr>
									<td>Hasta 2 en un mes</td>
									<td class="text-right">Sin cobro</td>
								</tr>
								<tr class="mgBottom20px">
									<td>3 a 4 en un mes</td>
									<td class="text-right"> UF 0,10(Exenta de IVA)</td>
								</tr>
								<tr class="mgBottom20px">
									<td>5 o más en un mes</td>
									<td class="text-right"> UF 0,25(Exenta de IVA)</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-no-border">
							<tbody>
								<tr>
									<p><strong class="mgLeft10px">Comisión por giros o compras con Tarjeta de Débito o Redcompra en el extranjero</strong></p>
									<hr class="mgTop5px mgBottom5px">
								</tr>
								<tr>
									<td><strong>Monto por evento</strong></td>
									<td class="text-right">UF 0,096 (Exenta de IVA)</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </div>
  	</div>
</div>
<!--Fin modal detalle -->

<!--Modal terminos y condiciones-->
<div class="modal fade terminos-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<div class="modal-box">
			<div class="modal-header">
			    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Términos y Consideraciones</h2> 
			</div>
			<div class="modal-body no-bottom">
				<p>En caso de solicitar una Tarjeta Débito o Redcompra comenzarán a aplicar las comisiones suscritas en su contrato de cuenta de Pago.</p>
				
			</div>
		</div>
    </div>
  </div>
</div>
<!--Fin modal terminos y condiciones-->

<!--Modal Sucursales-->
<div class="modal fade selecionar-sucursal-bbva-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-box">
				<div class="modal-header">
				    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
					<h2 class="modal-title">Seleccion de Sucursal BBVA</h2> 
				</div>
				<div class="modal-body no-bottom">
					<div class="row"> 
						<div class="form-group big-blue col-sx-12 col-md-5 col-lg-5">
		                    <label class="col-sx-12 col-md-12 col-lg-12"> 
		                        Región*
		                    </label>
		                    <div class="col-sx-12 col-md-12 col-lg-12">
								<select class="selectpicker alignLeft">
									<option value="" selected>Seleccionar</option>
									<option value="">Opcion 1</option>
									<option value="">Opcion 2</option>
									<option value="">Opcion 3</option>
								</select>
							</div>
		                </div>
						<div class="form-group big-blue col-sx-12 col-md-5 col-lg-5">
							<label class="col-sx-12 col-md-12 col-lg-12"> 
		                        Comuna*
		                    </label>
		                    <div class="col-sx-12 col-md-12 col-lg-12">
								<select class="selectpicker alignLeft">
									<option value="" selected>Seleccionar</option>
									<option value="">Opcion 1</option>
									<option value="">Opcion 2</option>
									<option value="">Opcion 3</option>
								</select>
							</div>
		                </div>
		                <div class="form-group big-blue col-sx-12 col-md-2 col-lg-2 mgTop25px">
		                	<a href="#" class="btn" id="buscarSucursal"><i class="icon-16 white n09-busqueda"></i>Buscar</a>
		                </div>
		                <div class="coronita">
			                <div class="pago-de-cuentas" id="sucursales">
								<div class="box">
									<div class="col-lg-12 col-md-12 col-xs-12">
										<article class="capgemini-tables holder">
								            <div class="tables-body table-scroll">
								            	<table class="responsive list" id="table">
									                <thead>
									                   <tr>
										                    <th>&nbsp</th>  
									                        <th style="padding: 8px 0px;">Dirección</th>
									                        <th style="padding: 8px 0px;">Horario</th>
									                        <th>&nbsp</th>                  
									                    </tr>
									                </thead>
									                <tbody>
									                    <tr class="accordion">
									                        <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Plaza Italia</span>
					                                            <small>Avenida Libertador B.O'Higgins 108</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
									                <tbody>
									                    <tr class="accordion">
									                       	<td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Miraflor</span>
					                                            <small>Mirador 399</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
									                <tbody>
									                    <tr class="accordion">
									                       	<td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Santa Lucia</span>
					                                            <small>Huérfanos 676</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
									                <tbody>
									                    <tr class="accordion">
									                       	<td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Teatro Municipal</span>
					                                            <small>San Antonio 180</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
									                <tbody>
									                    <tr class="accordion">
									                       	<td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Moneda</span>
					                                            <small>Moneda 906</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
									                <tbody>
									                    <tr class="accordion">
									                       	<td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
								                            <td data-content="Dirección" class="text-left">
					                                            <span class="link">Sucursal - Parque Forestal</span>
					                                            <small>San Antonio 735</small>
					                                        </td>
								                            <td data-content="Horario" class="text-left">
								                            	<small>Lunes a viernes</small>
								                            	<small>09:00 a 14:00 hrs.</small>
								                            </td>
								                            <td data-content="" class="text-center accordion">
								                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
								                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
								                            </td>
									                    </tr>
									                    <tr> 
									                        <td colspan="5" style="height: 200px">
									                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53230.11699839449!2d-70.60640980675156!3d-33.50443893025828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0606fdf8dd1%3A0x5d1b9266b88f61fa!2sBBVA+Chile!5e0!3m2!1ses-419!2scl!4v1490794014888" width="550" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									                        </td>
									                    </tr>
									                </tbody>
												</table>
								            </div>
								        </article>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="separador mgTop10px mgBottom10px">
					<p>*Campos obligatorios</p>
					<div class="text-center">
		                <button class="btn pdLeft15px pdRight15px pdTop5px pdBottom5px" id="aceptarSucursal">Seleccionar</button>
		            </div>
				</div>
    		</div>
  		</div>
	</div>
</div>
<!--Fin modal Sucursales-->

<!--Modal sofToken
<div class="modal fade in sofToken" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog coronita">
		<div class="modal-content">
			<div class="modal-box">	
				<div class="modal-body no-bottom" id="pasoDosEditar" style="margin-bottom: 20px;">
					<div class="autoriza-bbva-pass">
	                    <section>
	                        <div class="marco">
	                            <div class="header">
	                                <p>Autoriza con <i class="ico-pass"></i> </p></div>
	                            <div class="body">
	                                <h1>Abre tu APP BBVA e ingresa a BBVA PASS</h1>
	                                <div class="desk-mobile">
	                                    <div class="help-softToken" data-trigger="hover">
	                                    <p style="width: 61%; float: left; font-size: 14px; padding-top: 16px;">
	                                    Autoriza tu transacción ingresando a BBVA PASS</p> 
	                                    <div class="imgHelp"></div>
	                                    </div>
	                                </div>
	                                <p>Ingresa acá el código de autorización generado: </p>
	                                <div class="pin-sms-input">
	                                    <section style="display: flex; height: auto; padding: 15px;">
	                                        <div class="form-group" style="width:100%;">
	                                            <div class="col-lg-5 col-md-5 col-sx-12">
	                                                <label  for="clave-segura">Código de Autorización:</label>
	                                            </div>
	                                            
	                                            <div class="col-lg-7 col-md-7 col-sx-12" style="margin-top: 8px;">
	                                                <div style="float: left; width: 100%;">
	                                                    <input type="password" tabindex=1 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                    <input type="password" tabindex=2 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                    <input type="password" tabindex=3 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                    <input type="password" tabindex=4 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                    <input type="password" tabindex=5 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                    <input type="password" tabindex=6 name="clave-sms" maxlength="1" minlength="1" class="form-control required number">
	                                                     <a href="#" class="btn next mgTop5px" id="autorizar">
	                                                        <span>Autorizar</span>
	                                                    </a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </section>
	                                </div>
	                                <div id="verId">Ver ID de operación
	                                    <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Si tu móvil no tiene internet, BBVA PASS te solicitará ingresar este código." style="float: none"></span>
	                                </div>
	                                <div class="idNumero" style="display: none;">239857</div>
	                            </div>
	                        </div>
	                    </section>
	                </div>
				</div>			
			</div>
		</div>
	</div>
</div> Fin modal sofToken-->


<!--Modal Ventajas-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="ventajas">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-box">
				<div class="modal-header">
				    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
					<h2 class="modal-title">Ventajas de tu Tarjeta de Dédito</h2> 
				</div>
				<div class="modal-body no-bottom">
					<div class="row"> 
						
		                <div class="coronita">
							<div class="listado">
								<div class="col-lg-12 col-md-12 col-xs-12">
									<ul>
                    					<li>
                    						<div class="checklist"></div>
                    					 	<div class="textList">Tecnología SIN CONTACTO: Esta tecnología permite realizar compras de bajo monto, solo acercando la tarjeta al lector de comercio, sin necesidad de entregar tu tarjeta a ninguna persona.</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Bloquear en simples pasos la tarjeta a través de BBVA Wallet.</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Realizar compras sin la necesidad de tener dinero en efectivo</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Realizar compras por internet con tu tercera clave de seguridad para la transacciones electrónicas</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Realizar retiros de efectivo en cajeros automáticos</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Entregar tarjetas adicionales, sin costo para quienes estimes conveniente</div>
                    					</li>
                    					<li>
                    						<div class="checklist"></div>
                    						<div class="textList">Acceder a beneficios y promociones al acumular puntos en Club adelante, los cuales puedes canjear en www.clubadelante.cl</div>
                    					</li>
                    				</ul>
								</div>
							</div>
							<div class="text-center mgTop20px">
								<button id="ventajas-cerrar" class="btnGreen btnBig modal-trigger">Ir a la oferta</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>
</div>
<!--Fin Modal Ventajas-->


<!--FUNCIONES PÁGINA A UN CLICK-->
<script type="text/javascript">
$(function(){
	$(document).ready(function() {
		$('#ventajas').modal('show');
	});

	$('.btn-big-green').click(function(e) {
		e.preventDefault();
		if($('#acepto').closest('label').hasClass('on')){
		window.location= '?src=S17-solicitar-tarjeta-debito-comprobante.php';
		}
		else {
		$('#acepto').parent().next().show();
		}
	});
	$('#sucursales').hide();

	$('#buscarSucursal').on('click', function(){
		$('#sucursales').show();
	});

	$('#aceptarSucursal').on('click', function (){
		var direccionSeleccionada = $('label.ui-marmots-label-radio.on').parent().next().html();
		var telefonoSeleccinado = $('label.ui-marmots-label-radio.on').parent().next().next().html();
		$('#sucursalDireccion').html(direccionSeleccionada);
		$('#sucursalTelefono').html(telefonoSeleccinado);
		$('#sucursalSeleccionada').fadeIn();
		$('#seleccionSurcursal').hide();
		$(this).closest('.modal').find('[data-dismiss="modal"]').trigger('click')
	});

	var $list = $('.list');    
	$list.find('tr').not('.accordion').hide();
	$list.find('tr').eq(0).show();
	$list.find(".accordion [data-name='ver-mas']").click(function(){  
		$('#flecha-1').toggleClass("f07-desplegar f08-plegar");
		$(this).closest('tr').fadeTo("fast", 1) ;    
		$(this).closest('tr').siblings().fadeToggle(500);
		$(this).closest('tr').addClass('active');
		$list.find('.accordion').not($(this).closest('tr')).removeClass('active');
		$list.find('.accordion').not($(this).closest('tr')).css("opacity", 1);
		$list.find('.accordion').not($(this).closest('tr')).hover(function(){
		$(this).closest('tr').fadeTo("fast", 1);},
		function(){$(this).closest('tr').fadeTo("fast", 1);
		});   
	});

	$('#buscarSucursal').on('click', function(){
		$(document).trigger('capgemini.wizard.resize');
		$('#direccionTarjetas').show();
	});

	setTimeout(function(){
		$('#wizardNext').html('Confimar Bloqueo');
		$('#wizardNext').removeClass('arrow-right');
		$('#wizardNext').addClass('mgRight10px')
	},1000);

	$("label.ui-marmots-label-radio").on('click', function(){
	var labelSeleccionado = $(this);
	$("label.ui-marmots-label-radio").removeClass("on");
	labelSeleccionado.addClass("on");
	});
	
	$('#ventajas-cerrar').on('click', function(){
		$('#ventajas').modal('hide');
	});

});
</script>

