$(document).on('click', "#wizardNext, #wizardBack", function() {
	
		setTimeout(function() {
			$("#wizardBack").show();
			$("#wizardNext").html("Siguiente");	
			$("#wizardNext").addClass("arrow-right");
		
		}, 1 );	
});
$(document).on('click', "#wizardNext", function() {
	var activo;
	$( ".step" ).each(function( index ) {
		
		
		if($(this).hasClass("active"))
		{
			activo = index;
			
		}
		
	});
	//alert( "Pestañana : "+activo);
	if(activo == 2)
	{
		window.location.href="content.php?src=S08-inversion.php";
	}

});
