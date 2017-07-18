<link rel="stylesheet" href="css/one-click.css" />
<style type="text/css">
	.container-bck {
    padding: 0px;
    border: none;
    margin-top: 0px;
    min-height: 100px;
}

.one-click .exito-container-bck-footer {

    border-top: none;
    padding-top: 20px;
    margin-top: 0px;
}

.one-click .container-bck .exito-container-bck {
    position: relative;
    width: 92%;
    margin: 0 auto;
    padding-left: 112px;
}

.call {
	width: 70%; margin: 0 auto;color: #333; font-size: 12px; color: #71777F; font-family: 'BBVA Web Light',arial,sans-serif;
}
.check {
	    zoom: 0.7;
    float: left;
    margin-right: 8px;
}
</style>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Rescatar depósito
	</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">
		<span class="close-icon"></span>
	</a>
	<h3 class="tab-title">Rescatar depósito</h3>
	<hr>
</div>
<div class="transferencia">
	<div class="main-transferencia">
		<div class="step-content-container">
			<div class="box-border">

				<!--DAP Fase 3 Rescates OK:-->
				<div class="paso-1" >
				    <h3 style="padding: 30px 15px 15px 15px !important;">Selecciona una opción para rescatar tu depósito</h3>
				    <hr>
				    <div class="switch">
				    	<div class="row">
				    		<div class="col-lg-1 col-md-1 col-sx-2 selectAccount">
				    			<label class="historico-tarjetas-bbva-nacional" for="historico-tarjetas-bbva-nacional">&nbsp;
									<input type="radio" value="nacional" name="historico-tarjetas-bbva" id="historico-tarjetas-bbva-nacional" />
								</label>
				    		</div>
				    		<div class="col-lg-11 col-md-11 col-sx-10 accountSection">
				    			<div class="divBlue">Cuenta de Origen</div>
				    			<p>
				    			<strong>Banco:</strong> XXXXXX &nbsp
				    			<strong>Cuenta:</strong> XXXXXXXX <br>
				    			Recibe el monto en la cuenta desde donde transferiste para contratar tu DAP</p>
				    		</div>
				    	</div>
				    	<div class="row">
				    		<div class="col-lg-1 col-md-1 col-sx-2 selectAccount">
				    			<label class="historico-tarjetas-bbva-internacional" for="historico-tarjetas-bbva-internacional">&nbsp;
									<input type="radio" value="internacional" name="historico-tarjetas-bbva" id="historico-tarjetas-bbva-internacional" />
								</label>
				    		</div>
				    		<div class="col-lg-11 col-md-11 col-sx-10 accountSection">
				    			<div class="divBlue">Vale vista</div>
				    			<p>Realiza el cobro de tu Depósito a Plazo a través de un Vale Vista. Este estará disponible en cualquiera de nuestras sucursales el día hábil siguiente.</p>
				    		</div>
				    	</div>
				    	
				    </div>
				    <p class="iconed-24 block-warning" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;">
				    		<i class="icon-24 m03-aviso"></i>
				    		Recuerde que puede realizar el rescate de su Depósito a Plazo hasta las 14:00 hrs del tercer día hábil a contar de la fecha de vencimiento
				    	</p>
				    <div class="col-lg-12 col-md-12 col-sx-12 text-right">
				    	 <div class="btn arrow-right next pull-right wizardNext" id="selectCuenta" style="margin-top: 20px;">
						Siguiente
					</div>
				    </div>
				</div>
				<div class="paso-2" style="display: none;">
					<div class="container one-click">
						<div class="container-bck clearfix">
							<header class="m-ofertas m-ofertas__encabezada">
								<h2 class="encabezada__titulo">Comprobante de Operación</h2> 
							</header>  

							<!-- Detalle -->
							<div class="exito-container-bck clearfix">
								
								<h3><img class="check" alt="Ok" title="Ok" src="img/tick.png">Tu depósito a Plazo ha sido liquidado exitosamente</h3>
							
							
								<ul class="detalle-list clearfix">
								 	<li>
										<span class="s-left">Monto:</span>			
										<span id=" ">$ XXXXXX</span>
									</li>
									<li>
										<span class="s-left">Banco:</span>			
										<span id=" ">XXXXXXXX</span>
									</li>
									<li>
										<span class="s-left">cuenta:</span>			
										<span id=" ">XXXXXXXXXX</span>
									</li>
									<li>
										<span class="s-left">Fecha de abono de fondos:</span>			
										<span id=" ">XXXXXXX</span>
									</li>
								</ul>
								
							</div>

							<hr style="clear: both;">
							<p class="call">
								Ante cualquier duda, contácte con nosotros llamando al 6006001100. Muchas gracias por preferirnos.Saludos cordiales.</span>
							</p> 
							<!-- Botones -->
							<div class="exito-container-bck-footer">
								<div class="footer-cont-btn">
									<button onclick="validarSalidaVentana();" id="btnGeneraPDFComprobante" class="btn primary left" type="button" style="margin-top:15px;padding:10px;">
										<i class="icon-32 blue l01-pdf"></i> Guardar comprobante
									</button>
									
								</div>
							</div>
						</div>
					</div> 
				</div>

				<!--DAP Fase 3 Rescate ya efectuado:-->
				<div class="paso-3" style="display: none;">
					<p class="block-warning iconed-24">
						<span class="icon-24  m03-aviso"></span>
						Ya hemos recibido tu solicitud de liquidación de este deposito, el que se encuentra en ejecución. Esta Liquidación la tandrás disponible a más tardar dentro de los próximos dos días hábiles.
					</p>
				</div>


				<!--DAP Fase 3 Rescate a destiempo:-->
				<div class="paso-4" style="display: none;">
					<p class="block-warning iconed-24">
						<span class="icon-24  m03-aviso"></span>
						Estimado cliente: Este depósito a plazo aún no ha vencido, por lo que no puede rescatarlo en estos momentos. favor ingresar a partir del 00/00/00 fecha en la cual vence el depósito donde tendrá 3 días hábiles para poder rescatarlo. Posterior a estos 3 días se renovará de manera automática, por el mismo monto.
					</p>
				</div>


				<!--DAP Fase 3 Rescate problemas:-->
				<div class="paso-6" style="display: none;">
					<div class="container one-click">
						<p class="block-warning iconed-24">
							<span class="icon-24  m03-aviso"></span>
							Ocurrió un problema transfiriendo los fondos de liquidación de depósito a : <br>
							<strong>Banco: XXXXX Cuenta: XXXX</strong> <br>
							Te sugerimos que vuelvas a intentarlo más tarde o seleccionar la opción <strong>Vale Vista</strong> y emitiremos vale vista nominativo, el que podrás cobrar en cualquiera de nuestras oficinas con tu cédula de identidad.
						</p>
						<hr style="clear: both;">
						<p class="call">
							Ante cualquier duda, contácte con nosotros llamando al 6006001100. Muchas gracias por preferirnos.Saludos cordiales.</span>
						</p> 
					</div> 
				</div>


			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$('#selectCuenta').on('click', function(){
		if( $('#historico-tarjetas-bbva-nacional').is(':checked')){
			$('.paso-1').hide();
			$('#selectCuenta').hide();
			$('.paso-2').fadeIn();
		};
		if($('#historico-tarjetas-bbva-internacional').is(':checked')){
			$('.paso-1').hide();
			$('#selectCuenta').hide();
			$('.paso-3').fadeIn();	
		}
	});
</script>

