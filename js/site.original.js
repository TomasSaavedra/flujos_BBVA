/**
 * Site javascript
 */

$(function(){
	var $options = $('.main-menu .sub-menu.active li:not(.home):not(.search):not(.posicion-global)');
	$options.css('width', 90/$options.length + '%');
	
	$('.input-search').on('vclick', function(){
		$(this).focus();
	});
	
	$('.navbar-trigger').on('vclick', function(){
		var $trigger = $(this).closest('header').find('.menu-trigger');
		if($trigger.length == 1){
			$trigger.hide();
			$($trigger.data('target')).show();
		}
		$('.main-menu').slideToggle();
		$('#form-client-access').slideUp();
		$('.form-client-access-trigger').removeClass('opened');
	});
	
	var initialSearchWidthDesktop = $('.main-menu .sub-menu.active li.search .input-search').css('width');
	$('.main-menu .sub-menu.active li.search .input-search').focus(function(){
		var textwidth = 180;
		var width = 0;
		
		var $ul = $(this).closest('ul');
		$ul.find('li a').each(function(){
			width += $(this).outerWidth(true);
		});
		
		if(width + textwidth > $(window).width() - 20){
			$ul.find('li:not(:first-child) [class*=icon-]').hide();
		}
		$(this).animate({'width': textwidth + 'px'}, 'fast');
	}).focusout(function(){
		$(this).animate({'width': initialSearchWidthDesktop}, 'fast', function(){
			$(this).closest('ul').find('[class*=icon-]').show();
		});
	});
	
	$('.main-menu .sub-menu.active li.search img').on('vclick', function(){
		if($('.main-menu .sub-menu.active li.search .input-search').val() === ''){
			$('.main-menu .sub-menu.active li.search .input-search').focus();
		} else {
			$(this).closest('form').submit();
		}
	});
	
	$('.main-menu .sub-menu.active li').on('vclick', function(e){
		var $a = $(this).find('a');
		if($a.length == 1){
			$a.get(0).click();
		}
	});
	
	$('.menu-trigger').on('vclick', function(){
		if(Modernizr.mq('(max-width:768px)')){
			var $element = $($(this).data('target'));
			if($element.is(':visible')){
				$(this).closest('[class*=-menu]').find('.open').removeClass('open').next().slideUp();
				$(this).removeClass('open');
				$element.slideUp();
			} else {
				$(this).closest('[class*=-menu]').find('.open').removeClass('open').next().slideUp();
				$(this).addClass('open');
				$element.slideDown();
			}
			return false;
		}
	});
	
	var initialSearchWidthTablet = $('.main-menu > div.header-buttons .input-search').css('width');
	var initialAccesoHtml = $('.main-menu > div.header-buttons a.btn.success').html();
	
	$('.main-menu > div.header-buttons img').on('vclick', function(event){
		event.stopPropagation();
		
		$(this).parent().find('.input-search').focus();
		return false;
	});
	
	var textWidthHandle;
	$('.main-menu > div.header-buttons .input-search').focus(function(){
		clearTimeout(textWidthHandle);
		
		var $search = $(this);
		$search.parent().find('img').attr('src', 'img/icon-text-search-close.png').css('top', '5px').off('vclick').on('vclick', function(event){
			event.stopPropagation();
			
			$search.val('').focus();
			return false;
		});
		
		if(initialSearchWidthTablet != '100%'){
			var $alta = $search.parent().find('a.btn:not(.success)');
			var $acceso = $search.parent().find('a.btn.success');
			if($alta.length > 0 || $acceso.length > 0){
				if($(window).width() <= 480){
					$acceso.html('<i class="icon-16 white j03-cliente"></i>');
				}
				$search.animate({'width': $search.parent().width() - 10 - $alta.outerWidth(true) - $acceso.outerWidth(true)}, 'fast');
			}
		}
		
	}).focusout(function(){
		var $search = $(this);
		textWidthHandle = setTimeout(function(){
			$search.parent().find('img').attr('src', 'img/icon-text-search-big.png').css('top', '8px').off('vclick').on('vclick', function(event){
				event.stopPropagation();
				
				$search.focus();
				return false;
			});
			
			if(initialSearchWidthTablet != '100%'){
				var $alta = $search.parent().find('a.btn:not(.success)');
				$alta.html($alta.data('fulltext'));
				
				$search.parent().find('a.btn.success').html(initialAccesoHtml);
				$search.animate({'width': initialSearchWidthTablet}, 'fast');
			}
		}, 200);
	});
	
	$('.language-switcher').hover(function(){
		$('li.language-switcher').addClass('opened');
		$('#language-list').show();
		
	}, function(){
		$('li.language-switcher').removeClass('opened');
		$('#language-list').hide();
	});
	
	// Form client access
	$('.form-client-access-trigger').on('vclick', function(event){
		event.stopPropagation();
		
		var $this = $(this);
		if($('#form-client-access').is(':visible')){
			$('#form-client-access').slideUp(function() {
				$('.form-client-access-trigger').removeClass('opened');
				$('.main-menu').slideUp();
			});
		} else {
			$('.form-client-access-trigger').addClass('opened');
			$('.main-menu').slideUp();
			$('#form-client-access').slideDown();
		}
		return false;
	});
		
	// tablet footer fixed - button handle
	$('.fixed-footer > ul > li > a').on('vclick', function(){
		if($(this).find('.text-large').length > 0){
			if($(this).hasClass('active')){
				// Closing it...
				$(this).closest('li').css('width', '50%');
				$(this).closest('ul').find('.text-small').show();
			} else {
				// Opening it...
				$(this).closest('li').css('width', '100%');
				$(this).closest('ul').find('.text-small').hide();
			}
		} else {
			$(this).closest('ul').find('> li').css('width', '50%');
			$(this).closest('ul').find('.text-small').show();
		}
	});
	
	// cheques
	var initChequesSearch = function($context){
		$('#cheques-filter-btn', $context).on('vclick', function (event) {
			
			var $hayCheques = false;
			if(Modernizr.mq('(max-width:768px)')){
				var $checked = $("input[name=sample-radio-out]:checked").val();
				var $form = $(this);
				if($checked && $form.valid()) {
					$hayCheques = true;
				}
			}
			else {
				if($('.cheque-filter').hasClass('filtered')) {
					$hayCheques = true;
				}
			}
			
			if($hayCheques == true) {
				var $form = $(this).closest('form');
				$form.attr('action', '?src=S03-cheques.php&login');
				$form.submit();
			}
			
			return false;
		});		
	};
	
	// cartola
	var initCartolaFix = function($context){
		$('#search-form', $context).submit(function (event) {
			
			var $hayTransfers = false;
			if(Modernizr.mq('(max-width:768px)')){
				var $checked = $("input[name=sample-radio-transfers]:checked").val();
				if($checked !== undefined) {
					$hayTransfers = true;
				}
			}
			else {
				if($('#transfers-radio-filter').hasClass('filtered')) {
					$hayTransfers = true;
				}
			}
			
			if($hayTransfers == true) {
				var $data = $("input[name=sample-radio-transfers]:checked").val();
	        	$(this).attr('action', '?src=S04-cartola.php&login&option=' + $data);   
	        	return true;
	        }
			else {
				if($('.aviso-no-encontrado').hasClass('hidden')) {
					$('.aviso-no-encontrado').removeClass('hidden');
					$('.tables-body.table-resultados').addClass('hidden');
					$('.tables-footer.table-resultados').addClass('hidden');
					
				}
				else {
					$('.aviso-no-encontrado').addClass('hidden');
					$('.tables-body.table-resultados').removeClass('hidden');
					$('.tables-footer.table-resultados').removeClass('hidden');
				}
			}
			
	        return false;        
	    });
	};
	
	var initTransferDetail = function($context){
		$('#transfer-detail-btn', $context).on('vclick', function(){
			var $form = $(this).closest('form');
			if($form.valid()) {
				var $successItem = $form.find('.block-wizard-success');
				$successItem.show();	
				setTimeout(function() {
					$successItem.fadeOut(300, function () {
						$(this).hide();
					});
				}, 2000);
			}
		});
		
	};
	
	// init confirmar step
	var initConfirmarStep = function($context){
		$('.formline.confirmar', $context).each(function(){
			var $subcontext = $(this);
			var $textInput = $subcontext.find('input:text');
			var $checkBoxDiv = $subcontext.find('.item.check');
			
			$checkBoxDiv.on('vclick',function(){
				var $checkbox = $(this).find("input[type='checkbox']");
				if($checkbox.prop("checked")){
					$textInput.attr('disabled', false);
				}
				else {
					$textInput.attr('disabled', true);
					$textInput.removeClass('tooltip-validation-invalid');
					$textInput.tooltip('destroy'); 
				}
			});
		});
	};
	
	// init anular transferencia
	var initAnularTransferencia = function($context){
		$('#anular-next-btn-1', $context).on('vclick',function(){
			$('#anular-view-1').hide();
			$('#anular-view-2').show();
		});
		
		$('#anular-back-btn-2', $context).on('vclick',function(){
			$('#anular-view-1').show();
			$('#anular-view-2').hide();
		});
		
		$('#anular-back-btn-3', $context).on('vclick',function(){
			$('#anular-view-1').show();
			$('#anular-view-3').hide();
		});
		
		$('#anular-trans-pin-form', $context).submit(function (event) {
			var $pin = $(this).find("input[type='password']").val();
			if($pin.length == 7) {
				$('#anular-view-3').show();
				$('#anular-view-2').hide();
			}
			return false;        
	    });	
		
		$('#anular-trans-sms-form', $context).submit(function (event) {
			var $sms = $(this).find("input[type='password']").val();
			if($sms.length == 4) {
				$('#anular-view-4').show();
				$('#anular-view-3').hide();
			}
			return false;        
	    });	
	};
	
	// init anular transferencia
	var initSaveFavoritos = function($context){
		$('#favBtn', $context).each(function(){
			
			$('#favBtn', $context).on('vclick',function(){
				$(this).addClass('pressed');
				var $tickImg = $(this).find("img");
				$tickImg.show();
			});
		});
	};

	// init toggle alias
	var initToggleAlias = function($context){
		$('.toggle-alias', $context).on('change',function(){
			$(this).parent().parent().find('.alias').toggle(0,function(){
				
				var $wizard = $(this).closest('.wizard');
				if($wizard.length > 0) {
					$(document).trigger('capgemini.wizard.resize', $wizard);
				}
			});
		});
	};
	
	// init operation container
	var initOperationContainer = function($context){
		$('.close-operation', $context).each(function(){
			
			// close the active operation and show the operations tab
			$(this).on('vclick',function(){
				if(Modernizr.mq('(max-width:768px)')){
					// Phone
					$('#content-container').addClass('hidden');
					$('#options-container').removeClass('hidden');
					$('#operacion-container').empty();
					$('#option-content').empty();
					$('.tabmain-operaciones').addClass('active').removeClass('hidden');
					$('.tabmain-operaciones').prev().removeClass('hidden').addClass('hidden-xs');
				}
				else {
					$('#operacion-container').removeClass('active');
					$('#operacion-container').empty();
					$('#option-content').empty();
					$('#operaciones-list-container').addClass('active');
					$('.tabmain-operaciones').addClass('active').removeClass('hidden');
					$('.tabmain-operaciones').prev().removeClass('hidden').addClass('hidden-xs');
				}
				
				return false;
			});
		});
		
		$('.close-operation-tab', $context).each(function(){
			
			$(this).on('vclick',function(){
				if(Modernizr.mq('(max-width:768px)')){
					// Phone
					$(this).closest('ul').find('> li').removeClass('inactive active');
					$('#tab-operaciones').removeClass('active');
					$('.tabmain-operaciones').removeClass('hidden').addClass('active');
					$('#operaciones-list-container').addClass('active');
					$('#operacion-container').empty();
					$('#option-content').empty();

					var $backButton = $('.return2');
					$backButton.removeClass('return return2').text('Quiero').addClass('want');
					$backButton.trigger('vclick');
				}
				else {
					// Desktop
					$(this).closest('ul').find('> li').removeClass('inactive active');
					$('#operacion-container').removeClass('active');
					$('.tabmain-operaciones').removeClass('hidden').addClass('active');
					$('#operacion-container').empty();
					$('#option-content').empty();
					
					$('#operaciones-list-container').addClass('active');
					$('#tab-operaciones-link').click();
				}
				
				return false;
			});
		});
	};
	
	// init selectPickers
	var initSelectPickers = function($context){
		$('.selectpicker', $context).selectpicker();
		
		// Specific selectPicker functions.
		$('.selectpicker#periodicidad', $context).on('change',function(){
			// 2 posibilities
			// 01 - periodicidad
			// 02 - Mensualmente
			if($(this).val() == '01') {
				// hide it all
				$('.mensualmente').hide(0,function(){
					var $wizard = $(this).closest('.wizard');
					if($wizard.length > 0) {
						$(document).trigger('capgemini.wizard.resize', $wizard);
					}
				});
			} else {
				// show it all
				$('.mensualmente').show(0,function(){
					var $wizard = $(this).closest('.wizard');
					if($wizard.length > 0) {
						$(document).trigger('capgemini.wizard.resize', $wizard);
					}
				});
			}
		});
	};
	
	// changes the visible text on "Realizar Transferencia" -> 2nd Step
	var changeAmountText = function($context){
		$('.otros-titulares-filter', $context).each(function(){
			var $subcontext = $(this);
			var $textAmount = $subcontext.find('.info-text-monto');
			var $amountInput = $subcontext.find('input.monto');
			var Max = 5000;
			
			$amountInput.on('keyup change', function() {
				if (($amountInput.val() >= Max))  {
					$textAmount.text('Total disponible luego a transferir $ 1.300.000');
				}
				else {
					$textAmount.text('Máximo diario $ 5.000.000');
				}
			});
		});
	};
	
	// disables dates before today. No transfer can be completed on the past
	var validateDatePicker = function($context){
			// transferencias
			$('.otros-titulares-filter', $context).each(function(){
				$('.textbox.datepicker', $(this)).datepicker("option", "minDate", 0);
			});
			
			// consultas por fecha
			$('.date-period', $context).each(function(){
				$('.dateFieldFrom', $(this)).datepicker({ maxDate: new Date(), minDate: new Date(2000, 6, 12) });
				$('.dateFieldTo', $(this)).datepicker({ maxDate: new Date(), minDate: new Date(2000, 6, 12) });
			});			
	};
	
    var hideText = function($context){
		$('.otros-titulares-filter', $context).each(function(){
			var $subcontext = $(this);
			var $textPeriod = $('.info-text-periodicidad', $subcontext);
			var $dateInput = $('#datePlazo', $subcontext);
			var $textPlazo = $('.info-text-plazo', $subcontext);
			
			$dateInput.change(function() {
				var dateFromDate = $dateInput.datepicker('getDate');
							
				if (Date.parse(dateFromDate) != '') {
					$textPeriod.text('Número de transferencias: 12 ');
					$textPlazo.text('');
				}
			});

			$('#fin-de-plazo', $subcontext).on('vclick', function() {
				if ($($(this), $subcontext).checkbox('checked')) {
					$textPlazo.text('');
					$('#date-plazo').addClass("required");
					$('#numTrans').removeClass("required");
				}
			});
			$('#num-trans', $subcontext).on('vclick', function() {
				if ($($(this), $subcontext).checkbox('checked')) {
					$textPlazo.text('');
					$('#numTrans').addClass("required");
					$('#date-plazo').removeClass("required");
				}
			});
			$('.btn.acepta-trans', $subcontext).on('vclick', function() {
				$textPlazo.html('&nbsp;');
					if($('#numTrans', $subcontext).valid()) {
						$textPlazo.text('Fin de plazo: 25/09/2017');
					}
					
			});
		});
	};

	var closeDetailedFavOperations =  function($detailed){
		$detailed.closest('.operation').find('.fav-buttons').find('.btn').each(function() {
			$(this).removeClass('disabled');
		});
		var $dropContent = $detailed.closest('.detailed');
		$dropContent.slideUp(function(){
			$(this).addClass('hidden');
		});		
	}
	
	 var favOperations = function($context){
		$('aside.favoritas.editable', $context).each(function(){
			
			// click en boton de edicion
			$('.fav-buttons', $context).find('.n04-editar').on('vclick', function() {
				$(this).closest('.fav-buttons').find('.btn').each(function() {
					$(this).addClass('disabled');
				});
				var $dropContent = $(this).closest('.operation').find('.detailed');
				$dropContent.slideDown();
			});
			
			// aceptar edicion
			$('.detailed', $context).find('.accept-edit-item').on('vclick', function() {
				var $valid = $(this).closest('.detailed').find('form').valid();
				
				if($valid==1){
					closeDetailedFavOperations($(this));
				}
			});
			
			// cancelar edicion
			$('.detailed', $context).find('.close-edit-item').on('vclick', function() {
				closeDetailedFavOperations($(this));		
			});
			
			// click en fila de detalle
			var $aOfAcordeon = $('.section', $context).find('ul> li > a ');
			$aOfAcordeon.on('vclick', function() {
				return false;
			});
			
			// boton editar
			$('.edit-gray', $context).on('vclick', function() {
				var $fav = $('aside.favoritas.editable');
				
				if(!$fav.hasClass('on')) {
					$fav.addClass('on');
				}					
			});
			
			// boton cerrar edicion
			$('.finish-edit', $context).on('vclick', function() {
				var $fav = $('aside.favoritas.editable');
				
				// close detailed visibles
				$fav.find('.detailed:visible').each(function () {
					closeDetailedFavOperations($(this));	
				});
				
				if($fav.hasClass('on')) {
					$fav.removeClass('on');
				}	
			});
		});
		
		// Function for the ver mas buttons, adding 2 cloned elements.
		// Needs a parent element .links which holds a .section with a normal ul and li inside to work.
		// after completion, remove the element from sight.
		$('.seeMore').on('vclick', function() {

			var $section = $(this).closest('.links').find('.section');
			var $target = $section.find('.operation').last();
			var $content = $section.find('li');
			
			if(!$(this).hasClass('seeLess')) {
				// Show extra content
				$content.each(function(i){
					if(i <= 1) {
						$target.after($(this).clone());
					} else {
						return false;
					}
				});

				$(this).html('Cerrar <img src="css/img/double-arrow-up.png" alt="double-arrow">').addClass('seeLess');
			} else {
				// Remove extra content - 2 items
				//$content.slice(-2).remove();
				$section.find('.operation').last().remove();
				$section.find('.operation').last().remove();
				$(this).html('Ver más <img src="css/img/double-arrow.png" alt="double-arrow">').removeClass('seeLess');
			}
		})
		
	};
	
	var mostrarMasRows = function($context){
		$('.tables-footer', $context).each(function() {
			$(this).find(".btn").on('vclick', function() {
				var $table = $(this).closest('.capgemini-tables').find('table:visible').first();
				var $cloneRows =$table.find('tbody').first().children(':not(:first):not(#inner-detail-tr)').slice(0,9).clone().show();
				$table.find('tbody').first().append($cloneRows);
			});
		});
	};
	
	var initCalculatePagoParcial = function($context) {
		$('#pago-parcial-cantidad').on('keyup change blur', function(){
						
			var $infoPagoParcial = $(this).parent().find('.info-pago-parcial');
			if($.isNumeric($(this).val())) {				
				$infoPagoParcial.removeClass('hidden');
				if($(this).val() > 0) {
					$infoPagoParcial.text('Monto pendiente $ 100.000');
				}
				else {
					$infoPagoParcial.text('');
				}
			}
			else {
				$infoPagoParcial.text('');
			}
		});
	};
	
	var eliminarOpFav = function($context) {
		$('.accept-delete-op', $context).on('vclick', function(){
			$('.wizard', $context).find('#wizardNext').click();
			
			$(this).hide();
			$('.buttons', $context).addClass('single');
			$('.cancel-delete-op', $context).text('Cerrar');
			
			// change personalizar after delete
			$('#cuenta-simple-btn-edit').addClass('hidden');
			$('#cuenta-simple-btn-delete').addClass('hidden');
			$('#cuenta-simple-btn-save').removeClass('hidden');
			$('#cuenta-simple-info').addClass('hidden');
			$('#cuenta-simple-input').removeClass('hidden');
			$('#cuenta-simple-input').find('.cuenta-simple').val("");
		});
		
		$('.cancel-delete-op', $context).on('vclick', function(){
			$(this).closest('.modal-dialog').hide();
		});	
	};
	
	var seleccionarCuenta = function($context) {
		$('#seleccionar-cuenta', $context).find('.autocomplete').on('keyup', function(){
			var $rows = $('#seleccionar-cuenta', $context).find('tr');
			if($rows.length > 3) {
				$rows.last().remove();
			}
		});
	};
	
	// force validation of a form with a custom button
	var buttonVal = function($context) {
		$(".btn.confirm-button").on('vclick', function(){
			   $(".form-val").valid();
		});
	};
	
	var miscuentasbbva = function($context) {
		
		$('#clickMisCuentas', $context).on('vclick', function(){
			
			if ( $('#switch-1').attr('controlador') == '0' ) {
				$('#barraSearch').show();
				$('#cabeceraTabla>th').hide();
				$('#switch-1').attr('controlador', '1');
			} else {
				$('#barraSearch').hide();
				$('#cabeceraTabla>th').show();
				$('#switch-1').attr('controlador', '0');
			}
			
			var api = $('.scrollable').data('jsp');
			api.destroy();				
			$('.scrollable').jScrollPane(scrollPaneOptions);
			
			// call wizard resize
			var $wizard = $('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
			}
			
			clearErrors($(this).closest('form'));
		});
		
		$('#clickOtrosTitulares', $context).on('vclick', function(){
			$('#switch-1').attr('controlador', '3');
			clearErrors($(this).closest('form'));
		});
		
		$('#clickOtrosBancos', $context).on('vclick', function(){
			$('#switch-1').attr('controlador', '3');
			clearErrors($(this).closest('form'));
		});
		
	};
	
	var callWizardResize = function($element) {
		var $wizard = $element.closest('.wizard');
		if($wizard.length > 0) {
			$(document).trigger('capgemini.wizard.resize', $wizard);
		}
	};
	
	var initSituacion = function($context) {
		$("#tu-situacion-activos").hide();
		$("#tu-situacion-financiacion").hide();
		$("#volver-situacion").hide();
		$("#titulo-tu-situacion").show();
		
		$('#situacion-activos').on('vclick', function(){
			$("#volver-situacion").show();
			$("#titulo-tu-situacion").text("Activos");
			$("#situacion-activos").hide(200);
			$("#situacion-financiacion").hide(200);
			$("#tu-situacion-grafico").hide(200);
			
			$("#tu-situacion-activos").show();
			$("#tu-situacion-activos").animate({ height: 300 }, 300, function() {
				// execute on complete
			});
		});
		
		$('#situacion-financiacion').on('vclick', function(){
			$("#volver-situacion").show();
			$("#titulo-tu-situacion").text("Financiación");
			$("#situacion-activos").hide(200);
			$("#situacion-financiacion").hide(200);
			$("#tu-situacion-grafico").hide(200);
			
			$("#tu-situacion-financiacion").show();
			$("#tu-situacion-financiacion").animate({ height: 300 }, 300, function() {
				// execute on complete
			});
		});
		
		$("#volver-situacion").on('vclick', function(){
			$("#volver-situacion").hide();
			$("#titulo-tu-situacion").text("Tu situación");
			$("#titulo-tu-situacion").show();
			
			$("#tu-situacion-activos").hide();
			$("#tu-situacion-financiacion").hide();
			$("#situacion-activos").show(100);
			$("#situacion-financiacion").show(100);
			$("#tu-situacion-grafico").slideDown(300, function() {
				
			});
		});
		
	};

	var initGoogleMaps = function($context){
		// Filter to comb through the offices / false
		$('#office-search-string', $context).on('keyup', function(){
			if ($(this).val().length % 2 === 0) {
				$('#office-search-results .office:nth-child(2)').remove();
			} //else { /* we are odd */ }
		});
		
		$('.office', $context).on('vclick', function() {
			$(this).addClass('selected');
			$(this).siblings().removeClass('selected');
			
			$('#map-select-sucursal').data('latitude', $(this).data('latitude'));
			$('#map-select-sucursal').data('longitude', $(this).data('longitude'));
			$('#map-select-sucursal').googleMaps('initMapSucursal', $('#map-select-sucursal'));
		});
	}
	
	/* Tab personalizar : Nombre producto */
	var personalizarNombreProducto = function($context){
		$('#nombre-producto-form').on('submit', function () {
			if($(this).valid()) {
				var $successItem = $(this).find('.block-wizard-success');
				$successItem.show();	
				setTimeout(function() {
					$successItem.fadeOut(300, function () {
						$(this).hide();
					});
				}, 2000);
			}
			return false;
		});
	};
		
	/* Tab personalizar : Cuenta simple */
	var personalizarSimpleAccount = function($context){
		
		$('#cuenta-simple-form').on('submit', function () {
			if($(this).valid()) {
				$(this).find('.block-wizard-success').show();

				var $inputVal = $('#cuenta-simple-input .cuenta-simple').val();
				$('#cuenta-simple-info .info-text').text($inputVal);
				
				$('#cuenta-simple-input').addClass('hidden');
				$('#cuenta-simple-info').removeClass('hidden');
				
				$('#cuenta-simple-btn-save').addClass('hidden');
				$('#cuenta-simple-btn-edit').removeClass('hidden');
				$('#cuenta-simple-btn-delete').removeClass('hidden');
				setTimeout(function() {
					$('#cuenta-simple-form .block-wizard-success').fadeOut(300, function () {
						$(this).hide();
					});
				}, 2000);
			}
			return false;
		});
		
		$('#cuenta-simple-btn-edit').on('vclick', function() {
			$(this).addClass('hidden');
			$('#cuenta-simple-btn-delete').addClass('hidden');
			$('#cuenta-simple-btn-save').removeClass('hidden');
			$('#cuenta-simple-info').addClass('hidden');
			$('#cuenta-simple-input').removeClass('hidden');
		});
	}
	
	/* Tab personalizar : Email cartola */
	var personalizarCartolaEmail = function($context){
		$('#cartola-email-form').on('submit', function () {
			var $buttonNo = $('.btn.large.primary.no');
			if ($buttonNo.hasClass('active')){
				$('.personalizar-block.email').find('.block-wizard-success').show();
				setTimeout(function() {
					$('.personalizar-block.email').find('.block-wizard-success').fadeOut(300, function () {
						$(this).hide();
					});
				}, 2000);
			}
			return false;
		});
		
		$('.personalizar-block', $context).each(function(){
			var $subcontext = $(this);
			var $buttonYes = $('.btn.large.primary.yes', $subcontext);
			var $buttonNo = $('.btn.large.primary.no', $subcontext);

			$('.btn.large.primary', $subcontext).on('vclick', function() {
				if ($buttonYes.hasClass('active')){
					$buttonYes.removeClass('active');
					$buttonNo.addClass('active');
				}
				else {
					$buttonNo.removeClass('active');
					$buttonYes.addClass('active');
				}
			});
		});
	};
		
	// links inside detail
	var initDetailBtnLinks = function($context) {
		$('.btn.link', $context).each(function(){
			$(this).on('vclick',function(){
				
		    	var url = $(this).attr('href');
		    	if(url === undefined) {
		    		url = $(this).data('href');
		    	}
		    	window.location.href = url;
		    	return false;
			});
		});
	};
	
	var initStep2Transfers = function($context){
		$('.init-step2', $context).each(function(){
			setTimeout(function() {
				$('.wizard').wizard('next');
				$('#monto').val("10000");
			}, 10);
		});		
	};
	
	var initButtonsDeposito = function($context){
		//Botón para ir al mes anterior
		$('.boton-mes-menor').on('vclick', function(){
			var $this = $(this), 
				$chart = $this.closest('.capgemini-chart'), 
				value = $this.val();
			$.loadCharts($chart, 'includes/components/tables/data/depositos-2.json');			
		});
		//Botón para ir al mes siguiente
		$('.boton-mes-mayor').on('vclick', function(){
			var $this = $(this), 
				$chart = $this.closest('.capgemini-chart'), 
				value = $this.val();
			$.loadCharts($chart, 'includes/components/tables/data/depositos-2.json');
		});
	};
	
	var scrollPaneOptions = {
			verticalGutter: 0,
			autoReinitialiseDelay: 0,
			showArrows: true,
			contentWidth:132,
			verticalArrowPositions: 'after',
			horizontalArrowPositions: 'after'
		};
	
	var initScroll = function($context){
		$('.scrollable').each(function() {
			$(this).jScrollPane(scrollPaneOptions);
			var api = $(this).data('jsp');
			var throttleTimeout;
			$(window).on(
				'resize',
				function()
				{
					if (!throttleTimeout) {
						throttleTimeout = setTimeout(
							function()
							{
								api.reinitialise();
								throttleTimeout = null;
							},
							50
						);
					}
				}
			);
		});
	};
	
	var windowResize = function(){
		$(window).on('throttledresize', function(){
			// reset data pickers
			$('.datepicker').each(function () {
				$(this).datepicker('hide');
			});
			
			// close tu ejecutivo on resize
			$('.fixed-footer > ul > li > a:first').each(function() {
				if($(this).hasClass('active')){
					$(this).removeClass('active');
					$(this).closest('li').css('width', '50%');
					$(this).closest('ul').find('.text-small').show();
					$(this).next().hide();
				}
			});			
			
		});
	};
	
	var initNotasBlock = function($context){
		$('.notas-form', $context).on('submit', function() {
			if($(this).valid()) {
				var $inputVal = $('.form-control', $(this)).val();
				$('.info-text', $(this)).text($inputVal);
				$('.btn.save', $(this)).hide();
				$('.buttons', $(this)).show();
				$('.input.data', $(this)).hide();
				$('.input.info', $(this)).show();
			}
			return false;
		});
		
		$('.btn.delete', $context).on('vclick', function() {
			var $form = $(this).closest('form');
			$('.form-control', $form).val("");
			$('.buttons', $form).hide();
			$('.input.info', $form).hide();
			$('.btn.save', $form).show();
			$('.input.data', $form).show();
		});
		
		$('.btn.edit', $context).on('vclick', function() {
			var $form = $(this).closest('form');
			$('.buttons', $form).hide();
			$('.input.info', $form).hide();
			$('.btn.save', $form).show();
			$('.input.data', $form).show();
		});
	};
	
	var checkDateFormat = function($context){
		$('.datepicker').on('focusout', function() {
			
			var $value = $(this).val();
			var dtRegex = new RegExp(/\b\d{1,2}[\/]\d{1,2}[\/]\d{4}\b/);
			// chequea formato dd/mm/yyyy
			if(dtRegex.test($value) == false) {
				$(this).val('');
			}
			else {
				// chequea fecha valida
				var comp = $value.split('/');
				var d = parseInt(comp[0], 10);
				var m = parseInt(comp[1], 10);
				var y = parseInt(comp[2], 10);
				var date = new Date(y,m-1,d);
				if (date.getFullYear() != y || date.getMonth() + 1 != m || date.getDate() != d) {
					$(this).val('');
				}
			}
		});		
	}
	
	// Initial execution if needed
 	
	checkDateFormat($(document));
	// init operations
	initOperationContainer($(document));
	// on window resize
	windowResize();		
	// init cartola fix
	initCartolaFix($(document));
	initChequesSearch($(document));
	// operaciones favoritas
	favOperations($(document));
	// tablas: mostrar mas 
	mostrarMasRows($(document));
	// init tu situacion
	initSituacion($(document));
	//Init botones del grafico de deposito
	initButtonsDeposito($(document));	
	// functions for "Personalizar" tab
	personalizarSimpleAccount($(document));
	personalizarCartolaEmail($(document));
	personalizarNombreProducto($(document));	
	// initialize custom scroll
	initScroll($(document));	
	// date validations
	validateDatePicker($(document));	
	
	initStep2Transfers($(document));
	
	$(document).on('capgemini.ajax.load', function(event, element){
		checkDateFormat($(element));
		initAnularTransferencia($(element));
		initConfirmarStep($(element));
		initSaveFavoritos($(element));
		initOperationContainer($(element));
		initToggleAlias($(element));
		initSelectPickers($(element));
		initCartolaFix($(element));
		changeAmountText($(element));
		hideText($(element));
		validateDatePicker($(element));
		initCalculatePagoParcial($(element));
		eliminarOpFav($(element));
		miscuentasbbva($(element));
		seleccionarCuenta($(element));
		buttonVal($(element));
		initGoogleMaps($(element));
		initDetailBtnLinks($(element));
		
		initScroll($(element));
		initTransferDetail($(element));
		
		// init transfers step 2
		initStep2Transfers($(element));
		
		initNotasBlock($(element));
		
	});	
});