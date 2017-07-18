$(document).ready(function() {
	$('#nav-perfil-toggle').click(function() {
		$(this).toggleClass('active');
		$('.inner-nav').slideToggle( "slow" );
	});


	$("#personas-submenu li").removeClass('active');
});