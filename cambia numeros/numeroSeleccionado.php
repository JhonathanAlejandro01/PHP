<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4 - Ejercicio 2 Seleccionar N&uacute;mero</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
    <?php
        /* En este programa se va a pintar en pantalla
         * la selecion dle numero en el archivo selecionarNumero.php
         * y se hacen las respectivas validadaciones
         * y se le coloca le cambia el color del texto a rojo
         * por medio del dato obtenido
         */
        if (isset($_GET['numeroSeleccionado'])) {
            $numeroSeleccionado = $_GET['numeroSeleccionado'];
            $color = $_GET['color'];
            echo "<p style='color:$color;'>Usted ha seleccionado el n&uacute;mero: $numeroSeleccionado"
                    . "<br />";
            unset($_GET);
            echo "<a href = 'seleccionarNumero.php'>Volver al inicio</a>";
        } else {
            echo "<h3>Por favor seleccione uno de los n&uacute;meros</h3>";
            echo "<a href = 'seleccionarNumero.php'>Volver al inicio</a>";
        }
        ?>
</body>

</html>