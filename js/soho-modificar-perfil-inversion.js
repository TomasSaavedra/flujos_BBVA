$(document).ready(function() {
	setTimeout(function() {
	$(".wizardNext").html("Aceptar");	
	}, 1 );	
});
$(document).on('click', ".wizardNext", function() {
	setTimeout(function() {
	$(".wizardNext").html("Aceptar");	
	$(document).on('click', ".wizardNext", function() {
		window.location.href="content.php?src=S11-mi-perfil-inversor.php";
	});	
	}, 1 );		
});