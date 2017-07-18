<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Bloquear Cheques</h3>
</div>
<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
	<h3 class="tab-title">Bloquear Cheques</h3>
	<hr>
</div>
<div id="lineacredito_operation" class="lineacredito step-recarga-celulares">
	<div class="main-lineacredito">
		<form novalidate="novalidate" id="form-linea" class="form-horizontal tooltip-validation transfer-filter">
			<article class="wizard">
				<div data-title="Seleccionar cheques">
					<?php include(dirname(__FILE__) . '/anular-cheques/remote-step-1-datos.html'); ?>
				</div>
				<div data-title="Confirmar" data-multistep="true">
					<?php include(dirname(__FILE__) . '/anular-cheques/remote-step-2-confirmar.html'); ?>
				</div>
				<div data-title="Comprobante">
					<?php include(dirname(__FILE__) . '/anular-cheques/remote-step-3-comprobante.html'); ?>
				</div>
			</article>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>
<script type="text/javascript">
$('#lineacredito_operation').on('click','#wizardBack',function(){


                   setTimeout(function(){

                       if(!$(this).is(":visible")){
                           crearBackButtonSimulado();
                       }
                   }, 100);
});
function crearBackButtonSimulado(){
    var wiz = $('#lineacredito_operation').find('.wizard');
    	var backButton = $('<button>');
    	backButton.attr('type','button');
    	backButton.append("Anterior");
    	backButton.attr('id','anterior_borrar');
    	backButton.attr('class','btn arrow-left prev pull-left');
    	backButton.on('click',function(){
        	$('.despues').hide();
        	$('.antes').show();

        	$(this).remove();
        	var wiz = $('#lineacredito_operation').find('.wizard');
        	$(document).trigger('capgemini.wizard.resize', wiz);
        	setTimeout(function(){
            	var wiz = $('#lineacredito_operation').find('.wizard');
            	wiz.find('.wizardNext').hide();
            	crearNextButtonSimulado();
        	}, 200);
    	});
    wiz.find('.button-bar').append(backButton);
}

function crearNextButtonSimulado(){
    var wiz = $('#lineacredito_operation').find('.wizard');
    	var backButton = $('<button>');
    	backButton.attr('type','button');
    	backButton.append("Siguiente");
    	backButton.attr('id','siguiente_borrar');
    	backButton.attr('class','btn arrow-right next pull-right wizardNext');
    	backButton.on('click',function(){
    	debugger;
        	$('.despues').show();
        	$('.antes').hide();

        	$(this).remove();

        	var wiz = $('#lineacredito_operation').find('.wizard');
        	 wiz.find('.wizardNext').show();
        	$(document).trigger('capgemini.wizard.resize', wiz);
            crearBackButtonSimulado();
             wiz.find('.wizardNext').on('click',function(){
                 $('#anterior_borrar').remove();
             });

    	});
    wiz.find('.button-bar').append(backButton);
}



setTimeout(function(){

        $('.wizardNext').hide();
        crearNextButtonSimulado();
    }, 300);

</script>