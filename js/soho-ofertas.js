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

			jQuery.fn.center = function() {
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

		// Variables

			var mainContainer = "body";
			var onEventObject = "click";
			var containerBlock = ".m-ofertas__opciones";
			var innerContainer = ".contenedor-interior";
			var toggleBlock = ".toggle";
			var botonClass = ".m-ofertas__boton-ver";
			var animateDuration = 512;
			var offsetMinusAmountOfPixels = 15;

		// Function

			$(botonClass).on(onEventObject, function() {
				$(mainContainer).animate({ scrollTop: $(containerBlock).offset().top - offsetMinusAmountOfPixels }, animateDuration);

				$(window).scroll(function() {
					$(innerContainer).center();
				});

				$(this).text(function(i, text) {
					return text === "Ver Más Ofertas" ? "Ver Menos Ofertas" : "Ver Más Ofertas";
				});

				$(this).toggleClass("opened");

				$(toggleBlock).slideToggle(animateDuration);
			});

});