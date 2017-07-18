<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>


<style type="text/css">

	.metas .vincular-1 .links {
		border-right: 1px solid #dde3ea !important;
	}

	.metas .text-lighter {
		line-height: 23px;
	    font-size: 16px;
	    font-weight: 100;
	    font-family: 'BBVA Web light';
	    color: #434A58;
	}

	.metas .text-lighter strong {
	    font-family: 'BBVA Web Book';
	}

	.metas .monto {
	    line-height: 3px;
	    font-size: 15px;
	    font-weight: 100;
	    font-family: 'BBVA Web light';
	    color: #434A58;
	}

	.metas .monto strong {
	    font-family: 'BBVA Web Book';
	}

	.metas input[type="text"].form-control.diary,input[type="email"].form-control.diary,input[type="password"].form-control.diary,input[type="search"].textbox.diary {
	    background: url("img/diary.svg") left center no-repeat;
	    font: 14px Arial,sans-serif;
	    padding: 8px 10px 8px 30px;
	}
	@media (max-width:768px){
		.tab-pane {
			display: block !important;
		}
		.tab-content{
			display: block !important;
		}
	}

	div.list_item_container {
		height: 90px;
		padding: 0px;
	}
	div.image {
		width:90px;
		height: 90px;
		float: left;
	}
	div.description {
		font-style: italic;
		font-size: 1.1em;
		color: gray;
		padding: 5px;
		margin: 5px;
	}

	#name-list
	{
		width: 300px;
	}
	.metas .p16 {
		padding: 16px
	}
	.mTopBottom5 {
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.margin0 {
		margin: 0px !important;
	}

	.metas .monto {
		color: #434a58!important;
		font-weight: bold;
	}

	.ui-autocomplete {
		box-shadow: 0px 4px 6px rgba(154, 154, 154, 0.5);
	}

	.transferencia .datos-destinatario {
		border: 2px solid #DDE3EA;
		border-radius: 5px; 
		padding: 8px;
	}

	.transferencia .datos-destinatario .secciones  {
		 	display: inline-block;
	}

	.transferencia .datos-destinatario .seccion-1 {
		font-size: 14px; 
		font-family: 'BBVA Web light'; 
		width: 65px; 
		float: left;
	}

	.transferencia .datos-destinatario .seccion-2 {
		font-size: 14px; 
		font-family: 'BBVA Web light'; 
		width: 84px; 
		float: left;
	}

	.transferencia .datos-destinatario .resultado {
		font-size: 14px; 
		font-family: 'BBVA Web book'; 
    	width: 168px;
    	float: right;
	}

	.transferencia .closeContenidoSeleccionado {
		float: right;
	    color: #B8C3D1;
	    font-size: 14px;
	    width: 100%;
	    text-align: right;
	    cursor: pointer;
	    margin-top: -6px;
	}

	.metas .vincular-1 .card {
		background: rgba(255, 255, 255, 0) none repeat scroll 0% 0%;
		box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
		margin-bottom: 30px;
	}

	.wizard .step-container .slide-viewer .step .active{
		height: auto !important;
		background-color:#ffffff !important;
	}

	.text-lighter {
		line-height: 16px;
		font-size: 16px;
		font-weight: 100;
		font-family: 'BBVA Web light';
		color: #434A58;
	}

	.metas .vincular-1 .tab-content {
	    padding: 0px !important;
	}


	.section-tabs .transferencia {
	    position: none !important;
	    margin: 0 !important;
	}

	.section-tabs .transferencia .title-sh  {
	    font-size: none !important;
	    margin: 0 !important;
	}

	.section-tabs .transferencia .nav.nav-tabs   {
	    font-family: 'BBVA Web Light' !important;
	    border-bottom: none !important;
	    position: relative;
	    margin-top: 0px !important;
	}

	@media(max-width: 768px) {
	    .section-tabs .transferencia  .nav.nav-tabs  {
	        display: inline-block;
	    }
	}

	.section-tabs .transferencia .nav.nav-tabs.align-center {
	    margin: none !important;
	}

	.section-tabs .transferencia   .nav.nav-tabs.align-right {
	    margin-left: none !important;
	}
	.section-tabs .transferencia  .nav.nav-tabs>li {
	     margin-bottom: none !important;
	}
	.section-tabs .transferencia  .nav.nav-tabs>li:first-child>a {
	    margin-left:none !important;
	}

	.section-tabs .transferencia  .nav.nav-tabs>li.active {
	    margin-bottom: none !important;
	}

	.section-tabs .transferencia  .nav.nav-tabs>li.active>a {
	   	padding-bottom: 10px !important;
	    background-color: #fff !important;
	    color: #434a58 !important;
	    border-color: #fff !important;
	    border-bottom: none !important;
	    box-shadow: none !important;
	}

	.section-tabs .transferencia   .nav.nav-tabs>li.active>a:hover,
	.section-tabs .transferencia  .nav.nav-tabs>li.active>a:focus {
	    background-color: none !important;
	    border-bottom: none !important;
	}

	.section-tabs .transferencia .nav.nav-tabs>li>a {
	    padding-left: 15px !important;
	    padding-right: 15px !important;
	    padding-bottom: 10px !important;
	    padding-top: 10px !important;
	    background-color: #fff !important;
	    border-color: rgba(255, 255, 255, 0) !important;
	    margin-right: 0px !important;
	    color: #666 !important;
	    font-weight: 300 !important;
	    width: auto !important;
	    text-align: center !important;
	}

	.section-tabs .transferencia .nav.nav-tabs>li>a:hover,
	.section-tabs .transferencia .nav.nav-tabs>li>a:focus {
	    border-bottom: none !important;
	    background-color: none !important;
	}

	.section-tabs>.transferencia.tab-content>.tab-pane {
	    padding: 0  !important;
	}

	.section-tabs .transferencia  hr.separador {
	    margin:0  !important;
	    border-top: none !important;
	    box-shadow:none !important;
	}
	.operaciones ul li {
	    width: auto !important;
	    float: left !important;
	    padding: 0 !important;
	    border-radius: 0 !important;
	    margin: 0 !important;
	}

	@media only screen and (max-width: 768px){
		.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]) {
		    width: 100% !important;
		}
	}

	@media only screen and (max-width: 768px){
		@media (max-width: 768px){
			.transferencia h3 {
    			display: block;
			}
			.links .number {
    			display: block;
    			width: 100% !important;
			}
		}
	}

	.autocomplite-name {
		float: left;
	    display: block;
	    width: 70%;
	    margin-top: -26px;
	    color: #333;
	}

	.autocomplite-bank {
		color: #999;
	    font-size: 12px;
	    float: left;
	    display: block;
	    width: 70%;
	    margin-top: -10px;
	}
	.autocomplite-icon {
		float: right;
    	margin-top: -22px;
	}
	.ui-autocomplete.ui-menu .ui-menu-item a.ui-state-focus, .ui-autocomplete.ui-menu .ui-menu-item a.ui-state-active {
   		border: 1px solid gainsboro;
   		background-color: #d6f4fc;
   		padding: 35px 0px 15px 20px !important;
    	margin-top: -22px;
	}
	.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]) {
	    width: 100%;
	    float: right;
	}
	.capgemini-tables .tables-body.table-scroll table tr td:first-child {
    	vertical-align: baseline;
    	text-align: center;
	}

	.coronita .pago-de-cuentas .box {
    	padding: 4px;
	}

	.coronita .pago-de-cuentas .box .section-details {
		background: #fcfcfc;  border-top: 3px solid #e8ecf0; padding-top: 10px
	}
	.coronita .pago-de-cuentas .box .tooltip {
    	position: fixed !important;
	}
