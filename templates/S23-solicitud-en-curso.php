<style type="text/css">
    .contentSection p {
    text-align: center;
    padding: 20px;
    color: #000;
    font-weight: 700;
    line-height: normal;
    }
    .contentSection .items img {
    padding: 4px;
    }
    .contentSection .items p {
    font-size: 14px;
    line-height: normal;
    color: #000;
    font-weight: 500;
    text-align: center;
    padding: 5px !important;
    }
</style>
<div class="container">
    <div class="content">
        <head>
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/foundation2.css">
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/css/fix.css">
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/jquery-ui.css">
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/jquery.modal.css">
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/stylebbva.css">
            <link rel="stylesheet" href="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/css/table.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>DAP</title>
        </head>
        <body>
            <main class="formcontent">
                <!-- is-disabled-->
                <!-- is-disabled-->
                <div id="sp_wait" class="wait_" style="display:none;">
                    <img id="img-spinner" src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/ajax-loader.gif" alt="Loading" />
                </div>

                <section id="step_zero" class="formcontent section_main heightSection0 text_font_form">
                    <!-- <div class="blocked_disabled"></div> -->
                    <div class="row">
                        <div class="small-12 medium-4 large-4 columns">
                            <!--Se cambia medium-12 por medium-4-->
                            <article class="side_left">
                                <div class="offer">
                                    <div class="content_under">
                                        <div class="row">
                                            <div class="first-offer">
                                                <h3>¡Bienvenido, nos alegra tenerte por acá!</h3>
                                                <p>Queremos ser tu banco, estar donde tú estés.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="small-12 medium-8 large-8 columns">
                            <article id="side_rigth_first">
                                <div id="side_rigth_banner">
                                    <p>
                                        <img id="img1" src="img/s23-banner.jpg" class="responsive image1">
                                        <img id="img2" src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/img/banner-pequeno_tcm.jpg" class="responsive image2">
                                    </p>
                                </div>
                                <div id="side_rigth_content">
                                    <div class="contentSteps1 block_two_columns">
                                        <h1>Revisa si tienes un Crédito de Consumo pre aprobado:</h1>
                                    </div>
                                    <div class="row block_two_columns contentBlock">
                                        <h1>Antes de comenzar, compártenos la siguiente información</h1>
                                        <div class="small-12 medium-6 large-6 column margin_input_form">
                                            <!--Se cambia medium-12 por medium-6-->
                                            <label>¿Cómo te llamas?*</label>
                                            <input type="text" id="lb_name" title="Ingresa tu nombre" data-toggle="tooltip" />
                                        </div>
                                        <div class="small-12 medium-6 large-6 column margin_input_form">
                                            <!--Se cambia medium-12 por medium-6-->
                                            <label>¿Cuál es tu RUT*</label>
                                            <input type="text" id="lb_rut" maxlength="10" title="Ingresa tu RUT" data-toggle="tooltip" />
                                        </div>
                                        <div class="small-12 large-6 medium-6 column margin_input_form">
                                            <label>Fecha de nacimiento (dd/mm/aaaa)*</label>
                                            <div class="row rfix-mb">
                                                <div class="large-3 medium-4 small-12 column pr-no">
                                                    <input id="bDay" name="bDay" title="Día de nacimiento no valido" placeholder="02" type="text" value="" maxlength="2" autocomplete="off">
                                                </div>
                                                <div class="large-3 medium-4 small-12 column pr-no">
                                                    <input id="bMonth" name="bMonth" title="Ingresa tu mes de nacimiento" placeholder="09" type="text" value="" maxlength="2" autocomplete="off">
                                                </div>
                                                <div class="large-6 medium-4 small-12 column">
                                                    <input id="bYear" name="bYear" title="Ingresa tu año de nacimiento" placeholder="1982" type="text" value="" maxlength="4" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small-12 medium-6 large-6 column margin_input_form">
                                            <div class="switch-tarjeta">
                                                <label class="switch">
                                                    <input type="checkbox" id="switchInput">
                                                    <div class="slider left" id="switch-1"></div>
                                                </label>
                                                <label for="">Soy trabajador independiente</label>
                                            </div>
                                        </div>
                                        <!-- se cambia la clase a hiddenMedium-->

                                    </div>
                                    <!-- row -->
                                </div>
                                <div class="row">
                                    <div class="button_init">
                                        <button class="init_button" id="next_zero">Comenzar</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
         
                <section id="step_one" class="formcontent section_main text_font_form">
                    <!-- <div class="blocked_disabled"></div> -->
                    <div class="row">
                        <div class="small-12 medium-4 large-4 columns">
                            <!--Se cambia medium-12 por medium-4-->
                            <article id="p1" class="side_left height_step height_step2">
                                <div class="offer">
                                    <div class="row">
                                        <div class="small-11 medium-11 large-11 columns">
                                            <div id="head_step_one" class="head_step">
                                                <label>&nbsp;</label>
                                                <p>Solicitud en curso</p>
                                            </div>
                                        </div>
                                        <div class="small-1 medium-1 large-1 columns"></div>
                                    </div>
                                    <div class="row">
                                        <div class="content_text">
                                            <p>Si lo deseas puedes modificar tu solicitud actual, pero si envías una nueva solicitud esta reemplazará a la anterior.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- 4 columns -->
                        <div class="small-12 medium-8 large-8 columns">
                            <!--Se cambia medium-12 por medium-8-->
                            <article class="side_rigth">
                                <div class="titleSection block_two_columns contentBlock">
                                    <h1>Ya tienes una solicitud en curso, recuerda que debes firmar en sucursal</h1>
                                </div>
                                <div class="thebox">
                                    <div class="infoWrap">
                                        <div class="infoWrap-inner">
                                            <h1>Información del Crédito de Consumo</h1>
                                            <p class="imp">Valor couta: <span>$73.616</span></p>
                                            <p>Monto líquido: <span>$3.500.000</span></p>
                                            <p>Plazo del Crédito <span>60 meses</span></p>
                                            <a href="">Ver todos los detalles ></a> <!-- modal 01 -->
                                        </div>
                                    </div>
                                </div>

                                <div class="thebox">
                                    <div class="infoWrap">
                                        <div class="infoWrap-inner">
                                            <h1>Información de la solicitud</h1>
                                            <p>Fecha de la solicitud <span>24/01/2017</span></p>
                                            <p>Código Cabify: <span>06745362</span></p>
                                            <br>
                                            <p>Vigencia solicitud: próximos 7 días hábiles del mes en curso desde el envío de la solicitud.</p>

                                        </div>
                                    </div>

                                    <div class="infoWrap wrapFix">
                                        <div class="alert">
                                            <div class="alertIcon">
                                                <img src="img/icon_alert.jpg" alt="">
                                            </div>
                                            <div class="alertText">
                                                <p>Debes llevar una boleta de servicio menor a 2 meses a tu nombre.</p>
                                                <p>Tu última cotización previsional debe estar ñagada.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- modal 02 -->
                                <div class="row">
                                    <div class="button_init">
                                    <button class="init_button" id="next_zero">Modificar</button>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- 8 columns -->
                    </div>
                    <!-- row -->
                </section>

                <!-- modal 01 -->
                <div id="modal-formulario" class="modal">
                    <div id="title_modal" class="row">
                        <label>Detalles del Crédito solicitado</label>
                        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
                    </div>
                    <div class="row">
                        <div class="inside-modal" >
                            <p>Monto líquido <span class="sr">$3.000.000</span></p>
                            <p>Plazo: <span class="sr">60 meses</span></p>
                            <p class="bold">Cuota mensual: <span class="sr">$73.616</span></p>
                            <p>Tasa mensual: <span class="sr">0,63%</span></p>
                            <p>CAE: <span class="sr">9,56%</span></p>
                            <p>Vencimiento 1a cuota <span class="sr">01/05/2017</span></p>
                            <p>Seguro degravamen: <span class="sr">$129.263</span></p>
                            <p>Impuestos: <span class="sr">$29.278</span></p>
                            <p>Gastos notariales: <span class="sr">$1.236</span></p>
                            <p>Monto bruto del Crédito: <span class="sr">$3.659.778</span></p>
                            <p>Costo total del Crédito: <span class="sr">$4.416.780</span></p>
                        </div>
                    </div>
                </div>

                <!-- modal 02 -->
                <div id="modal-formulario" class="modal">
                    <div id="title_modal" class="row">
                        <label>Modificar solicitud</label>
                        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
                    </div>
                    <div class="row">
                        <div class="inside-modal" >
                            <p>Si luego de simular envías una nueva solicitud, esta <span class="bold">reemplazará a tu solicitud actual.</span></p>
                            <hr>
                            <div class="button_init">
                                <button class="init_button" id="">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="step_one" class="formcontent section_main text_font_form">
                    <div class="row">
                        <div class="small-12 medium-4 large-4 columns">
                            <article id="p1" class="side_left height_step height_step2">
                                <div class="offer">
                                    <div class="row">
                                        <div class="small-11 medium-11 large-11 columns">
                                            <div id="head_step_one" class="head_step">
                                                <p>Simular Crédito de Consumo</p>
                                            </div>
                                        </div>
                                        <div class="small-1 medium-1 large-1 columns">
                                            <div class="circle_check type1">
                                                <label id="check_step_one" class="circle_unsuccess" for=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_text">
                                            <p>Simula tu Crédito como desees y continúa.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- 4 columns -->
                        <div class="small-12 medium-8 large-8 columns">
                            <article class="side_rigth">
                                <div>
                                    <div class="alert_check">
                                        <div class="alertIcon">
                                            <img src="img/icon_alert_check.jpg" alt="">
                                        </div>
                                        <div class="alertText">
                                            <h3>¡<span>Felicidades,</span> tienes un Crédito Pre Aprobado de $<span>5.000.000</span>!</h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- 8 columns -->
                    </div>
                </section>

                <section class="exito">
                    <div class="wrap">
                        <div class="row">
                            <div class="small-12 medium-12 large-12 columns">
                                <div class="e-title">
                                    <div class="e-mainTitle">
                                        <img src="img/icon_green_check.jpg" alt="">
                                        <h1>¡Felicitaciones! tu Crédito de Consumo está casi listo</h1>
                                    </div>
                                    <p>Para terminar solo falta que <span>vayas a una sucursal a firmarlo con tu huella digital</span> y cédula de identidad.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-12 large-12 columns">
                                <div class="alert">
                                    <div class="alertIcon">
                                        <img src="img/icon_alert.jpg" alt="">
                                    </div>
                                    <div class="alertText">
                                        <ul>
                                            <li>Debes llevar una boleta de servicio menor a 2 meses a tu nombre.</li>
                                            <li>Tu última cotización previsional debe estar pagada.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-12 large-6 column pr10">
                                <div class="option">
                                    <div class="o-icon">
                                        <img src="img/icon-place.jpg" alt="">
                                    </div>
                                    <div class="o-text">
                                        <p><b>Busca la sucursal</b> BBVA más cercana para firmar firmar tu Crédito. <a href="">Busca aquí</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="small-12 medium-12 large-6 column pl10">
                                <div class="option">
                                    <div class="o-icon">
                                        <img src="img/icon-taxi.jpg" alt="">
                                    </div>
                                    <div class="o-text">
                                        <p><b>Pide Cabify para llegar</b>, te regalamos un código: BBVA5677 (Tope $3.000) <a href="">Ver detalles</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-12 large-6 columns">
                                <div class="last">
                                    <p>Te enviamos un comprobante a xxxmimail@gmail.com</p>
                                    <p>Vigencia: próximos 7 días hábiles del mes en curso desde el envío de la solicitud.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- modal 03 -->
                <div id="modal-formulario" class="modal">
                    <div id="title_modal" class="row">
                        <label>Detalle de la promoción</label>
                        <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
                    </div>
                    <div class="row">
                        <div class="inside-modal" >
                            <p>Al ingresar el código obtendrás $3.000 en crédito para viajar en Cabify. Tendrás 30 días para usar el crédito una vez ingresado el código en la App Cabify. El beneficio es exclusivo con Cabify y podrá ser usado únicamente en el área de cobertura de este servicio. No acumulabre con otros códigos de descuento.</p>
                        </div>
                    </div>
                </div>

            </main>

            <footer></footer>

            <!--[if !IE 8]><!-->
            <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
            <!--<![endif]-->
            <!--[if IE 8]><script src="https://www.google.com/recaptcha/api.js?fallback=true"></script><![endif]-->
            <script src="https://www.bbvanet.cl/FUBBVAform/fu/js/jquery.modal.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery-ui.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/jquery.modal.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/jquery.price_format.2.0.min.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/foundation2.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/modernizr.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/vendor/moment.min.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/jquery.mask.min.js"></script>
            <script src="http://93.16.237.242/maqueta-nueva-web/includes/components/dap/js/accounting.js"></script>
            <!--[if !IE 8]><!-->
            <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
            <!--<![endif]-->
        </body>
    </div>
