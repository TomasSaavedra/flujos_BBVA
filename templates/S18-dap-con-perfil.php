<div class="container ">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>
    <div class="section-tabs">
        <!-- Utility icons -->
        <div class="utility-icons">
            <!--a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a-->
            <!--a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
                <a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a-->
        </div>
        <!-- title -->
        <h2 class="title-sh">Ahorro e inversión</h2>
         
        <hr class="separador">
        <div class="section-ahorro-inversion view-dep" >

            <div class="banner-column" id="ahorro-lateral">
                <nav class="nav-sidebar">
                    <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                    <a href="?src=S21-portal-inversiones.php" >Metas de Ahorro</a>
                    <a href="?src=S18-productos-de-inversion.php" class="active">Contratar productos</a>
                </nav>                    

                <aside class="links dated mini-triangled favoritas editable perfil-inversor perfil-inversor-lateral">
                    <header>
                        <h1>Perfil inversor</h1>
                    </header>

                    <section> 
                        <ul>
                            <li>Conservador</li>
                            <li class="active">Moderado</li>
                            <li class="last">Arriesgado</li>
                        </ul>
                        <div class="barra">
                            <span class="barra-azul moderado"></span>
                        </div> 
                    </section>

                    <footer>
                        <a href="?src=S11-mi-perfil-inversor.php" class="btn small">Cambiar mi Perfil</a> 
                    </footer>
                </aside>
            </div>

            <div class="content-column page-enrolamiento dap-con-perfil" id="pre-productos-inversion">
                <!-- paso 1-->
                <h2>Ahorro e inversión</h2>
                <div data-title="Detalle depósito" class="detalle-deposito pdTop20px"> 
                
                    <div class="contratar-deposito-paso1 simular-deposito-datos">

                        <div class="form-group big-blue col-sm-4">
                            <div class="">
                                <label class="label-form" for="monto"> Moneda <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Texto acá"></span></label>
                             
                                <select class="selectpicker" data-container="body">
                                    <option>Peso</option>
                                    <option>Opción 1</option>
                                    <option>Opción 2</option>
                                    <option>Opción 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group big-blue col-sm-4">
                            <div class=" ">
                                <label class="label-form" for="monto">Tipo <span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Texto acá"></span></label>
                             
                                <select class="selectpicker" data-container="body">
                                    <option>Fijo</option>
                                    <option>Opción 1</option>
                                    <option>Opción 2</option>
                                    <option>Opción 3</option>               
                                </select>
                            </div>
                        </div>

                        <div class="form-group big-blue col-sm-4">
                            <div class="">
                                <label class="label-form" for="monto">Monto</label>
                             
                                <input type="text" size="54" data-msg-required="Por favor, escribe el monto." name="monto" id="monto" maxlength="20" greater="0" smaller="5000001" class="form-control required number miles">
                                <span class="small info-text-monto">Min. <strong>$ 1.</strong> Max. <strong>$ 1.000.000.000</strong></span>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <hr >
                        </div>
                        
                        <div class="text-center col-sm-12">
                             <a href="#" class="btn" id="simular">Simular Depósito</a>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>

                    <div class="contratar-deposito-paso1 simular-deposito-tabla" id="tablaSimulacion" style="display:none;">
                        <nav>
                            <a href="#"></a>
                            <a href="#"></a>
                        </nav>
                        <article class="capgemini-tables holder">
                            <div>
                                <div class="tables-body table-scroll">
                                    <div class="">
                                        <h2 class="title-wizard">Seleccione el plazo de su preferencia para realizar el depósito:</h2>
                                        <div class="capgemini-tables tables-header nav-plazo">
                                            <span class="btn-group ">
                                                <button type="button" data-tab="tables-body" class="btn sprite-lines active"></button> 
                                                <button type="button" data-tab="grafico" class="btn sprite-cheese "></button>  
                                            </span>
                                        </div>

                                        <div class="body-tab tables-body">
                                            <table>
                                                <tbody>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th class="plazo" width="12%">PLAZO</th>
                                                            <th width="12%">TASA ANUAL</th>
                                                            <th width="18%" class="hidden-xs">TASA PERÍODO</th>
                                                            <th width="16%" class="hidden-xs">SALDO AL VENCIMIENTO</th>
                                                            <th>INTERESES A RECIBIR</th>
                                                            <th class="hidden-xs">VENCIMIENTO</th>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td class="link">30 días</td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                        <tr class="no-hover-tr">
                                                            <td  class="title-int-table" colspan="7"><h2>Puede elegir su plazo de preferencia en días</h2></td>
                                                        </tr>
                                                        <tr data-select-radio="true">
                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                            <td  class="link actualizar-monto" style="width: 91px;">
                                                                <input type="text" class="form-control" maxlength="4" style="width: 58px !important;">
                                                                <a href="#;" class="btn-actualziar"></a></td>
                                                            <td>5,1600 %</td>
                                                            <td class="hidden-xs"><strong>0,4300 %</strong></td>
                                                            <td class="hidden-xs">$ 1.220.006</td>
                                                            <td>$ 4.300</td>
                                                            <td class="hidden-xs">07/09/2014</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="body-tab grafico">
                                            <?php include 'includes/components/tables/grafico-contratar-deposito.html'; ?>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn" id="aceptarSimulacion">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="content-column page-enrolamiento dap-con-perfil" id="productos-inversion">
                 
                 <div class="row">
                    <div class="col-sm-12"><h2>Depósito a Plazo</h2></div>
                    <div class="col-sm-12"><h3>Contratar Depósito a Plazo</h3></div>
                    <div class="col-sm-12">
                        <div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
                            <form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
                                <article class="wizard">

                                  

                                    <!-- paso 2-->
                                    <div data-title="Selección cuentas" class="seleccion-cuentas">
                                        <div class="step-content-container contratar-deposito-pasos">

                                            <div>
                                                <article class="capgemini-tables holder">
                                                    <div>
                                                        <div class="tables-body table-scroll">
                                                            <div class="">
                                                                <h2 class="title-wizard">Seleccionar cuenta de origen:  </h2>
                                                                <div class="bajada">
                                                                    <p>Seleccione la cuenta de donde se descontará el dinero que va a invertir</p>
                                                                </div> 
                                                                <table>
                                                                    <tbody>
                                                                        <tr class="hidden-xs">
                                                                            <th>&nbsp;</th>
                                                                            <th>CUENTA</th>
                                                                            <th>DISPONIBLE</th>
                                                                        </tr>
                                                                        <tr data-select-radio="true">
                                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                            <td class="text-left">
                                                                                <span class="link">Cuenta Catalina</span>
                                                                                <small>
                                                                                    <strong>Cuenta simple: 12345678</strong>
                                                                                    <br/>
                                                                                    Vista
                                                                                </small>
                                                                            </td>
                                                                            <td><strong>$ 1.300.500</strong></td>
                                                                        </tr>
                                                                        <tr data-select-radio="true">
                                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
                                                                            <td class="text-left">
                                                                                <span class="link">Cuenta Catalina</span>
                                                                                <small>
                                                                                    <strong>Cuenta simple: 12345678</strong>
                                                                                    <br/>
                                                                                    Vista
                                                                                </small>
                                                                            </td>
                                                                            <td><strong>$ 1.440.000</strong></td>
                                                                        </tr>
                                                                        <tr data-select-radio="true">
                                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="003"></label></td>
                                                                            <td class="text-left">
                                                                                <span class="link">Cuenta Catalina</span>
                                                                                <small>
                                                                                    <strong>Cuenta simple: 12345678</strong>
                                                                                    <br/>
                                                                                    Vista
                                                                                </small>
                                                                            </td>
                                                                            <td><strong>$ 3.000.000</strong></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>Si el saldo de la cuenta seleccionada es insuficiente, se utilizarán los fondos disponibles en tu línea de crédito para completar la solicitud.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </article>

                                                <article class="capgemini-tables holder">
                                                    <div>
                                                        <div class="tables-body table-scroll">
                                                            <div class="">
                                                                <h2 class="title-wizard">Seleccionar cuenta de destino: </h2>
                                                                <div class="bajada">
                                                                    <p>Seleccione la cuenta donde se abonará su dinero una vez terminado el periodo de inversión</p>
                                                                </div>
                                                                <table>
                                                                    <tbody>
                                                                        <tr class="hidden-xs">
                                                                            <th>&nbsp;</th>
                                                                            <th>CUENTA</th>
                                                                            <th>DISPONIBLE</th>
                                                                        </tr>
                                                                        <tr data-select-radio="true">
                                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="001" checked="checked"></label></td>
                                                                            <td class="text-left">
                                                                                <span class="link">Cuenta Catalina</span>
                                                                                <small>
                                                                                    <strong>Cuenta simple: 12345678</strong>
                                                                                    <br/>
                                                                                    Vista
                                                                                </small>
                                                                            </td>
                                                                            <td><strong>$ 1.300.500</strong></td>
                                                                        </tr>
                                                                        <tr data-select-radio="true">
                                                                            <td><label>&nbsp;<input type="radio" name="mis-cuentas-bbva-nacional" value="002"></label></td>
                                                                            <td class="text-left">
                                                                                <span class="link">Cuenta Catalina</span>
                                                                                <small>
                                                                                    <strong>Cuenta simple: 12345678</strong>
                                                                                    <br/>
                                                                                    Vista
                                                                                </small>
                                                                            </td>
                                                                            <td><strong>$ 1.440.000</strong></td>
                                                                        </tr> 
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                </article>
                                            </div>

                                        </div>
                                    </div>

                                     <!-- paso 3-->
                                    <div data-title="Distribución" class="seleccion-cuentas">
                                        <div class="step-content-container contratar-deposito-pasos">

                                            <h3>Distribución de la inversión:</h3>
                                            <p>Para diferenciar tus inversiones en un mismo Fondo, las puedes distribuir en distintas cuentas de administración.</p>
                                            
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                                        <div class="col-lg-1 col-md-1 col-xs-1 pd0px"> 
                                                            <label data-name="distribucion">&nbsp;
                                                                <input type="radio" data-name="distribucion" value="001" checked="checked">
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-xs-11">
                                                            <p class="mgLeft17px">Asociar a la meta</p>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-4 col-lg-4 col-xs-12">
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Pie para la casa</option>
                                                                <option value="2">Opcion 2</option>
                                                                <option value="3">Opcion 3</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xs-12 distribucion">
                                                        <div class="central mgBottom10px">
                                                            <span class="text-center">ó</span> 
                                                            <a href="includes/components/dialogs/crear-meta-2.php" class="btn modal-trigger">Asociar a nueva meta</a>
                                                        </div>      
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12 col-lg-12 mgTop20px mgBottom20px">
                                                    <div class="col-lg-8 col-md-8 col-xs-12">
                                                        <div class="col-lg-1 col-md-1 col-xs-1 pd0px"> 
                                                            <label data-name="distribucion">&nbsp;
                                                                <input type="radio" data-name='distribucion' value="002">
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-xs-11">
                                                            <p>No asociar a metas de Ahorro</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <!-- paso 4-->
                                    <div data-title="Confirmación" class="confirmacion"> 
                                        <div class="step-content-container">
                                            <div class="sub-step">
                                                <div class="confirmar">
                                                    <div class="dataFlow">
                                                        <div class="containerData">
                                                            <h4>Cuenta de origen </h4>
                                                            <br/>
                                                            <dl class="block-account">
                                                                <dt>
                                                                    Cuenta corriente
                                                                </dt>
                                                                <dd class="last"> 
                                                                    0356-3566-892141520000
                                                                </dd>
                                                                <dt>
                                                                    Saldo disponible
                                                                </dt>
                                                                <dd class="last"> 
                                                                    $1.343.222
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="arrow-destination"></div>
                                                        <div class="containerData right">
                                                            <h4>Cuenta de destino de sus fondos</h4>
                                                            <p>Donde se abonará tu dinero una vez terminado el período de inversión</p>
                                                            <dl class="block-account">
                                                                <dt>
                                                                    Cuenta corriente
                                                                </dt>
                                                                <dd class="last"> 
                                                                    0356-3566-892141520000
                                                                </dd> 
                                                            </dl>
                                                        </div>
                                                    </div>

                                                    <div class="info">
                                                        <div class="info-column">
                                                            <div class="left">Tipo de Depósito:</div>
                                                            <div class="right">Fijo</div>
                                                            <div class="left">Plazo:</div>
                                                            <div class="right">30 días</div>
                                                            <div class="left">Moneda:</div>
                                                            <div class="right">$ (Pesos)</div>
                                                            <div class="left">Monto invertido:</div>
                                                            <div class="right">$ 120.000</div>
                                                            <div class="left">Asociado a la meta:</div>
                                                            <div class="right">Pie para la casa</div>
                                                        </div>
                                                        <div class="info-column right">
                                                            <div class="left">Fecha de inversión:</div>
                                                            <div class="right">31/05/2016</div>      
                                                            <div class="left">Fecha vencimiento:</div>
                                                            <div class="right">01/07/2016</div>      
                                                            <div class="left">Tasa período:</div>
                                                            <div class="right">0,3150%</div>      
                                                            <div class="left">Tasa mensual:</div>
                                                            <div class="right">0,150%</div>      
                                                            <div class="left">Intereses a recibir:</div>
                                                            <div class="right">$3.150</div>          
                                                        </div>
                                                        <div class="clear"></div>

                                                        <hr>
                                                        <div class="form-group formline confirmar" style="width:98%!important; margin:0 1%!important;">
                                                            <div class="item first check">
                                                                <label for="legales" class="ui-marmots-label-check marmots-label-left"> He leído y acepto las <a href="#">Condiciones legales y comerciales</a>
                                                                    <input id="legales" name="legales" type="checkbox">
                                                                </label>
                                                            </div>
                                                            
                                                        </div>
                                                        <hr>

                                                    </div> 
                                                    <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>BBVA no acepta solicitudes de pago anticipado de Depósitos a Plazo, el pago puede ser realizado solo en su fecha de vencimiento y en los dos días hábiles posteriores.</p>
                                                    <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>Por seguridad enviaremos comprobante de transacción al correo registrado en el banco.</p>
                                                
                                                    <footer>
                                                        <div class="row-block">
                                                            <div class="row">   
                                                                <span class="title">¿Desea enviar notificación de esta operación?</span>
                                                                <div class="right">
                                                                    <div class="form-group formline confirmar">
                                                                        <div class="item first check"><label for="transferencia-notificar-email-check" >Mi email<input id="transferencia-notificar-email-check" name="transferencia-notificar-email-check" type="checkbox"/></label></div>
                                                                        <div class="item"><input type="text" data-msg-required="Por favor, escribe el email" name="email1" id="email1" class="form-control required email" disabled="disabled"  placeholder="sucorreo@email.cl"/></div>
                                                                        <div class="item last"></div>
                                                                    </div>                  
                                                                </div>
                                                            </div>

                                                            <div class="row hide-mobile">   
                                                                <span class="title">Mensaje</span>
                                                                <div class="right">
                                                                    <textarea class="form-control" rows="8"></textarea>
                                                                </div>                      
                                                            </div>

                                                        </div>
                                                    </footer>
                                                </div>
                                            </div>
                                            <div class="sub-step hidden">
                                                <div class="pin-sms-input">
                                                    <section>
                                                        <div class="form-group">
                                                            <label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
                                                            <div class="formline">
                                                                <input type="password" name="clave-segura" maxlength="7" minlength="7" class="form-control required number">
                                                                <button class="btn next"><span>Confirmar</span></button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div> 

                                    <!-- paso 5-->
                                    <div data-title="Comprobante" class="comprobante"> 
                                        <div class="step-content-container ingresar-dinero">
                                            <div class="comprobante no-border">
                                                <div class="ok-layer">
                                                    <div class="image">
                                                        <img alt="Ok" title="Ok" src="img/tick.png">
                                                    </div>
                                                    <div class="ok-content">
                                                        <div class="title">Operación realizada correctamente</div>
                                                        <div class="description">Nº de transacción <strong>09876543</strong></div>
                                                    </div>
                                                </div>

                                                <table class="table-comprobante">
                                                    <tr>
                                                        <th>Cuenta de origen:</th>
                                                        <td>098-3232-2317989839</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo Depósito:</th>
                                                        <td>Fijo</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Moneda:</th>
                                                        <td>$ Pesos</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Plazo:</th>
                                                        <td>33 días</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha inversión:</th>
                                                        <td>26/05/2016</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha vencimiento:</th>
                                                        <td>28/06/2016</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Monto invertido:</th>
                                                        <td>$1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tasa del periodo:</th>
                                                        <td>0,3465%</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Intereses a recibir:</th>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cuenta de abono:</th>
                                                        <td>8383-4356-987892897</td>
                                                    </tr>
                                                </table>

                                                <hr>
                                                <div class="botonesComprobante">     
                                                    <button class="btn primary left" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante en PDF</button>
                                                    <button class="btn primary" id="btn-nueva-inversion" type="button">Contratar nueva inversión</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </form>
                        </div>
                    </div>
                 </div>
            </div> 
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        if($('#wizardNext').text() === 'Siguiente'){
            debugger;
            $('#wizardNext').removeClass('disabled')    
        };
    })
    $(function(){
        $('#productos-inversion').hide();
        $('#simular').on('click', function(){
            $('#tablaSimulacion').fadeIn();
        });
        
        $('#aceptarSimulacion').on('click', function(){
            $('#pre-productos-inversion').hide();
            $('#productos-inversion').fadeIn();
        });
    });

</script>
<!--iframe xmlns:fo="http://www.w3.org/1999/XSL/Format" onload="$(this).iFrameResize();" id="IframeresetId" src="https://www.bbva.cl/banca-personal/cuentas/?mb=si" style="width: 100%; height: 592px; min-height: 750px; overflow: hidden;" sandbox="allow-same-origin allow-scripts allow-popups allow-forms" scrolling="no"></iframe-->