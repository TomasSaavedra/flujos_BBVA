<script type="text/javascript" src="js/soho-valida-numero.js"></script>

<form class="Validacion" novalidate>
<div  id="clave-aumentar-cupo" class="container">
	<div class="tab-pane active aumento-cupo" id="mis-productos">
		<div class="header-aumento-cupo">
			<a class="close-operation-tab" href="javascript:;"><span class="close-icon"></span></a>
			<h1>Aumento de Cupo en tu línea de Crédito</h1>
			<hr>
		</div>
		<div class="content-aumento-cupo">
			<div class="aumento-left">
				<h2 class="center">¡Prepárate para disfrutar de tu nuevo cupo!</h2>
				<header>
					<div class="datos left">
						<h2>Cupo Actual</h2>
						<h2>Nuevo Cupo</h2>
					</div>

					<div class="datos right dr">
						<h2 class="arial"><strong>$12.350.500</strong></h2>
						<span class="arial peso"><strong>$</strong></span>
						<span class="theInput">
							<input type="text" class="form-control  required" name="nuevo-cupo-dolares"  maxlength="" value="32.800.000">
						</span>
						<span class="minimo">Mínimo<br><strong>$12.350.000</strong></span>
						<span class="maximo">Máximo<br><strong>$62.800.000</strong></span>
					</div>
				</header>
				<div>
					<p class="block-warning iconed-24">
						<span class="icon-24  m03-aviso"></span>
						Si desea aumentar su cupo por un monto menor, puede<br>editar el cupo propuesto.
					</p>
				</div>
				<footer>

					<div class="cupo-btn mTop">
						<button id="btnConfirmarAumentoLinea" class="btn BotonConfirmaAumento" type="button">Aceptar aumento de cupo</button>
					</div>
				</footer>
			</div>

			<div class="arrow-destination"></div>
				<div class="aumento-right">
					<h2 class="center">Tu cuota mensual será</h2>
					<table class="tabla-aumento-cupo m20">
						<thead>
							<tr>
								<th colspan="2" class="size">$62.800/mes</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th colspan="2" class="center azul">Oferta válida para tu línea de crédito<br><strong>4000-4000-1234567890</strong></th>
							</tr>
						</tbody>
					</table>
					<div class="disclaimer">
						<p>El aumento de cupo genera un incremento en el valor del seguro de degravamen, el que será cobrado en la próxima renovación anual del contrato, equivalente a un 4,00% sobre el aumento de cupo ($4 pos cada $1.000 del mnoto asegurado).</p>
					</div>
					<div class="mensaje-cupo m20">
						<p><i class="icon-32 blue m03-aviso"></i><strong>En el caso de dudas o consultas</strong><br>Llama a línea BBVA 600 600 1100</p>
					</div>
				</div>
		</div>

		<div id="divPinAumentoLinea" class="pin-sms-input large pin-sms-input-inline DivClaveSegura ocultar" >
			<section>
				<div class="form-group">
					<label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
					<div class="formline clave-segura-aumento-cupo fright claveMobile">
						<button class="btn ConfirmaClaveSegura fright" type="button"><span>Confirmar</span></button>
						<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number fright" type="password">
					</div>
				</div>
			</section>
		</div>

		<div class="exito-tarjeta-credito  ocultar"><!--exito-tarjeta-credito-->

			<div class="step-content-container">
				<div class="comprobante no-border modal-inscripcion">
					<div class="ok-layer aumento-cupo-linea">
						<div class="image">
							<img alt="Ok" title="Ok" src="img/tick.png">
						</div>
						<div class="ok-content aumento-cupo-linea">
							<div class="title">¡Felicitaciones Catalina! Ya puedes disfrutar de tu aumento de cupo</div>

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

							<div>
								<p class="block-warning iconed-24">
									<span class="icon-24  m03-aviso"></span>
									El aumento de cupo de la Línea de Crédito quedará disponible el día habil siguiente de realizada la transacción.
								</p>
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
		<div class="btn-cancelar-linea-ywa">
			<a href="javascript:;" class="btn close-operation-tab"><span>Cerrar</span></a>
		</div>
	</div>


</div>
</form>
<script type="text/javascript">
 $(document).ready(function(){
     /*
$('#btnConfirmarAumentoLinea').on('click',function(){
         $('#divPinAumentoLinea').removeClass('ocultar');

     });
*/


 });
</script>