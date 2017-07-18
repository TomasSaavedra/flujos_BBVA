<style type="text/css">
     @media (min-width: 993px){
        .content .content-column {
            width: 640px;
            margin-left: 20px;
            margin-right: 0px;
        }
    }
</style>


<div class="container metas transferir-dinero">
	<div class="menu-miga">
        <p>
            <a href="?src=S02-cuentas.php">Inicio</a> 
            <a href="?src=S18-ahorro-e-inversion.php">Ahorro e inversión</a>
            <span> Mis Metas de Ahorro</span> 
        </p>
    </div>
    <h2 class="title-sh">Ahorro e inversión</h2>
    <hr class="separador">

    <div class="section-ahorro-inversion">
    	<div class="banner-column" id="ahorro-lateral"> 
            <nav class="nav-sidebar">
                <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                <a href="?src=S21-portal-inversiones.php" class="active">Metas de Ahorro</a>
                <a href="?src=S18-productos-de-inversion.php">Contratar productos</a>
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
    </div>
    
    <div class="content-column vincular-1" id="productos-inversion">   
        <div class="column">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 >Mis Metas de Ahorro</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                    <a href="includes/components/dialogs/crear-meta.php" class="btn modal-trigger mgBottom20px">Nueva Meta</a>
                </div>
             </div>
            
            <article class="capgemini-tables cuentas-personales" id="infoCuenta">
                <header class="tables-header">
                    <h4>Pie para la casa
                        <span style="float: right; margin: 3px 24px 0 0; font-size: 12px; font-family: sans-serif;">Faltan <strong>21 meses</strong> (01-08-2018)</span>
                        <span class="btn-group">

                            <button type="button" class="btn sprite-arrow"></button>
                        </span>
                    </h4>
                </header>
                <div class="tables-body table-quiero table-inicial" style="border: 1px solid #ccc !important; padding:8px;">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="icon-24 blue b06-deposito"></i>
                            <strong>Mi ahorro: $ 0</strong>
                        </div>

                        <div class="col-md-6 tablaMobileDerecho">
                            <i class="icon-24 blue k13-flag"></i>
                            <strong>Mi Meta: $ 5.000.000</strong>
                        </div>
                    </div>
                  
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">
                            <span >60% Complete</span>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <span class="small info-text-monto">
                            Tu meta aún no tiene <strong>productos de Inversión vinculados</strong>, presiona el botón para comenzar a ahorrar
                        </span>
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-lg-12 col-sm-12 col-md-12" style="margin-top: 16px;">
                            
                        </div>
                    </div>

                    <!--vincular productos-->
                    <div class="linkProduct">
                       <hr class="separador">      
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 text-left">
                                <a style="margin-right: 8px; background: #fff; color: #0065b7;" class="btn cursor modal-trigger" data-href="includes/components/banners/vincular-productos/modal/eliminar-meta.html">
                                    Eliminar meta
                                </a>
                                 <a style="margin-right: 8px; background: #fff; color: #0065b7;" class="btn cursor modal-trigger" data-href="includes/components/banners/vincular-productos/modal/editar-meta.html">
                                    Editar Meta
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xs-12 text-right">
                                <button class="btn" id="vincular">Vincular Productos</button>
                            </div>
                       </div>
                    </div>
                    <!--vincular productos-->                   
                </div>
            </article>
            <div id="confirmarEliminar">
                <div class="block-success iconed-24" style="margin: 0 auto !important; width: 95%; clear: both;">
                    <div class="row">
                        <span class="icon-24  check-verde-16" style="margin-top: 9px; margin-left: -36px;"></span>
                        Meta eliminada correctamente, <strong>recuerda que los productos que tenias vinculados continúan contratados</strong>
                    </div>         
                </div> 
            </div>
        </div>
    </div>

<script type="text/javascript"> 
$(function(){
    $('.product').hide();
    $('#confirmarEliminar').hide();

        $('#vincular').on('click', function (){
            window.location.href = "content.php?src=S21-vincular-productos.php";
        });




    $("._maqueta-switch .btn-panel1").click(function() {
        $(".btn-panel1, .btn-panel2").removeClass("select");
        $(".btn-panel1 span, .btn-panel2 span").hide();
        $(".btn-panel1 span").show();
        $(this).addClass("select");
        $("#panel1").show();
        $("#panel2").hide();
    });

    $("._maqueta-switch .btn-panel2").click(function() {
        $(".btn-panel1, .btn-panel2").removeClass("select");
        $(".btn-panel1 span, .btn-panel2 span").hide();
        $(".btn-panel2 span").show();
        $(this).addClass("select");
        $("#panel1").hide();
        $("#panel2").show();
    });
    
});
</script>

