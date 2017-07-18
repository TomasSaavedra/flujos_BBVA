<div id="solicitud-tarjeta-titular" class="container">

<div class="container-bck container-bck-sinmenu">
	<div class="container-bck-step1">

		<div class="header-container-bck">
			<h1>Solicitud Tarjeta de Crédito Adicional a un click</h1>
			<a class="close-operation-prod
<div" href="?src=S17-ofertas-un-click.php"><span class="close-icon"></span></a>
			<hr>
			<h2>Si lo deseas, puedes <strong>modificar el cupo en pesos y dólar</strong> para tu nueva tarjeta adicional.</h2>
			<?php include 'includes/components/movements/credito-un-click/agenda-una-llamada.php'; ?>
		</div>
	
		<div class="body-container-bck">
		    <div class="bck-inner-row">
				<div class="bck-inner left-cont bg-gray">
					<div class="body-bck-inner">
					
						<div class="form-bck form-bck-large">
							<div>
								<label for="" class="line-normal">Tarjeta <br>Titular</label>
								<select class="selectpicker selectpicker-numeral formato">
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
									<option>0540-4567-3432675541</option>
								</select>
							</div>
							
						</div>

						<div class="form-bck form-bck-max-min"><!--form-bck-max-min-->
							<div>
								<label class="line-normal">Cupo<br> Pesos</label>
								<div class="cont-max-min">
									<input id="monto" type="text" class="form-control number formato text-left icono-monto icono-monto-pesos text-right" value="800.000" autocomplete="off">
									<span class="max-val">min.: <strong>$1</strong></span>
									<span class="min-val">máx.: <strong>$800.000</strong></span>
								</div>
							</div>
						</div><!--Fin form-bck-max-min-->

						<div class="form-bck form-bck-max-min"><!--form-bck-max-min-->
							<div>
								<label for="" class="line-normal">Cupo <br>Dólares</label>
								<div class="cont-max-min">
									<input type="text" class="form-control number formato text-left icono-monto icono-monto-dolares text-right" value="1.368" autocomplete="off">
									<span class="max-val">min.: <strong>US$ 1</strong></span>
									<span class="min-val">máx.: <strong>US$1.368</strong></span>
								</div>
							</div>
						</div><!--Fin form-bck-max-min-->
						


						<div class="form-bck">
							<div>
								<h3>Datos de tu Adicional</h3>
							</div>

							<div class="small-campos">
								<label for="">RUT</label>
								<input type="text" class="form-control number formato" value="23.444.1234-5">
							</div>

							<div class="small-campos">
								<label for="">Primer Nombre</label>
								<input type="text" class="form-control number formato" value="Luis">
							</div>

							<div class="small-campos">
								<label for="">Segundo Nombre</label>
								<input type="text" class="form-control number formato" value="Enrique">
							</div>

							<div class="small-campos">
								<label for="">Primer Apellido</label>
								<input type="text" class="form-control number formato" value="Valdivia">
							</div>

							<div class="small-campos">
								<label for="">Segundo Apellido</label>
								<input type="text" class="form-control number formato" value="Molina">
							</div>

						<div class="form-bck form-bck-max-min"><!--form-bck-max-min-->
							<div class="aviso-block">
								<i class="icon-24 blue m03-aviso"></i>
								<p>Despacho en domicilio: Los Plátanos N 631, El Bosque</p>
								<a class="modal-trigger links-modal" data-href="includes/components/movements/credito-un-click/dialogs/cambiar-direccion-tarjeta-credito.html">Cambiar dirección de despacho</a>
							</div>
						</div><!--Fin form-bck-max-min-->


						</div>					
					</div>
				</div>

				<span class="arrow arrow-right"></span>

				<div class="bck-inner right-cont bg-blue">

					<div class="loader" style="display:none"><!--loader-->
						<div class="inner-loader">
							<img src="img/loader-un-click.gif" alt="">
							<p>Calculando tu cuota</p>
						</div>

					</div><!--Fin loader-->

					<div class="datos-cargados" style="opacity:0;"><!--datos-cargados-->
						
						<div class="header-bck-inner">
							<h4>Cupo de Tu Tarjeta <br>Visa BBVA Gold Adicional</h4>
							<h3>$ 800.000</h3>
						</div>

						<div class="body-bck-inner">

							<div class="aviso-block">
								<i class="icon-24 blue m03-aviso"></i>
								<p>Recuerda que los cupos en pesos y dólares de esta tarjeta adicional serán compartidos con el cupo de tu tarjeta titular correspondiente.</p>
							</div>
						</div>
					</div><!--Fin datos-cargados-->
				</div>
			</div>
	    </div>

	    <div class="footer-container-bck">

		    <div class="footer-cont-btn">
			    <a href="#;" class="btn btn-big2 btn-big-green btn-big-center disabled btn-responsivo"><i class="icono-btn icono-credito-verde"></i>Quiero esta Tarjeta Adicional</a>
			</div>
		
			<div class="container-bck-control" style="display:none;">
				<div class="pin-sms-input large pin-sms-input-inline">
					<section>
						<div class="bck-control-left">
							<label for="legales" class="ui-marmots-label-check marmots-label-left"> He leído y acepto las <a href="">condiciones</a> precontractuales y de contratación de este producto
							<input id="legales" name="legales" type="checkbox"></label>
						</div>
						<div class="form-group bck-control-right">
							<label class="pin control-label" for="clave-segura">Clave Segura A4 <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Lorem"></span></label>
							<div class="formline">
								<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
								<button class="btn btn-big2"><span>Confirmar</span></button>
		                        <img class="ConfirmadoCheck chek-left" src="img/tick-active-small.png" style="display:none">
							</div>
						</div>
					</section>
				</div>
			</div>
	    </div>

	</div>

	<div class="container-bck-step2" style="display:none;">
		<div class="header-container-bck">
			<h1>Solicitud Tarjeta de Crédito Adicional a un click</h1>
			<a class="close-operation-prod
