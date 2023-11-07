<?php
$conexion = mysqli_connect("localhost","root","","registro_usuario") or die(mysql_error($mysqli));
$conexion->set_charset('utf8');
if(!$conexion){
    die("no pudo conectars a la base de datos". msqli_error());
}


    
?>