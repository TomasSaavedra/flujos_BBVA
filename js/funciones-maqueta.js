$( document ).ready(function() {



    // Acciones expand/contract
$('.expandLink').on('click',function(){
    if ($('.inter-caja-opciones-bbva ul').hasClass('active')) {
        $('.inter-caja-opciones-bbva ul').animate({'height': '216px'}).removeClass('active');
        $('.expandLink .icono-new').removeClass('icono-flecha-arriba').addClass('icono-flecha-abajo');
        $(this).html('Ver más<i class="icono-new icono-flecha-abajo"></i>');
    } else {
        $('.inter-caja-opciones-bbva ul').animate({'height': '425px'}).addClass('active');
        $('.expandLink .icono-new').removeClass('icono-flecha-abajo').addClass('icono-flecha-arriba');
        $(this).html('Ver menos<i class="icono-new icono-flecha-arriba"></i>');
    }
    return false;
});

$('#btnQuieroCredito1').on('click',function(){
     $(this).attr('disabled', 'disabled');
     $("#divPeticionClave2").slideDown();
    return false;
});
$('#btnConfirmar').on('click',function(){ 
     $("#okEnviar").show();
     $("#box-cnt, #divPeticionClave2, #btnQuieroCredito1").hide();
    return false;
});

/**** Cierres de productos  ****/
$('#btnCierreP').on('click',function(){
     $("#divPeticionClave2").slideDown();
     $("#btnCierreP").hide();
     $("#btnCierreSolicitud").show();
    return false;   
});

$('#btnCierreSolicitud').on('click', function(){
    $(this).attr('disabled', 'disabled');
    $("#divPeticionSMS").slideDown();
    $("#btnCierreSolicitud").hide();
});

$('#btnConfirmarSMS').on('click', function(){
    $("#divPeticionSMS, #divPeticionClave2 ,#divTituloCierre, #divAntesContinuar").hide();
    $("#okEnviar").show();
});

$('#btnCierreProductos').on('click', function(){
    $("#table-cierres, #btnCierreProductos").hide();
    $("#divCierreProductos").show();
});

/****Fin Cierre de productos****/

    $(".table-home-tarjetas .sprite-lines, table-home-tarjetas .sprite-arrow ").click(function() {
        $(".table-home-tarjetas .tables-legend").show();
    });
    $(".table-home-creditos .sprite-lines, table-home-creditos .sprite-arrow ").click(function() {
            $(".table-home-tarjetas .tables-legend").show();
        });
    $(".table-home-depositos .sprite-lines, table-home-depositos .sprite-arrow ").click(function() {
            $(".table-home-depositos .tables-legend").show();
        });
    $(".table-home-ffmm .sprite-lines, table-home-ffmm .sprite-arrow ").click(function() {
            $(".table-home-ffmm .tables-legend").show();
        });
    $(".table-home-acciones .sprite-lines, table-home-acciones .sprite-arrow ").click(function() {
            $(".table-home-acciones .tables-legend").show();
        });
    $(".table-home-seguros .sprite-lines, table-home-seguros .sprite-arrow ").click(function() {
            $(".table-home-seguros .tables-legend").show();
    });


    $(".slide-link").click(function(event){
        event.preventDefault();
        	var offset = $($(this).attr('href')).offset().top;
    	$('html, body').animate({scrollTop:offset}, 1000);
    });

    $("#con-seguros .btn-catalogo-seguros").click(function(event){
        $(".nav.nav-tabs .btn-tab-productos").removeClass("active");
        $(".nav.nav-tabs .btn-tab-catalogo").addClass("active");

        $(".tab-pane#mis-productos").removeClass("active");
        $(".tab-pane#catalogo-productos").addClass("active");

        $("#catalogo-seguros").hide();
        $("#catalogo-content").show();        
    });


    //funciones productos inversion
    if ($('.dap-con-perfil').length > 0) { 
        $(document).trigger('capgemini.ajax.load',$(".container"));

        $('#productos-inversion .simularDeposito').click(function() {
            $('#productos-inversion .simular-deposito-tabla').show();
            $('#productos-inversion  .main-wizard .step-container').addClass("height-contratar-dep");
            $(".wizardNext").removeClass("disabled")
        });

        $(document).on("click",'#productos-inversion .btn.arrow-right', function() {
            var result =String($("#monto").val());  
            if(result.length>0 && parseFloat(result)>0){
                $('#productos-inversion .main-wizard .step-container').removeClass("height-contratar-dep");
            } 
        }); 

        setTimeout(function(){ $(".wizardNext").addClass("disabled");},1);

        $('.nav-plazo button').click(function(){
            $('.nav-plazo button').removeClass('active');
            $(this).addClass('active');
            var clase = $(this).data('tab');
            $('.body-tab').hide();
            $('.' + clase).show();
        });
    }

    //funciones ffmm
    if ($('#metas-ffmm').length > 0) { 
        $(document).trigger('capgemini.ajax.load',$(".container"));

        $('#productos-inversion .simularDeposito').click(function() {
            $('#productos-inversion .simular-deposito-tabla').show();
            $('#productos-inversion  .main-wizard .step-container').addClass("height-contratar-dep");
            $(".wizardNext").removeClass("disabled")
        });

        $(document).on("click",'#productos-inversion .btn.arrow-right', function() {
            var result =String($("#monto").val());  
            if(result.length>0 && parseFloat(result)>0){
                $('#productos-inversion .main-wizard .step-container').removeClass("height-contratar-dep");
            } 
        }); 


        /*$( "input[name='recurrente0']" ).click(function() {
            debugger;
        var programar = $('input:radio[name=recurrente0]:checked').val();

        if(programar == 'si'){
            $(this).parents('.box-inversion-recurrente').find('.muestramelo').fadeIn("slow");
            $('.step-container').height( $('.seleccion-cuentas').height() ); 

        }else{
            $(this).parents('.box-inversion-recurrente').find('.muestramelo').fadeOut("slow");
            $('.step-container').height( $('.seleccion-cuentas').height() ); 
            }  
        });*/


   $("label[data-name='recurrente0']") .click(function() {
    var selected = $(this);
        var programar = selected.attr('for');
        selected.closest('.box-inversion-recurrente')
                .find("label[data-name='recurrente0']")
                .not(selected)
                .removeClass('on');
        selected.addClass('on');

        if(programar == 'si'){
            selected.closest('.box-inversion-recurrente').find('.muestramelo').fadeIn("slow");
            $('.step-container').height( $('.seleccion-cuentas').height() ); 

        }else{
            selected.closest('.box-inversion-recurrente').find('.muestramelo').fadeOut("slow");
            $('.step-container').height( $('.seleccion-cuentas').height() ); 
            }  
        });


    /*$( "input[name='recurrente2']" ).click(function() {
        var programar = $('input:radio[name=recurrente2]:checked').val();
        if(programar == 'si'){
            $(this).parents('.box-inversion-recurrente').find('.cuentas-inversion-recurrentes').show();
            $('.step-container').height( $('.seleccion-cuentas').height() ); 
        }else{
            $(this).parents('.box-inversion-recurrente').find('.cuentas-inversion-recurrentes').hide();
            $('.step-container').height( $('.seleccion-cuentas').height() ); 
        } 
    });*/

    }



    $( "input[name='cuenta_existente']" ).click(function() {
        console.log('001');
        var programar = $('input:radio[name=cuenta_existente]:checked').val();
        if(programar == '001'){ 
            $('#cuenta-inversion').prop( "disabled", false );
            $('.selectpicker').selectpicker('refresh');
            console.log('002');
        }else{ 
            $('#cuenta-inversion').prop( "disabled", true );
            $('.selectpicker').selectpicker('refresh');
            console.log('003');
        }  
    });
     

});


/*Cierre de productos*/




/*

table-home-creditos
table-home-depositos
table-home-ffmm
table-home-acciones
table-home-seguros



*/