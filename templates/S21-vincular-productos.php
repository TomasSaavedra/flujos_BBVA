<style type="text/css">
     @media (min-width: 993px){
        .content .content-column {
            width: 640px;
            margin-left: 20px;
            margin-right: 0px;
        }
    }
    .cuentas-personales header h4 span {
        float: right;
        margin: 3px 24px 0 0; 
        font-size: 12px; 
        font-family: sans-serif;
        text-align: right;
    }
</style>


<div class="container metas transferir-dinero">
	<div class="menu-miga">
        <p>
        	<a href="?src=S02-cuentas.php">Inicio</a> 
        	<a href="?src=S18-ahorro-e-inversion.php">Ahorro e inversión</a>
            <a href="?src=S21-portal-inversiones-1.php"> Mis Metas de Ahorro</a>  
            <span>Vincular productos a tu Meta</span>
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
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <h2 >Vincular productos a tu Meta</h2>
                </div>
               
             </div>
            
            <article class="capgemini-tables cuentas-personales" >
                <header class="tables-header">
                    <h4>Pie para la casa
                        <span>Faltan <strong>21 meses</strong> (01-08-2018)</span>
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
                        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: %;">
                            <span >60% Complete</span>
                        </div>
                    </div>
                </div>
            </article>
                
            <div class="product">
                <div style="margin-bottom: 30px;">
                    <div class="block-info iconed-24">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <span class="icon-24  b27-solucionesparatunegocio"></span>
                                Para reunir los $5.000.000 el 01 de 08 de 2016 te recomendamos invertir mensualmente:
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12" style="font-size: 24px; padding-top: 10px; border-left: 1px solid #c8e1e6; height: 43px;">
                                $185.504
                            </div>
                        </div>
                    </div>
                    <div class="block-info-footer">
                        <p>El rendimiento de tu ahorro dependerá del nivel de riesgo y rentabilidad de los productos contratados.</p>
                   </div> 
                </div>


                <h3 class="text-center">Contrata y vincula productos a tu Meta</h3>
                <div class="card">          
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" role="tab" data-toggle="tab">Productos Recomendados</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" role="tab" data-toggle="tab">Vincular desde mis Productos</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="row">
                                <?php include 'includes/components/banners/vincular-productos/fondos-grafico.html'; ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <?php include 'includes/components/banners/vincular-productos/fondos-mutuos.html';?>
                        </div>
                     </div>
                </div>             
            </div>
        </div> 
    </div> 
</div>

<script type="text/javascript"> 
$(function(){ 

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
