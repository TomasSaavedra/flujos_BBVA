<div id="cambiar-clave" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-box">
			<div class="modal-header">
		    	<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Cambio de Clave</h2>
			</div>
			<div class="modal-body">
				<form action="#" class="form-horizontal tooltip-validation" novalidate="novalidate">
				<div class="wizard hide-titles" data-titles="false">
					<div data-title="Introducción de clave">
						<p>Para mayor seguridad deberá cambiar su clave de actual a una nueva clave de 6 a 10 caracteres alfanuméricos.</p>
						<p class="block-warning iconed-24">
							<span class="icon-24 m03-aviso"></span>
							No elijas caracteres consecutivos iguales como AAA ó 1111.<br>
							No elijas una clave que coincida con parte de tu RUT.<br>
							No elijas pares de números iguales como 121212 ó 565656.<br>
							No elijas sólo números para una clave mayor a 6 dígitos numéricos.<br>
							No elijas números consecutivos como 1234 ó 9876.
						</p>
						<div class="form-group">
							<label for="rut" class="col-sm-4 control-label">Clave actual</label>
							<div class="col-sm-8">
								<input type="password" class="form-control required" minlength="6" maxlength="10" id="clave-actual" name="clave-actual" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="rut" class="col-sm-4 control-label">Nueva clave <span class="label-help">(6 a 10 Caracteres)</span></label>
							<div class="col-sm-8">
								<input type="password" class="form-control required" minlength="6" maxlength="10" id="nueva-clave" name="nueva-clave" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="rut" class="col-sm-4 control-label">Repita  nueva clave <span class="label-help">(6 a 10 Caracteres)</span></label>
							<div class="col-sm-8">
								<input type="password" class="form-control required" minlength="6" maxlength="10" id="nueva-clave-retype" name="nueva-clave-retype" placeholder="" equalTo="#nueva-clave">
							</div>
						</div>
					</div>
					<div data-title="Operación completada">
						<div class="block-wizard-success">
							<p class="highlight">Operación realizada correctamente.</p>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
