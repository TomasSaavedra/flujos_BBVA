/*
URL : www.soho.cl
Hecho por : Erick Caroca
Para : BBVA
Fecha :  Mayo 2014
*/

$(document).on('click', '#search-form button', function(event) {
	event.stopPropagation();
	$(".resultado-busqueda").show();
	$(".tabs-ocultar-consulta").hide();
	$(".tabla-resultados-consulta").show();
		$(".tabla-gastos-operaciones").hide();
	
});


$(document).on('click', '.btn, .tab-head', function() {
	if(!$(this).hasClass("ver-resultados-consulta"))
	{
		$(".resultado-busqueda").hide();
		$(".tabs-ocultar-consulta").show();
		$(".tabla-resultados-consulta").hide();
		$(".tabla-gastos-operaciones").hide();
	}
	//alert("result");
});

$(document).on('click', '.ver-detalle-operacionales', function(event) {
	event.stopPropagation();
	$(".resultado-busqueda").hide();
	$(".tabs-ocultar-consulta").hide();
	$(".tabla-resultados-consulta").hide();
	$(".tabla-gastos-operaciones").show();
	
});
		
$(function(){
	$('.CreditoConsultaAno').selectpicker();
		$('.CreditoConsultaAno').on('change',function(){
			if($(this).val() != '')
			{
				$('#filter-today').val($(this).val());
			}

	});
	
	$("#filter-today").on('click', function(e){
		
		if($(this).is(':checked'))
		{
			$('.CreditoConsultaAno').removeAttr("disabled");
			$('.CreditoConsultaAno').selectpicker('refresh');
			
		}else{
				
				$('.CreditoConsultaAno').attr("disabled","disabled");
				
				$('.CreditoConsultaAno').selectpicker('refresh');
			 }
		
	});	

	
	
	
	$("input[name='mis-cuentas-bbva']").on('click', function(e){
		
		if($(this).val() == "otromonto" && $(this).is(':checked'))
		{
			$(".BotonCalcular, .PagoOtroMontoText").removeAttr("disabled");
			
		}else{
				
				$(".BotonCalcular, .PagoOtroMontoText").attr("disabled","disabled");
			 }
		
	});
	
	$(".table-cuotas tr").on('click', function(e){
		if($(this).find("input[name='mis-cuentas-bbva']").val() == "otromonto")
		{
			$(".BotonCalcular, .PagoOtroMontoText").removeAttr("disabled");
			
		}else{
				$(".BotonCalcular, .PagoOtroMontoText").attr("disabled","disabled");
			 }
		
	});
	
	
	
	
	$(".BotonCalcular").on('click', function(e){
		if(parseInt($('.PagoOtroMontoText').val()) > 1)
		{
			$(".CamposNumero").removeClass("hide");
		}else{
			$(".CamposNumero").addClass("hide");
			 }
	});	

});