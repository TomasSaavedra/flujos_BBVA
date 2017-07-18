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
			$(".tabla-resultado-consulta").hide();
			
			//alert("result");
		});
	
	
		$(document).on('click', '.btn, .tab-head', function() {
			if(!$(this).hasClass("ver-resultados-consulta") && !$(this).hasClass("consulta-valor-cuota"))
			{
				//alert(1);
				$(".resultado-busqueda").hide();
				$(".tabs-ocultar-consulta").show();
				$(".tabla-resultados-consulta").hide();
				$(".tabla-resultado-consulta").hide();
			}
			//alert("result");
		});

		$(document).on('click', '.consulta-valor-cuota', function(event) {
			event.stopPropagation();
			
			$(".resultado-busqueda").hide();
			$(".tabs-ocultar-consulta").hide();
			$(".tabla-resultados-consulta").hide();
			$(".tabla-resultado-consulta").show();
			//alert("result");
		});
