        <link rel="stylesheet" href="css/desarrollo-soho.css" />
        <div class="content">
            <div class="container page-mi-perfil">
                <div class="section-tabs">
                    <div class="utility-icons">
                        <a href="NeoGetReport?action=GetPDF" target="_blank">
                            <span class="icon-16 gray descargar-carp" title="Descargar pdf">&nbsp;</span>
                        </a>
                        <a href="NeoGetReport?action=GetPDF&disp=1" target="_blank">
                            <span class="icon-16 gray n01-imprimir" title="Imprimir">&nbsp;</span>
                        </a>
                    </div>
                    <h2 class="title-sh">Mi perfil </h2>
                    <hr class="separador"/>

                    <div class="container-perfil one-click-out" id="perfil-datos">

                        <div class="nav-perfil">
                            <button id="nav-perfil-toggle" type="button" class="show-mobile">
                            Solicitudes y reclamos<span class="ico">&nbsp;</span>
                            </button>
                            <nav class="inner-nav">
                                <ul class="nav nav-list">
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?MID=40010&AID=ACTUALIZACION_DATOS" title="Actualización de datos">Actualización de datos</a> 
                                    </li>
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?MID=50010&AID=CLAVE_DE_ACCESO" title="Clave de acceso">Clave de acceso</a>
                                    </li>
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?MID=90010&AID=AVISOSBBVA-000" title="Notificaciones y alertas"> Notificaciones y alertas</a>
                                    </li>
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?MID=80010&AID=CONTACTOS" title="Agenda de contactos"> Agenda de contactos</a>
                                    </li>
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?MID=60010&AID=PERFIL_INVERSOR-1000" title="Perfil inversor"> Perfil inversor</a>
                                    </li>
                                    <li>
                                        <span class="bg"></span>
                                        <a href="?src=S13-mi-perfil-ingreso-requerimientos.php" title=" Consultas y reclamos"> Solicitudes y reclamos</a>
                                    </li>
                                    <li class="active">
                                        <span class="bg"></span>
                                        <a href="?src=S02-cierre-de-productos.php" title="Cierre de productos"> Cierre de productos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="perfil consultas-reclamos" id="consultas-reclamos">

                            <div class="perfil-datos">
                                <h2>Solicitar cierre de productos</h2>
                                <hr class="separador">

                                <!-- CONTENEDOR COMUN OPCIONES: BBVA CHAT | LINEA BBVA | DESDE CELULAR -->
                                <div class="bloque" id="table-cierres">
                                    <p class="separar-bottom2">Selecciona los productos que deseas cerrar:</p>
                                    <div class="row boxes-contactO" >
                                         <article class="content-column capgemini-tables tableOneClick">
                                                <div class="tables-body no-hover">
                                                    <table id="table">
                                                    <tbody style="border-top:1px solid #dcdcdc!important;">
                                                        <tr >
                                                            <th width="40" class=""><img src="img/tickete.png" /></th>
                                                            <th >Producto</th>
                                                            <th >Detalle</th>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                </div> 
                                        </article> 
                                    </div>
                                </div>
                              

                                <div class="pull-right">
                                    <a class="btn simularDeposito" style="margin-top:20px;" id="btnCierreProductos">
                                        Solicitar cierre
                                    </a>
                                </div>

                                <div id="divCierreProductos" class="content-column " style="display:none;">
                                <!-- Paso 1 -->
                                    <div class="card">
                                        <div id="productosCerrar"> 
                                            <h2>Productos a cerrar:</h2>
                                            <div class="account">
                                                <div class="left padding-left">
                                                    <ul>
                                                        <li >
                                                            <p>Cuenta Corriente: 0182-23-70-450201520255</p>
                                                        </li> 
                                                        <li >
                                                            <p>Línea de Crédito: 0182-23-70-450201520255</p>
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>   

                                        <div style="display:none; margin-top: 30px;" id="divMotivosCierre">
                                           
                                            <strong>
                                                <h3>Favor indicar motivos del cierre</h3>
                                            </strong>
                                          
                                            <div class="radio-consulta consulta-historico" style="padding-left:2px;" id="divradios">
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion1" id="lopcion1">No se cumplieron condiciones o beneficios ofrecidos
                                                    <input type="radio" value="1" name="boton-motivos" id="opcion1"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion2" id="lopcion2">No pude acceder a crédito solicitado en BBVA
                                                    <input type="radio" value="2" name="boton-motivos" id="opcion2"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion3" id="lopcion3">He recibido mala atención de mi ejecutivo
                                                    <input type="radio" value="3" name="boton-motivos" id="opcion3"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion4" id="lopcion4">No estoy conforme con la atención en la sucursal
                                                    <input type="radio" value="4" name="boton-motivos" id="opcion4"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion5" id="lopcion5">Tengo otra cuenta/tarjeta con BBVA
                                                    <input type="radio" value="5" name="boton-motivos" id="opcion5"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion6" id="lopcion6">Nunca he utilizado este producto
                                                    <input type="radio" value="6" name="boton-motivos" id="opcion6"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion7" id="lopcion7">No utilizo este producto porque uso los productos de otros bancos
                                                    <input type="radio" value="7" name="boton-motivos" id="opcion7"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion8" id="lopcion8">He dejado de utilizar este producto
                                                    <input type="radio" value="8" name="boton-motivos" id="opcion8"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion9" id="lopcion9">Prefiero los productos, beneficios o atención de otro banco
                                                    <input type="radio" value="9" name="boton-motivos" id="opcion9"></label>
                                                </p>
                                                <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion10" id="lopcion10">La tarifa es muy alta
                                                    <input type="radio" value="10" name="boton-motivos" id="opcion10"></label>
                                                </p>
                                            </div>

                                            <strong>
                                                <h3 style="margin-bottom: 10px;">¿A qué teléfono te gustaría ser contactado?</h3>
                                            </strong>
                                            <div id="divtelefono">     
                                                <input class="form-control" id="text-comentario" name="number-phone" style="width:45%;"></input>
                                            </div>

                                            <strong>
                                                <h3 style="margin-bottom: 10px;">Comentarios</h3>
                                            </strong>
                                            <div id="divcomentario">     
                                                <textarea onkeypress="return validaAreaText(event);" class="form-control" id="text-comentario" name="text-comentario" rows="8" style="width:97%;" maxlength="140"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="block-warning iconed-24" id="divAntesContinuar">
                                            <span class="icon-24  m03-aviso"></span>
                                                Estimado Cliente, por favor tenga en cuenta lo siguiente antes de continuar:
                                            <p>
                                                <ul>
                                                    <li>Su Cuenta tiene un PAC de Crédito de Consumo asociado.</li>
                                                    <li>Su Línea de Crédito tiene deuda vigente.</li>
                                                    <li>El abono de su remuneración se deposita en esta Cuenta</li>
                                                </ul>
                                            </p>
                                                
                                            <div class="footer-cont-btn" 
                                                    style="padding-bottom:20px;">
                                                    <a id="btnCierreEnviar" class="btn btn-modificar">
                                                    Continuar
                                                    </a>
                                                    <a id="btnCierreEnviarSolicitud" class="btn btn-modificar" style="display:none;">
                                                    Enviar solicitud
                                                    </a>
                                            </div>
                                        </div>

                                        
                                       
                                        <div class="container-bck-control" id="divPeticionSMS"
                                            style="display:none;">
                                            <div class="pin-sms-input large pin-sms-input-inline">
                                                <section>
                                                    <div class="sms control-label">        
                                                        <label class="sms control-label">
                                                            Introduzca la clave recibida por SMS                                    
                                                        </label>
                                                    </div>
                                                    <div class="form-group bck-control-right">
                                                        <div class="formline">                         
                                                            <input name="claveSms" id="claveSms" maxlength="7" minlength="7" class="form-control required number disabled" type="password">
                                                            <button 
                                                                id="btnConfirmarSMS" 
                                                                type="button" 
                                                                class="btn btn-modificar" >
                                                                <span>Confirmar</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                     


                                        <div id="divPeticionClave" class="send-request">
                                            <div class="content">
                                                <div class="center" id="okEnviar" style="display:none;">
                                                    <div class="image" >
                                                        <img alt="Ok" title="Ok" src="css/img/ok-green-32px.png">
                                                    </div>
                                                    <div class="ok-content" >
                                                        <div class="message">
                                                            <h3>Solicitud enviada correctamente</h3>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <article class="container">
                                                        <p >Estimado Cliente, nos contactaremos con usted entre 9:00 y 18:00 a más tardar en 2 días hábiles para informarle condiciones para el cierre de productos y hacer efectiva su solicitud</p>
                                                    </article>
                                                    <button type="button" class="btn btn-modificar">
                                                        <a href="?src=S02-cuentas.php">Aceptar</a>
                                                    </button>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                        <!-- paso 1 fin -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">

            $('#btnCierreProductos').on('click', function(){
                $("#table-cierres, #btnCierreProductos").hide();
                $("#divCierreProductos").show();
            });

            $('#btnCierreEnviar').on('click', function(){
                $("#btnCierreEnviar").hide();
                $("#divMotivosCierre").slideDown();
                $('#btnCierreEnviarSolicitud').show();
            });

            $('#btnCierreEnviarSolicitud').on('click', function(){
                $('#divPeticionSMS').show();
                $('#btnCierreEnviarSolicitud').hide();
            })
            $('#btnConfirmarSMS').on('click', function(){
                
                $('#divPeticionClave').show();
                $('#divMotivosCierre, #productosCerrar').hide();
                return false;
            })

           
            $(document).ready(function () { 
                  
            var defaultLabelClass = "ui-marmots-label-check marmots-label-left colorWhite ";
            var activeCheckBoxClass = "on";
            var json = [
            {  
                "select":"",
                "Producto":"Cuenta Corriente",
                "Detalle":"0182-2370-450201520255"
            },
            {        
            "select":"",                   
                "Producto":"Linea de Credito",
                "Detalle":"0182-2370-450201520255"
            },
            {       
            "select":"",                
                "Producto":"Cuenta Vista",
                "Detalle":"0182-2370-450201520255"
            },
            {     
            "select":"",   
                "Producto":"Cuenta de Ahorro",
                "Detalle":"0182-2370-450201520255"
            },
            {      
                "select":"",   
                "Producto":"Vista dorada titular",
                "Detalle":"0182-2370-450201520255"
            },
            {    
                "select": "",                       
                "Producto":"Visa Gold",
                "Detalle":"0182-2370-450201520255"
            },
            {   
                "select":"",                    
                "Producto":"MASTERCARD gold",
                "Detalle":"0182-2370-450201520255"
            }
            ];
            var table = document.getElementById("table");
            for (var i = 0; i < json.length; i++) {
                var row = table.insertRow();
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                cell0.className ="vAlign";
                cell0.innerHTML ="<label class=' "+ defaultLabelClass + json[i].select +"'>" +"."+ "<input type='checkbox'  class='check'>" + 
                "</label>";
                cell1.className = "tLeft";
                cell1.innerHTML = json[i].Producto;
                cell2.className = "tLeft";
                cell2.innerHTML = json[i].Detalle;
            }

            $('.check').click(function(ev){
                var checkbox = this
                if (!checkbox.checked){
                    checkbox.parentElement.className = defaultLabelClass;
                }else{
                     checkbox.parentElement.className = defaultLabelClass + activeCheckBoxClass;
                    }   
                });
            });

            
            
        </script>


        <!--iframe xmlns:fo="http://www.w3.org/1999/XSL/Format" onload="$(this).iFrameResize();" id="IframeresetId" src="https://www.bbva.cl/banca-personal/cuentas/?mb=si" style="width: 100%; height: 592px; min-height: 750px; overflow: hidden;" sandbox="allow-same-origin allow-scripts allow-popups allow-forms" scrolling="no"></iframe-->