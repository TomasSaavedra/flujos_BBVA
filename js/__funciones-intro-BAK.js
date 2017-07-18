/* Funciones para intro del sitio BBVA transacciona */

$(document).ready(function() {

    /* (1) Intro sitio BBVA transacciona versión "desktop" */

    if ($(window).width() > 768) {
    
        // inicio placa negra 
        $("#placa-negra").css("display", "block");
        $("#placa-negra").animate({ 
            opacity: 0.7
            }, 900, function() {
        });

        // inicio primera modal
        $(".modal-interior.modal-inter1").delay(400).css("display", "block");
        $(".modal-interior.modal-inter1").animate({ 
            opacity: 1,
            top: "90px"
            }, 300, function() {
        });

        $(".modal-interior.modal-inter1").fadeIn();

        // primera modal - comenzar 
        $("#btn1").on("click",function(){
            $(".modal-interior.modal-inter1").css("display", "none");
            $("#header-up").addClass("header-on");
            $(".modal-interior.modal-inter1").animate({ 
                opacity: 0,
                top: "0"
                }, 300, function() {
            });
            $(".modal-interior.modal-inter2").css("display", "block");
            $(".modal-interior.modal-inter2").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });
        });

        // segunda modal - volver
        $("#btn2-atras").on("click",function(){
            $("#header-up").removeClass("header-on"); 
            $(".modal-interior.modal-inter1").css("display", "block");
            $(".modal-interior.modal-inter1").delay(300).animate({ 
                opacity: 1,
                top: "90px"
                }, 300, function() {
            });
            $(".modal-interior.modal-inter2").css("display", "none");
            $(".modal-interior.modal-inter2").animate({ 
                opacity: 0
                }, 300, function() {
            });
        });

         // segunda modal - adelante
        $("#btn2-adelante").on("click",function(){
            $("#header-up").removeClass("header-on");
            $("#content-posicion-global").addClass("posicion-global-on");
            $(".modal-interior.modal-inter2").css("display", "none");
            $(".modal-interior.modal-inter2").animate({ 
                opacity: 0
                }, 300, function() {
            });
            $(".modal-interior.modal-inter3").css("display", "block");
            $(".modal-interior.modal-inter3").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });
        });
     
        // tercera modal - volver
        $("#btn3-atras").on("click",function(){
            $("#header-up").addClass("header-on");
            $("#content-posicion-global").removeClass("posicion-global-on");
            $(".modal-interior.modal-inter2").css("display", "block");
            $(".modal-interior.modal-inter2").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });
            $(".modal-interior.modal-inter3").css("display", "none");
            $(".modal-interior.modal-inter3").animate({ 
                opacity: 0
                }, 300, function() {
            }); 
        });

        // tercera modal - adelante
        $("#btn3-adelante").on("click",function(){
            $("#content-posicion-global").removeClass("posicion-global-on"); 
            $(".modal-interior.modal-inter3").css("display", "none");
            $(".modal-interior.modal-inter3").animate({ 
                opacity: 0               
            }, 300, function() {
            });
            $("#btn-laterales .btn-conoce").addClass("conoce-on");
            $(".modal-interior.modal-inter4").css("display", "block");
            $(".modal-interior.modal-inter4").delay(300).animate({ 
                opacity: 1
            }, 300, function() {
            });
        });

        // cuarta modal - atras
        $("#btn4-atras").on("click",function(){
            $("#btn-laterales .btn-conoce").removeClass("conoce-on");
            $("#content-posicion-global").addClass("posicion-global-on");
            $(".modal-interior.modal-inter3").css("display", "block");
            $(".modal-interior.modal-inter3").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });
            $(".modal-interior.modal-inter4").css("display", "none");
            $(".modal-interior.modal-inter4").animate({ 
                opacity: 0,
                }, 300, function() {
            });
        });

        // cuarta modal - adelante
        $("#btn4-adelante").on("click",function(){
            $("#btn-laterales .btn-conoce").removeClass("conoce-on");
            $("#table-up .td-intro").addClass("table-on");
            $(".modal-interior.modal-inter4").css("display", "none");
            $(".modal-interior.modal-inter4").delay(300).animate({ 
                opacity: 0
                }, 300, function() {
            });

            $(".modal-interior.modal-inter5").css("display", "block");
            $(".modal-interior.modal-inter5").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });
        });

        // cinco modal - atras 
        $("#btn5-atras").on("click",function(){
            $("#table-up .td-intro").removeClass("table-on");
            $(".modal-interior.modal-inter5").animate({ 
                opacity: 0
                }, 300, function() {
            });
            $("#btn-laterales .btn-conoce").addClass("conoce-on");
            $(".modal-interior.modal-inter4").css("display", "block");
            $(".modal-interior.modal-inter4").delay(300).animate({ 
                opacity: 1
                }, 300, function() {
            });   
        });

        // cinco modal - entendido
        $("#btn5-entendido").on("click",function(){
            $("#table-up .td-intro").removeClass("table-on");
            $(".modal-interior.modal-inter5").css("display","none");
            $(".modal-intro").fadeOut("slow");
            $(".modal-interior.modal-inter5").animate({ 
                opacity: 0
                }, 300, function() {
            });

            $("#placa-negra").delay(500).fadeOut("slow",function(){
                $("#placa-negra").css("display", "none");
            });
        });
    }

    /* (2) Intro sitio BBVA transacciona versión "mobile" */

    if ($(window).width() < 1025) {

        // inicio placa negra 

        $("#placa-negra").delay(200).css("display", "block");
        $("#placa-negra").delay(200).animate({ 
            opacity: 0.7
            }, 400, function() {
        });

        // inicio primera modal

        $(".modal-interior.modal-inter1").delay(400).css("display", "block");
        $(".modal-interior.modal-inter1").delay(400).animate({ 
            opacity: 1,
            left: '0'
            }, 300, function() {
        });

        // Primera

        $(".btn1-xs").on("click",function(){
            $(".modal-interior.modal-inter1").animate({ 
                opacity: 0,
                left: "-450px"
                }, 400, function() {
                $(".modal-interior.modal-inter1").delay(400).css("display", "none");
            });

            $(".modal-interior.modal-inter2").delay(400).css("display", "block");
            $(".modal-interior.modal-inter2").delay(-400).animate({
                opacity: 1,
                left: "0"
                }, 300, function() {
                $(".modal-interior.modal-inter1").delay(400).css("display", "none");
            });
        });

        // segunda

        $(".btn2-xs").on("click",function(){
            $(".modal-interior.modal-inter2").delay(-400).animate({ 
               opacity: 0,
                left: "-450px"
                }, 400, function() {
                $(".modal-interior.modal-inter2").delay(400).css("display", "none");
            });

            $(".modal-interior.modal-inter3").delay(400).css("display", "block");
            $(".modal-interior.modal-inter3").delay(-400).animate({
                opacity: 1,
                left: "0"
                }, 300, function() {
                $(".modal-interior.modal-inter2").delay(400).css("display", "none");
            });
        });

        // tercera modal

        $(".btn3-xs").on("click",function(){
            $(".modal-interior.modal-inter3").delay(-400).animate({ 
                opacity: 0,
                left: "-450px"
                }, 400, function() {
                $(".modal-interior.modal-inter3").delay(400).css("display", "none");
            });

            $(".modal-interior.modal-inter4").delay(400).css("display", "block");
            $(".modal-interior.modal-inter4").delay(-400).animate({
                opacity: 1,
                left: "0"
                }, 300, function() {
                $(".modal-interior.modal-inter3").delay(11200).css("display", "none");
            });
        });

        // cuarta modal 

        $(".btn4-xs").on("click",function(){
            $(".modal-interior.modal-inter4").delay(-400).animate({ 
                opacity: 0,
                left: "-450px"
                }, 400, function() {
                $(".modal-interior.modal-inter4").delay(11200).css("display", "none");
            });

            $(".modal-interior.modal-inter5").delay(400).css("display", "block");
            $(".modal-interior.modal-inter5").delay(-400).animate({
                opacity: 1,
                left: "0"
                }, 300, function() {
                $(".modal-interior.modal-inter4").delay(11200).css("display", "none");
            });
        });

        // quinta modal 

        $(".btn5-xs").on("click",function(){
            $(".modal-interior.modal-inter5").delay(-400).animate({ 
                opacity: 0,
                left: "-450px"
                }, 400, function() {
                $(".modal-interior.modal-inter5").delay(11200).css("display", "none");
            });

            $("#placa-negra").delay(600).fadeOut("slow",function(){
                $("#placa-negra").css("display", "none");
                $(".modal-intro.modal-intro-mobile").css("display", "none");
            });
        });
    }

});
