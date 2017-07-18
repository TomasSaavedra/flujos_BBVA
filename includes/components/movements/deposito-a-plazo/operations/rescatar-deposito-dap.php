<style type="text/css">
	.description strong {
		float: right;
		margin-right: 10px;
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
				    			<div><strong>Banco:</strong> XXX <strong>Cuenta:</strong> XXXX</div>
				    			<p>Número de cuenta conque realizaste la transferencia electrónica. <br> Verás reflejado el rescate el día hábil siguiente.</p>
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
				    	<p class="iconed-24 block-warning" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;">
				    		<i class="icon-24 m03-aviso"></i>
				    		Recuerde que puede realizar el rescate de su Depósito a Plazo hasta las 14:00 hrs del tercer día hábil a contar de la fecha de vencimiento
				    	</p>
				    	
				    </div>
				    <div class="col-lg-12 col-md-12 col-sx-12 text-right">
				    	 <div class="btn arrow-right next pull-right wizardNext" id="selectCuenta" style="margin-top: 20px;">
						Siguiente
					</div>
				    </div>
				   
				</div>
				<div class="paso-2" style="display: none;">
					<div class="comprobante no-border">
						<div class="ok-layer">
							<div class="image">
								<img alt="Ok" title="Ok" src="img/tick.png">
							</div>
							<div class="ok-content">
								<div class="title">Tu depósito a Plazo ha sido liquidado existosamente con fecha XXXXX</div>
								<br>
								<div class="description">Monto:<strong>$ XXXXX</strong></div>
								<div class="description">Banco:<strong>XXXXXX</strong></div>
								<div class="description">Cuenta:<strong>XXXXXX</strong></div>
								<div class="description">Fecha de abono de fondos:<strong>XXXXXX</strong></div>
								<br>
								<div class="description">
									Ante cualquiera duda, contáctate con nosotros llamando al 6006001100. <br>
									Muchas gracias por preferirnos. Saludos cordiales.
								</div>
							</div>
						</div>
						<hr>
						<div class="col-lg-12 col-md-12 col-sx-12 text-center">
							<a class="btn" href="?src=S18-ahorro-e-inversion-dap.php">
								Aceptar
							</a>
						</div>
					</div>
				</div>

				<div class="paso-3" style="display: none;">
					<div class="comprobante no-border">
						<div class="ok-layer">
							<div class="image">
								<img alt="Ok" title="Ok" src="img/tick.png">
							</div>
							<div class="ok-content">
								<div class="title">Solicitud realizada correctamente</div>
								<br>
								<div class="description">
									Hemos recibido su solicitud. Los fondos estarán disponibles en un Vale Vistas en el próximo día hábil. Para su cobro debe dirigirse a cualquiera de nuestra oficinas con su cédula de identidad.
								</div>
								<br>
								<div class="description">
									¡Muchas gracias por preferimos!
								</div>

							</div>
						</div>
						<hr>
						<div class="col-lg-12 col-md-12 col-sx-12 text-center">
							<a class="btn" href="?src=S18-ahorro-e-inversion-dap.php">
								Aceptar
							</a>
						</div>
					</div>
				</div>

				<div class="paso-4" style="display: none;">
					<p class="block-warning iconed-24">
						<span class="icon-24  m03-aviso"></span>
						Ya hemos recibido tu solicitud de liquidación de este deposito, el que se encuentra en ejecución. Esta Liquidación la tandrás disponible a más tardar dentro de los próximos dos días hábiles.
					</p>
				</div>

				<div class="paso-5" style="display: none;">
					<p class="block-warning iconed-24">
						<span class="icon-24  m03-aviso"></span>
						Estimado cliente: Este depósito a plazo aún no ha vencido, por lo que no puede rescatarlo en estos momentos. favor ingresar a partir del 00/00/00 fecha en la cual vence el depósito donde tendrá 3 días hábiles para poder rescatarlo y abonarlo en su cuenta corriente.
					</p>
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