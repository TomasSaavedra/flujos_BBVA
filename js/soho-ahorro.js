/*
URL : www.soho.cl
Hecho por : Erick Caroca
Para : BBVA
Fecha :  Junio 2014
*/

$(document).on('click', "input[name='monto-abono']", function(event) {
	if($("input[name='monto-abono']:checked").val() == "002")
	{
		$('.pago-parcial').removeClass("hide");
	}else{
		$('.pago-parcial').addClass("hide");
		 }	
});

$(document).on('click', "input[name='pago-parcial']", function(event) {
	if($("input[name='pago-parcial']:checked").val() == "003")
	{
		$('.pago-parcial-monto').removeClass("hide");
		$('.pago-parcial-cuotas').addClass("hide");
	}else{
		$('.pago-parcial-cuotas').removeClass("hide");
		$('.pago-parcial-monto').addClass("hide");
		 }	
});

$('#tipo-de-fondo').on('change',function(){
		if($(this).val() != '')
		{
			$('.detalle-fondo').removeClass("hide");
			var $wizard = $(this).closest('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
			}			
			
		}

});

$(document).on('click', "input[name='traspaso-fondos-cuenta']", function(event) {
	if($("input[name='traspaso-fondos-cuenta']:checked").val() == "001")
	{
		$('.tabla-mis-cuentas').removeClass("hide");
		
	}else{
		$('.tabla-mis-cuentas').addClass("hide");
		 }	
		 
		 	var $wizard = $(this).closest('.wizard');
			if($wizard.length > 0) {
				$(document).trigger('capgemini.wizard.resize', $wizard);
			}	
		 
});






$(document).on('keyup', "#monto-inversion", function(event) {
	if($(this).val() != "")
	{
		$('.boton-actualizar').removeClass("disabled");
	}else{
		
		$('.boton-actualizar').addClass("disabled");
		 }	
});