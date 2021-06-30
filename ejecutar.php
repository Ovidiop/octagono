<html>
    <head><title>Calculo del Area de un Octagono Regular</title></head>
    <body>
        <?php

            if(isset($_POST['btn'])&& $_POST['btn'] == 'Calcular') {

                $lado = $_POST['lado'];
                $area = null;

                if(!empty($lado)) {
                    echo "<h2 align='center'>Calculo del Area de un Octagono Regular</h2>";

                    $area = 4.828427125 * pow($lado, 2);

                    echo "<br>Lado: " .$lado;
                    echo "<br/><br/>";
                    echo "<br>Area del Octagono: " .$area;
                    echo "<br/><br/>";
                }
            }

            print "<a href='datos.html'>Regresar</a>";

            ?>
    </body>
</html>