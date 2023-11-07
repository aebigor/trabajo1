<?php


$file_name = $_FILES['Foto']['name'];
$file_tmp = $_FILES['Foto']['tmp_name'];
$route = "img/".$file_name;

move_uploaded_file($file_tmp,$route);

$sql = "INSERT INTO usuariO (Foto) VALUES ('$file_name')";

$sql_query = mysqli_query($conexion,$sql);
echo 'se subio la imagen';

?>