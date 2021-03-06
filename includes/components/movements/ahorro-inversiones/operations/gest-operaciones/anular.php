<div class="hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Gestionar operaciones programadas</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Gestionar operaciones programadas</h3>
	<hr>
</div>
<div class="anular">
	<div id="anular-view-1" class="anular-view">
		<div class="anular-content">
			<h3 class="show">Anular Rescate</h3>
			<p class="block-warning iconed-24"><span class="icon-24  d05-ayudaurgente"></span>Vas a anular el rescate del fondo con modalidad periódica de $ <strong>“xxxx”</strong> cada <strong>“xxx”</strong> meses a la cuenta de <strong>“xxxxxxxxxxxx”</strong> </p>	
		</div>
		<div class="footer-anular">
			<hr class="visible-xs">
			<div class="button-bar clearfix">
				<button id="anular-back-btn-1" class="btn arrow-left prev pull-left show-operation" data-href="includes/components/movements/ahorro-inversiones/operations/gestion-operaciones.php" type="button">Anterior</button>
				<button id="anular-next-btn-1" class="btn arrow-right next pull-right">Siguiente</button>
			</div>	
		</div>
	</div>	
	<div id="anular-view-2" class="anular-view hidden">
		<div class="anular-content">
			<form id="anular-trans-pin-form" action="#" class="form-horizontal tooltip-validation" novalidate="novalidate">
				<div class="pin-sms-input anular">
					<section>
						<div class="form-group">
							<label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
							<div class="formline">
								<input type="password" name="clave-segura" maxlength="7" minlength="7" class="form-control required number">
								<button type="submit" class="btn"><span>Confirmar</span></button>	
							</div>
						</div>
					</section>
				</div>
			</form>
		</div>
		<div class="footer-anular">
			<hr class="visible-xs">
			<div class="button-bar clearfix">
				<button id="anular-back-btn-2" class="btn arrow-left prev pull-left" type="button">Anterior</button>				
			</div>	
		</div>
	</div>

	<div id="anular-view-3" class="anular-view hidden">
		<div class="anular-content">
			<form id="anular-trans-sms-form" action="#" class="form-horizontal tooltip-validation" novalidate="novalidate">
				<div class="pin-sms-input anular">
					<section>
						<div class="form-group">
							<label class="sms control-label" for="clave-segura">Introduzca la clave recibida por SMS</label>
							<div class="formline">
								<input type="password" name="clave-sms" maxlength="4" minlength="4" class="form-control required number">
								<button type="submit" class="btn"><span>Confirmar</span></button>	
							</div>
						</div>
					</section>
				</div>
			</form>
		</div>
		<div class="footer-anular">
			<hr class="visible-xs">
			<div class="button-bar clearfix">
				<button id="anular-back-btn-3" class="btn arrow-left prev pull-left" type="button">Anterior</button>				
			</div>	
		</div>
	</div>
	<div id="anular-view-4" class="anular-view hidden">
		<div class="comprobante">
			<div class="ok-layer">
				<div class="image">
					<img alt="Ok" title="Ok" src="img/tick.png">
				</div>
				<div class="ok-content">
					<div class="title">Rescate anulado correctamente</div>
					<div class="description">
						Referencia <strong>03424342</strong>
					</div>
				</div>
			</div>
			<hr class="hidden-xs">
			<div class="botonesComprobante">	
				<button class="btn primary left hidden-xs" type="button"><i class="icon-32 blue n01-imprimir"></i> Imprimir comprobante</button>
				<button class="btn primary right" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante en PDF</button>
				<button class="btn primary left" type="button"><i class="icon-32 blue m07-correspondenciavirtual"></i> Enviar comprobante por email</button>
				<button class="btn primary right" type="button"><i class="icon-32 blue c01-transferencias"></i> Realizar otro traspaso</button>
			</div>
		</div>
		<div class="footer-anular">
			<hr class="visible-xs">
			<div class="button-bar clearfix">
				<button id="anular-close-btn" class="btn pull-right show-operation" data-href="includes/components/movements/ahorro-inversiones/operations/gestion-operaciones.php">Cerrar</button>
			</div>	
		</div>	
	</div>
</div>
<hr class="operation-bottom visible-xs"/>