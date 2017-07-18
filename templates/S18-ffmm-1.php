<script type="text/javascript" src="js/soho-crear-perfil-inversion.js"></script>

<div class="container view-inversion">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>
    <div class="section-tabs">
        
        <!-- title -->
        <h2 class="title-sh">Ahorro e inversión</h2>
         
        <hr class="separador">
        <div class="section-ahorro-inversion">
              
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
                            <a href="includes/components/dialogs/modificar-perfil.html" class="btn modal-trigger">Cambiar Mi Perfil</a>
                        </footer>
                    </aside>
                </div>

        <div class="content-column" id="ahorro-inversion">  
            <ul class="nav nav-tabs personalizada tabs-filtro-catalogo">
              <li>
                <a href="#buscar" data-toggle="tab">
                    <h3>Buscar Fondos <div class="lupa"></div></h3>
                    <p>Introducir el nombre o término<br> que se desea buscar</p>
                </a>
              </li>
              <li class="active">
                <a href="#filtrar" data-toggle="tab">
                    <h3>Filtrar Fondos <div class="manejador"></div></h3>                   
                    <p>Aplicar filtros al listado<br> de resultados</p>
                </a>
              </li>
              <li>
                <a  href="#cartolaHistorica" data-toggle="tab" id="cartola">
                    <h3 style="margin-top:15px;">Cartolas Históricas <div></div></h3>
                    <p>listado de cartolas históricas<br></p>
                </a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content tableBorder">
                <div class="tab-pane active" id="filtrar">
                    <div class="col-md-4">
                        <div class="row filteroptions bkgWhite">                                    
                            <p class="mobileWidth80">Tipo de fondo</p>
                                <select class="selectpicker" data-container="body" data-width="160px">
                                    <option selected>Fondo de inversión</option>
                                    <option>Fondo 01</option>
                                    <option>Fondo 02</option>
                                    <option>Fondo 03</option>
                                    <option>Fondo 04</option>                                   
                                </select>                                                                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row filteroptions bkgWhite">                                    
                            <p class="mobileWidth80">Nombre</p>
                                <select class="selectpicker" data-container="body" data-width="160px" style="display: none;">
                                    <option selected>Seleccione</option>
                                    <option>Selección 01</option>
                                    <option>Selección 02</option>
                                    <option>Selección 03</option>
                                    <option>Selección 04</option>                                   
                                </select>                                                                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row filteroptions bkgWhiteNob">                                 
                            <p class="mobileWidth80">Serie</p>
                                <select class="selectpicker" data-container="body" data-width="160px" style="display: none;">
                                    <option selected>Seleccione</option>
                                    <option>Selección 01</option>
                                    <option>Selección 02</option>
                                    <option>Selección 03</option>
                                    <option>Selección 04</option>                                   
                                </select>                                                                   
                        </div>
                    </div>
                    <div class="resultados-content">
                            <div class="itemBlock">
                                <a class="float-right btn boton-limpiar" type="button" style="margin: 30px 10px; 0 0;">Limpiar</a>
                                <a class="float-right btn boton-filtrar" id="filtrar-tabla" type="button" style="margin: 30px 0 0 0;">Filtrar</a>
                            </div>
                    </div>             
                </div>
                <div class="tab-pane" id="buscar">
                
                    <div class="col-md-12 height50">
                        <div class="linea col-md-12"></div>
                        <div class="row filteroptions bkgWhiteNob">
                        <input type="text" class="form-control search autocomplete ui-autocomplete-input" placeholder="Buscar fondos..." id="movimiento" name="movimiento" data-json="includes/components/autocomplete/movements.php" autocomplete="off">
                        </div>
                    </div>
                    <div class="itemBlock">
                        <a class="toRight btn mRight boton-limpiar" type="button">Limpiar</a>
                        <a class="toRight btn mRight boton-filtrar" id="filtrar-tabla" type="button">Filtrar</a>
                    </div>
                </div>
                <div class="tab-pane" id="cartolaHistorica">
                  <div class="tables-body table-resultados" id="divDatos">
                    <div class="row filteroptions">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-4">
                            <small class="seleccion-txt">Seleccione le fecha a consultar sobre las cartolas</small>
                        </div>
                        <div class="col-md-4">
                            <select id="mesCurso" name="mesCurso" class="selectpicker" data-container="body" data-width="160px" style="display: none;">
                            <option value="2016-09">Septiembre 2016</option>
                            </select>
                           
                            <a id="buttonDescargaPDF" class="toRight btn success mRight" onclick="" type="button">Descargar PDF <img src="img/bullet-contratar.png"></a>
                        </div>
                    </div>
                  </div>
                </div>   
            </div> 

            <!--Tab Panes Fin-->

            <article class="capgemini-tables tabla-resultados-filtro" id="tabla-res" style="display:none;">
                            <div class="tables-body no-hover">
                                <table>
                                    <tbody>
                                        <tr style="border-top:1px solid #dcdcdc!important;">
                                            <th width="40" class="hide-mobile"><img src="img/tickete.png" /></th>
                                            <th width="207" class="hide-mobile">FONDO MUTUO</th>
                                            <th width="233" class="hide-mobile">REMUNERACIÓN ANUAL</th>
                                            <th width="229" class="hide-mobile">COMISION DE SALIDA</th>
                                            <th width="493" class="hide-mobile">CARACTERÍSTICAS BÁSICAS DEL FONDO MUTUO</th>
                                            <th width="103" class="hide-mobile">CONTRATAR</th>
                                        </tr>
                                        <tr>
                                            <td class="hide-mobile vAlign"><label for="producto-check" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check" name="producto-check" type="checkbox"></label></td>
                                            <td class="tLeft"><b>MONEY MARKET</b>
                                                <small>SERIE A</small>
                                            </td>
                                            <td class="tLeft">
                                                <strong>Hasta 1,1%</strong>
                                            </td>
                                            <td class="tCenter hide-mobile"> 
                                                <p>Sin comisión de salida</p>          
                                            <td class="tLeft hide-mobile">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </td>   
                                            <td class="mobileWidth">
                                                <a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
                                            </td>                               
                                        </tr> 
                                        <tr>            
                                            <td class="hide-mobile vAlign"><label for="producto-check02" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check02" name="producto-check02" type="checkbox"></label></td>
                                            <td class="tLeft"><b>MONEY MARKET</b>
                                                <small>SERIE B</small>
                                            </td>
                                            <td class="tLeft">
                                                <strong>Hasta 1,1%</strong>
                                            </td>
                                            <td class="tCenter hide-mobile"> 
                                                <p>Sin comisión de salida</p>          
                                            <td class="tLeft hide-mobile">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </td>   
                                            <td class="mobileWidth">
                                                <a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
                                            </td>                                   
                                        </tr>
                                        <tr>            
                                            <td class="hide-mobile vAlign"><label for="producto-check03" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check03" name="producto-check03" type="checkbox"></label></td>
                                            <td class="tLeft"><b>MONEY MARKET</b>
                                                <small>SERIE C</small>
                                            </td>
                                            <td class="tLeft">
                                                <strong>Hasta 1,1%</strong>
                                            </td>
                                            <td class="tCenter hide-mobile"> 
                                                <p>Sin comisión de salida</p>          
                                            <td class="tLeft hide-mobile">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </td>   
                                            <td class="mobileWidth">
                                                <a class="toRight btn success mRight" href="?src=S08-solicitud-inversion.php" type="button">Contratar <img src="img/bullet-contratar.png" /></a>
                                            </td>                                   
                                        </tr>
                                        <tr>            
                                            <td class="hide-mobile vAlign"><label for="producto-check04" class="ui-marmots-label-check marmots-label-left colorWhite">.<input id="producto-check04" name="producto-check04" type="checkbox"></label></td>
                                            <td class="tLeft"><b>MONEY MARKET</b>
                                                <small>SERIE GLOBAL</small>
                                            </td>
                                            <td class="tLeft">
                                                <strong>Hasta 1,1%</strong>
                                            </td>
                                            <td class="tCenter hide-mobile"> 
                                                <p>Sin comisión de salida</p>          
                                            <td class="tLeft hide-mobile">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </td>   
                                            <td class="tLeft mobileWidth">
                                                <p>Sólo es contratable desde una oficina BBVA</p>
                                            </td>                                   
                                        </tr>
                                    </tbody>
                                </table>
                            </div>  
            </article>  
            <div class="col-md-12 height50 tabla-resultados-filtro">
                    <button id="btn-comp" href="?src=S08-rentabilizar.php" class="btn hide accion hide-mobile" type="button" disabled>Comparar seleccionados</button>
            </div> 
        </div>
    </div>