</style>




<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Ver historial de movimientos</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Ver historial de movimientos</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia ">
		<div class="metas transferir-dinero">
			<div class="vincular-1">
				<div class="card">     
				    <ul class="nav nav-tabs" role="tablist">
				        <li role="presentation" class="active">
				            <a href="#tab1" role="tab" data-toggle="tab">Productos Recomendados</a>
				        </li>
				        <li role="presentation">
				            <a href="#tab2" role="tab" data-toggle="tab">Vincular desde mis Productos</a>
				        </li>
				    </ul>
				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane active" id="tab1">
				            <div class="row pdLeft0px pdRight0px">
				               	

				               	<div class="pd16px row">
				               		<div class="col-lg-3 col-md-3 col-xs-12 pdLeft0px pdRight0px">
				               			<p class="col-md-4 pdLeft0px pdRight0px pdTop4px">Desde:</p>
										<div class="text-right col-md-8 pdLeft0px pdRight0px">
											<input style="width: 100% !important" type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
										</div>
				               		</div>
				               		<div class="col-lg-3 col-md-3 col-xs-12  pdRight0px">
				               			<p class="col-md-4 pdLeft0px pdRight0px pdTop4px">Hasta:</p>
										<div class="text-right col-md-8 pdLeft0px pdRight0px">
											<input style="width: 100% !important" type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
										</div>
				               		</div>
				               		<div class="form-group col-lg-4 col-md-4 col-xs-12 pdLeft0px pdRight0px">
										<p class="col-md-3  pdRight0px pdTop4px">ver</p>
										<div class="col-md-9 pdLeft0px pdRight0px">
											<select class="selectpicker">
												<option value="01">Todos</option>
												<option value="02">opcion 1 </option>
												<option value="03">opcion 2</option>
												<option value="04">opcion 3</option>
											</select>
										</div>
									</div>
				               		<div class="col-lg-2 col-md-2 col-xs-12 pdLeft0px pdRight0px text-right">
				               			<a href="#" class="btn" id="buscarSucursal">Buscar</a>
				               		</div>
				               </div>
				            

				               	<div class="coronita row" id="direccionTarjetas">
									<div class="pago-de-cuentas">
										<div class="box">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12 pdLeft0px pdRight0px">
													<article class="capgemini-tables holder">
											            <div class="tables-body table-scroll">
											            	<table class="responsive list" id="table">
												                <thead>
												                   <tr>
													                    <th >FECHA</th>  
												                        <th style="padding: 8px 0px;">DESCRIPCIÓN</th>
												                        <th style="padding: 8px 0px;">MONTO</th>
												                        <th>&nbsp</th>                  
												                    </tr>
												                </thead>
												                <tbody>
												                    <tr class="accordion">
												                       
											                            <td data-content="Fecha" class="text-left">
								                                            <span class="link pdTop6px pdLeft16px">26/12/2016</span>
								                                        </td>
											                            <td data-content="Descripción" class="text-left">
											                            	<small>STARBUCKS CAFEE</small>
											                            </td>
											                            <td data-content="Monto" class="text-left">
											                            	<small>$15.625</small>
											                            	<small>Movimiento pendiente</small>
											                            </td>
											                            <td data-content="" class="text-center accordion">
											                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
											                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
											                            </td>
												                    </tr>
												                    <tr> 
												                        <td colspan="5" style="padding-top: 0px !important;">
												                        	<div class="row">
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				Nº DE MOVIMIENTO
												                        			</strong>
												                        			<small>000017970</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				TASA DE CRÉDITO:
												                        			</strong>
												                        			<small>0,000%</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				Nº DE CUOTAS
												                        			</strong>
												                        			<small>0</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				ESTADO DE MOVIMIENTO
												                        			</strong>
												                        			<small>Pendiente <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Son los movimientos que se realizaron recientemente y que aún no son procesados en los sistemas bancos." ></span></small>
												                        		</div>
												                        	</div>
												                        </td>
												                        
												                    </tr>

												                </tbody>
												                <tbody>
												                    <tr class="accordion">
												                       
											                            <td data-content="Fecha" class="text-left">
								                                            <span class="link pdTop6px pdLeft16px">08/12/2016</span>
								                                        </td>
											                            <td data-content="Descripción" class="text-left">
											                            	<small>ASODI PROVIDENCIA</small>
											                            </td>
											                            <td data-content="Monto" class="text-left">
											                            	<small style="color:#d1387c;">$-75.000</small>
											                            	<small>Movimiento pendiente</small>
											                            </td>
											                            <td data-content="" class="text-center accordion">
											                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
											                            	<i id="flecha-2" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
											                            </td>
												                    </tr>
												                    <tr> 
												                        <td colspan="5" style="padding-top: 0px !important;">
												                        	<div class="row">
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				Nº DE MOVIMIENTO
												                        			</strong>
												                        			<small>000017970</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				TASA DE CRÉDITO:
												                        			</strong>
												                        			<small>0,000%</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				Nº DE CUOTAS
												                        			</strong>
												                        			<small>0</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px section-details">
												                        			<strong style="font-size:11px;">
												                        				ESTADO DE MOVIMIENTO
												                        			</strong>
												                        			<small>Pendiente <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Son los movimientos que se realizaron recientemente y que aún no son procesados en los sistemas bancos." ></span></small>
												                        		</div>
												                        	</div>
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
				            </div>
				        </div>
				        <div role="tabpanel" class="tab-pane" id="tab2">
				           <div class="row pdLeft0px pdRight0px">	   	
				               	<div class="pd16px row">
				               		<div class="col-lg-3 col-md-3 col-xs-12 pdLeft0px pdRight0px">
				               			<p class="col-md-4 pdLeft0px pdRight0px pdTop4px">Desde:</p>
										<div class="text-right col-md-8 pdLeft0px pdRight0px">
											<input style="width: 100% !important" type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
										</div>
				               		</div>
				               		<div class="col-lg-3 col-md-3 col-xs-12  pdRight0px">
				               			<p class="col-md-4 pdLeft0px pdRight0px pdTop4px">Hasta:</p>
										<div class="text-right col-md-8 pdLeft0px pdRight0px">
											<input style="width: 100% !important" type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
										</div>
				               		</div>
				               		<div class="form-group col-lg-4 col-md-4 col-xs-12 pdLeft0px pdRight0px">
										<p class="col-md-3  pdRight0px pdTop4px">ver</p>
										<div class="col-md-9 pdLeft0px pdRight0px">
											<select class="selectpicker">
												<option value="01">Todos</option>
												<option value="02">opcion 1 </option>
												<option value="03">opcion 2</option>
												<option value="04">opcion 3</option>
											</select>
										</div>
									</div>
				               		<div class="col-lg-2 col-md-2 col-xs-12 pdLeft0px pdRight0px text-right">
				               			<a href="#" class="btn" id="buscarSucursal-2">Buscar</a>
				               		</div>
				                </div>
				            

				               	<div class="coronita row" id="direccionTarjetas-2">
									<div class="pago-de-cuentas">
										<div class="box">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12 pdLeft0px pdRight0px">
													<article class="capgemini-tables holder">
											            <div class="tables-body table-scroll">
											            	<table class="responsive list" id="table">
												                <thead>
												                   <tr>
													                    <th>FECHA</th>  
												                        <th style="padding: 8px 0px;">DESCRIPCIÓN</th>
												                        <th style="padding: 8px 0px;">MONTO</th>
												                        <th>&nbsp</th>                  
												                    </tr>
												                </thead>
												                <tbody>
												                    <tr class="accordion">
											                            <td data-content="Fecha" class="text-left">
								                                            <span class="link pdTop6px pdLeft16px">26/12/2016</span>
								                                        </td>
											                            <td data-content="Descripción" class="text-left">
											                            	<small>STARBUCKS CAFEE</small>
											                            </td>
											                            <td data-content="Monto" class="text-left">
											                            	<small>$60.625</small>
											                            	<small>Movimiento facturado</small>
											                            </td>
											                            <td data-content="" class="text-center accordion">
											                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
											                            	<i id="flecha-1" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
											                            </td>
												                    </tr>
												                    <tr> 
												                        <td colspan="5" style="padding-top: 0px !important;">
												                        	<div class="row section-details">
												                        		<div class="col-lg-3 pdLeft0px pdRight0px ">
												                        			<strong style="font-size:11px;">
												                        				Nº DE MOVIMIENTO
												                        			</strong>
												                        			<small>000017970</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px">
												                        			<strong style="font-size:11px;">
												                        				TASA DE CRÉDITO:
												                        			</strong>
												                        			<small>0,000%</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px">
												                        			<strong style="font-size:11px;">
												                        				Nº DE CUOTAS
												                        			</strong>
												                        			<small>0</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px ">
												                        			<strong style="font-size:11px;">
												                        				ESTADO DE MOVIMIENTO
												                        			</strong>
												                        			<small>Pendiente <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Son los movimientos que se realizaron recientemente y que aún no son procesados en los sistemas bancos." ></span></small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px">
												                        			<strong style="font-size:11px;">
												                        				CIUDAD
												                        			</strong>
												                        			<small>Buenos Aires</small>
												                        		</div>
												                        	</div>
												                        </td>
												                        
												                    </tr>

												                </tbody>
												                <tbody>
												                    <tr class="accordion">
											                            <td data-content="Fecha" class="text-left">
								                                            <span class="link pdTop6px pdLeft16px">08/12/2016</span>
								                                        </td>
											                            <td data-content="Descripción" class="text-left">
											                            	<small>CONCEPTO DE MOVIMIENTO</small>
											                            </td>
											                            <td data-content="Monto" class="text-left">
											                            	<small>$90.000</small>
											                            	<small>Movimiento facturado</small>
											                            </td>
											                            <td data-content="" class="text-center accordion">
											                            	<div class="btn primary right" style="zoom:0.8;" data-name="ver-mas"> 
											                            	<i id="flecha-2" class="icon-16 blue f07-desplegar"></i>Ver Más</div>
											                            </td>
												                    </tr>
												                    <tr> 
												                        <td colspan="5" style="padding-top: 0px !important;">
												                        	<div class="row section-details">
												                        		<div class="col-lg-3 pdLeft0px pdRight0px">
												                        			<strong style="font-size:11px;">
												                        				Nº DE MOVIMIENTO
												                        			</strong>
												                        			<small>000017970</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px ">
												                        			<strong style="font-size:11px;">
												                        				TASA DE CRÉDITO:
												                        			</strong>
												                        			<small>0,000%</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px ">
												                        			<strong style="font-size:11px;">
												                        				Nº DE CUOTAS
												                        			</strong>
												                        			<small>0</small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px ">
												                        			<strong style="font-size:11px;">
												                        				ESTADO DE MOVIMIENTO
												                        			</strong>
												                        			<small>Pendiente <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Son los movimientos que se realizaron recientemente y que aún no son procesados en los sistemas bancos." ></span></small>
												                        		</div>
												                        		<div class="col-lg-3 pdLeft0px pdRight0px">
												                        			<strong style="font-size:11px;">
												                        				CIUDAD
												                        			</strong>
												                        			<small>Buenos Aires</small>
												                        		</div>
												                        	</div>
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
				            </div>
				        </div>
				    </div>
				</div> 
			</div> 
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#direccionTarjetas').hide();
	$('#direccionTarjetas-2').hide();
	$(function(){ 
        $("._maqueta-switch .btn-panel1").click(function() {
        $(".btn-panel1, .btn-panel2").removeClass("select");
        $(".btn-panel1 span, .btn-panel2 span").hide();
        $(".btn-panel1 span").show();
        $(this).addClass("select");
        $("#panel1").show();
        $("#panel2").hide();
    });

    $("._maqueta-switch .btn-panel2").click(function() {
        $(".btn-panel1, .btn-panel2").removeClass("select");
        $(".btn-panel1 span, .btn-panel2 span").hide();
        $(".btn-panel2 span").show();
        $(this).addClass("select");
        $("#panel1").hide();
        $("#panel2").show();
    });
    
});

	$(function() {
		$(document).trigger('capgemini.wizard.resize');
	    var $list = $('.list');    
	    $list.find('tr').not('.accordion').hide();
	    $list.find('tr').eq(0).show();
	    $list.find(".accordion [data-name='ver-mas']").click(function(){  
	        $('#flecha-1').toggleClass("f07-desplegar f08-plegar");
	        $('#flecha-2').toggleClass("f07-desplegar f08-plegar");

	        $(this).closest('tr').fadeTo("fast", 1) ;    
	        $(this).closest('tr').siblings().fadeToggle(500, function(){	      
            	$(document).trigger('capgemini.wizard.resize');
	        });

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
	    $('#buscarSucursal-2').on('click', function(){
			$(document).trigger('capgemini.wizard.resize');
	    	$('#direccionTarjetas-2').show();
	    });
	    setTimeout(function(){
	    	$('#wizardNext').html('Confimar Bloqueo');
	    	$('#wizardNext').removeClass('arrow-right');
	    	$('#wizardNext').addClass('mgRight10px')
		},1000)
	});
</script>