<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4 - Ejercicio 2 Seleccionar N&uacute;mero</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
    <?php
        /* En este programa también se van a usar hipervínculos para enviar
         * información a la misma página, pero en este caso los hipervínculos se
         * van  a construir dinámicamente usando un ciclo for
         */
            echo "<h3>Por favor seleccione uno de los n&uacute;meros</h3>";
            for ($i = 1; $i <= 10; $i++) {
                /* Como puede verse se usa el índice del ciclo for para
                 * construir los hipervínculos de forma dinámica se van a crear
                 * diez hipervínculos cada uno con un valor numérico diferente 
                 * que se transmiete en la variable numeroSeleccionado
                 * y con el color=red
                 */
                echo "<a href = 'numeroSeleccionado.php?numeroSeleccionado=$i&color=red'>"
                . "$i</a><br />";
            }
        ?>
</body>

</html>