</div>

<div id="selected-foud" class="modal-bottom">
    <button class="close-all">
        <i class="glyphicon glyphicon-remove"></i>
    </button>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h3>Fondos Seleccionados Para contratar:</h3>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-4 fund-selected" fund="corporativo">
                    <button class="close">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                    <strong>Corporativo</strong>   
                    <p>Serie A</p>    
                    <span>Rentabilidad: 9,96%</span>
                </div>
                <div class="col-sm-4 fund-selected" fund="valorPlus">
                    <button class="close">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                    <strong>Valor Plus</strong>   
                    <p>Serie A</p>    
                    <span>Rentabilidad: 9,96%</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function(){
    $("#slider3").slider({
        range: "min",
        animate: true,
        value:2,
        min: 1,
        max: 3,
        step: 1,
            slide: function(event, ui) {
                $(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
            },
            create: function(event, ui) {
                $(this).find("a").html('<span class="test__box_slider"><p><label></label></p></span>');
            }
    });

    $('.colorWhite').click(function(){
        if($("#producto-check02").is(':checked') && $("#producto-check03").is(':checked')){
            //alert('se cumple');
            $('.accion').prop('disabled', false);
        }else{
            //alert('no se cumple');
            $('.accion').prop('disabled', true);
        }
    });
    

    
    $('.accion').click(function(){
        $(this).hide();
        $('.tabla-resultados-filtro').hide();
        $('.tabs-color').show();
    });

    $('#filtrar-tabla').click(function(){

        $('#tabla-res').show();
        $('#btn-comp').removeClass("hide");
    });
    
});

$(document).on('click', '.boton-limpiar', function(event) {
    event.stopPropagation();
    
    $( "#slider3" ).slider( "value", 1 );
    $('.tabla-resultados-filtro').hide();
    $('.tabs-color').hide();
});

$(document).on('click', '.boton-filtrar', function(event) {
    event.stopPropagation();
    $('.tabla-resultados-filtro').show();
});

</script>