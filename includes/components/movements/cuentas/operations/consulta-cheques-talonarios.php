<!-- consulta Cheques talonarios  -->
<div id="operacion-consulta" class="consulta-cheques-talonarios">
	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-8"><h3 class="tab-title">
					<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Consultar de cheques y talonarios</h3></div>
				<div class="col-md-4">
					<div class="row iconos-head">
						<div class="col-md-12 col-md-offset-4">
							<button class="btn primary"><span class="icon-16 blue l01-pdf"></span></button>
							<button class="btn primary"><span class="icon-16 blue l02-excel"></span></button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="operation-header visible-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<h3 class="tab-title">Consultar de cheques y talonarios</h3>
		</div>
	</header>

	<div class="operation-body">
		<div class="operation-body-inter operacion-consulta-cheques-talonarios">
			<form>
				<div class="formulario-operacion-consulta"> 
					<h4 class="cheque-talonarios">N° de Cheque o Talonario</h4>
					
					<div class="row row-cheques-talonarios">
						<div class="col-md-6">
							<div class="inter-form">
								<input name="cheques" id="numero-cheque" value="numero cheque" type="radio"/>
								<label for="numero-cheque">Búsqueda por N° de Cheque</label>
							</div>
						</div>
						<div class="col-md-6">
							<input class="form-control num-cheque number required num-cheque" type="text" disabled/>
						</div>
					</div>
					<div class="row row-cheques-talonarios">
						<div class="col-md-6 option-cheques">
							<div class="inter-form">
								<input name="cheques" id="busqueda-talonario" value="busqueda talonario" type="radio"/>
								<label for="busqueda-talonario">Búsqueda por Talonario</label>
							</div>
						</div>
						<div class="col-md-6">
							<select class="selectpicker" data-container="body" data-width="280px">
								<option>0000000001 - 0000000050</option>
								<option>0000000050 - 0000000100</option>
							</select>
						</div>
					</div>
					<div class="row row-cheques-talonarios">
						<div class="col-md-9 col-md-push-3">
							<div class="filter-buttons">
								<a href="javascript:void(0)" class="btn filter-results">
									<span class="icon-16 white l11-verdocumento"></span>Ver resultados
								</a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="table-footer-inter">
					<?php include '../table-interior-consultar-cheques-talonarios.html'; ?>
				</div>
			</form>
		</div>
	</div>
</div>


<script>

$(document).ready(function() {
	$("#numero-cheque, #busqueda-talonario").click(function() {
			$(".btn").removeAttr("disabled");
	});

	$("#numero-cheque").click(function() {
		$(".tal-cheque").attr("disabled");
			$(".num-cheque").removeAttr("disabled");
			$(".tal-cheque .dropdown-menu li").removeClass("disabled");
	});

	$("#busqueda-talonario").click(function() {
		$(".num-cheque").attr("disabled");
			$(".tal-cheque").removeAttr("disabled");
			$(".tal-cheque button").removeClass("disabled");
	});
});

</script>