<script type="text/javascript">
	$(document).ready(function() {
		$('#mostrar-mas-mov').click(function(e) {
			e.preventDefault();
			$('.table-mas-mov').css('display','table');
			$(this).css('display', 'none');
			$('#ver-mov-histo').css('display', 'block');
		});
	});

	
	
</script>

<!-- consulta movimientos -->
<div id="operacion-consulta">
	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-8"><h3 class="tab-title">
					<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Ver últimos movimientos</h3></div>
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
			<h3 class="tab-title">Ver últimos movimientos</h3>
		</div>
	</header>

	<div class="operation-body">
		<div class="operation-body-inter">
			<!--form>
				<div class="row filteroptions row-consultas-op row-consulta-3col">
					<div class="col-md-4">
						<div class="form-group">
							<label for="dateFieldFrom">Desde:</label>
							<input type="text" class="datepicker form-control dateFieldFrom" id="dateFieldFrom" name="dateFieldFrom" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="dateFieldTo">Hasta:</label>
							<input type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
						</div>
					</div>
					<div class="col-md-4 col-btn-resultado">
						<a href="#;" class="btn">Buscar</a>
					</div>
				</div>
			</form-->
			
			<div class="table-footer-inter">
				<?php include '../table-interior-consultar-movimiento.html'; ?>
			</div>

		</div>
	</div>
</div>

