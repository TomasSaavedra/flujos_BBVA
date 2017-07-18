$(function(){
	$('.number').on('keypress', function(e){
		tecla = (document.all) ? e.keyCode : e.which;
		if (tecla == 8) return true;

		patron = /\d/;
		te = String.fromCharCode(tecla);
		return patron.test(te);
	});

	$('.rut').on('keypress', function(e){
		tecla = (document.all) ? e.keyCode : e.which;
		if (tecla == 8) return true;

		patron = /\d/;
		te = String.fromCharCode(tecla);
		if(patron.test(te) || tecla == 107 || tecla == 75)
		{
			return true;
		}else{
			return false;
			 }
	});



/* 	mywizard */
});

