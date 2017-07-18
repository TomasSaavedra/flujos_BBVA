/* ========================================================================================================
   soho-ofertas.js
   ======================================================================================================== */

$(document).ready(function() {

	/**
	* URL : www.soho.cl
	* Hecho por : Jonathan Linat
	* Para : BBVA
	* Fecha : Octubre 2014
	*/

	/**
	* Automatic absolute positioning on window resize event
	* http://stackoverflow.com/a/210733
	*/

		$(window).resize(function() {

			jQuery.fn.center = function () {
				this.each(function(index,element) {
					$(element).parent().css({
						"position": "relative"
					});

					$(element).css({
						"position": "absolute",
						"top": "50%",
						"left": "50%",
						"margin-left": (-( $(element).width() / 2 ) + "px"),
						"margin-top": (-( $(element).height() / 2 ) + "px")
					});
				});
			}

			$(".contenedor-interior").center();
			$(".m-ofertas__boton-ver").center();

		});

		$(window).resize();


/* ========================================================================================================
   ======================================================================================================== */

	/**
	* "Ver Más Ofertas" button
	*/
	
		$(window).resize(function() {

			// Determinate the total height of all row divs
			// Determinate the total height of the first row div
			// http://jsfiddle.net/yj8sL/2/

				var totalOfertasOpcionesDivHeight = 0;
				var totalFirstRowDivHeight = 0;

				// All row divs total height

				    $(".m-ofertas__opciones > .row").each(function(){
				        totalOfertasOpcionesDivHeight += $(this).height();
				    });

			    // All row divs total height

				    $(".m-ofertas__opciones > .row:first").each(function(){
				        totalFirstRowDivHeight += $(this).height();
				        $(".m-ofertas__opciones").css({
				        	"width": "100%",
				        	"height": totalFirstRowDivHeight + "px",
				        	"overflow": "hidden"
				        });
				    });

			    // Debugging

				    console.log("totalFirstRowDivHeight: " + totalFirstRowDivHeight + "px");
				    console.log("totalOfertasOpcionesDivHeight: " + totalOfertasOpcionesDivHeight + "px");
				    
		});

		$(window).resize();

		// Toggling animation on click event
		// http://jsfiddle.net/SQHQ2/
		// http://jsfiddle.net/SQHQ2/1/

			var containerBlock = "toggle";
			var botonClass = "m-ofertas__boton-ver";

			$(".m-ofertas__boton-ver").on("click", function() {

				// Determinate the total height of all row divs
				// Determinate the total height of the first row div
				// http://jsfiddle.net/yj8sL/2/

					var totalOfertasOpcionesDivHeight = 0;
					var totalFirstRowDivHeight = 0;

					// All row divs total height

					    $("." + containerBlock + " > .row").each(function(){
					        totalOfertasOpcionesDivHeight += $(this).height();
					    });

				    // All row divs total height

					    $("." + containerBlock + " > .row:first").each(function(){
					        totalFirstRowDivHeight += $(this).height();
					        
					        $("." + containerBlock).css({
					        	"width": "100%",
					        	"height": totalFirstRowDivHeight + "px",
					        	"overflow": "hidden"
					        });
					    });

				    // Debugging

				    /*
					    console.log("totalFirstRowDivHeight: " + totalFirstRowDivHeight + "px");
					    console.log("totalOfertasOpcionesDivHeight: " + totalOfertasOpcionesDivHeight + "px");
					*/

					// Animation

						var animateDuration = 648;

						if ( $("." + botonClass).hasClass(botonClass + "--mas") ) {
							$("." + containerBlock).animate({
								height: totalOfertasOpcionesDivHeight
							}, animateDuration);

							$("." + botonClass).text("Ver Menos Ofertas").removeClass(botonClass + "--mas").addClass(botonClass + "--menos");
						}

						else {
							$("." + containerBlock).animate({
								height: totalFirstRowDivHeight
							}, animateDuration);

							$("." + botonClass).text("Ver Más Ofertas").removeClass(botonClass + "--menos").addClass(botonClass + "--mas");
						}
			});

});