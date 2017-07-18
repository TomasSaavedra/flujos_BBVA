$(document).ready(function() {

	$(".btn-big-gray").click(function() {
			$(".ayuda").fadeIn("slow");
			$(this).addClass("select");
	});
	$(".close-operation-tab").click(function() {
			$(".ayuda").fadeOut("slow");
			$(".btn-big-gray").removeClass("select");
	});


	//
	$('.body-container-bck #monto').focus(function() {
		$('.right-cont .loader').show();
		$('.datos-cargados').css('opacity', '0');
		$('.footer-container-bck .btn').addClass('disabled');
	});

	$('.body-container-bck #monto').focusout(function() {
		$('.right-cont .loader').hide();
		$('.datos-cargados').css('opacity', '1');
		$('.footer-container-bck .btn').removeClass('disabled');
	});

	$('.container-bck-step1 .footer-cont-btn .btn').click(function(e) {
		e.preventDefault();
		$(this).hide();
		$('.container-bck-control').show();
		$('.formato').addClass('sin-formato');
		//$('.dato-saldo').hide();
		$('.refinanciamiento-click .form-bck-large').addClass('cambiar-formato');
		$('.reemplazo-sale').hide();
		$('.reemplazo-entra').show();
		$('.max-val').hide();
		$('.min-val').hide();
		$('.dato-saldo').css({'float': 'left', 'text-align': 'left'});

	});

	$('.container-bck-control .btn').click(function() {
		$('.container-bck-step1').hide();
		$('.container-bck-step2').show();
	});

	//CHECK LIST - MOSTRAR TOOLTIPS
	$('.check-list label').click(function() {
		if(!$(this).hasClass("on")){
			$(this).siblings('.tool-seguro').show();
			setTimeout(function(){
				$('.check-list label').siblings('.tool-seguro').fadeOut('slow');
			},5000);
		}else {
			$(this).siblings('.tool-seguro').hide();
		}
	});


	//
	$('#js-sucursal').click(function(e) {
		e.preventDefault();
		$('.modal-dialog .sucursal').fadeIn();
		$('.modal-dialog .domicilio').hide();
	});


	//
	$('#js-domicilio').click(function(e) {
		e.preventDefault();
		$('.modal-dialog .domicilio').fadeIn();
		$('.modal-dialog .sucursal').hide();
	});

	//
	$(".formato").focus(function() {
		$(this).parent().addClass('mostrar-max-min');
	});

	$(".formato").focusout(function() {
		$(this).parent().removeClass('mostrar-max-min');
	});

	//seguro fraude
	$('.seguro-fraude-click .claveSegura').hide();
	$('.seguro-fraude-click .btn-big-green').click(function(e) {
		e.preventDefault();
		if ($('#acepto').is(':checked')) { 
			$(this).addClass('disabled');
			$('.seguro-fraude-click .claveSegura').show();
		}else{ 
			$('#acepto').parent().next().show(); 
		}
		
	});
	$('.seguro-fraude-click input[type="checkbox"]').change(function() {
			$('.tooltip.error').hide();
			if ($('#acepto').is(':checked')) {  
				 
			}else{ 
			 	$('.seguro-fraude-click .btn-big-green').removeClass('disabled');
				$('.seguro-fraude-click .claveSegura').hide();
			}
		})
	$('.seguro-fraude-click .BotonConfirmarClaveSegura').click(function(e) {
		e.preventDefault();
		 window.location.href = "content.php?src=S17-prod-seguro-fraude-un-click-comrpobante.php";
	});	


	//Simulacion refinanciamiento
		$('#input-credito').change(function() {
		   var text1 = $(this).data('msg-greater');
		   var text2 = $(this).data('msg-smaller');
		   var valor = $(this).val();
		   if( valor < 100000){
		   		$(this).addClass('tooltip-validation-invalid');
		   		$(this).next().fadeIn();
		   }else if( valor > 5000000){
		   		$(this).addClass('tooltip-validation-invalid');
		   		$(this).next().fadeIn();
		   }else{
		   		$(this).removeClass('tooltip-validation-invalid');
		   		$(this).next().fadeOut();
		   }
		});
		$('#input-credito').focusin(function() {
		  $(this).next().hide();
		});

		$('.refinanciamiento .claveSegura').hide();
		$('.refinanciamiento .btn-big-green').click(function(e) {
			e.preventDefault();
			if ($('#acepto').is(':checked')) {
				if ($('#acepto2').is(':checked')) {
					$(this).addClass('disabled');
					$('.refinanciamiento .claveSegura').show();
				}else{
					 $('#acepto2').parent().next().show();
				}
			}else{ 
				$('#acepto').parent().next().show(); 
			}
			
		});
		$('.refinanciamiento input[type="checkbox"]').change(function() {
			$('.tooltip.error').hide();
			if ($('#acepto').is(':checked')) {
				if ($('#acepto2').is(':checked')) { 
				}else{
					$('.btn-big-green').removeClass('disabled');
					$('.refinanciamiento .claveSegura').hide();
				}
			}else{ 
			 	$('.btn-big-green').removeClass('disabled');
				$('.refinanciamiento .claveSegura').hide();
			}
		})
		$('.refinanciamiento .BotonConfirmarClaveSegura').click(function(e) {
			e.preventDefault();
			 window.location.href = "content.php?src=S17-prod-refinanciamiento-un-click-comprobante.php";
		});


	    $('.col-informacion').on('change',"#input-credito", function(){  
	       	var text1 = $('#input-credito').data('msg-greater');
		   	var text2 = $('#input-credito').data('msg-smaller');
		   	var valor = $('#input-credito').val();
		   	if( valor > 100000 && valor < 5000000){
		   		$(this).closest('.row').find('.cont-resultado').hide().delay( 1000 ).fadeIn();
	        	$(this).closest('.row').find('.loader').show().delay( 1000 ).fadeOut();    
		   	} 
	                
	    });

	    $('.refinanciamiento').on('change',"input[name='seguro']", function(){ 
	    	var total = $("input[name='seguro']:checked").length;
	    	if(total == 2){ ancho = "66%"; }else if(total == 3){ ancho = "100%"; }else{ ancho = "33%";}
	    	$('.refinanciamiento .ui-progressbar .ui-progressbar-value').animate({width:ancho});
    	});
	    
	// FIN Simulacion refinanciamiento



});

