/*
URL : www.soho.cl
Hecho por : Erick Caroca
Para : BBVA
Fecha :  Mayo 2014
*/
$(document).ready(function() {
	setTimeout(function() {
	$(".wizardNext").html("Siguiente");	
	}, 1 );	
});


$(document).on('click', ".BotonConfirmarClave", function() {
	if($("#clave-segura").val().length == 7)
	{
		$(this).hide();
		$('.ConfirmadoCheck').show();
	}
});

$(document).on('click', ".boton-modificar", function() {
	if($(this).hasClass("boton-guardar"))
	{
		$(this).html("Modificar");		
		$('.no-editable').show();
		$('.formulario-editar').addClass("editable");		
		$(this).removeClass("boton-guardar");
	}else{
		$(this).html("Guardar");		
		$(this).addClass("boton-guardar");
		$('.no-editable').hide();
		$('.formulario-editar').removeClass("editable");
		 }
});

$(document).on('click', "#enviar2", function(event) {
	if($("#enviar2:checked").val() == "envio")
	{
		$("#clave-segura").removeAttr("disabled");
		$('.BotonConfirmarClaveSegura').removeClass("disabled");
		
	}else{
		$('.BotonConfirmarClaveSegura').addClass("disabled");
		$("#clave-segura").attr("disabled");
		 }	
		 
});

$(document).on('click', ".wizardNext", function() {
	var $boton = $(this);
	$boton.hide();
	setTimeout(function() {
		$boton.show();
		$boton.parent().find(".prev").removeClass("hidden");
		$boton.parent().find(".prev").show();
		$boton.html("Siguiente");			
		$('.scrollable-prev').show();
		$('.scrollable-prev').addClass("scrollable");
		var scrollPaneOptions = {
				verticalGutter: 0,
				autoReinitialiseDelay: 0,
				showArrows: true,
				contentWidth:132,
				verticalArrowPositions: 'after',
				horizontalArrowPositions: 'after'
			};
			
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
			
		
	}, 1 );


	
});

	
	
	