</div>
<script type="text/javascript">
    _satellite.pageBottom();
</script>
<script type="text/javascript">     
    var tooltipClass = {
        position : {
            my : "center bottom-7",
            at : "center top",
            using : function(position, feedback) {
                $(this).css(position);
                $("<div>").addClass("arrow").addClass(
                    feedback.vertical).addClass(
                    feedback.horizontal).appendTo(this);
                }
            }
        }
        $(function() {
            $(document).foundation();
            $(".select_").selectmenu();
        })
        $(function() {
            $("label.ui-marmots-label-radio").on('click', function(){
                var labelSeleccionado = $(this);
                $("label.ui-marmots-label-radio").removeClass("on");
                labelSeleccionado.addClass("on");
            });
    
            $("label.ui-marmots-label-check").on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var labelSeleccionado = $(this);
                if( labelSeleccionado.hasClass("on")){
                    labelSeleccionado.removeClass("on");
                    labelSeleccionado.find("input").prop("checked", false);
                    $('#next_two').addClass("button_disable").prop("disabled", true);
                }else {
                    labelSeleccionado.addClass("on");
                    labelSeleccionado.find("input").prop("checked", true);  
                    $('#next_two').removeClass("button_disable").prop("disabled", false);
                }
            });
        });
        $(function(){
            $('#lb_rut').on('keyup', function(){
                if($(this).focusout()){
                    $('.blocked_disabled_1').css("z-index", "1");
                    $('.blocked_disabled_2').css("z-index", "1");
                    $('.clean input').val('');
                    $('.block_two_columns input[type="checkbox"]').prop('checked', false);
                }
            });
    
            $('#lb_monto').on('keyup', function(){
                if($(this).val()== 0){
                    $('.blocked_disabled_1').css("z-index", "1");
                    $('.blocked_disabled_2').css("z-index", "1");
                    $('.clean input').val('');
                    $('.block_two_columns input[type="checkbox"]').prop('checked', false);
                }
            });
    
    // sección uno
    $('#lb_name').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        }
    });
    
    $('#lb_name').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");
    });
    
    $('#lb_name').on('blur', function (){
        if($(this).val()!=''){                      
            $(this).tooltip('destroy')
        } 
    });
    
    $('#lb_lastName').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        }
    });
    
    $('#lb_lastName').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");
    });
    
    $('#lb_lastName').on('blur', function (){
        if($(this).val()!=''){                      
            $(this).tooltip('destroy')
        } 
    });
    
    $('#lb_rut').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        }
    });
    
    $('#lb_rut').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");
    });
    
    $('#lb_rut').on('blur', function(){                 
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        }
    });
    
    $("#next_zero").click(function() {
        if($('#lb_name').val()===''){
            $('#lb_name').addClass('error-input ui-selectmenu-error');
            $('#lb_name').tooltip(tooltipClass);
        }else{
            $('#lb_name').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#lb_rut').val()===''){
            $('#lb_rut').addClass('error-input ui-selectmenu-error');
            $('#lb_rut').tooltip(tooltipClass);
        }else{
            $('#lb_rut').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#lb_rut').val()==='' || $('#lb_rut').val()==='' ){
            return false;
        }
    
        if($('#bDay').val()===''){
            $('#bDay').addClass('error-input ui-selectmenu-error');
            $('#bDay').tooltip(tooltipClass);
        }else{
            $('#bDay').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#bMonth').val()===''){
            $('#bMonth').addClass('error-input ui-selectmenu-error');
            $('#bMonth').tooltip(tooltipClass);
        }else{
            $('#bMonth').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#bYear').val()===''){
            $('#bYear').addClass('error-input ui-selectmenu-error');
            $('#bYear').tooltip(tooltipClass);
        }else{
            $('#bYear').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#dependiente').val()===''){
            $('#dependiente').addClass('error-input ui-selectmenu-error');
            $('#dependiente').tooltip(tooltipClass);
        }else{
            $('#dependiente').removeClass('error-input ui-selectmenu-error');
        };
    
        if($('#independiente').val()===''){
            $('#independiente').addClass('error-input ui-selectmenu-error');
            $('#independiente').tooltip(tooltipClass);
        }else{
            $('#independiente').removeClass('error-input ui-selectmenu-error');
        };
    
        $('html,body').animate({
            scrollTop : $("#step_one").offset().top
        }, 'slow');
        $("#step_zero").find('.blocked_disabled').css("z-index", "1"); //AQUI
        $("#step_one").find('.blocked_disabled').css("z-index", "-1");
    }); 
    //Fin sección uno
    
    //Sección dos 
    $("#next_one").click(function() {
        if($('#lb_monto').val()===''){
            $('#lb_monto').addClass('error-input ui-selectmenu-error');
            $('#lb_monto').tooltip(tooltipClass);
        }else{
            $('#lb_monto').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lb_monto').val()===''){
            return false;
        }
        $('html,body').animate({
            scrollTop : $("#step_two").offset().top
        }, 'slow');
        $("#step_two").find('.blocked_disabled_1').css("z-index", "-1");
    });
    
    $('#lb_monto').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lb_monto').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lb_monto').on('blur', function(){                   
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lb_monto').keyup(function(event) {
        $(this).val(accounting.formatMoney(accounting.unformat($(this).val(),','),'$ ', 0,'.',','));
    });
    //Fin Sección dos 
    
    //Sección tres 
    $("#next_two").click(function() {
        $('html,body').animate({
            scrollTop : $("#step_three").offset().top
        }, 'slow');
        $("#step_three").find('.blocked_disabled_2').css("z-index", "-1");
    }); 
    
    $('#aceptar').on('click', function(){
        $('button[data-dismiss="modal"]').trigger('click');
    }); 
    
    $('#myTable').on('click','.eliminarFila',function(){
        var filaAElim
    });
    
    $('#modalbutton').on('click', function(){
        $('#modal02').show();
        $('#modal01').hide();
    });
    
    $(".checkProducto").click( function(){
        $(this).parent().parent().toggleClass("itemActivo");
        $("#next_one").removeClass("button_disable_2").removeAttr("disabled");
    });
    //Fin Sección tres  
    
    //Seccion si tienes correos
    $('#next_correoRegistrado').on('click', function(){
        if( $('#noCorreo').is(':checked')){
            $("#noEnviadaRegistrado").modal();
        }else{
            $("#enviada").modal("fast");    
        }
    });
    
    
    //Fin Seccion si tienes correos
    
    
    
    
    
    
    //Sección cuatro
    $('#lg_nameSp').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_nameSp').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_nameSp').on('blur', function(){                  
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_lastNameSp').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_lastNameSp').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_lastNameSp').on('blur', function(){                  
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_day').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_day').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_day').on('blur', function(){                 
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_month').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_month').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_month').on('blur', function(){                   
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_year').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_year').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_year').on('blur', function(){                    
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_phone').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_phone').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_phone').on('blur', function(){                   
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_mail').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_mail').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_mail').on('blur', function(){                    
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_street').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_street').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_street').on('blur', function(){                  
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_snumber').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_snumber').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_snumber').on('blur', function(){                 
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lg_cedula').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_cedula').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_cedula').on('blur', function(){                  
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#lb_civ_sta-button').on('blur', function() {
        if($('#lb_civ_sta').val() ===''){
            $('#lb_civ_sta-button').addClass('error-input ui-selectmenu-error');
            $('#lb_civ_sta-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu estado civil"
            });
        };
    });
    
    $('#lb_civ_sta-button').on('focus', function() {
        $('#lb_civ_sta-button').removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lb_civ_sta-button').on('mousedown' ,function(){
        $('#lb_civ_sta-button').tooltip("destroy")
    });
    
    $('#lb_civ_sta-button').on('mousedown' ,function(){
        $('#lb_civ_sta-button').tooltip("destroy")
    });
    
    $('#lg_comunas-button').on('blur', function() {
        if($('#lg_comunas').val() ===''){
            $('#lg_comunas-button').addClass('error-input ui-selectmenu-error');
            $('#lg_comunas-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu estado civil"
            });
        };
    });
    
    $('#lg_comunas-button').on('focus', function() {
        $('#lg_comunas-button').removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_comunas-button').on('mousedown' ,function(){
        $('#lg_comunas-button').tooltip("destroy")
    });
    
    $('#lg_regiones-button').on('blur', function() {
        if($('#lg_regiones').val() ===''){
            $('#lg_regiones-button').addClass('error-input ui-selectmenu-error');
            $('#lg_regiones-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu estado civil"
            });
        };
    });
    
    $('#lg_regiones-button').on('focus', function() {
        $('#lg_regiones-button').removeClass("error-input ui-selectmenu-error");            
    });
    
    $('#lb_national-button').on('blur', function() {
        if($('#lb_national').val() ===''){
            $('#lb_national-button').addClass('error-input ui-selectmenu-error');
            $('#lb_national-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu Nacionalidad"
            });
        };
    });
    
    $('#lb_national-button').on('focus', function() {
        $('#lb_national-button').removeClass("error-input ui-selectmenu-error");            
    });
    
    $('#lb_national-button').on('mousedown' ,function(){
        $('#lb_national-button').tooltip("destroy")
    });
    
    
    $('#lg_country').on('blur', function() {
        if($(this).val() ===''){
            $(this).addClass('error-input ui-selectmenu-error');
            $(this).tooltip(tooltipClass);
        };
    });
    
    $('#lg_country').on('focus', function() {
        $(this).removeClass("error-input ui-selectmenu-error");         
    });
    
    $('#lg_country').on('blur', function(){                 
        if($(this).val()!=''){
            $(this).tooltip('destroy');
        };
    });
    
    $('#country').hide();
    $('input[data-name="sicountry"]').change(function(){ 
        if(this.checked) {
            $('#country').fadeIn();
            $('input[data-name="nocountry"]').removeAttr('checked');
        } 
    })
    
    $('input[data-name="nocountry"]').change(function(){ 
        if(this.checked) {
            $('#country').hide();
            $('input[data-name="sicountry"]').removeAttr('checked');
        }   
    })
    
    
    $("#enviarSolicitud").click(function(){
    
        if($('#lg_nameSp').val() ===''){
            $('#lg_nameSp').addClass('error-input ui-selectmenu-error');
            $('#lg_nameSp').tooltip(tooltipClass);
        }else{
            $('#lg_nameSp').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_lastNameSp').val() ===''){
            $('#lg_lastNameSp').addClass('error-input ui-selectmenu-error');
            $('#lg_lastNameSp').tooltip(tooltipClass);
        }else{
            $('#lg_lastNameSp').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_mail').val()===''){
            $('#lg_mail').addClass('error-input ui-selectmenu-error');
            $('#lg_mail').tooltip(tooltipClass);
        }else{
            $('#lg_mail').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_comunas').val()===''){
            $('#lg_comunas-button').addClass('error-input ui-selectmenu-error');
            $('#lg_comunas-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu comuna"
            });
        }else{
            $('#lg_comunas-button').removeClass('error-input ui-selectmenu-error');     
        }
    
        if($('#lg_regiones').val()===''){
            $('#lg_regiones-button').addClass('error-input ui-selectmenu-error');
            $('#lg_regiones-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu región"
            });
        }else{
            $('#lg_regiones').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_street').val()===''){
            $('#lg_street').addClass('error-input ui-selectmenu-error');
            $('#lg_street').tooltip(tooltipClass);
        }else{
            $('#lg_street').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_snumber').val()===''){
            $('#lg_snumber').addClass('error-input ui-selectmenu-error');
            $('#lg_snumber').tooltip(tooltipClass);
        }else{
            $('#lg_snumber').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_cedula').val()===''){
            $('#lg_cedula').addClass('error-input ui-selectmenu-error');
            $('#lg_cedula').tooltip(tooltipClass);
        }else{
            $('#lg_cedula').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lb_civ_sta').val()===''){
            $('#lb_civ_sta-button').addClass('error-input ui-selectmenu-error');
            $('#lb_civ_sta-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu estado civil"
            });
        }else{
            $('#lb_civ_sta-button').removeClass('error-input ui-selectmenu-error');
    
        }
        if($('#lb_national').val()===''){
            $('#lb_national-button').addClass('error-input ui-selectmenu-error');
            $('#lb_national-button').tooltip(tooltipClass, {
                items: 'span',
                content: "Selecciona tu Nacionalidad"
            });
        }else{
            $('#lb_national').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_day').val()===''){
            $('#lg_day').addClass('error-input ui-selectmenu-error');
            $('#lg_day').tooltip(tooltipClass);
        }else{
            $('#lg_day').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_month').val()===''){
            $('#lg_month').addClass('error-input ui-selectmenu-error');
            $('#lg_month').tooltip(tooltipClass);
        }else{
            $('#lg_month').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_year').val()===''){
            $('#lg_year').addClass('error-input ui-selectmenu-error');
            $('#lg_year').tooltip(tooltipClass);
        }else{
            $('#lg_year').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_country').val() ===''){
            $('#lg_country').addClass('error-input ui-selectmenu-error');
            $('#lg_country').tooltip(tooltipClass);
        }else{
            $('#lg_country').removeClass('error-input ui-selectmenu-error');
        }
        if($('#lg_phone').val()===''            ||
            $('#lg_nameSp').val()===''          ||
            $('#lg_lastNameSp').val()===''      || 
            $('#lg_mail').val()===''            ||
            $('#lg_comunas').val()===''         ||    
            $('#lg_regiones').val()===''        ||   
            $('#lg_street').val()===''          || 
            $('#lg_snumber').val()===''         || 
            $('#lg_cedula').val()===''          || 
            $('#lb_civ_sta').val()===''         ||
            $('#lb_national').val()===''        ||
            $('#lg_day').val()===''             || 
            $('#lg_month').val()===''           || 
            $('#lg_country').val()===''         ||
            $('#lg_year').val()===''){
            return false;
    }
    
    if($('#acepto').is(':checked')){
        $(".formcontent").hide();
        $("#noEnviada0").fadeIn("fast");
        $('html,body').animate({
            scrollTop : $("#noEnviada0").offset().top
        }, 'slow');
    }else{
        $(".formcontent").hide();
        $("#enviada").fadeIn("fast");
        $('html,body').animate({
            scrollTop : $("#enviada").offset().top
        }, 'slow');
    }
    
    
    
    });
    //Fin Sección cuatro
    });
</script>

<script>
    $(function() {
        $(document).foundation();
        com.bbva.main.Main.init();
        $(".select_").selectmenu();
        $(document).tooltip({
            position : {
                my : "center bottom-7",
                at : "center top",
                using : function(position) {
                    $(this).css(position);
                    $("<div>").addClass("arrow").appendTo(this);
                }
            }
        });
    });
</script>

