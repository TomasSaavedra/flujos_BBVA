<div class="container">
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
        <div class="section-ahorro-inversion" >
             
                <div class="banner-column" id="ahorro-lateral">
                    <nav class="nav-sidebar">
                        <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                        <a href="?src=S21-portal-inversiones.php">Metas de Ahorro</a>
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
                            <a href="includes/components/dialogs/modificar-perfil.html" class="btn modal-trigger">Cambiar Mi Perfil</a>
                        </footer>
                    </aside>
                </div>

                <div class="content-column page-enrolamiento" id="metas-ffmm">  
                     
                     <div class="row">
                        <div class="col-sm-12"><h2>Fondos Mutuos</h2></div>
                        <div class="col-sm-12"><h3>Contratar Fondos Mutuos</h3></div>
                        <div class="col-sm-12">
                            <div class="main-wizard wizard-ffmm">
                                <form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
                                    <article class="wizard">

                                        <!-- paso 1-->
                                        <div data-title="Monto" class="seleccion-cuentas">
                                            <div class="step-content-container contratar-deposito-pasos">

                                                <div>
                                                    <article class="capgemini-tables holder">
                                                        <div>
                                                            <div class="tables-body table-scroll">
                                                            <div class="">
                                                                <h2 class="title-wizard">BBVA Futuro: <span>Serie A</span>  </h2>
                                                                    
                                                            <div class="box-inversion-recurrente">
                                                                <p class="option">¿Desea programar una inversión recurrente? (PAC)
                                                                <label data-name="recurrente0" for="si" class="ui-marmots-label-radio marmots-label-left">  Si </label>
                                                                <label data-name="recurrente0" for="no" class="ui-marmots-label-radio marmots-label-left on">  No </label>
                                                                </p>

                                                                <div class="cuentas-inversion-recurrentes" style="display: block !important;">
                                                                    <div class="row">
                                                                    
                                                                        <div class="group-datos">
                                                                            <div class="col-md-6">
                                                                                <label class="label-form" for="monto">Monto</label>
                                                                                <span class="small info-text-monto">( Mínimo $ 100.000 )</span>
                                                                                <input type="text" size="54" data-msg-required="Por favor, escribe el monto." name="monto" id="monto" maxlength="12" greater="0" smaller="5000001" class="form-control required number miles dollar">
                                                                                            
                                                                            </div>
                                                                              
                                                                            <div class="col-sm-6 muestramelo " style="display: none !important;">
                                                                                <label>Días de cargo</label>
                                                                                <div class="select">
                                                                                    <select class="selectpicker" >
                                                                                        <option value="1" selected="">Opcion 1</option>
                                                                                        <option value="2">Opcion 2</option>
                                                                                        <option value="3">Opcion 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>    
                                                                    
                                                                        <div class="group-datos muestramelo" style="display: none !important;"><!--group-datos-->
                                                                            <div class="col-sm-6">
                                                                                    <label>Alias del PAC</label>
                                                                                    <input type="text" value=" " class="form-control" autocomplete="off" style="width: 100%;">
                                                                             </div>
                                                                        </div>

                                                                        <div class="group-datos muestramelo " style="display: none !important;">
                                                                                <p class="iconed-24 block-warning" id="CuentaCorriente" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;"><i class="icon-24 m03-aviso"></i>La inversión recurrente tarda dos días hábiles en activarse. El primer cargo a tu Cuenta Corriente se hará el siguiente día hábil dentro de la fecha que has señalado, luego de que se haya activado el PAC en Fondos Mutuos.<br>
                                                                                EL PAC tiene plazo indefinido, podrás modificar o cancelar la inversión recurrente cuando lo desees en cualquier sucursal BBVA.
                                                                                </p>
                                                                        </div>     
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <p><strong>Cuenta de origen</strong> (desde donde se sacarán sus fondos de inversión)</p>
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
                                                        <p class="iconed-24 block-warning" id="CuentaCorriente" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;"><i class="icon-24 m03-aviso"></i>
                                                        Tu saldo disponible incluye el de tu Línea de Crédito </p>
                                                    </article>

                                                    <article class="capgemini-tables holder">
                                                        <div>
                                                            <div class="tables-body table-scroll">
                                                                <div class="">
                                                                    <h2 class="title-wizard">Garantizado Global Pharma: <span>Serie Persona</span> </h2>
                                                                

                                                        <div class="box-inversion-recurrente">
                                                                <p class="option">¿Desea programar una inversión recurrente? (PAC)
                                                                <label data-name="recurrente0" for="si" class="ui-marmots-label-radio marmots-label-left">  Si </label>
                                                                <label data-name="recurrente0" for="no" class="ui-marmots-label-radio marmots-label-left on">  No  </label>
                                                                </p>

                                                            <div class="cuentas-inversion-recurrentes" style="display: block !important;">
                                                                <div class="row">
                                                                
                                                                    <div class="group-datos">
                                                                        <div class="col-md-6">
                                                                            <label class="label-form" for="monto">Monto</label>
                                                                            <span class="small info-text-monto">( Mínimo $ 100.000 )</span>
                                                                            <input type="text" size="54" data-msg-required="Por favor, escribe el monto." name="monto" id="monto" maxlength="12" greater="0" smaller="5000001" class="form-control required number miles dollar">
                                                                                        
                                                                        </div>
                                                                          
                                                                        <div class="col-sm-6 muestramelo " style="display: none !important;">
                                                                                <label>Días de cargo</label>
                                                                                <div class="select">
                                                                                    <select class="selectpicker" >
                                                                                        <option value="1" selected="">Opcion 1</option>
                                                                                        <option value="2">Opcion 2</option>
                                                                                        <option value="3">Opcion 3</option>
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                    </div>    
                                                                
                                                                    <div class="group-datos muestramelo " style="display: none !important;"><!--group-datos-->
                                                                        <div class="col-sm-6">
                                                                                <label>Alias del PAC</label>
                                                                                <input type="text" value=" " class="form-control" autocomplete="off" style="width: 100%;">
                                                                         </div>
                                                                    </div>

                                                                    <div class="group-datos muestramelo " style="display: none !important;">
                                                                            <p class="iconed-24 block-warning" id="CuentaCorriente" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;"><i class="icon-24 m03-aviso"></i>La inversión recurrente tarda dos días hábiles en activarse. El primer cargo a tu Cuenta Corriente se hará el siguiente día hábil dentro de la fecha que has señalado, luego de que se haya activado el PAC en Fondos Mutuos.<br>
                                                                            EL PAC tiene plazo indefinido, podrás modificar o cancelar la inversión recurrente cuando lo desees en cualquier sucursal BBVA.
                                                                            </p>
                                                                    </div>
                                                                     
                                                                </div>
                                                            </div>
                                                        </div>

                                                                  
                                                                    <p><strong>Cuenta de origen</strong> (desde donde se sacarán sus fondos de inversión)</p>
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


                                                        <p class="iconed-24 block-warning" id="CuentaCorriente" style="padding-left: 58px;padding-bottom: 10px;padding-top: 10px;"><i class="icon-24 m03-aviso"></i>
                                                        Tu saldo disponible incluye el de tu Línea de Crédito </p>
                                                    </article>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- paso 2-->
                                        <div data-title="Distribución" class="seleccion-cuentas">
                                            <div class="step-content-container contratar-deposito-pasos">

                                                <h3>BBVA Futuro:</h3>
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
                                                                <p class="mgLeft17px">Asociar a la meta </p>
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

                                                <h3>Garantizado Global Pharma:</h3>
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
                                                                <p class="mgLeft17px">Asociar a la meta </p>
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

                                        <!-- paso 3-->
                                        <div data-title="Confirmación" class="confirmacion"> 
                                            <div class="step-content-container">
                                                <div class="sub-step">
                                                    <div class="confirmar">
                                                        <div class="dataFlow">
                                                            <div class="containerData">
                                                                <h4>Cuenta de origen </h4> 
                                                                <dl class="block-account">
                                                                    <dt>
                                                                        Cuenta simple
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
                                                                    <dt>
                                                                        Tipo de inversión
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Única
                                                                    </dd>
                                                                    <dt>
                                                                        Monto Inicial
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        $50.000
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                            <div class="arrow-destination"></div>
                                                            <div class="containerData right">
                                                                <h4>Fondo de inversión</h4> 
                                                                <dl class="block-account">
                                                                    <dt>
                                                                        Activa E  /  Serie Persona
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Renta fija  /  Libre inversión 
                                                                    </dd> 
                                                                    <dt>
                                                                        Cuenta fondo:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        $1
                                                                    </dd>
                                                                    <dt>
                                                                        Tipo de moneda:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Pesos
                                                                    </dd>
                                                                    <dt>
                                                                        Asociado a la meta:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Pie para la casa
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </div>

                                                        <div class="dataFlow">
                                                            <div class="containerData">
                                                                <h4>Cuenta de origen </h4> 
                                                                <dl class="block-account">
                                                                    <dt>
                                                                        Cuenta simple
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
                                                                    <dt>
                                                                        Tipo de inversión
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Recurrente
                                                                    </dd>
                                                                    <dt>
                                                                        Monto Inicial
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        $50.000
                                                                    </dd>
                                                                    <dt>
                                                                        Monto Recurrente
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        $10.000
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                            <div class="arrow-destination"></div>
                                                            <div class="containerData right">
                                                                <h4>Fondo de inversión</h4> 
                                                                <dl class="block-account">
                                                                    <dt>
                                                                       Corporativo  /  Serie Global
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Renta fija  /  Libre inversión 
                                                                    </dd> 
                                                                    <dt>
                                                                        Cuenta fondo:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        $1
                                                                    </dd>
                                                                    <dt>
                                                                        Tipo de moneda:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Pesos
                                                                    </dd>
                                                                     <dt>
                                                                        Asociado a la meta:
                                                                    </dt>
                                                                    <dd class="last"> 
                                                                        Pie para la casa
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </div>

                                                     

                                                        <div class="info">
                                                              
                                                            <div class="form-group formline confirmar" style="width:98%!important; margin:0 1%!important;">
                                                                <div class="item first check">
                                                                    <label for="legales" class="ui-marmots-label-check marmots-label-left"> He leído y acepto las <a href="#">Contrato General de Fondos Mutuos</a>
                                                                        <input id="legales" name="legales" type="checkbox">
                                                                    </label>
                                                                </div>
                                                                
                                                            </div> 

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
                                                         <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span>Por seguridad enviaremos comprobante de transacción al correo registrado en Fondos Mutuos.</p>
                                                    
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

                                        <!-- paso 4-->
                                        <div data-title="Comprobante" class="comprobante"> 
                                            <div class="step-content-container ingresar-dinero">
                                                <div class="comprobante no-border">
                                                    <div class="ok-layer">
                                                        <div class="image">
                                                            <img alt="Ok" title="Ok" src="img/tick.png">
                                                        </div>
                                                        <div class="ok-content">
                                                            <div class="title">Su operación se ha realizado parcialmente</div>
                                                            <div class="description">Fondos Mutuos Contratados: <strong>2 de 3</strong></div>
                                                        </div>
                                                    </div>

                                                    <table class="table-comprobante">
                                                        <tr>
                                                            <th class="text-left">Monto total de inversión:</th>
                                                            <th class="text-right font-normal">$ 100.000</th>
                                                        </tr>  
                                                    </table>

                                                    <p class="block-warning iconed-24"><span class="icon-24  m03-aviso"></span> <strong>La inversión se verá reflejada en tu cuenta al día siguiente hábil bancario.</strong> <br>Para inversiones recurrentes, el cargo PAC se hará efectivo al mes siguiente.</p>


                                                                    

                                                    <hr>
                                                    <h3>Fondos Mutuos contratados</h3>

                                                    <article class="capgemini-tables datos-tabla tabla-ffmm-contratados"  >
                                                        <div class="tables-body">
                                                            <!-- tabla desktop y tablet-->
                                                            <table class="desktop" >
                                                                <tbody>
                                                                    <tr>
                                                                        <th width="">Nombre de Fondo</th>
                                                                        <th width="">Tipo de inversión</th> 
                                                                        <th width="">Nº Transacción</th> 
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="check-verde-16"></span> <h4>Corporativo</h4> <span>Serie Global</span></td> 
                                                                        <td></td> 
                                                                        <td></td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left first"><strong>Fondo de destino:</strong></td> 
                                                                        <td class="text-left first">Activa C - Serie Persona</td> 
                                                                        <td class="text-left first"><strong>Tipo de Inversión:</strong></td> 
                                                                        <td class="text-left first">Única</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left"><strong>Cuenta fondo:</strong></td> 
                                                                        <td class="text-left">Cuenta nueva</td> 
                                                                        <td class="text-left"><strong>Nº transacción:</strong></td> 
                                                                        <td class="text-left">00078645362</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Cuenta origen:</strong></td> 
                                                                        <td class="text-left last">0504-0142-0100142867</td> 
                                                                        <td class="text-left last"><strong>Día de cargo:</strong></td> 
                                                                        <td class="text-left last">Ahora</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Asociado a la meta:</strong></td> 
                                                                        <td class="text-left last">Pie para la casa</td> 
                                                                        <td class="text-left last"><strong></strong></td> 
                                                                        <td class="text-left last"></td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Tipo de moneda:</strong></td> 
                                                                        <td class="text-left last">Pesos ($)</td> 
                                                                        <td colspan="2" class="text-left"><a class=" "  type="button"><i class="icon-16 blue l01-pdf"></i> Ver Contrato</a></td>  
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="check-verde-16"></span> <h4>Corporativo</h4></td> 
                                                                        <td></td> 
                                                                        <td></td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left first"><strong>Fondo de destino:</strong></td> 
                                                                        <td class="text-left first">Activa C - Serie Persona</td> 
                                                                        <td class="text-left first"><strong>Tipo de Inversión:</strong></td> 
                                                                        <td class="text-left first">Única</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left"><strong>Cuenta fondo:</strong></td> 
                                                                        <td class="text-left">Cuenta nueva</td> 
                                                                        <td class="text-left"><strong>Nº transacción:</strong></td> 
                                                                        <td class="text-left">00078645362</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Cuenta origen:</strong></td> 
                                                                        <td class="text-left last">0504-0142-0100142867</td> 
                                                                        <td class="text-left last"><strong>Día de cargo:</strong></td> 
                                                                        <td class="text-left last">Ahora</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Asociado a la meta:</strong></td> 
                                                                        <td class="text-left last">Pie para la casa</td> 
                                                                        <td class="text-left last"><strong></strong></td> 
                                                                        <td class="text-left last"></td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Tipo de moneda:</strong></td> 
                                                                        <td class="text-left last">Pesos ($)</td> 
                                                                        <td colspan="2" class="text-left"><a class=" "  type="button"><i class="icon-16 blue l01-pdf"></i> Ver Contrato</a></td> 
                                                                    </tr>
                                                                     
                                                                    
                                                                </tbody>
                                                            </table>

                                                            <!-- tabla celular -->
                                                            <table class="phones" >
                                                                <tbody>
                                                                    <!-- -->
                                                                    <tr>
                                                                        <th width="">Nombre de Fondos</th>
                                                                        <th width="">Tipo de inversión</th> 
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="check-verde-16"></span> <h4>Corporativo</h4> <span>Serie Global</span></td> 
                                                                        <td>Única</td>  
                                                                    </tr>
                                                                    <tr> 
                                                                        <th width="">Nº Transacción</th> 
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                    <tr class="principal">  
                                                                        <td>0007293488</td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>

                                                                    <tr class="detalle">
                                                                        <td class="text-left first"><strong>Fondo de destino:</strong></td> 
                                                                        <td class="text-left first">Activa C - Serie Persona</td>   
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left first"><strong>Tipo de Inversión:</strong></td> 
                                                                        <td class="text-left first">Única</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left"><strong>Cuenta fondo:</strong></td> 
                                                                        <td class="text-left">Cuenta nueva</td>  
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left"><strong>Nº transacción:</strong></td> 
                                                                        <td class="text-left">00078645362</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Cuenta origen:</strong></td> 
                                                                        <td class="text-left last">0504-0142-0100142867</td> 
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left last"><strong>Asociado a la meta:</strong></td> 
                                                                        <td class="text-left last">Pie para la casa</td> 
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left last"><strong>Día de cargo:</strong></td> 
                                                                        <td class="text-left last">Ahora</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Tipo de moneda:</strong></td> 
                                                                        <td class="text-left last">Pesos ($)</td>  
                                                                    </tr>
                                                                     <!-- -->
                                                                    <tr>
                                                                        <th width="">Nombre de Fondos</th>
                                                                        <th width="">Tipo de inversión</th> 
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="check-verde-16"></span> <h4>Corporativo</h4> <span>Serie Global</span></td> 
                                                                        <td>Única</td>  
                                                                    </tr>
                                                                    <tr> 
                                                                        <th width="">Nº Transacción</th> 
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                    <tr class="principal">  
                                                                        <td>0007293488</td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>

                                                                    <tr class="detalle">
                                                                        <td class="text-left first"><strong>Fondo de destino:</strong></td> 
                                                                        <td class="text-left first">Activa C - Serie Persona</td>   
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left first"><strong>Tipo de Inversión:</strong></td> 
                                                                        <td class="text-left first">Única</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left"><strong>Cuenta fondo:</strong></td> 
                                                                        <td class="text-left">Cuenta nueva</td>  
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left"><strong>Nº transacción:</strong></td> 
                                                                        <td class="text-left">00078645362</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Cuenta origen:</strong></td> 
                                                                        <td class="text-left last">0504-0142-0100142867</td> 
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left last"><strong>Asociado a la meta:</strong></td> 
                                                                        <td class="text-left last">Pie para la casa</td> 
                                                                    </tr>
                                                                    <tr class="detalle"> 
                                                                        <td class="text-left last"><strong>Día de cargo:</strong></td> 
                                                                        <td class="text-left last">Ahora</td> 
                                                                    </tr>
                                                                    <tr class="detalle">
                                                                        <td class="text-left last"><strong>Tipo de moneda:</strong></td> 
                                                                        <td class="text-left last">Pesos ($)</td>  
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </article>

                                                    <hr>
                                                    <div class="botonesComprobante">      
                                                        <button class="btn primary" id="btn-nueva-inversion" type="button"><i class="icon-32 blue l01-pdf"></i> Ver Comprobante</button>
                                                    </div>

                                                    <hr>
                                                    <h3>Fondos Mutuos no contratados</h3>

                                                     <p class="block-error iconed-24"><span class="icon-24 red m01-alerta"></span> Por un problema de conexión con el servicio no se han podido contratar los siguientes Fondos Mutuos</p>

                                                     <article class="capgemini-tables datos-tabla tabla-ffmm-contratados"  >
                                                        
                                                        <div class="tables-body">
                                                            <table class="desktop" >
                                                                <tbody>
                                                                    <tr>
                                                                        <th width="">Nombre de Fondo</th>
                                                                        <th width="">Tipo de inversión</th> 
                                                                        <th width="">Nº Transacción</th> 
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="icn-close-red"></span><h4>Active E</h4> <span>Serie Global</span></td> 
                                                                        <td>Única</td> 
                                                                        <td>0007293488</td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table class="phones" >
                                                                <tbody>
                                                                    <tr>
                                                                        <th width="">Nombre de Fondo</th>
                                                                        <th width="">Tipo de inversión</th> 
                                                                    </tr>
                                                                    <tr class="principal">
                                                                        <td><span class="icn-close-red"></span><h4>Active E</h4> <span>Serie Global</span></td> 
                                                                        <td>Única</td>  
                                                                    </tr>
                                                                    <tr> 
                                                                        <th width="">Nº Transacción</th> 
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                    <tr class="principal">  
                                                                        <td>0007293488</td> 
                                                                        <td>$ 25.000</td> 
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </article>

                                                </div>

                                                <a href="?src=S18-productos-de-inversion.php" class="btn arrow-left pull-left"  style="display: inline-block;">Reintentar</a>

                                                <a href="#" class="btn arrow-right pull-right">Salir</a> 
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
    $(function(){
        $('label[data-name="distribucion"]').on('click', function(){
            var labelSeleccionado = $(this);
            $('label[data-name="distribucion"]').removeClass('on');
            labelSeleccionado.addClass('on');
        });
    });

</script>