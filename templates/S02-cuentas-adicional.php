<div class="container">	
	<div class="modal" id="accesoAdicional">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-box">
					<div class="modal-header">
					    <button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
						<h2 class="modal-title">Cambiar clave</h2> 
					</div>
					<div class="modal-body no-bottom" id="generarClave">
						<div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px; margin-bottom: 20px">
							<div class="col-md-2 col-sx-12">
								<img src="img/icon-desktop.svg">
							</div>
							<div class="col-md-10 col-sx-12">
								<p>Jhon Doe, debido a que no tienes productos titulares, tu acceso al sitio privado es limitado, podrás revisar información sobre nuestros catálogos de productos y actualizar tus datos personales. </p>
							</div>
						</div>

						<hr style="clear: both">
						<div class="text-center">
			                <button class="btn" id="entendido">Entendido</button>
			            </div>
					</div>
	    		</div>
	  		</div>
		</div>
	</div>

	<div class="menu-miga">
		<p>
			<a href="" style="color: #fff;"></a> 
			<span></span>
		</p>
	</div>

	<div class="section-tabs">
		<h2 class="title-sh">Cuentas </h2>
		
		<!-- Section tabs  -->
		
		<hr class="separador">
		
		<div class="tab-content mgTop30px">
			<iframe name="menuBAR" src="https://www.bbva.cl/personas/cuentas/?mb=si" width="100%" height="790" align="center" frameborder="0"></iframe>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#accesoAdicional').modal('show');
	});

	$(function(){
		$('#entendido').on('click', function(){
			$('#accesoAdicional').modal('hide');
		})
	})
</script>
