	$('#editar-agenda-nueva .close-icon').click(function() {
		$('.modal-backdrop').hide();
	});

	//EDITAR
	$('.modal-agenda .editar, .btn-modificar-cuentas').click(function(e) {
		e.preventDefault();
		$('.modal-agenda').hide();
		$('.modal-backdrop').fadeOut('slow');
	});

	//EDITAR
	$('.modal-agenda .eliminar').click(function(e) {
		e.preventDefault();
		$('.modal-agenda').hide();
		$('.modal-backdrop').fadeOut('slow');
	});

	//AGREGAR CUENTA
	$('.btn-agregar-cuenta').click(function(e) {
		e.preventDefault();
		$(this).hide();
		$('.nueva-cuenta').fadeIn('slow');
	});

	//Guardar
	$('.nueva-cuenta .btn').click(function(e) {
		e.preventDefault();
		$('.nueva-cuenta').hide();
		$('.btn-agregar-cuenta').fadeIn('slow');
	});


