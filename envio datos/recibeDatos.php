<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4 - Ejemplo 2 Recibe Datos Desde Otra P&aacute;gina</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
    <?php
        /* En esta página se reciben los datos, como puede verse solo se usa
         * la función print_r() para volcar al navegador el arreglo $_POST
         * que contiene todos los datos del formulario de la página de origen
         * la idea es que usted como aprendiz complete el código de esta página 
         * para procesar los datos recibidos según lo especificado en el 
         * ejercicio propuesto en el material de estudio.
         */
        $datos=$_POST;
        $hoy = date("Y");
        $nacimiento = date("Y", strtotime($datos['fecha_nacimiento']));
        $edad = $hoy - $nacimiento;
        if (array_key_exists('hijos', $datos)){

            echo "<p>Hola, ".$datos['nombre']." su edad actual es ".$edad." años, su número de telefono de contacto es +57".$datos['telefono']." y su correo electronico es ".$datos['email']." su estado civil actual es ".$datos['estadoCivil']." vive en el departamento del ".$datos['departamento']." y esperamos que sus hijos estén muy bien."."</p>";
        } else {

            echo "<p>Hola, ".$datos['nombre']." su edad actual es ".$edad." años, su número de telefono de contacto es +57".$datos['telefono']." y su correo electronico es ".$datos['email']." su estado civil actual es ".$datos['estadoCivil']." vive en el departamento del ".$datos['departamento'].".</p>";
        }
            ?>
</body>

</html>