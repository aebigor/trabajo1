<?php
require_once "../models/db1.php";

// Verificar si los datos 'usuario' y 'password' se han enviado correctamente desde el formulario
if (isset($_POST['Correo']) && isset($_POST['passCorreo'])) {
    $USUARIO = $_POST['Correo'];
    $PASSWORD = $_POST['passCorreo'];
    session_start();
    $_SESSION['Correo'] = $USUARIO;
    $consulta = "SELECT Correo FROM usuario WHERE Correo = '$USUARIO' AND passCorreo = '$PASSWORD'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        header("location:Loading.php");
    } else {
        include("inicio-secion.html");
        ?>
        <h1>Error de inicio</h1>
        <?php
    }

    mysqli_free_result($resultado);
} else {
    // Si 'usuario' o 'password' no se enviaron desde el formulario, muestra un mensaje de error.
    echo "Usuario y/o contraseña no definidos";
}
?>