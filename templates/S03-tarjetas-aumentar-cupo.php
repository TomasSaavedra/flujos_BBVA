<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<form class="Validacion" novalidate>
<div  id="clave-aumentar-cupo" class="container">
	<div class="tab-pane active aumento-cupo" id="mis-productos">
		<div class="header-aumento-cupo">
			<a class="close-operation-tab" href="javascript:;"><span class="close-icon"></span></a>
			<h1>Aumento Cupo Tarjeta de Crédito</h1>
			<hr>
		</div>
		<div class="content-aumento-cupo">
			<div class="aumento-left">
				<header>
					<div class="datos left">
						<h3>Cupo pesos</h3>
						<h4>Nuevo cupo</h4>
						<div><span>$</span><input type="text" class="form-control required number" autocomplete="off" name="nuevo-cupo-pesos"  maxlength="" value="800.000"></div>
						<div class="clear"></div>
						<small>Entre $ 350.000 y $ 800.000</small>
					</div>

					<div class="datos right">
						<h3>Cupo dólares</h3>
						<h4>Nuevo cupo</h4>
						<div><span>US$</span><input type="text" class="form-control required number" autocomplete="off" name="nuevo-cupo-dolares"  maxlength="" value="800.000"></div>
						<div class="clear"></div>
						<small>Entre $ 350.000 y $ 800.000</small>
					</div>
				</header>
				<div><p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>Por seguridad enviaremos comprobante de transacción al correo registrado en el banco.</p></div>
				<footer>
					<div class="cupo">
						<p>Cupo actual</p>
						<p>$ 350.000</p>
					</div>
					<div class="cupo">
						<p>Cupo actual</p>
						<p>US$ 1.500</p>
					</div>
					
					<div class="cupo-btn">
						<button class="btn BotonConfirmaAumento" type="button">Aceptar aumento de cupo</button>
					</div>
				</footer>
			</div>

			<div class="arrow-destination"></div>
				<div class="aumento-right">
					<table class="tabla-aumento-cupo">
						<thead>
							<tr>
								<th colspan="2">Tu nuevo cupo será</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="cupo-left">Cupo pesos</td>
								<td class="cupo-right">$ 500.000</td>
							</tr>
							<tr>
								<td class="cupo-left">Cupo dólares</td>
								<td class="cupo-right">US$ 3.500</td>
							</tr>
						</tbody>
					</table>
					<div class="mensaje-cupo">
						<p><i class="icon-32 blue m03-aviso"></i>En el caso de dudas o consultas<br><strong>Llama a línea BBVA 600 600 1100</strong></p>
					</div>
				</div>
		</div>

		<div class="pin-sms-input large pin-sms-input-inline ocultar DivClaveSegura">
			<section>
				<div class="form-group">
					<label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
					<div class="formline clave-segura-aumento-cupo">
						<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
						<button class="btn btn-cupo" type="button"><span>Cancelar</span></button>
						<button class="btn ConfirmaClaveSegura" type="button"><span>Confirmar</span></button>
					</div>
				</div>
			</section>
		</div>

		<div class="exito-tarjeta-credito ocultar"><!--exito-tarjeta-credito-->

			<div class="step-content-container">
				<div class="comprobante no-border modal-inscripcion">
					<div class="ok-layer">
						<div class="image">
							<img alt="Ok" title="Ok" src="img/tick.png">
						</div>
						<div class="ok-content">
							<div class="title">¡Felicitaciones Catalina! Ya puedes disfrutar de <br> tu aumento de cupo</div>

							<h3>Datos de la transacción</h3>

							<div class="extra-data">
								<div class="left">Fecha y hora:</div>
								<div class="right">Mie 22 Sep 2013 - 18:36 horas</div>

								<div class="left">Nº de la transacción:</div>
								<div class="right">32432432</div>

								<div class="left">Nº de la tarjeta:</div>
								<div class="right">****-7755441- Tarjeta crédito de Catalina</div>
							</div>


							<h3>Aumento cupo en pesos</h3>
							<div class="extra-data">
								<div class="left">Cupo anterior</div>
								<div class="right">$ 350.000</div>

								<div class="left">Cupo nuevo:</div>
								<div class="right">$ 500.000</div>
							</div>


							<h3>Aumento cupo en dólares</h3>
							<div class="extra-data">
								<div class="left">Cupo anterior</div>
								<div class="right">US$ 1.500</div>

								<div class="left">Cupo nuevo:</div>
								<div class="right">US$ 3.500</div>

							</div>

							<hr>
							<div class="botonesComprobante">	
								<button class="btn primary left hidden-xs" type="button"><i class="icon-32 blue n01-imprimir"></i> Imprimir comprobante</button>
								<button class="btn primary right" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante en PDF</button>
							</div>


						</div>

					</div>
					
				</div>
			</div>
		</div><!--Fin exito-tarjeta-credito-->

		<div class="doble-linea">
			<hr>
		</div>
	</div>


</div>
</form>  