<div" href="javascript.history:back();"><span class="close-icon"></span></a>
			<hr>
		</div>

		<div class="exito-container-bck">
			<h2>Felicitaciones Juan Manuel</h2>
			<h3>ya tienes tu Tarjeta Visa BBVA Gold Adicional</h3>
			<span class="check-exito"></span>
			<span class="n-transaccion">Nº de transacción 568944658971265</span>
			<ul class="detalle-list">
				<li><span class="s-left">Fecha y hora:</span><span>20/08/2014 18:32</span></li>
				<li><span class="s-left">Tarjeta:</span><span>Tarjeta Visa BBVA Gold Adicional</span></li>
				<li><span class="s-left">Cupo pesos:</span><span>$ 800.000</span></li>
				<li><span class="s-left">Cupo dólar:</span><span>US$ 1.368</span></li>
				<li><span class="s-left">Nombre del adicional: </span><span>Luis Enrique Valdivia Molina</span></li>
				<li><span class="s-left">RUT del adicional: </span><span>11.287.364-7</span></li>
				<li><span class="s-left">Dirección de Despacho: </span><span>Los Plátanos N 631, El Bosque</span></li>
			</ul>
			<div class="exito-container-bck-footer">
				<h3>El comprobante y detalle de tu Tarjeta Visa BBVA Gold Adicional fue enviado a tu e-mail <span class="color-blue">juanmanuel@gmail.com</span></h3>
			</div>
		</div>

		<hr>
		
		<div class="exito-container-bck-footer">

			<div class="botonesComprobante">	
				<button class="btn primary left hidden-xs" type="button"><i class="icon-32 blue n01-imprimir"></i> Imprimir comprobante</button>
				<button class="btn primary right" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante en PDF</button>
				<button class="btn primary left" type="button"><i class="icon-32 blue m07-correspondenciavirtual"></i> Enviar comprobante por email</button>
			</div>
		</div>

	</div>

</div>

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
<script src="js/s17-credito-un-click.js"></script>