<div class="content" id="contenedorEECC">
	<div class="container">
		<!-- breadcrumbs -->
		<!--@{breadcrumbs} -->
		<!-- Fin breadcrumbs -->
		<div class="section-tabs">
			<!-- Utility icons -->
			<div class="utility-icons">
				<!-- <a href="#" id="btnVerDetallePdf" class=""><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a> -->
				<!-- <a href="javascript:void(0);" class="hidden-para-pruebas"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a> -->
			</div>

			<!-- title -->
			<h2 class="title-sh">Ahorro e Inversion</h2>

			<hr class="separador">
			<div class="tab-content">
				<div class="row tab-pane active" id="mis-productos">
					<div class="container">
						<div id="corredor-bolsa-container"  class="content" style="visibility: visible;">	<!-- Wizard Firma de cnotrato -->
							<div class="proceso-corredores-bolsa">
								<div class="row">
									<div class=" container-header-enrolamiento col-md-12 text-center">
										<h1>Proceso de enrolamiento</h1>
									</div>
								</div>
								<div>
									<div class="firma-contrato" id="container-body-enrolamiento" style="overflow:visible;">
										<form id="formContratoFilial" class="tooltip-validation">
											<div class="block-error iconed-24 hidden" id="errorClaveBloqueada">
												<i class="icon-24 red m01-alerta"></i> <span id="descripcionErrorClaveBloqueada">Su solicitud no ha podido ser efectuada. Por favor intente m&aacute;s tarde.</span>
											</div>
											<article id="wizzard-corredor-bolsa" class="wizard">
												<!-- Step 1: Encuesta -->
												<div id="encuesta-formulario-enrolamiento" data-title="Encuesta">
													<?php include(dirname(__FILE__) . '/PasosWizCorredor/corredor-bolsa-encuesta-1.html'); ?>
												</div>
												<!-- Step 2: Datos personales -->
												<div id="datos-personales-enrolamiento" data-title="Datos personales">
													<?php include(dirname(__FILE__) . '/PasosWizCorredor/corredor-bolsa-datos-personales-2.html'); ?>
												</div>
												<!-- Step 3: Datos econ&#243;micos y contrato -->
												<div id="economicos-contrato-enrolamiento" data-title="Datos econ&#243;micos y contrato">
													<?php include(dirname(__FILE__) . '/PasosWizCorredor/corredor-bolsa-datos-economicos-3.html'); ?>
												</div>
												<!-- Step 4: Fin -->
												<div id="fin-incorporacion-enrolamiento"data-title="Fin">
													<?php include(dirname(__FILE__) . '/PasosWizCorredor/corredor-bolsa-incorporacion-enrolamiento-4.html'); ?>
												</div>
											</article>
										</form>
									</div>
								</div>
							</div>
						</div>
						<button id="modalFirst" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-alerta-salir-encuesta.html">Siguiente</button>
						<button id="modalSecond" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-aceptacion.html">Siguiente</button>
						<button id="modalThree" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-contrato-condiciones-generales.html">Siguiente</button>
						<button id="modalFour" style="display:none" type="button" class="modal-trigger" data-href="includes/components/movements/corredorBolsa/remote-step-1-modal-firma-carta-instruccion.html">Siguiente</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.step-container').css('border','none');
		$('.button-bar').css('position','absolute');
		$('.button-bar').css('margin-top','35px');
		$('.button-bar').css('width','98%');
		$('.button-bar').css('background','#F4F7F5');
		$('.button-bar').css('margin-left','-35px');
		$('.button-bar').css('border','none');
		$('.button-bar').css('box-shadow','none');
	
		$('#wizardNext').off('click, vclick').on('click, vclick', function(e) {
			e.preventDefault();
			if($('#encuesta-formulario-enrolamiento').parent().hasClass('active')){
				if($('.check-encuesta.on').length == 0){
					$('#modalFirst').click();
					console.log('1');
				}else{
					$('#modalSecond').click();
					console.log('1');
				}
			}
			if($('#datos-personales-enrolamiento').parent().hasClass('active')){
				if($('#formContratoFilial').valid() != false){
					wizardSiguiente();
					$('#wizardNext').off('click, vclick').on('click, vclick', function(e) {
						e.preventDefault();
						if($('#economicos-contrato-enrolamiento').parent().hasClass('active')){
							if($('#inpMoneda').val() === ''){
									$('#formContratoFilial').valid()
								}else{
									$('#modalThree').click();
								}
						}
					});
				}else{
					$('#formContratoFilial').valid()
				}
			}
		});
	});

	$("#cbEstadoCivil").on("change", function(){
		if(($(this).val() == "RCONYSEPBI")){
			$("#datosConyuge").slideDown();
		}else{
			$("#datosConyuge").slideUp();
		}
		setTimeout(function(){
			resizeWizard('wizzard-corredor-bolsa');
		},300);
	});

	function wizardSiguiente() {
		$(".wizard").wizard('next');
	}

	function resizeWizard($wizard) {
		if ($wizard !== undefined) {
			$(document).trigger('capgemini.wizard.resize', $wizard);
		} else {
			// No fue pasado como parametro el id del wizard para realizar el redimensionado
			console.log('Es necesario el wizard para realizar el redimensionado (revisar el paso de parametros)');
		}
	}
</script>