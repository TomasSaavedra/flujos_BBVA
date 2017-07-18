$(document).ready(function() {

	//ACTIVE BTN CATALOGO DE PRODUCTOS
	$(".js-btns a").click(function(){
	  if (!$(this).hasClass("active-btn")) {
	    $(".js-btns a").removeClass("active-btn");
	    $(this).addClass("active-btn");
	  }
	}); 
	

	//INDICADORES ECONOMICOS
	$("#label-moneda").click(function(e) {
		e.preventDefault();
		$("#monedas-economico").show();
		$("#indices-economico").hide();
	});

	$("#label-indices").click(function(e) {
		e.preventDefault();
		$("#monedas-economico").hide();
		$("#indices-economico").show();
	});

	$("#monedas-economico .btn").click(function(e) {
		e.preventDefault();
		$("#table-moneda").show();
		$("#table-indices").hide();
	});

	$("#indices-economico .btn").click(function(e) {
		e.preventDefault();
		$("#table-moneda").hide();
		$("#table-indices").show();
	});


	//MODAL GENERACION DE CLAVE
	$(".js-collapsable").click(function() {
		$(".collapse-body").slideToggle('slow');
		$(".collapse").toggleClass('active');
	});

	


});
