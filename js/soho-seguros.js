$(document).ready(function(){
	
	
	
	$("#slider3").slider({
		range: "min",
		animate: true,
		value:2,
		min: 1,
		max: 3,
		step: 1,
			slide: function(event, ui) {
				$(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
			},
			create: function(event, ui) {
				$(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
			}
	});

	$('.colorWhite').click(function(){
		if($("#producto-check02").is(':checked') && $("#producto-check03").is(':checked')){
			//alert('se cumple');
			$('.accion').prop('disabled', false);
		}else{
			//alert('no se cumple');
			$('.accion').prop('disabled', true);
		}
	});
	

	
	$('.accion').click(function(){
		$(this).hide();
		$('.tabla-resultados-filtro').hide();
		$('.tabs-color').show();
	});

});

$(document).on('click', '.boton-limpiar', function(event) {
	event.stopPropagation();
	
	$( "#slider3" ).slider( "value", 1 );
	$('.tabla-resultados-filtro').hide();
	$('.tabs-color').hide();
});

$(document).on('click', '.boton-filtrar', function(event) {
	event.stopPropagation();
	$('.tabla-resultados-filtro').show();
});



$('.btn-contratar-seguro').click(function(e) {
	e.preventDefault();
	$('#filtro-seguros').hide();
	$('.js-contratar-seguro').show();
});





$('.js-tab1 .chart-torta').click(function(e) {
	e.preventDefault();
	$(this).addClass('active');
	$('.js-tab1 .chart-bars').removeClass('active')
	$('.js-tab1 .grafico-torta').show();
	$('.js-tab1 .grafico-barra').hide();
});

$('.js-tab1 .chart-bars').click(function(e) {
	e.preventDefault();
	$(this).addClass('active');
	$('.js-tab1 .chart-torta').removeClass('active')
	$('.js-tab1 .grafico-torta').hide();
	$('.js-tab1 .grafico-barra').show();
});


$('.js-tab2 .js-chart1').click(function(e) {
	e.preventDefault();
	$(this).addClass('active');
	$('.js-tab2 .js-chart2').removeClass('active')
	$('.js-tab2 .grafico1').show();
	$('.js-tab2 .grafico2').hide();
});

$('.js-tab2 .js-chart2').click(function(e) {
	e.preventDefault();
	$(this).addClass('active');
	$('.js-tab2 .js-chart1').removeClass('active')
	$('.js-tab2 .grafico2').show();
	$('.js-tab2 .grafico1').hide();
});

