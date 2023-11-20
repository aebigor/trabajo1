<?php
require_once "../models/db1.php";
error_reporting(0);

if (isset($_POST['btnregister'])) {
    $nombre = $_POST["usuario"];
    $dia_semana = $_POST["dia_semana"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fin = $_POST["hora_fin"];

    // Validación de campos (asegúrate de agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($dia_semana) || empty($hora_inicio) || empty($hora_fin)) {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    } else {
        // Inserción de datos en la base de datos
        $sql = "INSERT INTO gerente (usuario, dia_semana, hora_inicio, hora_fin) VALUES ('$nombre', '$dia_semana', '$hora_inicio', '$hora_fin')";

        if ($conexion->query($sql) === TRUE) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
            header("Location:gerenteC.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar correctamente: ' . $conexion->error . '</div>';
        }
    }
}
?>


