/*
URL : www.soho.cl
Hecho por : Enis del Mar
Para : BBVA
Fecha :  Mayo 2014
*/

$('.re-modal').click(function(){
	$('body').addClass('noOverflow');
});



$(function(){




	var openOperation = function(url){
		// Load new
		$.ajax({
			url: url,
			success: function(data){
				if(Modernizr.mq('(max-width:768px)')){
					// apertura automatica de operacion
					$('.operation-tabs > ul > li').addClass('active').find('> div.tab-pane').addClass('active').find('ul li:nth-child(2)').removeClass('inactive').addClass('active');
					$('#tab-operaciones').addClass('active');
					$('.want').removeClass('want').addClass('return2').text('Volver');
					// fin apertura automatica operacion


					// Phone
					$('.tabmain-operaciones.active').removeClass('active').addClass('hidden');
					var $target = $('#option-content');
					$target.removeClass().html($(data)).show();
					$('#options-container').addClass('hidden');
					$('#content-container').removeClass('hidden');

					$('.operation-tabs').find('.return').removeClass('return').addClass('return2');

					$('.tabmain-operaciones').removeClass('active').addClass('hidden').closest('ul').find('> li:not(.active)').addClass('inactive');
					$('.tabmain-operaciones').prev().addClass('hidden').removeClass('hidden-xs');
				}
				else {
					// Desktop
					var $target = $('#operacion-container');
					$target.html($(data)).addClass('active');

					$('#operaciones-list-container').removeClass('active');

					$('.tabmain-operaciones').removeClass('active').addClass('hidden').prev().addClass('hidden');
					if($('#tab-operaciones').is(":hidden")) {
						$('#tab-operaciones-link').trigger('vclick');
					}
				}
				//alert('openOperation');
				$(document).trigger('capgemini.ajax.load', $target);
			}
		});
	};


	//Validaciones Bloqueo de Tarjeta y PinPass
	$('#historico-tarjetas-bbva-nacional').on('click', function(e){

		$(".BotonVerCartola").attr("data-href","includes/components/movements/tarjetas/dialogs/estado-cuenta.html");

	});

	$('#historico-tarjetas-bbva-internacional').on('click', function(e){

		$(".BotonVerCartola").attr("data-href","includes/components/movements/tarjetas/dialogs/estado-cuenta-internacional.html");

	});



	$('.BotonEnviarAumentoCupo').on('click', function(e){

		$(this).closest(".form-solicitar-cupo.paso1").hide();
		$(".form-solicitar-cupo-paso2").show();

	});

	$('.TablaAvanceLinea tbody tr').on('click', function(e){

		$(this).parents("tbody").find("tr").addClass("check-alpha");
		$(this).removeClass("check-alpha");

	});




	$('.BotonPagoTarjetaInterNacional').on('click', function(e){
			$('.PagoTarjetaInterNacional').show();
			$('.PagoTarjetaNacional').hide();


			$('.TituloPagar').html("Pagar deuda internacional");
			$(".ConfirmaPagoContenedor").attr("data-multistep","true");
			var $wizard = $('.wizard');
			if($wizard.length > 0) {
				//$(document).trigger('capgemini.wizard.refresh', $wizard);
				$(document).trigger('capgemini.wizard.resize', $wizard);
			}


	});

	$('.BotonPagoTarjetaNacional').on('click', function(e){
			$('.PagoTarjetaInterNacional').hide();
			$('.PagoTarjetaNacional').show();
			$('.TituloPagar').html("Pagar deuda nacional");
			$(".ConfirmaPagoContenedor").attr("data-multistep","false");

			var $wizard = $('.wizard');
			if($wizard.length > 0) {
				console.log('sss');
				//$(document).trigger('capgemini.wizard.refresh', $wizard);
				 $(document).trigger('capgemini.wizard.resize', $wizard);
			}

	});

	$('.BotonConfirmarClaveSegura').on('click', function(e){
		// e.preventDefault();
		if($("input[name='clave-segura']").val() != "" && $("input[name='clave-segura']").val().length == parseInt($("input[name='clave-segura']").attr("maxlength")))
		{
			$(this).hide();
			$(".ConfirmadoCheck").show();
			$("#wizardNext").removeAttr("disabled");

		}else{
			$(this).show();
			$(".ConfirmadoCheck").hide();
			$("#wizardNext").attr("disabled","");

			 }
	});

	$('.BotonSimularAvance').on('click', function(e){
		// e.preventDefault();
		$(".TablaAumento").show(0,function(){
			var $wizard = $(this).closest('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
			}
		});
	});


	$('.BotonGift, .BotonClub').on('click', function(e){
		// e.preventDefault();
		$(".con-sin-mapa").show(0,function(){
			$(".calugas").hide();
/*
			$mapa = '<div class="google-maps sucursal" data-refresh="#sucursal-link" data-height="320px" data-latitude="-33.4588" data-longitude="-70.605705" data-zoom="12" data-pan-x="110" data-pan-y="-70" data-type="sucursal-bbva" data-title="Sucursal BBVA 000" data-subtitle="Loren ipsum dolor sit amet." data-horario1="Loren to lorem" data-horario2="8:30 - 16:30" data-telefono="21 311 72 00" data-href="includes/components/movements/cuentas/dialogs/seleccionar-sucursal.html"></div>';
			$(this).find(".map-small").html($mapa);
			$('.google-maps.sucursal').googleMaps('initMapSucursal', $('.google-maps.sucursal'));*/
			$(document).trigger('capgemini.ajax.load');
			var $wizard = $(this).closest('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
				$('#wizardNext').show();
			}
		});
	});

	$('.adelante').click(function(){
  		window.open('http://www.clubadelante.cl/');
	});

	$('.clickSinMapa').click(function(){
		$('.hideTitle').hide();
		$('.suMapa').hide();
		$(".calugas").hide();
		$(".con-sin-mapa").show();
		var $wizard = $(this).closest('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
				$('#wizardNext').hide();
		}

	});



	$('#transferencia-notificar-email-check').on('click', function(e){
		if($(this).parent().find("label").hasClass("on"))
		{
			$(this).removeClass("on");
		}else{
			$(this).addClass("on");
			}
	});


	$(document).on('click','.callAjax_modal', function(e){

    	e.preventDefault();
    	if($(this).hasClass('disabled_ajax_modal')) return;


		var url = $(this).attr('href');
		if(url === undefined) {
			url = $(this).data('href');
		}
    	if(url === undefined){
		    alert("Not defined href");
		    return
        }

       $('callAjax_modal').addClass('disabled_ajax_modal');


        $.ajax({
			url: url,

			success: function(data,xhtm){
				$(".SegundoContent").remove();
				$(".content").addClass("ocultar");
				var element = $( "<div class='content SegundoContent'>"+data+"</div>" );
				element.insertBefore( ".ocultar" );
                element.find('.Validacion').validate(validatorOptions);

				element.find('.close-icon, .BotonCancelar').on('click', function(e){
					$(".SegundoContent").remove();
					$(".ocultar").removeClass("ocultar");
				});

				 $('callAjax_modal').removeClass('disabled_ajax_modal');
				 $(document).trigger('capgemini.ajax.load');
				 readyDocument();
			},
			error: function(data){
                     $('callAjax_modal').removeClass('disabled_ajax_modal');
			}
		});

	});





	$('.show-operation-aumento').on('click', function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		if(url === undefined) {
			url = $(this).data('href');
		}
		$(".content").addClass("ocultar");
		$.ajax({
			url: url,
			success: function(data){
				$(".SegundoContent").remove();
				$(".content").addClass("ocultar");
				$( "<div class='content SegundoContent'>"+data+"</div>" ).insertBefore( ".ocultar" );

				$('.Validacion').validate(validatorOptions);
				$('.BotonConfirmaAumento').on('click', function(e){

				   if($(".Validacion").valid())
				   {
					  $(".DivClaveSegura").removeClass("ocultar");
				   }

				});

				$('.ConfirmaClaveSegura').on('click', function(e){
					if($(".Validacion").valid())
					   {
						$(".DivClaveSegura, .content-aumento-cupo").addClass("ocultar");
						$(".exito-tarjeta-credito").removeClass("ocultar");
					   }

				});



				$('.close-icon, .BotonCancelar').on('click', function(e){
					$(".SegundoContent").remove();
					$(".ocultar").removeClass("ocultar");
				});
			}
		});

		return false;

	});



	//$('.Validacion').validate(validatorOptions);

	//initializeInlineValidationForm($('.Validacion'));
	/*
		$(".BotonConfirmaAumento").on('click', function(){
			  // $(".form-val").valid();
			   $('.Validacion').validate(validatorOptions);
			   if($(".Validacion").valid())
			   {
				   alert("valido");
				}else{
					alert("invalido");
					}

		});
		*/


});

