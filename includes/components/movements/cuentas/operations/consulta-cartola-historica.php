<!-- consulta cartola historica -->
<div id="operacion-consulta">
	
	<!-- Header -->
	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-8">
					<h3 class="tab-title">
						<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> 
						Consultar cartolas históricas</h3>
				</div>
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
			<h3 class="tab-title">Consultar cartolas históricas</h3>
		</div>
	</header>
	
	<!-- Body -->
	<div class="operation-body">
		<div class="operation-body-inter">
			<form>
				<div class="row filteroptions row-consulta-3col">
					<div class="col-md-4">
						<label>Mes:</label>
						<select class="selectpicker" data-container="body" data-width="140px">
							<option>Enero</option>
							<option>Febrero</option>
							<option>Marzo</option>
							<option>Abril</option>
							<option>Mayo</option>
							<option>Junio</option>
							<option>Julio</option>
							<option>Agosto</option>
							<option>Septiembre</option>
							<option>Octubre</option>
							<option>Noviembre</option>
							<option>Diciembre</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Año:</label>
						<select class="selectpicker" data-container="body" data-width="140px">
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
						</select>
					</div>
					<div class="col-md-4 col-btn-resultado">
						<a href="#;" class="btn">Buscar</a>
					</div>
				</div>
			</form>
			
			<div class="table-footer-inter">
				<?php include '../table-interior-cartola-historica.html'; ?>
				<div class="footer-btn">
					<a href="#;" class="btn-ir"><span>Mostrar más</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
