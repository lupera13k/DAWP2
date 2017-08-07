<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-REPORTE</title>
    </head>
    <body>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <div id="reporte-cont" class="contenedorReporte">
            <section class="reporte-dia">
                <h2>Reporte del Día</h2>
                <button type="button" onclick="adicionarRepor(1)">Agregar un reporte</button>
                <button type="button" onclick="quitarRepor(1)">Quitar un reporte</button>
                <button type="button" onclick="aparecerRepor(1)">Mostrar el reporte</button>
                <button type="button" onclick="ocultarRepor(1)">Ocultar el reporte</button>
                <button type="button" onclick="resetRepor(1)">Resetear el reporte</button>
                <div id="cntReporteDia">
                    <p></p>
                </div>                        
            </section>
            <section class="reporte-mensual">
                <h2>Reporte del Mensual</h2>
                <button type="button" onclick="adicionarRepor(2)">Agregar un reporte</button>
                <button type="button" onclick="quitarRepor(2)">Quitar un reporte</button>
                <button type="button" onclick="aparecerRepor(2)">Mostrar el reporte</button>
                <button type="button" onclick="ocultarRepor(2)">Ocultar el reporte</button>
                <button type="button" onclick="resetRepor(2)">Resetear el reporte</button>
                <div id="cntReporteMes">
                    <p></p>
                </div>                     
            </section>
            <section class="reporte-anual">
                <h2>Reporte del Anual</h2>
                <button type="button" onclick="adicionarRepor(3)">Agregar un reporte</button>
                <button type="button" onclick="quitarRepor(3)">Quitar un reporte</button>
                <button type="button" onclick="aparecerRepor(3)">Mostrar el reporte</button>
                <button type="button" onclick="ocultarRepor(3)">Ocultar el reporte</button>
                <button type="button" onclick="resetRepor(3)">Resetear el reporte</button>
                <div id="cntReporteAño">
                    <p></p>
                </div>                     
            </section>
        </div>
        <?php
            $usuarioObjeto=$_SESSION['usuario'];//ALMACENADO 
            $admin=1;
            if($usuarioObjeto->getUsu_usuario()==$admin){
                echo " 
                    <script type='text/javascript'>
                    var nodoDiv = document.getElementById('reporte-cont'); 
                    nodoDiv.style.visibility= 'visible';
                    </script>
                ";
            }
            else {
                echo " 
                    <script type='text/javascript'>
                    var nodoDiv = document.getElementById('reporte-cont'); 
                    nodoDiv.style.visibility= 'hidden';
                    </script>
                ";
                echo"<h1 align='center'>USUARIO SIN PRIVILEGIO</h1>";
                echo "
                    <script type='text/javascript'>
                    alert('USUARIO SIN PRIVILEGIO');
                        </script>
                ";
            }
        ?>
        <?php include("codigos/footer.php")?>
    </body>
</html>