$(document).ready(readyDocument);

var readyDocument =function(){
    if(!$('#tab-operaciones').hasClass('active')){

     var hash = window.location.hash.slice(1); //hash to string (= "myanchor")
            if(hash=="bloquear-tarjeta"){
    			$('#tab-operaciones').addClass('active');
                $('#bloquear_tarjeta').trigger("click");
            }
    }

    if($('#medimumStepWizardEmpty').length>0){


         $('.wizard').on('click','.wizardNext, #wizardBack',function(){

            setTimeout(function(){
                    var step=$('#medimumStepWizardEmpty').parent();
                    var stepContainer = step.parent();
                    var arrayElements = jQuery.makeArray(stepContainer.children());
                    var indexOFItemActive = arrayElements.indexOf($('.step.active').get(0));
                    var indexElem = arrayElements.indexOf(step.get(0));
                    if(indexElem == indexOFItemActive){
                            $('.wizardNext').hide();
                    }

                }, .7);
                });

    }

    if($('#lastStepWizardEmpty').length>0){
        $('.wizard').on('click','.btn.next',function(){

            setTimeout(function(){
                    var step=$('#lastStepWizardEmpty').parent();
                    var stepContainer = step.parent();
                    var arrayElements = jQuery.makeArray(stepContainer.children());
                    var indexElem = arrayElements.indexOf($('.step.active').get(0));
                    if(indexElem == arrayElements.length-1){
                            $('.wizardNext').hide();
                    }

                }, .7);
        });
         $('.wizard').on('click','.wizardNext',function(){

            setTimeout(function(){
                    var step=$('#lastStepWizardEmpty').parent();
                    var stepContainer = step.parent();
                    var arrayElements = jQuery.makeArray(stepContainer.children());
                    var indexElem = arrayElements.indexOf($('.step.active').get(0));
                    if(indexElem == arrayElements.length-1){
                            $('.wizardNext').hide();
                    }

                }, .7);
            });





    }
    if($('#firstStepWizard').length>0){

        $('.wizardNext').addClass('disabled');
        var functionUpdatePaso1= function(){
            if($('select#aporte-programa').val()!='' && $('input[name="numero-cuotas"]').val()!="" &&  !isNaN($('input[name="numero-cuotas"]').val())){
                $('.wizardNext').removeClass('disabled');
            }else{
                $('.wizardNext').addClass('disabled');
            }

        }
        $('select#aporte-programa').on('change',functionUpdatePaso1);
        $('input[name="numero-cuotas"]').on('change',functionUpdatePaso1);


        $('.wizard').on('click','.wizardNext',function(){
             if($(".step.active .tables-body div").hasClass("scrollable")){
               $(".step.active .tables-body div").removeClass("scrollable");
               $(".step.active .tables-body div").addClass(".scrollable");
            }
            var step=$('#firstStepWizard').parent();
            var stepContainer = step.parent();
            var arrayElements = jQuery.makeArray(stepContainer.children());
            var indexElem = arrayElements.indexOf($('.step.active').get(0));
            if(indexElem===arrayElements.length-3)
                setTimeout(function(){

                    $('.wizardNext').html($('.wizard').wizard('option').labels.next);
                     if($(".step.active .tables-body div").hasClass(".scrollable")){
                       $(".step.active .tables-body div").removeClass(".scrollable");
                       $(".step.active .tables-body div").addClass("scrollable");
                    }
                }, .7);
            setTimeout(function(){
                    var step=$('#firstStepWizard').parent();
                    var stepContainer = step.parent();
                    var arrayElements = jQuery.makeArray(stepContainer.children());
                    var indexElem = arrayElements.indexOf($('.step.active').get(0));
                    if(indexElem == arrayElements.length-2 ){
                           $('#wizardBack').show();
                    }
                     if($(".step.active .tables-body div").hasClass(".scrollable")){
                       $(".step.active .tables-body div").removeClass(".scrollable");
                       $(".step.active .tables-body div").addClass("scrollable");
                    }
                }, .7);




        });
         setTimeout(function(){ $('.wizardNext').html($('.wizard').wizard('option').labels.next);},.7);
    }

    $('.wizard').on('click','#wizardBack',function(){
        var step=$('#firstStepWizard').parent();
        var stepContainer = step.parent();
        var arrayElements = jQuery.makeArray(stepContainer.children());
        if($(arrayElements[1]).hasClass('active') && $('#firstStepWizard').length>0)
            $('.wizardNext').addClass('disabled');
         if($(".step.active .tables-body div").hasClass("scrollable")){
               $(".step.active .tables-body div").removeClass("scrollable");
               $(".step.active .tables-body div").addClass(".scrollable");
            }
         setTimeout(function(){

                     if($(".step.active .tables-body div").hasClass(".scrollable")){
                       $(".step.active .tables-body div").removeClass(".scrollable");
                       $(".step.active .tables-body div").addClass("scrollable");
                    }
                }, .7);

    });

};


