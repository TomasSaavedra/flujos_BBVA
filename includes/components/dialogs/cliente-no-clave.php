<div id="modal-doble" class="modal-dialog">
	<div class="modal-content modal-content-doble paso1">
		<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
		<div class="modal-box">
			<div class="modal-header">
				<h2 class="modal-title">Obtén tu clave BBVAnet y BBVA Móvil</h2>
			</div>
			<div class="modal-body">
				<p>Si no tienes tu clave de ingreso debes solicitarla en una sucursal o a traves de cualquier Banco Fácil ubicado en sucursales.</p>
				<a href="#" class="btn btn-center">Buscar sucursales BBVA</a>
			</div>
		</div>

		<div class="modal-box">
			<div class="modal-header">
				<h2 class="modal-title">Ingresa en Modo Consulta a tu información</h2>
			</div>
			<div class="modal-body">
				<p>Ingresa con tu RUT, y como clave de acceso tu PIN del cajero + últimos 4 digitos de tu tarjeta de débito. </p>
				<div class="cliente-sin-clave">
					<img src="img/cliente-sin-clave.jpg" alt="esquema cliente sin clave">
				</div>
				<a href="#;" class="btn btn-center btn-acceso">Entendido, volver al Acceso Clientes</a> 
			</div>
		</div>
	</div>

	<div class="modal-content paso2" style="display:none;">
		<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
		<div class="modal-box">
			<div class="modal-header">
				<h2 class="modal-title">Bienvenido al Modo Consulta de BBVAnet</h2>
			</div>
			<div class="modal-body">
				<div class="list-inter-modal">
					<p>Este tipo de acceso te permite:</p>
					<ul>
						<li>&#149; Consultar información de tu cuenta y otros productos</li>
						<li>&#149; NO podrás realizar transacciones</li>
					</ul>
					</div>
				<div class="list-inter-modal">
					<p>Para disfrutar de todas los beneficios de BBVAnet solo deberás:</p>
					<ul>
						<li>&#149; Ir a cualquier <a href="#">sucursal BBVA</a> con su Cédula de Identidad</li>
						<li>&#149; Solicitar tu Clave de Acceso Segura a BBVAnet</li>
					</ul>
				</div>
				<a href="#" class="btn btn-center">Entendido, solo consultar mis productos</a>
			</div>
		</div>
	</div>

</div>


<script>
	$(document).ready(function() {
    	$("#modal-doble .btn-acceso").click(function() {
  			$(".modal-content.paso1").hide();
  			$(".modal-content.paso2").show();
		});
	});

</script>