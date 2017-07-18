/* dropdown select 
$('.subList a').on('click',function(){
	var href = $(this).data('href');
	$(this).parents('.list').prev().find('.dropdown_title').html($(this).html());
	$(this).parents('.tables-button').next('.button.go').attr('data-href',href);
	//alert($(this).parents('.list').prev().attr('class'))
	$(".list").css('display','none');
});
*/

// intertitial close
$('#close-interstitial').on('click', function(){
	$('#tour-interstitial').slideUp();
});

$('.button.go').on('click',function(){
	var href = $(this).data('href');
	window.location.href = href;
});

// Acciones expand/contract
$('.expandLink').on('click',function(){
	if ($('.inter-caja-opciones-bbva ul').hasClass('active')) {
		$('.inter-caja-opciones-bbva ul').animate({'height': '165px'}).removeClass('active');
		$('.expandLink .icono-new').removeClass('icono-flecha-arriba').addClass('icono-flecha-abajo');
		$(this).html('Ver más<i class="icono-new icono-flecha-abajo"></i>');
	} else {
		$('.inter-caja-opciones-bbva ul').animate({'height': '325px'}).addClass('active');
		$('.expandLink .icono-new').removeClass('icono-flecha-abajo').addClass('icono-flecha-arriba');
		$(this).html('Ver menos<i class="icono-new icono-flecha-arriba"></i>');
	}
});