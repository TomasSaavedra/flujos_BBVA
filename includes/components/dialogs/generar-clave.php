<div id="generar-clave" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-box">
			<div class="modal-header">
		    	<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="modal-title">Generación de Clave</h2>
			</div>
			<div class="modal-body">
				<form class="form-horizontal tooltip-validation" novalidate="novalidate">
				<div class="wizard no-borders">
					<div data-title="Identificación">
					<hr class="control-hr"/>
						<p class="margen-izq-p"><strong>Si olvidaste o se bloqueó tu clave, ingresa los datos solicitados.</strong></p>
						<div class="form-group">
							<label for="rut" class="col-sm-4 control-label">RUT</label>
							<div class="col-sm-8">
								<input type="text" class="form-control required rut" id="rut" name="rut" placeholder="12345678K" maxlength="12"
									data-msg-required="El campo RUT es obligatorio y debe tener el formato 12345678X" 
									data-msg-rut="El RUT introducido no es válido"
								/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Fecha de nacimiento</label>
							<div class="col-sm-8">
								<input type="text" class="form-control required date datepast" dategreater="01/01/1900" id="fecha-nacimiento" name="fecha-nacimiento" placeholder="dd/mm/aaaa" data-mask="99/99/9999">
							</div>
						</div>
						<p class="block-warning iconed-24">
							<span class="icon-24 m03-aviso"></span>
							Ingresando los datos solicitados se te otorgará una “<strong>clave temporal</strong>” que deberás cambiar en tu próximo ingreso al sitio privado de BBVAnet.<br>
							Al tercer intento erróneo de ingreso de cualquiera de estos datos, la clave de acceso se bloqueará, inhabilitando además la opción de autogeneración de clave.
						</p>
					</div>
					<div data-title="Confirmación">
						<p class="block-info iconed-24">
							<span class="icon-24 blue m03-aviso"></span>Ingresa la Tercera Clave enviada a tu celular Nº: xxxx7853
						</p>
						<div class="form-group">
							<label class="col-sm-4 control-label">RUT</label>
							<div class="col-sm-8">
								<span class="muted">13.508.098-K</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Fecha de nacimiento</label>
							<div class="col-sm-8">
								<span class="muted">13/03/1978</span>
							</div>
						</div>
						<div class="form-group">
							<label for="tercera-clave" class="col-sm-4 control-label">Ingrese tercera clave</label>
							<div class="col-sm-8">
								<input type="password" class="form-control required" minlength="7" maxlength="7" id="tercera-clave" name="tercera-clave" placeholder="">
							</div>
						</div>
					</div>
					<div data-title="Nueva clave">
						<div class="block-wizard-success">
							<p class="highlight">Su nueva clave es XXXXXX.</p>
							<p>Ahora acceda a BBVAnet o BBVA Móvil con su RUT y esta nueva clave.</p> 
						</div>
						<p class="block-warning iconed-24">
							<span class="icon-24 m03-aviso"></span>
							<strong>Esta clave es temporal</strong>. Deberá ingresar a www.bbva.cl y cambiarla por una clave que le resulte fácil recordar para acceder a las funcionalidades del BBVA.
						</p>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
