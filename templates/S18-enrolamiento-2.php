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
        <div class="section-ahorro-inversion">
             
                <div class="banner-column" id="ahorro-lateral"> 
                    <nav class="nav-sidebar">
                        <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                        <a href="#">Metas de Ahorro</a>
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

                <div class="content-column page-enrolamiento"  >  
                     
                     <div class="row">
                        <div class="col-sm-12">
                            <p class="text-center"><img src="img/logo_bba_corredores.png"></p>
                            <p class="text-center"><strong>Carta instrucción a BBVA CORREDORES DE BOLSA LTDA</strong></p>
                            <p class="text-center">15 de febrero de 2016</p>
                            <p>Señores BBVA CORREDORES DE BOLSA LTDA:</p>
                            <p>Por medio de la presente declare expresamente haber recibido suficiente información por parte de BBVA CORREDORES DE BOLSA LTDA respecto a mi categoría de Inversionista, asi como tambien, respecto a los riesgos que conlleva el tipo de inversion que estoy dispuesto a realizar, aceptando por lo tanto, todas sus consecuencias. Asimismo, declaro que BBVA CORREDORES DE BOLSA LTDA no ha influido en mi tomando decision y estoy consciente que la misma no garantiza de ningun modo ganancias de capital, pudiendo perder incluso el patrimonio invertido.</p>
                            <p>Finalmente declaro que tengo conocimiento que BBVA CORREDORES BOLSA LTDA no realizara ninguna advertencia en futuras solicitudes de inversion en este tipo de instrumento, calificado como inadecuado conforme a mi Perfil Inversionista.</p>
                            <p><strong>Nombre cliente:</strong> CORTES HERRERA PRISCILA VANESSA</p>
                            <p><strong>Rut:</strong> 11111111-1</p>
                            <p>Se deja constancia que al aceptar esta carta de instruccion, acepta las condiciones y queda registrada su autorizacion como firma electronica</p>
                            <div class="form-group formline">
                                <div class="item first check">
                                    <label for="enviar1" >He leido y acepto las  <a href="#">Condiciones legales y comerciales</a>
                                        <input id="enviar1" name="enviar1" type="checkbox"/></label>
                                </div>
                            </div>
                            <hr>
                            <section><!--pin-->
                                <div class="pin-sms-input large pin-sms-input-inline inline-large DivClaveSegura">
                                    <section>
                                        <div class="form-group">
                                            <label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
                                            <div class="formline formline-right">
                                                <input name="clave-segura" id="clave-segura2" maxlength="7" minlength="7" class="form-control required number" type="password">
                                                <button class="btn next" type="button" disabled id="clave-segura-boton2" link="?src=S18-enrolamiento-3.php"><span>Confirmar</span></button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <script>
                                    $('#clave-segura2').on('focus', function(e){
                                        // e.preventDefault();
                                        $('#clave-segura-boton2').removeAttr("disabled");
                                    });
                                    $('#clave-segura-boton2').click(function(event) {
                                        event.preventDefault();
                                         window.open($("#clave-segura-boton2").attr('link'),'_self')
                                    });
                                </script>
                            </section><!--Fin pin-->
                        </div> 
                     </div>
                </div> 
            
             
            
        </div>
    </div>
</div>
</div>
</div>