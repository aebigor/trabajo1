<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // File upload handling
    $file_name = $_FILES['Foto']['name'];
    $file_tmp = $_FILES['Foto']['tmp_name'];
    $route = "img/" . $file_name;

    move_uploaded_file($file_tmp, $route);

    // Database connection
    $conexion = mysqli_connect("localhost", "root", "", "registro_usuario");

    // Insert into database
    $sql = "INSERT INTO usuario (Foto) VALUES ('$file_name')";
    $sql_query = mysqli_query($conexion, $sql);

    if ($sql_query) {
        echo 'se subió la imagen y se guardó en la base de datos';
    } else {
        echo 'Error: ' . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>
