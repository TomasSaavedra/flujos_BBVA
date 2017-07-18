<div id="operacion-consulta">
	<div id="consulta-busqueda">

		<header>
			<div class="operation-header hidden-xs">
				<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
				<div class="row">
					<div class="col-md-8"><h3 class="tab-title"><button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Consultar Valor cuota</h3></div>
				</div>
				
			</div>
			<div class="operation-header visible-xs">
				<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
				<h3 class="tab-title">Consultar Cartola Historica</h3>
			</div>
		</header>

		<div class="operation-body">
			<form action="?src=S03-cuentas.php" method="post">
				<div class="row">
					<div class="col-md-12">
						<label>Seleccione le fecha a consultar</label>						
					</div>
				</div>
				<div class="row filteroptions">
					<div class="col-md-6">
						<input type="text" class="input-data-field datepicker form-control dateFieldFrom" name="dateFieldFrom" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" />
						<button class="btn descargar-valor-cuota consulta-valor-cuota" type="button">Consultar</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>