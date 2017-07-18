<div id="demo" class="container">

	<div class="transferencia">
		<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
			<form novalidate="novalidate" id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
				<article class="wizard">
					<div data-title="Cuenta destino">
						<div class="step-content-container">
							01
						</div>
					</div>
					<div data-title="Introducir datos" >
						<div class="step-content-container">
							02
						</div>
					</div>
					<div data-title="Confirmar" data-multistep="true">
						<div class="step-content-container">
							<div class="sub-step">
								SUB 1 <br><br>
							</div>
							<div class="sub-step hidden">
								SUB 2<br><br>
							</div>

							<div class="sub-step hidden">
								SUB 3<br><br>
							</div>
							
						</div>
					</div>
					<div data-title="Comprobante">
						04
					</div>
				</article>
			</form>
		</div>
	</div>

</div>