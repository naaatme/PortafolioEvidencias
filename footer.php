<?php
$pagina = basename($_SERVER['PHP_SELF']);

$proyecto = "Portafolio de Desarrollo Web Orientado a Servicios";
$alumno = "Natalie Guadalupe Ramirez Landero y Joel Damian Arriaga Gutierrez";
$carrera = "Desarrollo de Software en Multiplataformas";
$grupo = "4DSMA";
$materia = "Desarrollo Web Orientado a Servicios";
$universidad = "Nombre de la Universidad";
$anio = "2026";

?>

<footer>
    <p>
        <strong>Alumno:</strong> <?php echo $alumno; ?><br>
        <strong>Universidad:</strong> <?php echo $universidad; ?><br>
        <strong>Materia:</strong> <?php echo $materia; ?><br>
        <strong>Año:</strong> <?php echo $anio; ?><br>
        &copy; Todos los derechos reservados
    </p>
</footer>
